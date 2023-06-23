<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OfficeUnits Model
 *
 * @property \App\Model\Table\OfficeMinistriesTable&\Cake\ORM\Association\BelongsTo $OfficeMinistries
 * @property \App\Model\Table\OfficeLayersTable&\Cake\ORM\Association\BelongsTo $OfficeLayers
 * @property \App\Model\Table\OfficesTable&\Cake\ORM\Association\BelongsTo $Offices
 * @property \App\Model\Table\OfficeOriginUnitsTable&\Cake\ORM\Association\BelongsTo $OfficeOriginUnits
 * @property \App\Model\Table\ParentUnitsTable&\Cake\ORM\Association\BelongsTo $ParentUnits
 * @property \App\Model\Table\ParentOriginUnitsTable&\Cake\ORM\Association\BelongsTo $ParentOriginUnits
 * @property \App\Model\Table\DesignationUpdateHistoryTable&\Cake\ORM\Association\HasMany $DesignationUpdateHistory
 * @property \App\Model\Table\EmployeeOfficesTable&\Cake\ORM\Association\HasMany $EmployeeOffices
 * @property \App\Model\Table\OfficeFrontDeskTable&\Cake\ORM\Association\HasMany $OfficeFrontDesk
 * @property \App\Model\Table\OfficeUnitOrganogramsTable&\Cake\ORM\Association\HasMany $OfficeUnitOrganograms
 * @property \App\Model\Table\PotrojariHeaderSettingsTable&\Cake\ORM\Association\HasMany $PotrojariHeaderSettings
 * @property \App\Model\Table\UnitUpdateHistoryTable&\Cake\ORM\Association\HasMany $UnitUpdateHistory
 * @property \App\Model\Table\UserLoginHistoryTable&\Cake\ORM\Association\HasMany $UserLoginHistory
 *
 * @method \App\Model\Entity\OfficeUnit get($primaryKey, $options = [])
 * @method \App\Model\Entity\OfficeUnit newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OfficeUnit[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OfficeUnit|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OfficeUnit saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OfficeUnit patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OfficeUnit[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OfficeUnit findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OfficeUnitsTable extends Table
{
    // Property needs to unset
    protected $unset_property = ['created_by', 'modified_by', 'modified', 'created', 'sarok_no_start', 'active_status', 'parent_origin_unit_id'];
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('office_units');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('OfficeMinistries', [
            'foreignKey' => 'office_ministry_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('OfficeLayers', [
            'foreignKey' => 'office_layer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Offices', [
            'foreignKey' => 'office_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('OfficeOriginUnits', [
            'foreignKey' => 'office_origin_unit_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ParentUnits', [
            'foreignKey' => 'parent_unit_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ParentOriginUnits', [
            'foreignKey' => 'parent_origin_unit_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('DesignationUpdateHistory', [
            'foreignKey' => 'office_unit_id'
        ]);
        $this->hasMany('EmployeeOffices', [
            'foreignKey' => 'office_unit_id'
        ]);
        $this->hasMany('OfficeFrontDesk', [
            'foreignKey' => 'office_unit_id'
        ]);
        $this->hasMany('OfficeUnitOrganograms', [
            'foreignKey' => 'office_unit_id'
        ]);
        $this->hasMany('PotrojariHeaderSettings', [
            'foreignKey' => 'office_unit_id'
        ]);
        $this->hasMany('UnitUpdateHistory', [
            'foreignKey' => 'office_unit_id'
        ]);
        $this->hasMany('UserLoginHistory', [
            'foreignKey' => 'office_unit_id'
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
            ->scalar('unit_nothi_code')
            ->maxLength('unit_nothi_code', 3)
            ->notEmptyString('unit_nothi_code');

        $validator
            ->integer('unit_level')
            ->notEmptyString('unit_level');

        $validator
            ->integer('sarok_no_start')
            ->notEmptyString('sarok_no_start');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 100)
            ->allowEmptyString('phone');

        $validator
            ->scalar('fax')
            ->maxLength('fax', 100)
            ->allowEmptyString('fax');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['office_ministry_id'], 'OfficeMinistries'));
        $rules->add($rules->existsIn(['office_layer_id'], 'OfficeLayers'));
        $rules->add($rules->existsIn(['office_id'], 'Offices'));
        $rules->add($rules->existsIn(['office_origin_unit_id'], 'OfficeOriginUnits'));
        $rules->add($rules->existsIn(['parent_unit_id'], 'ParentUnits'));
        $rules->add($rules->existsIn(['parent_origin_unit_id'], 'ParentOriginUnits'));

        return $rules;
    }

    public function getOfficeUnits($data)
    {
        $columns = [
            'id' => 'id',
            'parent' => 'parent_unit_id',
            'sarok' => 'sarok_no_start',
            'level' => 'unit_level',
            'office' => 'office_id',
            'ministry' => 'office_ministry_id',
            'nameBn' => 'unit_name_bng',
            'name' => 'unit_name_eng',
            'layer' => 'office_layer_id',
            'phone' => 'phone',
            'nothi' => 'unit_nothi_code',
            'officeoriginunitid' => 'office_origin_unit_id',
            'category' => 'office_unit_category',
            'fax' => 'fax',
            'email' => 'email'
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
        if ($data['office'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['office_id' => $data['office']]);
            } else {
                $query = $query->where(['office_id' => $data['office']]);
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
                $query = $query->orWhere(['unit_level' => $data['level']]);
            } else {
                $query = $query->where(['unit_level' => $data['level']]);
            }
        }
        if ($data['layer'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['office_layer_id' => $data['layer']]);
            } else {
                $query = $query->where(['office_layer_id' => $data['layer']]);
            }
        }
        if ($data['phone'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['phone' => $data['phone']]);
            } else {
                $query = $query->where(['phone' => $data['phone']]);
            }
        }
        if ($data['email'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['email' => $data['email']]);
            } else {
                $query = $query->where(['email' => $data['email']]);
            }
        }
        if ($data['fax'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['fax' => $data['fax']]);
            } else {
                $query = $query->where(['fax' => $data['fax']]);
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
            $unitOrganograms = $query->enableHydration(false)->count();
        } else {
            $unitOrganograms = $query->enableHydration(false)->toArray();
        }
        return $unitOrganograms;
    }


    public function getOfficeWiseUnit($office_ids, $unit_ids = '', $options = [])
    {
        $office_ids = explode(",", $office_ids);
        $office_ids = array_map(function ($id) {
            return (int)$id;
        }, $office_ids);
        if (!empty($unit_ids)) {
            $unit_ids = explode(",", $unit_ids);
            $unit_ids = array_map(function ($id) {
                return (int)$id;
            }, $unit_ids);
        }
        $units = $this->find();
        $select = ['office_unit_id' => 'id', 'office_layer_id', 'office_ministry_id', 'office_id'];
        if (!empty($options['office_visibility'])) {
            $select = array_merge($select, $options['office_visibility']);
        }
        if (!empty($options['select'])) {
            $select = array_merge($select, $options['select']);
        } else if (!empty($options['unit_visibility'])) {
            $select = array_merge($select, $options['unit_visibility']);
        } else {
            $units->selectAllExcept($this, $this->unset_property);
        }
        if (!empty($unit_ids)) {
            $units = $units->where(['id IN' => $unit_ids]);
        }
        $units = $units->select($select)->where(['office_id IN' => $office_ids, 'active_status' => 1])->enableHydration(false)->toArray();
        $office_wise_data = array();

        foreach ($units as $unit) {
            $office_id = $unit['office_id'];
            $office_layer_id = $unit['office_layer_id'];
            $office_ministry_id = $unit['office_ministry_id'];
            unset($unit['id']);
            unset($unit['office_id']);
            unset($unit['office_layer_id']);
            unset($unit['office_ministry_id']);
            $office_wise_data[$office_id]['office_id'] ?? ($office_wise_data[$office_id]['office_id'] = $office_id);
            $office_wise_data[$office_id]['office_layer_id'] ?? ($office_wise_data[$office_id]['office_layer_id'] = $office_layer_id);
            $office_wise_data[$office_id]['office_ministry_id'] ?? ($office_wise_data[$office_id]['office_ministry_id'] = $office_ministry_id);
            $office_wise_data[$office_id]['units'][] = $unit;
        }

        return $office_wise_data;
    }
}
