<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

/**
 * EmployeeOffices Model
 *
 * @property \App\Model\Table\EmployeeRecordsTable&\Cake\ORM\Association\BelongsTo $EmployeeRecords
 * @property \App\Model\Table\OfficesTable&\Cake\ORM\Association\BelongsTo $Offices
 * @property \App\Model\Table\OfficeUnitsTable&\Cake\ORM\Association\BelongsTo $OfficeUnits
 * @property \App\Model\Table\OfficeUnitOrganogramsTable&\Cake\ORM\Association\BelongsTo $OfficeUnitOrganograms
 * @property \App\Model\Table\MainRolesTable&\Cake\ORM\Association\BelongsTo $MainRoles
 * @property \App\Model\Table\DesignationUpdateHistoryTable&\Cake\ORM\Association\HasMany $DesignationUpdateHistory
 * @property \App\Model\Table\UnitUpdateHistoryTable&\Cake\ORM\Association\HasMany $UnitUpdateHistory
 *
 * @method \App\Model\Entity\EmployeeOffice get($primaryKey, $options = [])
 * @method \App\Model\Entity\EmployeeOffice newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EmployeeOffice[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EmployeeOffice|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmployeeOffice saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmployeeOffice patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EmployeeOffice[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EmployeeOffice findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmployeeOfficesTable extends Table
{
    // Property needs to unset
    protected $unset_property = ['created_by', 'modified_by', 'modified', 'identification_number', 'created', 'is_default_role', 'summary_nothi_post_type', 'main_role_id', 'status_change_date'];

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('employee_offices');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('EmployeeRecords', [
            'foreignKey' => 'employee_record_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Offices', [
            'foreignKey' => 'office_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('OfficeUnits', [
            'foreignKey' => 'office_unit_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('OfficeUnitOrganograms', [
            'foreignKey' => 'office_unit_organogram_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('MainRoles', [
            'foreignKey' => 'main_role_id'
        ]);
        $this->hasMany('DesignationUpdateHistory', [
            'foreignKey' => 'employee_office_id'
        ]);
        $this->hasMany('UnitUpdateHistory', [
            'foreignKey' => 'employee_office_id'
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('identification_number')
            ->maxLength('identification_number', 255)
            ->requirePresence('identification_number', 'create')
            ->notEmptyString('identification_number');

        $validator
            ->scalar('designation')
            ->maxLength('designation', 255)
            ->requirePresence('designation', 'create')
            ->notEmptyString('designation');

        $validator
            ->integer('designation_level')
            ->notEmptyString('designation_level');

        $validator
            ->integer('designation_sequence')
            ->notEmptyString('designation_sequence');

        $validator
            ->requirePresence('is_default_role', 'create')
            ->notEmptyString('is_default_role');

        $validator
            ->notEmptyString('office_head');

        $validator
            ->notEmptyString('summary_nothi_post_type');

        $validator
            ->scalar('incharge_label')
            ->maxLength('incharge_label', 255)
            ->requirePresence('incharge_label', 'create')
            ->notEmptyString('incharge_label');

        $validator
            ->dateTime('joining_date')
            ->allowEmptyDateTime('joining_date');

        $validator
            ->date('last_office_date')
            ->allowEmptyDate('last_office_date');

        $validator
            ->boolean('status')
            ->allowEmptyString('status');

        $validator
            ->dateTime('status_change_date')
            ->allowEmptyDateTime('status_change_date');

        $validator
            ->notEmptyString('show_unit');

        $validator
            ->notEmptyString('protikolpo_status');

        $validator
            ->allowEmptyString('created_by');

        $validator
            ->allowEmptyString('modified_by');

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
        $rules->add($rules->existsIn(['employee_record_id'], 'EmployeeRecords'));
        $rules->add($rules->existsIn(['office_id'], 'Offices'));
        $rules->add($rules->existsIn(['office_unit_id'], 'OfficeUnits'));
        $rules->add($rules->existsIn(['office_unit_organogram_id'], 'OfficeUnitOrganograms'));
        $rules->add($rules->existsIn(['main_role_id'], 'MainRoles'));

        return $rules;
    }

    public function prepareFilterOptions($filter_options)
    {
        $where = [];
        if (isset($filter_options['office_unit_organogram_id']) && !empty($filter_options['office_unit_organogram_id'])) {
            $where['office_unit_organogram_id IN '] = singleDataToArr($filter_options['office_unit_organogram_id']);
        }
        if (isset($filter_options['office_unit_id']) && !empty($filter_options['office_unit_id'])) {
            $where['office_unit_id IN '] = singleDataToArr($filter_options['office_unit_id']);
        }
        if (isset($filter_options['office_id']) && !empty($filter_options['office_id'])) {
            $where['office_id IN '] = singleDataToArr($filter_options['office_id']);
        }
        if (isset($filter_options['employee_record_id']) && !empty($filter_options['employee_record_id'])) {
            $where['employee_record_id IN '] = singleDataToArr($filter_options['employee_record_id']);
        }
        if (isset($filter_options['status']) && !empty($filter_options['status'])) {
            $where['status'] = $filter_options['status'];
        }
        return $where;
    }

    public function getAll($options = [])
    {
        $query = $this->find();
        if (!empty($options['where'])) {
            $query->where($this->prepareFilterOptions($options['where']));
        }
        if (!empty($options['select'])) {
            $query->select($options['select']);
        }
        if (!empty($options['order'])) {
            $query->order($options['order']);
        }
        return $query;
    }

    public function getEmployeeOfficesInfoByEmployeeRecordId($employee_record_id, $unset_property = true)
    {
        $query = $this->find();
        if ($unset_property) {
            $query = $query->selectAllExcept($this, $this->unset_property);
        }
        return $query->where(['employee_record_id' => $employee_record_id, 'status' => 1])->toArray();
    }

    public function getEmployeeOfficesInfoByDesignationID($designation_ids, $unset_property = true, $options = [])
    {
        $query = $this->find();
        if (!empty($options['select'])) {
            $query->select($options['select']);
        } else if ($unset_property) {
            $query = $query->selectAllExcept($this, $this->unset_property);
        }
        return $query->where($this->prepareFilterOptions(['office_unit_organogram_id' => $designation_ids, 'status' => 1]))->enableHydration(false)->toArray();
    }

    public function getEmployeeOffices($data)
    {
        $columns = [
            'unit' => 'office_unit_id',
            'employeeRecord' => 'employee_record_id',
            'joiningDate' => 'joining_date',
            'office' => 'office_id',
            'id' => 'id',
            'designation' => 'designation',
            'organogram' => 'office_unit_organogram_id',
            'lastDate' => 'last_office_date',
            'status' => 'status',
            'officeHead' => 'office_head'
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
        if ($data['employeeRecord'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['employee_record_id IN' => $data['employeeRecord']]);
            } else {
                $query = $query->where(['employee_record_id IN' => $data['employeeRecord']]);
            }
        }
        if ($data['idNumber'] != NULL) {
            $idNumber = $data['idNumber'];
            $idNumber = explode(',', $idNumber);
            $userTable = TableRegistry::getTableLocator()->get('Users');
            $userQuery = $userTable->find()->select(['employee_record_id'])->where(['username IN ' => $idNumber])->enableHydration(true)->all();
            $emp_rec_ids = $userQuery->extract('employee_record_id')->toArray();

            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['employee_record_id IN ' => $emp_rec_ids]);
            } else {
                $query = $query->where(['employee_record_id IN ' => $emp_rec_ids]);
            }
        }
        if ($data['designation'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['designation LIKE' => '%' . $data['designation'] . '%']);
            } else {
                $query = $query->where(['designation LIKE' => '%' . $data['designation'] . '%']);
            }
        }
        if ($data['designationLevel'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['designation_level LIKE' => '%' . $data['designationLevel'] . '%']);
            } else {
                $query = $query->where(['designation_level LIKE' => '%' . $data['designationLevel'] . '%']);
            }
        }
        if ($data['designationSequence'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['designation_sequence' => $data['designationSequence']]);
            } else {
                $query = $query->where(['designation_sequence' => $data['designationSequence']]);
            }
        }
        if ($data['office'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['office_id' => $data['office']]);
            } else {
                $query = $query->where(['office_id' => $data['office']]);
            }
        }
        if ($data['unit'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['office_unit_id IN' => $data['unit']]);
            } else {
                $query = $query->where(['office_unit_id IN' => $data['unit']]);
            }
        }
        if ($data['organogram'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['office_unit_organogram_id IN' => $data['organogram']]);
            } else {
                $query = $query->where(['office_unit_organogram_id IN' => $data['organogram']]);
            }
        }
        if ($data['joiningDate'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['joining_date' => $data['joiningDate']]);
            } else {
                $query = $query->where(['joining_date' => $data['joiningDate']]);
            }
        }
        if ($data['lastDate'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['last_office_date' => $data['lastDate']]);
            } else {
                $query = $query->where(['last_office_date' => $data['lastDate']]);
            }
        }
        if ($data['xgcount']) {
            $emp_offices = $query->where(['status' => 1])->enableHydration(false)->count();
        } else {
            $emp_offices = $query->where(['status' => 1])->enableHydration(false)->toArray();
        }

        $emp_record_table = TableRegistry::getTableLocator()->get('EmployeeRecords');
        $user_table = TableRegistry::getTableLocator()->get('Users');
        $office_unit_organogram_table = TableRegistry::getTableLocator()->get('OfficeUnitOrganograms');
        $office_table = TableRegistry::getTableLocator()->get('Offices');
        $ministry_table = TableRegistry::getTableLocator()->get('OfficeMinistries');
        foreach ($emp_offices as &$emp_office) {
            $emp_record_id = $emp_office['employeeRecord'];
            $emp_record = $emp_record_table->find()->select(['name_bng', 'name' => 'name_eng', 'mobile' => 'personal_mobile', 'email' => 'personal_email'])->where(['id' => $emp_record_id])->first();
            $origin_org = $office_unit_organogram_table->find()->select(['ref_origin_unit_org_id'])->where(['id' => $emp_office['organogram']])->first();
            $ministry_id = $office_table->find()->select(['office_ministry_id'])->where(['id' => $emp_office['office']])->first();
            $ministry = $ministry_table->find()->select(['id', 'name_bng', 'name_eng', 'name_eng_short', 'reference_code'])->where(['id' => $ministry_id['office_ministry_id']])->first();

            $emp_office['officeMinistryId'] = $ministry->id;
            $emp_office['ministryNameBng'] = $ministry->name_bng;
            $emp_office['ministryNameEng'] = $ministry->name_eng;
            $emp_office['ministryShortName'] = $ministry->name_eng_short;
            $emp_office['ministryReferenceCode'] = $ministry->reference_code;

            $emp_office['refOriginUnitOrganogramId'] = isset($origin_org->ref_origin_unit_org_id) ? $origin_org->ref_origin_unit_org_id : null;

            if ($emp_record) {
                $emp_office['name_bng'] = $emp_record['name_bng'];
                $emp_office['name'] = $emp_record['name'];
                $emp_office['mobile'] = $emp_record['mobile'];
                $emp_office['email'] = $emp_record['email'];
                $user = $user_table->find()->select(['username'])->where(['employee_record_id' => $emp_record_id])->first();
                if ($user) {
                    $emp_office['username'] = $user['username'];
                } else {
                    unset($emp_office);
                }
            } else {
                unset($emp_office);
            }
        }

        return $emp_offices;
    }

    public function employeeDesignations($data)
    {
        $designationIds = explode(",", $data['designationIds']);

        $designationIds = array_map(function ($id) {
            return (int)$id;
        }, $designationIds);

        $status = [0, 1];
        if ($data['status'] != null) {
            $status = [$data['status']];
        }


        return $this->find()
            ->where(['office_unit_organogram_id IN' => $designationIds, 'EmployeeOffices.status IN' => $status])
            ->contain([
                'EmployeeRecords',
            ])
            ->select([
                'id' => 'EmployeeRecords.id',
                'is_cadre' => 'EmployeeRecords.is_cadre',
                'joining_date' => 'EmployeeRecords.joining_date',
                'name_eng' => 'EmployeeRecords.name_eng',
                'employee_batch_id' => 'EmployeeRecords.employee_batch_id',
                'date_of_birth' => 'EmployeeRecords.date_of_birth',
                'employee_cadre_id' => 'EmployeeRecords.employee_cadre_id',
                'appointment_memo_no' => 'EmployeeRecords.appointment_memo_no',
                'identity_no' => 'EmployeeRecords.identity_no',
                'name_bng' => 'EmployeeRecords.name_bng',
                'personal_email' => 'EmployeeRecords.personal_email',
            ])
            ->limit(100)->toArray();
    }
}
