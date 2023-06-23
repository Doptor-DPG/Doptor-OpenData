<?php

namespace App\Model\Table;

use App\Controller\OisfController;
use Cake\Database\Expression\QueryExpression;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

/**
 * Offices Model
 *
 * @property \App\Model\Table\OfficeMinistriesTable&\Cake\ORM\Association\BelongsTo $OfficeMinistries
 * @property \App\Model\Table\OfficeLayersTable&\Cake\ORM\Association\BelongsTo $OfficeLayers
 * @property \App\Model\Table\CustomLayersTable&\Cake\ORM\Association\BelongsTo $CustomLayers
 * @property \App\Model\Table\OfficeOriginsTable&\Cake\ORM\Association\BelongsTo $OfficeOrigins
 * @property \App\Model\Table\GeoDivisionsTable&\Cake\ORM\Association\BelongsTo $GeoDivisions
 * @property \App\Model\Table\GeoDistrictsTable&\Cake\ORM\Association\BelongsTo $GeoDistricts
 * @property \App\Model\Table\GeoUpazilasTable&\Cake\ORM\Association\BelongsTo $GeoUpazilas
 * @property \App\Model\Table\GeoUnionsTable&\Cake\ORM\Association\BelongsTo $GeoUnions
 * @property \App\Model\Table\ParentOfficesTable&\Cake\ORM\Association\BelongsTo $ParentOffices
 * @property \App\Model\Table\DakActionsTable&\Cake\ORM\Association\HasMany $DakActions
 * @property \App\Model\Table\DesignationUpdateHistoryTable&\Cake\ORM\Association\HasMany $DesignationUpdateHistory
 * @property \App\Model\Table\EmployeeOfficeDomainsTable&\Cake\ORM\Association\HasMany $EmployeeOfficeDomains
 * @property \App\Model\Table\EmployeeOfficesTable&\Cake\ORM\Association\HasMany $EmployeeOffices
 * @property \App\Model\Table\ErrorLogTable&\Cake\ORM\Association\HasMany $ErrorLog
 * @property \App\Model\Table\NothiArchiveRequestsTable&\Cake\ORM\Association\HasMany $NothiArchiveRequests
 * @property \App\Model\Table\NothiDecisionsTable&\Cake\ORM\Association\HasMany $NothiDecisions
 * @property \App\Model\Table\NotificationSettingsTable&\Cake\ORM\Association\HasMany $NotificationSettings
 * @property \App\Model\Table\OfficeDomainsTable&\Cake\ORM\Association\HasMany $OfficeDomains
 * @property \App\Model\Table\OfficeDomainsWithoutSslTable&\Cake\ORM\Association\HasMany $OfficeDomainsWithoutSsl
 * @property \App\Model\Table\OfficeFrontDeskTable&\Cake\ORM\Association\HasMany $OfficeFrontDesk
 * @property \App\Model\Table\OfficeHealthStatusTable&\Cake\ORM\Association\HasMany $OfficeHealthStatus
 * @property \App\Model\Table\OfficeSegregationLogsTable&\Cake\ORM\Association\HasMany $OfficeSegregationLogs
 * @property \App\Model\Table\OfficeUnitOrganogramsTable&\Cake\ORM\Association\HasMany $OfficeUnitOrganograms
 * @property \App\Model\Table\OfficeUnitsTable&\Cake\ORM\Association\HasMany $OfficeUnits
 * @property \App\Model\Table\PotrojariHeaderSettingsTable&\Cake\ORM\Association\HasMany $PotrojariHeaderSettings
 * @property \App\Model\Table\PotrojariRequestTable&\Cake\ORM\Association\HasMany $PotrojariRequest
 * @property \App\Model\Table\UnitUpdateHistoryTable&\Cake\ORM\Association\HasMany $UnitUpdateHistory
 * @property \App\Model\Table\UserLoginHistoryTable&\Cake\ORM\Association\HasMany $UserLoginHistory
 * @property \App\Model\Table\ViewOfficeDashboardTable&\Cake\ORM\Association\HasMany $ViewOfficeDashboard
 *
 * @method \App\Model\Entity\Office get($primaryKey, $options = [])
 * @method \App\Model\Entity\Office newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Office[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Office|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Office saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Office patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Office[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Office findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OfficesTable extends OISFTable
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

        $this->setTable('offices');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('OfficeMinistries', [
            'foreignKey' => 'office_ministry_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('OfficeLayers', [
            'foreignKey' => 'office_layer_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('CustomLayers', [
            'foreignKey' => 'custom_layer_id',
        ]);
        $this->belongsTo('OfficeOrigins', [
            'foreignKey' => 'office_origin_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('GeoDivisions', [
            'foreignKey' => 'geo_division_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('GeoDistricts', [
            'foreignKey' => 'geo_district_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('GeoUpazilas', [
            'foreignKey' => 'geo_upazila_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('GeoUnions', [
            'foreignKey' => 'geo_union_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('ParentOffices', [
            'foreignKey' => 'parent_office_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('DakActions', [
            'foreignKey' => 'office_id',
        ]);
        $this->hasMany('DesignationUpdateHistory', [
            'foreignKey' => 'office_id',
        ]);
        $this->hasMany('EmployeeOfficeDomains', [
            'foreignKey' => 'office_id',
        ]);
        $this->hasMany('EmployeeOffices', [
            'foreignKey' => 'office_id',
        ]);
        $this->hasMany('ErrorLog', [
            'foreignKey' => 'office_id',
        ]);
        $this->hasMany('NothiArchiveRequests', [
            'foreignKey' => 'office_id',
        ]);
        $this->hasMany('NothiDecisions', [
            'foreignKey' => 'office_id',
        ]);
        $this->hasMany('NotificationSettings', [
            'foreignKey' => 'office_id',
        ]);
        $this->hasMany('OfficeDomains', [
            'foreignKey' => 'office_id',
        ]);
        $this->hasMany('OfficeDomainsWithoutSsl', [
            'foreignKey' => 'office_id',
        ]);
        $this->hasMany('OfficeFrontDesk', [
            'foreignKey' => 'office_id',
        ]);
        $this->hasMany('OfficeHealthStatus', [
            'foreignKey' => 'office_id',
        ]);
        $this->hasMany('OfficeSegregationLogs', [
            'foreignKey' => 'office_id',
        ]);
        $this->hasMany('OfficeUnitOrganograms', [
            'foreignKey' => 'office_id',
        ]);
        $this->hasMany('OfficeUnits', [
            'foreignKey' => 'office_id',
        ]);
        $this->hasMany('PotrojariHeaderSettings', [
            'foreignKey' => 'office_id',
        ]);
        $this->hasMany('PotrojariRequest', [
            'foreignKey' => 'office_id',
        ]);
        $this->hasMany('UnitUpdateHistory', [
            'foreignKey' => 'office_id',
        ]);
        $this->hasMany('UserLoginHistory', [
            'foreignKey' => 'office_id',
        ]);
        $this->hasMany('ViewOfficeDashboard', [
            'foreignKey' => 'office_id',
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
            ->scalar('office_name_eng')
            ->maxLength('office_name_eng', 255)
            ->requirePresence('office_name_eng', 'create')
            ->notEmptyString('office_name_eng');

        $validator
            ->scalar('office_name_bng')
            ->maxLength('office_name_bng', 255)
            ->requirePresence('office_name_bng', 'create')
            ->notEmptyString('office_name_bng');

        $validator
            ->scalar('office_address')
            ->maxLength('office_address', 255)
            ->allowEmptyString('office_address');

        $validator
            ->scalar('digital_nothi_code')
            ->maxLength('digital_nothi_code', 32)
            ->allowEmptyString('digital_nothi_code');

        $validator
            ->scalar('reference_code')
            ->maxLength('reference_code', 32)
            ->allowEmptyString('reference_code');

        $validator
            ->scalar('office_code')
            ->maxLength('office_code', 32)
            ->allowEmptyString('office_code');

        $validator
            ->scalar('office_phone')
            ->maxLength('office_phone', 255)
            ->allowEmptyString('office_phone');

        $validator
            ->scalar('office_mobile')
            ->maxLength('office_mobile', 255)
            ->allowEmptyString('office_mobile');

        $validator
            ->scalar('office_fax')
            ->maxLength('office_fax', 255)
            ->allowEmptyString('office_fax');

        $validator
            ->scalar('office_email')
            ->maxLength('office_email', 255)
            ->allowEmptyString('office_email');

        $validator
            ->scalar('office_web')
            ->maxLength('office_web', 255)
            ->allowEmptyString('office_web');

        $validator
            ->notEmptyString('active_status');

        $validator
            ->integer('unit_organogram_edit_option')
            ->allowEmptyString('unit_organogram_edit_option');

        $validator
            ->dateTime('unit_organogram_edit_option_status_updated_at')
            ->allowEmptyDateTime('unit_organogram_edit_option_status_updated_at');

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
        $rules->add($rules->existsIn(['custom_layer_id'], 'CustomLayers'));
        $rules->add($rules->existsIn(['office_origin_id'], 'OfficeOrigins'));
        $rules->add($rules->existsIn(['geo_division_id'], 'GeoDivisions'));
        $rules->add($rules->existsIn(['geo_district_id'], 'GeoDistricts'));
        $rules->add($rules->existsIn(['geo_upazila_id'], 'GeoUpazilas'));
        $rules->add($rules->existsIn(['geo_union_id'], 'GeoUnions'));
        $rules->add($rules->existsIn(['parent_office_id'], 'ParentOffices'));

        return $rules;
    }

    public function getAllOfficesByMinistryAndLayer($office_ministry_id, $office_layer_id)
    {
        $data = $this->find()->select(['id', 'office_name_bng', 'office_name_eng', 'office_phone', 'office_mobile', 'office_fax', 'office_email', 'office_web', 'office_ministry_id', 'office_layer_id', 'office_origin_id', 'custom_layer_id', 'parent_office_id', 'office_address'])->where([
            'Offices.office_ministry_id' => $office_ministry_id,
            'Offices.office_layer_id' => $office_layer_id, 'Offices.active_status' => 1,
        ])->contain(['OfficeLayers' => [
            'fields' => [
                'OfficeLayers.id',
                'OfficeLayers.layer_name_eng',
                'OfficeLayers.layer_name_bng',
                'OfficeLayers.layer_level',
            ],
        ]])->contain(['OfficeMinistries' => [
            'fields' => [
                'OfficeMinistries.id',
                'OfficeMinistries.name_eng',
                'OfficeMinistries.name_bng',
            ],
        ]])->toArray();

        $response = (new OisfController())->paginator(count($data), 1, count($data), count($data));
        $response['data'] = $data;
        return $response;
    }

    public function getOffice($office_ids, $search_options, $per_page = false, $page = false)
    {

        $query = $this->find()->select(['id', 'office_name_bng', 'office_name_eng', 'digital_nothi_code', 'office_phone', 'office_mobile', 'office_fax', 'office_email', 'office_web', 'office_ministry_id', 'office_layer_id', 'office_origin_id', 'custom_layer_id', 'parent_office_id', 'office_address'])
            ->contain(['OfficeLayers' => [
                'fields' => [
                    'OfficeLayers.id',
                    'OfficeLayers.layer_name_eng',
                    'OfficeLayers.layer_name_bng',
                    'OfficeLayers.layer_level',
                ],
            ]])->contain(['OfficeMinistries' => [
                'fields' => [
                    'OfficeMinistries.id',
                    'OfficeMinistries.name_eng',
                    'OfficeMinistries.name_bng',
                ],
            ]]);
        $data = [];

        if (!empty($office_ids)) {
            $office_ids = explode(",", $office_ids);
            $office_ids = array_map(function ($id) {
                return (int)$id;
            }, $office_ids);
            $query = $query->where(['Offices.id IN' => $office_ids]);
        }

        if (!empty($search_options['search'])) {
            $search_office_name = $search_options['search'];
            $query = $query->where(function (QueryExpression $exp, Query $query) use ($search_office_name) {
                return $exp
                    ->setConjunction('OR')
                    ->like('office_name_bng', '%' . $search_office_name . '%')
                    ->like('office_name_eng', '%' . $search_office_name . '%');
            });
        }

        if (!empty($search_options['office_origin_ids'])) {
            $office_origin_ids = explode(",", $search_options['office_origin_ids']);
            $office_origin_ids = array_map(function ($id) {
                return (int)$id;
            }, $office_origin_ids);
            $query = $query->where(['Offices.office_origin_id IN' => $office_origin_ids]);
        }

        if (!empty($search_options['custom_layer_ids'])) {
            $custom_layer_ids = explode(",", $search_options['custom_layer_ids']);
            $custom_layer_ids = array_map(function ($id) {
                return (int)$id;
            }, $custom_layer_ids);
            $query = $query->where(['Offices.custom_layer_id IN' => $custom_layer_ids]);
        }

        if (!empty($search_options['layer_levels'])) {
            $layer_levels = explode(",", $search_options['layer_levels']);
            $layer_levels = array_map(function ($id) {
                return (int)$id;
            }, $layer_levels);

            $custom_layers = TableRegistry::getTableLocator()->get('OfficeCustomLayers')->find()->where(['OfficeCustomLayers.layer_level IN' => $layer_levels])->select(['id'])->enableHydration(false)->toArray();
            $custom_layer_ids = array_column($custom_layers, 'id');
            $office_layers = TableRegistry::getTableLocator()->get('OfficeLayers')->find()->where(['OfficeLayers.custom_layer_id IN' => $custom_layer_ids])->select(['id'])->enableHydration(false)->toArray();
            $office_layer_ids = array_column($office_layers, 'id');
            $query = $query->where(['Offices.office_layer_id IN' => $office_layer_ids]);
        }

        $total = $query->where(['Offices.active_status' => 1])->count();
        if ($per_page && $page) {
            $offices = $query->where(['Offices.active_status' => 1])->limit($per_page)->page($page)->toArray();
        } else {
            $offices = $query->where(['Offices.active_status' => 1])->toArray();
        }

        foreach ($offices as $office) {
            $data[] = $office;
        }

        if ($per_page && $page) {
            $response = (new OisfController())->paginator($total, $page, $per_page, count($offices));
        }
        $response['data'] = $data;
        return $response;
    }

    public function getOfficeV1($data)
    {
        $query = $this->find()->select([
            'id',
            'nameBn' => 'office_name_bng',
            'name' => 'office_name_eng',
            'code' => 'office_code',
            'division' => 'geo_division_id',
            'district' => 'geo_district_id',
            'upazila' => 'geo_upazila_id',
            'phone' => 'office_phone',
            'mobile' => 'office_mobile',
            'digitalNothiCode' => 'digital_nothi_code',
            'fax' => 'office_fax',
            'email' => 'office_email',
            'website' => 'office_web',
            'ministry' => 'office_ministry_id',
            'layer' => 'office_layer_id',
            'origin' => 'office_origin_id',
            'customLayer' => 'custom_layer_id',
            'parentOfficeId' => 'parent_office_id',
        ]);

        if ($data['id'] != NULL) {
            $query = $query->where(['id' => $data['id']]);
        }

        if ($data['origin'] != NULL) {
            $query = $query->where(['office_origin_id' => $data['origin']]);
        }

        if ($data['division'] != NULL) {
            $query = $query->where(['geo_division_id' => $data['division']]);
        }

        if ($data['district'] != NULL) {
            $query = $query->where(['geo_district_id' => $data['district']]);
        }
        if ($data['upazila'] != NULL) {
            $query = $query->where(['geo_upazila_id' => $data['upazila']]);
        }
        if ($data['name'] != NULL) {
            $query = $query->where(['office_name_eng LIKE' => '%' . $data['name'] . '%']);
        }
        if ($data['nameBn'] != NULL) {
            $query = $query->where(['office_name_bng LIKE' => '%' . $data['nameBn'] . '%']);
        }
        if ($data['address'] != NULL) {
            $query = $query->where(['office_address LIKE' => '%' . $data['address'] . '%']);
        }
        if ($data['website'] != NULL) {
            $query = $query->where(['office_web LIKE' => '%' . $data['website'] . '%']);
        }
        if ($data['ministry'] != NULL) {
            $query = $query->where(['office_ministry_id' => $data['ministry']]);
        }
        if ($data['layer'] != NULL) {
            $query = $query->where(['office_layer_id' => $data['layer']]);
        }
        if ($data['code'] != NULL) {
            $query = $query->where(['office_code' => $data['code']]);
        }
        if ($data['email'] != NULL) {
            $query = $query->where(['office_email' => $data['email']]);
        }
        if ($data['phone'] != NULL) {
            $query = $query->where(['office_phone' => $data['phone']]);
        }
        if ($data['mobile'] != NULL) {
            $query = $query->where(['office_mobile' => $data['mobile']]);
        }
        if ($data['fax'] != NULL) {
            $query = $query->where(['office_fax' => $data['fax']]);
        }
        if ($data['parent'] != NULL) {
            $query = $query->where(['parent_office_id' => $data['parent']]);
        }
        if ($data['status'] != NULL) {
            $query = $query->where(['status' => $data['status']]);
        }

        return $query->enableHydration(false)->toArray();
    }


    public function getOfficeWiseUnitDesigMap($office_id)
    {
        $office_units_table = TableRegistry::getTableLocator()->get('OfficeUnits');
        $office_unit_organograms_table = TableRegistry::getTableLocator()->get('OfficeUnitOrganograms');

        $units = $office_units_table->getOfficeWiseUnit($office_id);
        $unit_ids = '';
        foreach ($units[$office_id]['units'] as $unit) {
            $unit_ids = $unit['office_unit_id'] . "," . $unit_ids;
        }
        $designations = $office_unit_organograms_table->getUnitWiseDesignation($unit_ids, false);
        foreach ($units[$office_id]['units'] as &$unit) {
            $unit['designations'] = $designations[$unit['office_unit_id']]['designations'] ?? [];
        }
        return $units;
    }

    public function getOfficeBasedRelationalData($office_ids, $type, $select = [])
    {
        $data = [];
        if ($type == 'parent' || $type == 'child') {
            $params = $this->getQueryParamsForOfficeOfficeBasedRelation($type, $office_ids);
            $parent_office_info = $this->getAll($params['select'], $params['where'], $params['order'], $params['options'])->toArray();
        } else if ($type == 'both') {
            $params = $this->getQueryParamsForOfficeOfficeBasedRelation('parent', $office_ids);
            $parent_office_info = $this->getAll($params['select'], $params['where'], $params['order'], $params['options'])->toArray();
            $params = $this->getQueryParamsForOfficeOfficeBasedRelation('child', $office_ids);
            $child_office_info = $this->getAll($params['select'], $params['where'], $params['order'], $params['options'])->toArray();
            $params = $this->getQueryParamsForOfficeOfficeBasedRelation('self', $office_ids);
            $self_office_info = $this->getAll($params['select'], $params['where'], $params['order'], $params['options'])->toArray();

            $parent_office_info = array_merge($parent_office_info, $child_office_info, $self_office_info);
        } else {
            throw new \Exception('Type is unknown');
        }
        if (!empty($parent_office_info)) {
            if (empty($select)) {
                $select = ['id', 'office_name_bng', 'office_name_eng', 'geo_division_id', 'geo_district_id', 'geo_upazila_id', 'digital_nothi_code', 'office_phone', 'office_mobile', 'office_fax', 'office_email', 'office_web', 'office_ministry_id', 'office_layer_id', 'office_origin_id', 'custom_layer_id'];
            }
            $query = $this->find()->select($select);
            $query = $query->where(['id IN' => $parent_office_info]);
            $offices = $query->where(['active_status' => 1])->disableHydration()->toArray();
            foreach ($offices as $office) {
                $data[array_search($office['id'], $parent_office_info)] = $office;
            }
        }
        //        pr($data);die;
        if (!empty($data) && ($type == 'child' || $type == 'both')) {
            return $this->makeChildParentArray($data, $office_ids, $type);
        }
        return $data;
    }

    private function getQueryParamsForOfficeOfficeBasedRelation($type, $office_ids)
    {
        if ($type == 'parent') {
            $params = [
                'select' => ['id', 'parent_office_id'],
                'where' => ['id IN' => $office_ids, 'active_status' => 1],
                'order' => [],
                'options' => [
                    'list' => ['keyField' => 'id', 'valueField' => 'parent_office_id'],
                ],
            ];
        } else if ($type == 'child') {
            $params = [
                'select' => ['id', 'id'],
                'where' => ['parent_office_id IN' => $office_ids, 'active_status' => 1],
                'order' => [],
                'options' => [
                    'list' => ['keyField' => 'id', 'valueField' => 'id'],
                ],
            ];
        } else if ($type == 'self') {
            $params = [
                'select' => ['id', 'id'],
                'where' => ['id IN' => $office_ids, 'active_status' => 1],
                'order' => [],
                'options' => [
                    'list' => ['keyField' => 'id', 'valueField' => 'id'],
                ],
            ];
        }
        return $params ?? '';
    }

    /*
     * Private functions
     */

    private function makeChildParentArray($child_offices, $parent_offices, $type)
    {

        $mapped_data = [];

        if (!empty($parent_offices)) {
            foreach ($parent_offices as $parent_office) {
                $mapped_data[$parent_office] = [];
                if (!empty($child_offices[$parent_office])) {
                    $mapped_data[$parent_office][] = $child_offices[$parent_office];
                }
            }
        }
        if ($type == 'both') {
            if (!empty($child_offices)) {
                foreach ($child_offices as $child_office) {
                    if (!empty($child_office['parent_office_id']) && in_array($child_office['parent_office_id'], $parent_offices)) {
                        $mapped_data[$child_office['parent_office_id']][] = $child_office;
                    } else {
                        $mapped_data[$parent_offices[0]][] = $child_office;
                    }
                }
            }
        } else {
            if (!empty($child_offices)) {
                foreach ($child_offices as $child_office) {
                    if (!empty($child_office['parent_office_id'])) {
                        $mapped_data[$child_office['parent_office_id']][] = $child_office;
                    }
                }
            }
        }

        return $mapped_data ?? $child_offices;
    }

    public function getOfficeWiseUnitDesignationEmployeeMap($office_id, $options = [])
    {
        $office_units_table = TableRegistry::getTableLocator()->get('OfficeUnits');
        $office_unit_organograms_table = TableRegistry::getTableLocator()->get('OfficeUnitOrganograms');

        $units = $office_units_table->getOfficeWiseUnit($office_id, '', $options);
        $unit_ids = '';
        foreach ($units[$office_id]['units'] as $unit) {
            $unit_ids = $unit['office_unit_id'] . "," . $unit_ids;
        }
        $designations = $office_unit_organograms_table->getUnitWiseDesignationWithEmployeeInfo($unit_ids, false);
        $designation_ids = [];
        foreach ($units[$office_id]['units'] as &$unit) {
            $unit['designations'] = $designations[$unit['office_unit_id']]['designations'] ?? [];
        }
        return $units;
    }

    public function getNothiCode($office_id, $unit_id)
    {
        $office_info = $this->get($office_id);
        $digital_nothi_code = isset($office_info['digital_nothi_code']) ? trim($office_info['digital_nothi_code']) : "00.00.0000";
        $office_units_table = TableRegistry::getTableLocator()->get('OfficeUnits');
        $unit_info = $office_units_table->get($unit_id);
        $unit_nothi_code = isset($unit_info['unit_nothi_code']) ? trim($unit_info['unit_nothi_code']) : "000";
        $nothi_code = enTobn($digital_nothi_code . "." . $unit_nothi_code);
        return $nothi_code;
    }
}
