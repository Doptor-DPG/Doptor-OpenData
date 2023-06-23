<?php

namespace App\Model\Table;

use App\Controller\OisfController;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

/**
 * OfficeUnitOrganograms Model
 *
 * @property \App\Model\Table\OfficesTable&\Cake\ORM\Association\BelongsTo $Offices
 * @property \App\Model\Table\OfficeUnitsTable&\Cake\ORM\Association\BelongsTo $OfficeUnits
 * @property \App\Model\Table\SuperiorUnitsTable&\Cake\ORM\Association\BelongsTo $SuperiorUnits
 * @property \App\Model\Table\SuperiorDesignationsTable&\Cake\ORM\Association\BelongsTo $SuperiorDesignations
 * @property \App\Model\Table\RefOriginUnitOrgsTable&\Cake\ORM\Association\BelongsTo $RefOriginUnitOrgs
 * @property \App\Model\Table\RefSupOriginUnitDesigsTable&\Cake\ORM\Association\BelongsTo $RefSupOriginUnitDesigs
 * @property \App\Model\Table\RefSupOriginUnitsTable&\Cake\ORM\Association\BelongsTo $RefSupOriginUnits
 * @property \App\Model\Table\EmployeeAdditionalRolesTable&\Cake\ORM\Association\HasMany $EmployeeAdditionalRoles
 * @property \App\Model\Table\EmployeeOfficesTable&\Cake\ORM\Association\HasMany $EmployeeOffices
 * @property \App\Model\Table\OfficeFrontDeskTable&\Cake\ORM\Association\HasMany $OfficeFrontDesk
 * @property \App\Model\Table\PotrojariHeaderSettingsTable&\Cake\ORM\Association\HasMany $PotrojariHeaderSettings
 *
 * @method \App\Model\Entity\OfficeUnitOrganogram get($primaryKey, $options = [])
 * @method \App\Model\Entity\OfficeUnitOrganogram newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OfficeUnitOrganogram[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OfficeUnitOrganogram|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OfficeUnitOrganogram saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OfficeUnitOrganogram patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OfficeUnitOrganogram[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OfficeUnitOrganogram findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OfficeUnitOrganogramsTable extends Table
{
    // Property needs to unset
    protected $unset_property = ['created_by', 'modified_by', 'modified', 'created', 'designation_description', 'status', 'short_name_bng', 'short_name_eng', 'ref_sup_origin_unit_id', 'ref_sup_origin_unit_desig_id', 'ref_origin_unit_org_id', 'superior_designation_id', 'superior_unit_id'];

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('office_unit_organograms');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Offices', [
            'foreignKey' => 'office_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('OfficeUnits', [
            'foreignKey' => 'office_unit_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('SuperiorUnits', [
            'foreignKey' => 'superior_unit_id',
        ]);
        $this->belongsTo('SuperiorDesignations', [
            'foreignKey' => 'superior_designation_id',
        ]);
        $this->belongsTo('RefOriginUnitOrgs', [
            'foreignKey' => 'ref_origin_unit_org_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('RefSupOriginUnitDesigs', [
            'foreignKey' => 'ref_sup_origin_unit_desig_id',
        ]);
        $this->belongsTo('RefSupOriginUnits', [
            'foreignKey' => 'ref_sup_origin_unit_id',
        ]);
        $this->hasMany('EmployeeAdditionalRoles', [
            'foreignKey' => 'office_unit_organogram_id',
        ]);
        $this->hasMany('EmployeeOffices', [
            'foreignKey' => 'office_unit_organogram_id',
        ]);
        $this->hasMany('OfficeFrontDesk', [
            'foreignKey' => 'office_unit_organogram_id',
        ]);
        $this->hasMany('PotrojariHeaderSettings', [
            'foreignKey' => 'office_unit_organogram_id',
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
            ->scalar('designation_eng')
            ->maxLength('designation_eng', 255)
            ->allowEmptyString('designation_eng');

        $validator
            ->scalar('designation_bng')
            ->maxLength('designation_bng', 255)
            ->allowEmptyString('designation_bng');

        $validator
            ->scalar('short_name_eng')
            ->maxLength('short_name_eng', 100)
            ->allowEmptyString('short_name_eng');

        $validator
            ->scalar('short_name_bng')
            ->maxLength('short_name_bng', 100)
            ->allowEmptyString('short_name_bng');

        $validator
            ->integer('designation_level')
            ->notEmptyString('designation_level');

        $validator
            ->integer('designation_sequence')
            ->notEmptyString('designation_sequence');

        $validator
            ->scalar('designation_description')
            ->allowEmptyString('designation_description');

        $validator
            ->boolean('status')
            ->notEmptyString('status');

        $validator
            ->boolean('is_admin')
            ->notEmptyString('is_admin');

        $validator
            ->integer('created_by')
            ->allowEmptyString('created_by');

        $validator
            ->integer('modified_by')
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
        $rules->add($rules->existsIn(['office_id'], 'Offices'));
        $rules->add($rules->existsIn(['office_unit_id'], 'OfficeUnits'));
        $rules->add($rules->existsIn(['superior_unit_id'], 'SuperiorUnits'));
        $rules->add($rules->existsIn(['superior_designation_id'], 'SuperiorDesignations'));
        $rules->add($rules->existsIn(['ref_origin_unit_org_id'], 'RefOriginUnitOrgs'));
        $rules->add($rules->existsIn(['ref_sup_origin_unit_desig_id'], 'RefSupOriginUnitDesigs'));
        $rules->add($rules->existsIn(['ref_sup_origin_unit_id'], 'RefSupOriginUnits'));

        return $rules;
    }

    public function getEmployeeListByOffice($office_id)
    {
        $lists = $this->find('all')
            ->contain([
                'EmployeeOffices', 'EmployeeOffices.EmployeeRecords',
                'EmployeeOffices.EmployeeRecords.Users.EmployeeRecords',
            ])
            //->select(['EmployeeOffices.employee_record_id'])
            ->where(['office_id =' => $office_id])
            ->order(['designation_sequence' => 'DESC']);
        $data = [];

        foreach ($lists as $key => $list) {
            foreach ($list->employee_offices as $key => $office) {
                if ($office->status == 1) {
//                    foreach ($office->employee_record->users as $user) {
                    $data[] = [
                        'employee_id' => $office->employee_record_id,
                        'employee_name_eng' => $office->employee_record->name_eng,
                        'employee_name_bng' => $office->employee_record->name_bng,
                        'office_id' => $office->office_id,
                        'office_unit_id' => $office->office_unit_id,
                        'office_name_bn' => $office->office_name_bn,
                        'office_name_en' => $office->office_name_en,
                        'unit_name_bn' => $office->unit_name_bn,
                        'unit_name_en' => $office->unit_name_en,
                        'designation_id' => $list->id,
                        'designation_eng' => $list->designation_eng,
                        'designation_bng' => $list->designation_bng,
                    ];
//                    }
                }
            }
        }

        $response = (new OisfController())->paginator(count($data), 1, count($data), count($data));
        $response['data'] = $data;

        return $response;
    }


    public function getDesignation_info($designation_ids, $map = 0)
    {
        $designation_ids = explode(",", $designation_ids);
        $designation_ids = array_map(function ($id) {
            return (int)$id;
        }, $designation_ids);
        $query = $this->find()->select([
            'OfficeUnitOrganograms.id',
            'OfficeUnitOrganograms.designation_bng',
            'OfficeUnitOrganograms.designation_eng',
        ]);
        if ($map == 1) {
            $query = $query
                ->contain([
                    'Offices' => [
                        'fields' => [
                            'Offices.id',
                            'Offices.office_name_eng',
                            'Offices.office_name_bng',
                        ],
                    ],
                ])
                ->contain([
                    'OfficeUnits' => [
                        'fields' => [
                            'OfficeUnits.id',
                            'OfficeUnits.unit_name_bng',
                            'OfficeUnits.unit_name_eng',
                        ],
                    ],
                ])
                ->contain('EmployeeOffices', function (Query $q) {
                    return $q
                        ->select(['EmployeeOffices.id', 'EmployeeOffices.employee_record_id', 'EmployeeOffices.office_unit_organogram_id'])
                        ->where(['EmployeeOffices.status' => 1])
                        ->contain([
                            'EmployeeRecords' => [
                                'fields' => [
                                    'EmployeeRecords.id',
                                    'EmployeeRecords.name_bng',
                                    'EmployeeRecords.name_eng',
                                ],
                            ],
                        ])
                        ->limit(1);
                });
        };

        $query = $query->where([
            'OfficeUnitOrganograms.id IN' => $designation_ids,
        ]);
        return $query->toArray();
    }

    public function getUnitWiseDesignation($unit_ids, $office_id_visiblity = true)
    {
        $unit_ids = explode(",", $unit_ids);
        $unit_ids = array_map(function ($id) {
            return (int)$id;
        }, $unit_ids);
        $designations = $this->find()->select(['designation_id' => 'id'])->selectAllExcept($this, $this->unset_property)->where(['office_unit_id IN' => $unit_ids, 'status' => 1])->enableHydration(false)->toArray();
        $unit_wise_data = array();
        foreach ($designations as $designation) {
            $office_id = $designation['office_id'];
            $unit_id = $designation['office_unit_id'];
            unset($designation['id']);
            unset($designation['office_id']);
            unset($designation['office_unit_id']);
            if ($office_id_visiblity) {
                    $unit_wise_data[$unit_id]['office_id'] ?? ($unit_wise_data[$unit_id]['office_id'] = $office_id);
                    $unit_wise_data[$unit_id]['office_unit_id'] ?? ($unit_wise_data[$unit_id]['office_unit_id'] = $unit_id);
            }
            $unit_wise_data[$unit_id]['designations'][$designation['designation_id']] = $designation;
        }
        return $unit_wise_data;
    }

    public function getUnitWiseDesignationWithEmployeeInfo($unit_ids, $office_id_visiblity = true)
    {
        $table_EmployeeOffices = TableRegistry::getTableLocator()->get('EmployeeOffices');
        $table_employee_records = TableRegistry::getTableLocator()->get('EmployeeRecords');
        $unit_ids = explode(",", $unit_ids);
        $unit_ids = array_map(function ($id) {
            return (int)$id;
        }, $unit_ids);
        $unit_ids = array_filter($unit_ids);

        $designations = $this->find()->select(['designation_id' => 'id'])->selectAllExcept($this, $this->unset_property)->where(['office_unit_id IN' => $unit_ids, 'status' => 1])->enableHydration(false)->toArray();
        $unit_wise_data = array();
        $designation_ids = [];
        foreach ($designations as $designation) {
            $designation_ids[] = $designation['designation_id'];
        }
        if (!empty($designation_ids)) {
            $allMapped = $table_EmployeeOffices->getEmployeeOfficesInfoByDesignationID($designation_ids, true, ['select' => ['employee_record_id', 'office_unit_organogram_id', 'incharge_label']]);
        }
        $employee_record_ids = [];
        $mapped_employee_designations = [];
        if (!empty($allMapped)) {
            foreach ($allMapped as $mapped) {
                $employee_record_ids[] = $mapped['employee_record_id'];
                $mapped_employee_designations[$mapped['office_unit_organogram_id']]['office_unit_organogram_id'] = $mapped['office_unit_organogram_id'];
                $mapped_employee_designations[$mapped['office_unit_organogram_id']]['incharge_label'] = $mapped['incharge_label'];
                $mapped_employee_designations[$mapped['office_unit_organogram_id']]['employee_record_id'] = $mapped['employee_record_id'];
            }
        }
        $employee_infos = $table_employee_records->getEmployeeInfo($employee_record_ids, false, ['select' => ['name_eng', 'name_bng', 'id']]);
        //        pr($employee_infos);
        //        pr($mapped_employee_designations);
        //        pr($designations);
        //        die;
        $employee_info_2_send = [];
        if (!empty($employee_infos)) {
            foreach ($employee_infos as $info) {
                if (!empty($info['id'])) {
                    $data_2_add = $info;
                    //                    $data_2_add['incharge_label'] = $mapped_employee_designations[$info['id']]['incharge_label'];
                    $employee_info_2_send[$info['id']] = $data_2_add;
                    //                    $employee_info_2_send[$mapped_employee_designations[$info['id']]['office_unit_organogram_id']]['incharge_label'] = $mapped_employee_designations[$info['id']]['incharge_label'];
                }
            }
        }
        $users_table = TableRegistry::getTableLocator()->get('Users');

        foreach ($designations as $designation) {
            $office_id = $designation['office_id'];
            $unit_id = $designation['office_unit_id'];
            unset($designation['id']);
            unset($designation['office_id']);
            unset($designation['office_unit_id']);
            if ($office_id_visiblity) {
                    $unit_wise_data[$unit_id]['office_id'] ?? ($unit_wise_data[$unit_id]['office_id'] = $office_id);
                    $unit_wise_data[$unit_id]['office_unit_id'] ?? ($unit_wise_data[$unit_id]['office_unit_id'] = $unit_id);
            }
            $data_2_add = $designation;
            if (array_key_exists($designation['designation_id'], $mapped_employee_designations)) {
                $data_2_add['employee_info'] = $employee_info_2_send[$mapped_employee_designations[$designation['designation_id']]['employee_record_id']] ?? [];
                $data_2_add['employee_info']['incharge_label'] = $mapped_employee_designations[$designation['designation_id']]['incharge_label'] ?? [];
            } else {
                $data_2_add['employee_info'] = [];
            }
            $unit_wise_data[$unit_id]['designations'][$designation['designation_id']] = $data_2_add;
//            if (array_key_exists('employee_info', $data_2_add) && count($data_2_add['employee_info']) > 0) {
//                $users = $users_table->find()->select(['username', 'user_alias', 'user_role_id', 'active', 'last_password_change'])->where(['employee_record_id' => $data_2_add['employee_info']['id']])->first();
//                $unit_wise_data[$unit_id]['designations'][$designation['designation_id']]['user'] = ($users) ?: [];
//            } else {
//                $unit_wise_data[$unit_id]['designations'][$designation['designation_id']]['user'] = [];
//            }
        }
        return $unit_wise_data;
    }


    public function getOfficeUnitOrganograms($data)
    {

        $columns = [
            'id' => 'id',
            'originUnit' => 'ref_origin_unit_org_id',
            'sequence' => 'designation_sequence',
            'superiorUnit' => 'superior_unit_id',
            'superiorDesignation' => 'superior_designation_id',
            'designationLevel' => 'designation_level',
            'nameBn' => 'designation_bng',
            'name' => 'designation_eng',
            'shortNameBn' => 'short_name_bng',
            'shortName' => 'short_name_eng',
            'refOrigin' => 'ref_origin_unit_org_id',
            'officeId' => 'office_id',
            'officeUnitId' => 'office_unit_id',
        ];
        $query = $this->find()->where(['status' => 1])->order(['designation_level' => 'ASC'])->order(['designation_sequence' => 'ASC']);
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
            $query = $query->where(['id IN' => $data['id']]);
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
                $query = $query->orWhere(['office_unit_id' => $data['unit']]);
            } else {
                $query = $query->where(['office_unit_id' => $data['unit']]);
            }
        }
        if ($data['superiorUnit'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['superior_unit_id' => $data['superiorUnit']]);
            } else {
                $query = $query->where(['superior_unit_id' => $data['superiorUnit']]);
            }
        }
        if ($data['superiorDesignation'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['superior_designation_id' => $data['superiorDesignation']]);
            } else {
                $query = $query->where(['superior_designation_id' => $data['superiorDesignation']]);
            }
        }
        if ($data['name'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['designation_eng LIKE' => '%' . $data['name'] . '%']);
            } else {
                $query = $query->where(['designation_eng LIKE' => '%' . $data['name'] . '%']);
            }
        }
        if ($data['nameBn'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['designation_bng LIKE' => '%' . $data['nameBn'] . '%']);
            } else {
                $query = $query->where(['designation_bng LIKE' => '%' . $data['nameBn'] . '%']);
            }
        }
        if ($data['shortName'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['short_name_eng LIKE' => '%' . $data['shortName'] . '%']);
            } else {
                $query = $query->where(['short_name_eng LIKE' => '%' . $data['shortName'] . '%']);
            }
        }
        if ($data['shortNameBn'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['short_name_bng LIKE' => '%' . $data['shortNameBn'] . '%']);
            } else {
                $query = $query->where(['short_name_bng LIKE' => '%' . $data['shortNameBn'] . '%']);
            }
        }
        if ($data['designationLevel'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['designation_level' => $data['designationLevel']]);
            } else {
                $query = $query->where(['designation_level' => $data['designationLevel']]);
            }
        }
        if ($data['designationSequence'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['designation_sequence' => $data['designationSequence']]);
            } else {
                $query = $query->where(['designation_sequence' => $data['designationSequence']]);
            }
        }
        if ($data['description'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['designation_description' => $data['description']]);
            } else {
                $query = $query->where(['designation_description' => $data['description']]);
            }
        }
        if ($data['refOrigin'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['ref_origin_unit_org_id IN' => $data['refOrigin']]);
            } else {
                $query = $query->where(['ref_origin_unit_org_id IN' => $data['refOrigin']]);
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
            $office_unit_organograms = $query->enableHydration(false)->count();
        } else {
            $office_unit_organograms = $query->enableHydration(false)->toArray();
            foreach ($office_unit_organograms as &$office_unit_organogram) {
                if (isset($office_unit_organogram['officeUnitId']) && $office_unit_organogram['officeUnitId'] > 0) {
                    $origin_unit_table = TableRegistry::getTableLocator()->get('OfficeUnits');
                    $origin_unit = $origin_unit_table->find()->select(['unit_name_bng', 'unit_name_eng'])->where(['id' => $office_unit_organogram['officeUnitId']])->first();
                    if ($origin_unit) {
                        $office_unit_organogram['unitNameEn'] = $origin_unit['unit_name_eng'];
                        $office_unit_organogram['unitNameBn'] = $origin_unit['unit_name_bng'];
                    } else {
                        $office_unit_organogram['unitNameEn'] = '';
                        $office_unit_organogram['unitNameBn'] = '';
                    }
                }
            }
        }
        return $office_unit_organograms;
    }
}
