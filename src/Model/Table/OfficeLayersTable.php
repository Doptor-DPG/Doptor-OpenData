<?php

namespace App\Model\Table;

use App\Controller\OisfController;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OfficeLayers Model
 *
 * @property \App\Model\Table\OfficeMinistriesTable&\Cake\ORM\Association\BelongsTo $OfficeMinistries
 * @property \App\Model\Table\ParentLayersTable&\Cake\ORM\Association\BelongsTo $ParentLayers
 * @property \App\Model\Table\CustomLayersTable&\Cake\ORM\Association\BelongsTo $CustomLayers
 * @property \App\Model\Table\OfficeOriginUnitsTable&\Cake\ORM\Association\HasMany $OfficeOriginUnits
 * @property \App\Model\Table\OfficeOriginsTable&\Cake\ORM\Association\HasMany $OfficeOrigins
 * @property \App\Model\Table\OfficeUnitsTable&\Cake\ORM\Association\HasMany $OfficeUnits
 * @property \App\Model\Table\OfficesTable&\Cake\ORM\Association\HasMany $Offices
 * @property \App\Model\Table\OfficesBkTable&\Cake\ORM\Association\HasMany $OfficesBk
 *
 * @method \App\Model\Entity\OfficeLayer get($primaryKey, $options = [])
 * @method \App\Model\Entity\OfficeLayer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OfficeLayer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OfficeLayer|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OfficeLayer saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OfficeLayer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OfficeLayer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OfficeLayer findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OfficeLayersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('office_layers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('OfficeMinistries', [
            'foreignKey' => 'office_ministry_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ParentLayers', [
            'foreignKey' => 'parent_layer_id'
        ]);
        $this->belongsTo('CustomLayers', [
            'foreignKey' => 'custom_layer_id'
        ]);
        $this->hasMany('OfficeOriginUnits', [
            'foreignKey' => 'office_layer_id'
        ]);
        $this->hasMany('OfficeOrigins', [
            'foreignKey' => 'office_layer_id'
        ]);
        $this->hasMany('OfficeUnits', [
            'foreignKey' => 'office_layer_id'
        ]);
        $this->hasMany('Offices', [
            'foreignKey' => 'office_layer_id'
        ]);
        $this->hasMany('OfficesBk', [
            'foreignKey' => 'office_layer_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('layer_name_eng')
            ->maxLength('layer_name_eng', 255)
            ->allowEmptyString('layer_name_eng');

        $validator
            ->scalar('layer_name_bng')
            ->maxLength('layer_name_bng', 255)
            ->allowEmptyString('layer_name_bng');

        $validator
            ->integer('layer_level')
            ->requirePresence('layer_level', 'create')
            ->notEmptyString('layer_level');

        $validator
            ->integer('layer_sequence')
            ->requirePresence('layer_sequence', 'create')
            ->notEmptyString('layer_sequence');

        $validator
            ->notEmptyString('active_status');

        $validator
            ->integer('created_by')
            ->requirePresence('created_by', 'create')
            ->notEmptyString('created_by');

        $validator
            ->integer('modified_by')
            ->requirePresence('modified_by', 'create')
            ->notEmptyString('modified_by');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['office_ministry_id'], 'OfficeMinistries'));
        $rules->add($rules->existsIn(['parent_layer_id'], 'ParentLayers'));
        $rules->add($rules->existsIn(['custom_layer_id'], 'CustomLayers'));

        return $rules;
    }

    public function getLayerByMinistry($ministry_id, $layer_ids = false)
    {
        $data = $this->find()->select(['id', 'layer_name_bng', 'layer_name_eng', 'parent_layer_id'])
            ->where([
                'office_ministry_id' => $ministry_id,
                'active_status' => 1
            ]);
        if ($layer_ids) {
            $data = $data->where(['id IN' => explode(',', $layer_ids)]);
        }
        $data = $data->toArray();

        $total = count($data);
        $page = 1;
        $per_page = $total;

        $response = (new OisfController())->paginator($total, $page, $per_page, $total);
        $response['data'] = $data;
        return $response;
    }

    public function getLayerInfoByMinistry($data)
    {
        $columns = [
            'customlayerid' => 'custom_layer_id',
            'level' => 'layer_level',
            'name' => 'layer_name_eng',
            'nameBn' => 'layer_name_bng',
            'id' => 'id'
        ];
        $query = $this->find();
        if ($data['xgselect'] != NULL && !$data['xgcount']) {
            $selects = [];
            $arrKeywords = explode(" ", $data['xgselect']);
            foreach ($arrKeywords as $keyWord) {
                if (array_key_exists($keyWord, $columns)) {
                    $selects[$keyWord] = $columns[$keyWord];
                }
            }
            $query = $query->select($selects);
        } else {
            $query = $query->select($columns);
        }

        if ($data['xglimit'] != NULL) {
            $query = $query->limit($data['xglimit']);
        } else {
            $query = $query->limit(1000);
        }
        if ($data['xgorder'] != NULL) {
            if (array_key_exists($data['xgorder'], $columns)) {
                $query = $query->order([$columns[$data['xgorder']] => 'DESC']);
            }
        }

        if ($data['xgoffset'] != NULL) {
            $query = $query->offset($data['xgoffset']);
        }
        if ($data['id'] != NULL) {
            $query = $query->where(['id' => $data['id']]);
        }
        if ($data['parent'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['parent_layer_id' => $data['parent']]);
            } else {
                $query = $query->where(['parent_layer_id' => $data['parent']]);
            }
        }
        if ($data['ministry'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['office_ministry_id' => $data['ministry']]);
            } else {
                $query = $query->where(['office_ministry_id' => $data['ministry']]);
            }
        }
        if ($data['name'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['layer_name_eng LIKE' => '%' . $data['name'] . '%']);
            } else {
                $query = $query->where(['layer_name_eng LIKE' => '%' . $data['name'] . '%']);
            }
        }
        if ($data['nameBn'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['layer_name_bng LIKE' => '%' . $data['nameBn'] . '%']);
            } else {
                $query = $query->where(['layer_name_bng LIKE' => '%' . $data['nameBn'] . '%']);
            }
        }
        if ($data['level'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['layer_level LIKE' => $data['level']]);
            } else {
                $query = $query->where(['layer_level LIKE' => $data['level']]);
            }
        }
        if ($data['sequence'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['layer_sequence' => $data['sequence']]);
            } else {
                $query = $query->where(['layer_sequence' => $data['sequence']]);
            }
        }
        if ($data['status'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['active_status' => $data['status']]);
            } else {
                $query = $query->where(['active_status' => $data['status']]);
            }
        }
        if ($data['xgcount']) {
            $officeLayers = $query->enableHydration(false)->count();
        } else {
            $officeLayers = $query->enableHydration(false)->toArray();
        }
        return $officeLayers;
    }
}
