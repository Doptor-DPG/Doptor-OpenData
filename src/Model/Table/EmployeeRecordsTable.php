<?php

namespace App\Model\Table;

use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

/**
 * EmployeeRecords Model
 *
 * @property \App\Model\Table\EmployeeCadresTable&\Cake\ORM\Association\BelongsTo $EmployeeCadres
 * @property \App\Model\Table\EmployeeBatchesTable&\Cake\ORM\Association\BelongsTo $EmployeeBatches
 * @property \App\Model\Table\ServiceRanksTable&\Cake\ORM\Association\BelongsTo $ServiceRanks
 * @property \App\Model\Table\ServiceGradesTable&\Cake\ORM\Association\BelongsTo $ServiceGrades
 * @property \App\Model\Table\ServiceMinistriesTable&\Cake\ORM\Association\BelongsTo $ServiceMinistries
 * @property \App\Model\Table\ServiceOfficesTable&\Cake\ORM\Association\BelongsTo $ServiceOffices
 * @property \App\Model\Table\CurrentOfficeMinistriesTable&\Cake\ORM\Association\BelongsTo $CurrentOfficeMinistries
 * @property \App\Model\Table\CurrentOfficeLayersTable&\Cake\ORM\Association\BelongsTo $CurrentOfficeLayers
 * @property \App\Model\Table\CurrentOfficesTable&\Cake\ORM\Association\BelongsTo $CurrentOffices
 * @property \App\Model\Table\CurrentOfficeUnitsTable&\Cake\ORM\Association\BelongsTo $CurrentOfficeUnits
 * @property \App\Model\Table\CurrentOfficeDesignationsTable&\Cake\ORM\Association\BelongsTo $CurrentOfficeDesignations
 * @property \App\Model\Table\CertsTable&\Cake\ORM\Association\BelongsTo $Certs
 * @property \App\Model\Table\ApiTokensTable&\Cake\ORM\Association\HasMany $ApiTokens
 * @property \App\Model\Table\DamiSmsRequestTable&\Cake\ORM\Association\HasMany $DamiSmsRequest
 * @property \App\Model\Table\EmployeeOfficeDomainsTable&\Cake\ORM\Association\HasMany $EmployeeOfficeDomains
 * @property \App\Model\Table\EmployeeOfficesTable&\Cake\ORM\Association\HasMany $EmployeeOffices
 * @property \App\Model\Table\EmployeeSchedulesTable&\Cake\ORM\Association\HasMany $EmployeeSchedules
 * @property \App\Model\Table\PotrojariHeaderSettingsTable&\Cake\ORM\Association\HasMany $PotrojariHeaderSettings
 * @property \App\Model\Table\SummaryNothiUsersTable&\Cake\ORM\Association\HasMany $SummaryNothiUsers
 * @property \App\Model\Table\UserLoginHistoryTable&\Cake\ORM\Association\HasMany $UserLoginHistory
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\EmployeeRecord get($primaryKey, $options = [])
 * @method \App\Model\Entity\EmployeeRecord newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EmployeeRecord[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EmployeeRecord|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmployeeRecord saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmployeeRecord patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EmployeeRecord[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EmployeeRecord findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmployeeRecordsTable extends Table
{
    // Property needs to unset
    protected $unset_property = [
        'e_sign', 'image_file_name', 'hard_signature', 'status', 'soft_signature', 'cert_id', 'cert_type', 'cert_provider', 'cert_serial', 'created_by', 'modified_by', 'modified', 'nid_valid', 'employee_cadre_id', 'employee_batch_id', 'identity_no', 'appointment_memo_no', 'service_rank_id', 'service_grade_id',
        'service_ministry_id', 'service_office_id', 'current_office_ministry_id', 'current_office_layer_id', 'current_office_id', 'current_office_unit_id', 'current_office_joining_date', 'current_office_designation_id', 'current_office_address', 'd_sign', 'created',
    ];

    protected $unset_property_record = [
        'e_sign', 'image_file_name', 'hard_signature', 'status', 'soft_signature', 'cert_id', 'cert_type', 'cert_provider', 'cert_serial', 'created_by', 'modified_by', 'modified', 'nid_valid', 'employee_cadre_id', 'employee_batch_id', 'identity_no', 'appointment_memo_no', 'service_rank_id', 'service_grade_id',
        'service_ministry_id', 'service_office_id', 'current_office_ministry_id', 'current_office_layer_id', 'current_office_id', 'current_office_unit_id', 'current_office_joining_date', 'current_office_designation_id', 'current_office_address', 'd_sign', 'created', 'name_eng', 'name_bng',
        'bcn', 'ppn', 'is_cadre', 'employee_grade', 'default_sign',
    ];

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('employee_records');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('EmployeeCadres', [
            'foreignKey' => 'employee_cadre_id',
        ]);
        $this->belongsTo('EmployeeBatches', [
            'foreignKey' => 'employee_batch_id',
        ]);
        $this->belongsTo('ServiceRanks', [
            'foreignKey' => 'service_rank_id',
        ]);
        $this->belongsTo('ServiceGrades', [
            'foreignKey' => 'service_grade_id',
        ]);
        $this->belongsTo('ServiceMinistries', [
            'foreignKey' => 'service_ministry_id',
        ]);
        $this->belongsTo('ServiceOffices', [
            'foreignKey' => 'service_office_id',
        ]);
        $this->belongsTo('CurrentOfficeMinistries', [
            'foreignKey' => 'current_office_ministry_id',
        ]);
        $this->belongsTo('CurrentOfficeLayers', [
            'foreignKey' => 'current_office_layer_id',
        ]);
        $this->belongsTo('CurrentOffices', [
            'foreignKey' => 'current_office_id',
        ]);
        $this->belongsTo('CurrentOfficeUnits', [
            'foreignKey' => 'current_office_unit_id',
        ]);
        $this->belongsTo('CurrentOfficeDesignations', [
            'foreignKey' => 'current_office_designation_id',
        ]);
        $this->belongsTo('Certs', [
            'foreignKey' => 'cert_id',
        ]);
        $this->hasMany('ApiTokens', [
            'foreignKey' => 'employee_record_id',
        ]);
        $this->hasMany('DamiSmsRequest', [
            'foreignKey' => 'employee_record_id',
        ]);
        $this->hasMany('EmployeeOfficeDomains', [
            'foreignKey' => 'employee_record_id',
        ]);
        $this->hasMany('EmployeeOffices', [
            'foreignKey' => 'employee_record_id',
        ]);
        $this->hasMany('EmployeeSchedules', [
            'foreignKey' => 'employee_record_id',
        ]);
        $this->hasMany('PotrojariHeaderSettings', [
            'foreignKey' => 'employee_record_id',
        ]);
        $this->hasMany('SummaryNothiUsers', [
            'foreignKey' => 'employee_record_id',
        ]);
        $this->hasMany('UserLoginHistory', [
            'foreignKey' => 'employee_record_id',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'employee_record_id',
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
            ->scalar('name_eng')
            ->maxLength('name_eng', 255)
            ->requirePresence('name_eng', 'create')
            ->notEmptyString('name_eng');

        $validator
            ->scalar('name_bng')
            ->maxLength('name_bng', 255)
            ->requirePresence('name_bng', 'create')
            ->notEmptyString('name_bng');

        $validator
            ->scalar('father_name_eng')
            ->maxLength('father_name_eng', 255)
            ->allowEmptyString('father_name_eng');

        $validator
            ->scalar('father_name_bng')
            ->maxLength('father_name_bng', 255)
            ->allowEmptyString('father_name_bng');

        $validator
            ->scalar('mother_name_eng')
            ->maxLength('mother_name_eng', 255)
            ->allowEmptyString('mother_name_eng');

        $validator
            ->scalar('mother_name_bng')
            ->maxLength('mother_name_bng', 255)
            ->allowEmptyString('mother_name_bng');

        $validator
            ->dateTime('date_of_birth')
            ->allowEmptyDateTime('date_of_birth');

        $validator
            ->scalar('nid')
            ->maxLength('nid', 32)
            ->requirePresence('nid', 'create')
            ->notEmptyString('nid');

        $validator
            ->boolean('nid_valid')
            ->notEmptyString('nid_valid');

        $validator
            ->scalar('bcn')
            ->maxLength('bcn', 32)
            ->allowEmptyString('bcn');

        $validator
            ->scalar('ppn')
            ->maxLength('ppn', 32)
            ->allowEmptyString('ppn');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 8)
            ->allowEmptyString('gender');

        $validator
            ->scalar('religion')
            ->maxLength('religion', 50)
            ->allowEmptyString('religion');

        $validator
            ->scalar('blood_group')
            ->maxLength('blood_group', 4)
            ->allowEmptyString('blood_group');

        $validator
            ->scalar('marital_status')
            ->maxLength('marital_status', 20)
            ->allowEmptyString('marital_status');

        $validator
            ->scalar('personal_email')
            ->maxLength('personal_email', 255)
            ->allowEmptyString('personal_email');

        $validator
            ->scalar('personal_mobile')
            ->maxLength('personal_mobile', 255)
            ->requirePresence('personal_mobile', 'create')
            ->notEmptyString('personal_mobile');

        $validator
            ->scalar('alternative_mobile')
            ->maxLength('alternative_mobile', 255)
            ->allowEmptyString('alternative_mobile');

        $validator
            ->requirePresence('is_cadre', 'create')
            ->notEmptyString('is_cadre');

        $validator
            ->scalar('identity_no')
            ->maxLength('identity_no', 64)
            ->allowEmptyString('identity_no');

        $validator
            ->scalar('appointment_memo_no')
            ->maxLength('appointment_memo_no', 50)
            ->allowEmptyString('appointment_memo_no');

        $validator
            ->dateTime('joining_date')
            ->allowEmptyDateTime('joining_date');

        $validator
            ->dateTime('current_office_joining_date')
            ->allowEmptyDateTime('current_office_joining_date');

        $validator
            ->scalar('current_office_address')
            ->maxLength('current_office_address', 255)
            ->allowEmptyString('current_office_address');

        $validator
            ->scalar('e_sign')
            ->maxLength('e_sign', 255)
            ->allowEmptyString('e_sign');

        $validator
            ->scalar('d_sign')
            ->maxLength('d_sign', 255)
            ->allowEmptyString('d_sign');

        $validator
            ->scalar('image_file_name')
            ->maxLength('image_file_name', 255)
            ->allowEmptyFile('image_file_name');

        $validator
            ->boolean('status')
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        $validator
            ->notEmptyString('default_sign');

        $validator
            ->boolean('hard_signature')
            ->notEmptyString('hard_signature');

        $validator
            ->boolean('soft_signature')
            ->notEmptyString('soft_signature');

        $validator
            ->scalar('cert_type')
            ->maxLength('cert_type', 10)
            ->allowEmptyString('cert_type');

        $validator
            ->scalar('cert_provider')
            ->maxLength('cert_provider', 20)
            ->allowEmptyString('cert_provider');

        $validator
            ->scalar('cert_serial')
            ->maxLength('cert_serial', 250)
            ->allowEmptyString('cert_serial');

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
        $rules->add($rules->existsIn(['employee_cadre_id'], 'EmployeeCadres'));
        $rules->add($rules->existsIn(['employee_batch_id'], 'EmployeeBatches'));
        $rules->add($rules->existsIn(['service_rank_id'], 'ServiceRanks'));
        $rules->add($rules->existsIn(['service_grade_id'], 'ServiceGrades'));
        $rules->add($rules->existsIn(['service_ministry_id'], 'ServiceMinistries'));
        $rules->add($rules->existsIn(['service_office_id'], 'ServiceOffices'));
        $rules->add($rules->existsIn(['current_office_ministry_id'], 'CurrentOfficeMinistries'));
        $rules->add($rules->existsIn(['current_office_layer_id'], 'CurrentOfficeLayers'));
        $rules->add($rules->existsIn(['current_office_id'], 'CurrentOffices'));
        $rules->add($rules->existsIn(['current_office_unit_id'], 'CurrentOfficeUnits'));
        $rules->add($rules->existsIn(['current_office_designation_id'], 'CurrentOfficeDesignations'));
        $rules->add($rules->existsIn(['cert_id'], 'Certs'));

        return $rules;
    }

    public function getEmployeeInfo($ids, $unset_property = true, $options = [])
    {
        if (!is_array($ids)) {
            $ids = explode(",", $ids);
        }

        $query = $this->find();
        if (empty($options['select']) && $unset_property) {
            $query = $query->selectAllExcept($this, $this->unset_property);
        }
        if (!empty($options['select'])) {
            $query->select($options['select']);
        }

        return $query->where(['id IN' => $ids])->disableHydration()->toArray();
    }

    public function getProfileInfo($id, $unset_property = true, $options = [])
    {
        $userProfile = [];
        $query = $this->find();
        if (empty($options['select']) && $unset_property) {
            $query = $query->selectAllExcept($this, $this->unset_property_record);
        }
        if (!empty($options['select'])) {
            $query->select($options['select']);
        }
        $userProfile = $query->where(['id' => $id])->disableHydration()->first();
        if (!empty($userProfile)) {
            $loginName = TableRegistry::getTableLocator()->get('Users')->find()->select(['login_name' => 'user_alias'])->where(['employee_record_id' => $id])->first();
            $userProfile['login_name'] = $loginName["login_name"];
        } else {
            $userProfile = [];
        }
        return $userProfile;
    }

    public function changeProfileInfo($record_id, $data, $user_data)
    {
        $query = TableRegistry::getTableLocator()->get('EmployeeRecords')->query();
        $query->update()
            ->set($data)
            ->where(['id' => $record_id]);

        if ($user_data['login_name']) {
            $user = TableRegistry::getTableLocator()->get('Users')->find()->where(['employee_record_id' => $record_id, 'user_role_id' => 3])->first();
            if ($user) {
                $username = $user->username;
                $user_alias = $user_data['login_name'];
                $check_alias = TableRegistry::getTableLocator()->get('Users')->checkUserAlias($user_alias, $username);
                if (!$check_alias || $check_alias['status'] == 'error') {
                    return $check_alias;
                }
            }

            $user = TableRegistry::getTableLocator()->get('Users')->query();
            $user->update()
                ->set([
                    'user_alias' => strtolower($user_data['login_name']),
                ])
                ->where(['employee_record_id' => $record_id, 'user_role_id' => 3]);
            $user->execute();
        }

        if ($query->execute()) {
            return [
                'status' => 'success',
                'message' => 'কর্মকর্তার প্রোফাইল তথ্য হালনাগাদ হয়েছে।',
            ];
        } else {
            return [
                'error' => 'success',
                'message' => 'Update Failed.',
            ];
        }
    }

    public function getEmployeeRecords($data)
    {
        $columns = [
            'cadreNonCadre' => 'is_cadre',
            'gender' => 'gender',
            'father' => 'father_name_eng',
            'nameBn' => 'name_bng',
            'nid' => 'nid',
            'mobile' => 'personal_mobile',
            'joiningDate' => 'joining_date',
            'currentOffice' => 'current_office_id',
            'religion' => 'religion',
            'ppn' => 'ppn',
            'mother' => 'mother_name_eng',
            'bloodGroup' => 'blood_group',
            'dob' => 'date_of_birth',
            'grade' => 'service_grade_id',
            'name' => 'name_eng',
            'id' => 'id',
            'maritalStatus' => 'marital_status',
            'email' => 'personal_email',
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
        if ($data['father'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['father_name_eng LIKE' => '%' . $data['father'] . '%']);
            } else {
                $query = $query->where(['father_name_eng LIKE' => '%' . $data['father'] . '%']);
            }
        }
        if ($data['mother'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['mother_name_eng LIKE' => '%' . $data['mother'] . '%']);
            } else {
                $query = $query->where(['mother_name_eng LIKE' => '%' . $data['mother'] . '%']);
            }
        }
        if ($data['dob'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['date_of_birth' => $data['dob']]);
            } else {
                $query = $query->where(['date_of_birth' => $data['dob']]);
            }
        }
        // if ($data['pob'] != NULL) {
        //     $query = $query->where(['geo_district_id' => $data['pob']]);
        // }
        // if ($data['nationality'] != NULL) {
        //     $query = $query->where(['nationality' => $data['nationality']]);
        // }
        if ($data['religion'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['religion' => $data['religion']]);
            } else {
                $query = $query->where(['religion' => $data['religion']]);
            }
        }
        if ($data['joiningDate'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['joining_date' => $data['joiningDate']]);
            } else {
                $query = $query->where(['joining_date' => $data['joiningDate']]);
            }
        }
        if ($data['currentRank'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['service_rank_id' => $data['currentRank']]);
            } else {
                $query = $query->where(['service_rank_id' => $data['currentRank']]);
            }
        }
        if ($data['currentOffice'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['current_office_id' => $data['currentOffice']]);
            } else {
                $query = $query->where(['current_office_id' => $data['currentOffice']]);
            }
        }
        if ($data['status'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['status' => $data['status']]);
            } else {
                $query = $query->where(['status' => $data['status']]);
            }
        }
        if ($data['xgcount']) {
            $employee_records = $query->enableHydration(false)->count();
        } else {
            $employee_records = $query->enableHydration(false)->toArray();
        }
        return $employee_records;
    }

    public function searchEmployee($key, $value)
    {
        if ($key == '') {
            return [];
        }
        $query = $this->find();
        $query = $query->select(['id', 'name_eng', 'name_bng', 'father_name_eng', 'father_name_bng', 'mother_name_eng', 'mother_name_bng', 'date_of_birth', 'nid']);
        if ($key == 'nid') {
            $query = $query->where(['nid' => $value]);
        }
        $employee_data = $query->first();

        if ($employee_data) {
            $user = $this->Users->find()->where(['employee_record_id' => $employee_data->id])->first();
            if (empty($user)) {
                return [];
            }
            $employee_data['username'] = $user->username;
        } else {
            return [];
        }

        return $employee_data;
    }
}
