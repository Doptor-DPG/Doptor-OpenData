<?php

namespace App\Model\Table;

use App\Controller\OisfController;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OfficeMinistries Model
 *
 * @property \App\Model\Table\EmployeeRanksTable&\Cake\ORM\Association\HasMany $EmployeeRanks
 * @property \App\Model\Table\OfficeLayersTable&\Cake\ORM\Association\HasMany $OfficeLayers
 * @property \App\Model\Table\OfficeLayersBkTable&\Cake\ORM\Association\HasMany $OfficeLayersBk
 * @property \App\Model\Table\OfficeOriginUnitsTable&\Cake\ORM\Association\HasMany $OfficeOriginUnits
 * @property \App\Model\Table\OfficeOriginsTable&\Cake\ORM\Association\HasMany $OfficeOrigins
 * @property \App\Model\Table\OfficeUnitsTable&\Cake\ORM\Association\HasMany $OfficeUnits
 * @property \App\Model\Table\OfficesTable&\Cake\ORM\Association\HasMany $Offices
 * @property \App\Model\Table\OfficesBkTable&\Cake\ORM\Association\HasMany $OfficesBk
 *
 * @method \App\Model\Entity\OfficeMinistry get($primaryKey, $options = [])
 * @method \App\Model\Entity\OfficeMinistry newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OfficeMinistry[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OfficeMinistry|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OfficeMinistry saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OfficeMinistry patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OfficeMinistry[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OfficeMinistry findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OfficeMinistriesTable extends Table
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

        $this->setTable('office_ministries');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('EmployeeRanks', [
            'foreignKey' => 'office_ministry_id'
        ]);
        $this->hasMany('OfficeLayers', [
            'foreignKey' => 'office_ministry_id'
        ]);
        $this->hasMany('OfficeLayersBk', [
            'foreignKey' => 'office_ministry_id'
        ]);
        $this->hasMany('OfficeOriginUnits', [
            'foreignKey' => 'office_ministry_id'
        ]);
        $this->hasMany('OfficeOrigins', [
            'foreignKey' => 'office_ministry_id'
        ]);
        $this->hasMany('OfficeUnits', [
            'foreignKey' => 'office_ministry_id'
        ]);
        $this->hasMany('Offices', [
            'foreignKey' => 'office_ministry_id'
        ]);
        $this->hasMany('OfficesBk', [
            'foreignKey' => 'office_ministry_id'
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
            ->requirePresence('office_type', 'create')
            ->notEmptyString('office_type');

        $validator
            ->scalar('name_eng')
            ->maxLength('name_eng', 255)
            ->allowEmptyString('name_eng');

        $validator
            ->scalar('name_bng')
            ->maxLength('name_bng', 255)
            ->allowEmptyString('name_bng');

        $validator
            ->scalar('name_eng_short')
            ->maxLength('name_eng_short', 32)
            ->requirePresence('name_eng_short', 'create')
            ->notEmptyString('name_eng_short');

        $validator
            ->scalar('reference_code')
            ->maxLength('reference_code', 4)
            ->requirePresence('reference_code', 'create')
            ->notEmptyString('reference_code');

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

    public function getMinistries($ministry_name = '', $ministry_id = 0)
    {
        $query = $this->find()->select(['id', 'name_eng', 'name_bng', 'name_eng_short', 'reference_code', 'office_type'])->where(['active_status' => 1]);
        if (!empty($ministry_name)) {
            $query = $query->where(['name_bng LIKE' => "%" . $ministry_name . "%"]);
        }
        if (!empty($ministry_id)) {
            $query = $query->where(['id' => $ministry_id]);
        }
        $ministries = $query->toArray();

        $total = count($ministries);
        $page = 1;
        $per_page = $total;

        $response = (new OisfController())->paginator($total, $page, $per_page, $total);
        $response['data'] = $ministries;
        return $response;
    }

    public function getMinistryInfos($data)
    {
        $columns = [
            'id' => 'id',
            'name' => 'name_eng',
            'nameBn' => 'name_bng',
            'nameShort' => 'name_eng_short',
            'reference' => 'reference_code',
            'type' => 'office_type'
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
        if ($data['type'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['office_type' => $data['type']]);
            } else {
                $query = $query->where(['office_type' => $data['type']]);
            }
        }
        if ($data['reference'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['reference_code' => $data['reference']]);
            } else {
                $query = $query->where(['reference_code' => $data['reference']]);
            }
        }
        if ($data['name'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['name_eng LIKE' => '%' . $data['name'] . '%']);
            } else {
                $query = $query->where(['name_eng LIKE' => '%' . $data['name'] . '%']);
            }
        }
        if ($data['nameBn'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['name_bng LIKE' => '%' . $data['nameBn'] . '%']);
            } else {
                $query = $query->where(['name_bng LIKE' => '%' . $data['nameBn'] . '%']);
            }
        }
        if ($data['nameShort'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['name_eng_short' => $data['nameShort']]);
            } else {
                $query = $query->where(['name_eng_short' => $data['nameShort']]);
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
            $ofcMinistries = $query->enableHydration(false)->count();
        } else {
            $ofcMinistries = $query->enableHydration(false)->toArray();
        }
        return $ofcMinistries;
    }
}
