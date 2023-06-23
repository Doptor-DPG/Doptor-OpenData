<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OfficeOriginUnits Model
 *
 * @property \App\Model\Table\OfficeMinistriesTable&\Cake\ORM\Association\BelongsTo $OfficeMinistries
 * @property \App\Model\Table\OfficeLayersTable&\Cake\ORM\Association\BelongsTo $OfficeLayers
 * @property \App\Model\Table\OfficeOriginsTable&\Cake\ORM\Association\BelongsTo $OfficeOrigins
 * @property \App\Model\Table\ParentUnitsTable&\Cake\ORM\Association\BelongsTo $ParentUnits
 * @property \App\Model\Table\OfficeOriginUnitOrganogramsTable&\Cake\ORM\Association\HasMany $OfficeOriginUnitOrganograms
 * @property \App\Model\Table\OfficeUnitsTable&\Cake\ORM\Association\HasMany $OfficeUnits
 * @property \App\Model\Table\UnitUpdateHistoryTable&\Cake\ORM\Association\HasMany $UnitUpdateHistory
 *
 * @method \App\Model\Entity\OfficeOriginUnit get($primaryKey, $options = [])
 * @method \App\Model\Entity\OfficeOriginUnit newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OfficeOriginUnit[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OfficeOriginUnit|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OfficeOriginUnit saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OfficeOriginUnit patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OfficeOriginUnit[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OfficeOriginUnit findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OfficeOriginUnitsTable extends Table
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

        $this->setTable('office_origin_units');

        $this->addBehavior('Timestamp');

        $this->belongsTo('OfficeMinistries', [
            'foreignKey' => 'office_ministry_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('OfficeLayers', [
            'foreignKey' => 'office_layer_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('OfficeOrigins', [
            'foreignKey' => 'office_origin_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('ParentUnits', [
            'foreignKey' => 'parent_unit_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('OfficeOriginUnitOrganograms', [
            'foreignKey' => 'office_origin_unit_id',
        ]);
        $this->hasMany('OfficeUnits', [
            'foreignKey' => 'office_origin_unit_id',
        ]);
        $this->hasMany('UnitUpdateHistory', [
            'foreignKey' => 'office_origin_unit_id',
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
            ->requirePresence('id', 'create')
            ->notEmptyString('id');

        $validator
            ->scalar('unit_name_bng')
            ->maxLength('unit_name_bng', 255)
            ->requirePresence('unit_name_bng', 'create')
            ->notEmptyString('unit_name_bng');

        $validator
            ->scalar('unit_name_eng')
            ->maxLength('unit_name_eng', 255)
            ->requirePresence('unit_name_eng', 'create')
            ->notEmptyString('unit_name_eng');

        $validator
            ->scalar('office_unit_category')
            ->maxLength('office_unit_category', 255)
            ->requirePresence('office_unit_category', 'create')
            ->notEmptyString('office_unit_category');

        $validator
            ->integer('unit_level')
            ->notEmptyString('unit_level');

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
        $rules->add($rules->existsIn(['office_layer_id'], 'OfficeLayers'));
        $rules->add($rules->existsIn(['office_origin_id'], 'OfficeOrigins'));
        $rules->add($rules->existsIn(['parent_unit_id'], 'ParentUnits'));

        return $rules;
    }
    public function getOfficeOriginUnits($data)
    {

        $columns = [
            'parent' => 'parent_unit_id',
            'level' => 'unit_level',
            'nameBn' => 'unit_name_bng',
            'name' => 'unit_name_eng',
            'officeOrigin' => 'office_origin_id',
            'ministry' => 'office_ministry_id',
            'layer' => 'office_layer_id',
            'status' => 'active_status',
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

        if ($data['xgorder'] != NULL) {
            if (array_key_exists($data['xgorder'], $columns)) {
                $query = $query->order([$columns[$data['xgorder']] => 'DESC']);
            }
        }

        if ($data['xgoffset'] != NULL) {
            $query = $query->offset($data['xgoffset']);
        }

        if ($data['xglimit'] != NULL) {
            $query = $query->limit($data['xglimit']);
        } else {
            $query = $query->limit(1000);
        }

        if ($data['id'] != NULL) {
            $query = $query->where(['id' => $data['id']]);
        }
        if ($data['officeOrigin'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['office_origin_id' => $data['officeOrigin']]);
            } else {
                $query = $query->where(['office_origin_id' => $data['officeOrigin']]);
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
                $query = $query->orWhere(['unit_name_eng LIKE' => '%' . $data['name'] . '%']);
            } else {
                $query = $query->where(['unit_name_eng LIKE' => '%' . $data['name'] . '%']);
            }
        }
        if ($data['nameBn'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['unit_name_bng LIKE' => '%' . $data['nameBn'] . '%']);
            } else {
                $query = $query->where(['unit_name_bng LIKE' => '%' . $data['nameBn'] . '%']);
            }
        }
        if ($data['level'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['unit_level LIKE' => '%' . $data['level'] . '%']);
            } else {
                $query = $query->where(['unit_level LIKE' => '%' . $data['level'] . '%']);
            }
        }
        if ($data['layer'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['office_layer_id LIKE' => '%' . $data['layer'] . '%']);
            } else {
                $query = $query->where(['office_layer_id LIKE' => '%' . $data['layer'] . '%']);
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
            return $query->enableHydration(false)->count();
        } else {
            return $query->enableHydration(false)->toArray();
        }
    }
}
