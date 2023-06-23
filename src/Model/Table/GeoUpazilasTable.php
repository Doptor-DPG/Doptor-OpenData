<?php

namespace App\Model\Table;

use App\Controller\OisfController;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

/**
 * GeoUpazilas Model
 *
 * @property \App\Model\Table\GeoDivisionsTable&\Cake\ORM\Association\BelongsTo $GeoDivisions
 * @property \App\Model\Table\GeoDistrictsTable&\Cake\ORM\Association\BelongsTo $GeoDistricts
 * @property \App\Model\Table\GeoMunicipalitiesTable&\Cake\ORM\Association\HasMany $GeoMunicipalities
 * @property \App\Model\Table\GeoMunicipalityWardsTable&\Cake\ORM\Association\HasMany $GeoMunicipalityWards
 * @property \App\Model\Table\GeoPostOfficesTable&\Cake\ORM\Association\HasMany $GeoPostOffices
 * @property \App\Model\Table\GeoUnionsTable&\Cake\ORM\Association\HasMany $GeoUnions
 * @property \App\Model\Table\OfficesTable&\Cake\ORM\Association\HasMany $Offices
 * @property \App\Model\Table\OfficesBkTable&\Cake\ORM\Association\HasMany $OfficesBk
 *
 * @method \App\Model\Entity\GeoUpazila get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeoUpazila newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GeoUpazila[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeoUpazila|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeoUpazila saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeoUpazila patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeoUpazila[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeoUpazila findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GeoUpazilasTable extends Table
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

        $this->setTable('geo_upazilas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('GeoDivisions', [
            'foreignKey' => 'geo_division_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('GeoDistricts', [
            'foreignKey' => 'geo_district_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('GeoMunicipalities', [
            'foreignKey' => 'geo_upazila_id'
        ]);
        $this->hasMany('GeoMunicipalityWards', [
            'foreignKey' => 'geo_upazila_id'
        ]);
        $this->hasMany('GeoPostOffices', [
            'foreignKey' => 'geo_upazila_id'
        ]);
        $this->hasMany('GeoUnions', [
            'foreignKey' => 'geo_upazila_id'
        ]);
        $this->hasMany('Offices', [
            'foreignKey' => 'geo_upazila_id'
        ]);
        $this->hasMany('OfficesBk', [
            'foreignKey' => 'geo_upazila_id'
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
            ->scalar('division_bbs_code')
            ->maxLength('division_bbs_code', 4)
            ->allowEmptyString('division_bbs_code');

        $validator
            ->scalar('district_bbs_code')
            ->maxLength('district_bbs_code', 4)
            ->allowEmptyString('district_bbs_code');

        $validator
            ->scalar('upazila_name_eng')
            ->maxLength('upazila_name_eng', 255)
            ->requirePresence('upazila_name_eng', 'create')
            ->notEmptyString('upazila_name_eng');

        $validator
            ->scalar('upazila_name_bng')
            ->maxLength('upazila_name_bng', 255)
            ->requirePresence('upazila_name_bng', 'create')
            ->notEmptyString('upazila_name_bng');

        $validator
            ->scalar('bbs_code')
            ->maxLength('bbs_code', 4)
            ->allowEmptyString('bbs_code');

        $validator
            ->boolean('status')
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

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
        $rules->add($rules->existsIn(['geo_division_id'], 'GeoDivisions'));
        $rules->add($rules->existsIn(['geo_district_id'], 'GeoDistricts'));

        return $rules;
    }

    public function getUpazilas($division_id = 0, $district_id = 0, $upazila_id = 0, $division_index = false, $disrict_index = false)
    {
        $unions_table = TableRegistry::getTableLocator()->get('GeoUnions');
        $query = $this->find();
        if (!empty($division_id)) {
            $query = $query->where(['geo_division_id' => $division_id]);
        }
        if (!empty($district_id)) {
            $query = $query->where(['geo_district_id' => $district_id]);
        }
        if (!empty($upazila_id)) {
            $query = $query->where(['id' => $upazila_id]);
        }
        $upazilas = $query->select(['geo_upazila_id' => 'id', 'upazila_name_bng', 'upazila_name_eng', 'bbs_code', 'geo_division_id', 'geo_district_id'])->enableHydration(false)->toArray();
        $unions = $unions_table->getUnions($division_id, $district_id, $upazila_id, true, true);

        $indexed_upazilas = array();
        foreach ($upazilas as $upazila) {
            $division = $upazila['geo_division_id'];
            $district = $upazila['geo_district_id'];
            $upzila_id = $upazila['geo_upazila_id'];

                $indexed_upazilas[$district]['geo_district_id'] ?? $indexed_upazilas[$district]['geo_district_id'] = $district;
                $indexed_upazilas[$district]['geo_division_id'] ?? $indexed_upazilas[$district]['geo_division_id'] = $division;

            $indexed_upazilas[$district]['upazilas'][$upzila_id]['geo_upazila_id'] = $upzila_id;
            $indexed_upazilas[$district]['upazilas'][$upzila_id]['upazila_name_bng'] = $upazila['upazila_name_bng'];
            $indexed_upazilas[$district]['upazilas'][$upzila_id]['upazila_name_eng'] = $upazila['upazila_name_eng'];
            $indexed_upazilas[$district]['upazilas'][$upzila_id]['bbs_code'] = $upazila['bbs_code'];
            if (!$division_index) {
                $indexed_upazilas[$district]['upazilas'][$upzila_id]['geo_division_id'] = $upazila['geo_division_id'];
            }
            if (!$disrict_index) {
                $indexed_upazilas[$district]['upazilas'][$upzila_id]['geo_district_id'] = $upazila['geo_district_id'];
            }
            $indexed_upazilas[$district]['upazilas'][$upzila_id]['unions'] = $unions[$upzila_id]['unions'] ?? [];
        }
        return $indexed_upazilas;
    }

    public function getV1Upazilas($data)
    {
        $columns = [
            'division_id' => 'geo_division_id',
            'bbs_code' => 'bbs_code',
            'district_id' => 'geo_district_id',
            'name_eng' => 'upazila_name_eng',
            'name_bng' => 'upazila_name_bng',
            'id' => 'id'
        ];
        $query = $this->find();

        $upazilas = $query->select($columns);

        if ($data['id'] != NULL) {
            $query = $query->where(['id' => $data['id']]);
        }
        if ($data['division_id'] != NULL) {
            $query = $query->where(['geo_division_id' => $data['division_id']]);
        }
        if ($data['district_id'] != NULL) {
            $query = $query->where(['geo_district_id' => $data['district_id']]);
        }

        if ($data['name_eng'] != NULL) {
            $query = $query->where(['upazila_name_eng LIKE' => '%' . $data['name_eng'] . '%']);
        }
        if ($data['name_bng'] != NULL) {
            $query = $query->where(['upazila_name_bng LIKE' => '%' . $data['name_bng'] . '%']);
        }
        if ($data['bbs_code'] != NULL) {
            $query = $query->where(['bbs_code' => $data['bbs_code']]);
        }
        $query = $query->where(['status' => 1]);
        $total = $query->count();
        if ($data['id'] == NULL) {
            $query = $query->limit($data['per_page'])->offset($data['page']);
        }
        $upazilas = $query->enableHydration(false)->toArray();

        $response = (new OisfController())->paginator($total, $data['page'], $data['per_page'], count($upazilas));
        $response['data'] = $upazilas;

        return $response;
    }
}
