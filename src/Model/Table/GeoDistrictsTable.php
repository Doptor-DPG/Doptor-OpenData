<?php

namespace App\Model\Table;

use App\Controller\OisfController;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

/**
 * GeoDistricts Model
 *
 * @property \App\Model\Table\GeoDivisionsTable&\Cake\ORM\Association\BelongsTo $GeoDivisions
 * @property \App\Model\Table\GeoCityCorporationWardsTable&\Cake\ORM\Association\HasMany $GeoCityCorporationWards
 * @property \App\Model\Table\GeoCityCorporationsTable&\Cake\ORM\Association\HasMany $GeoCityCorporations
 * @property \App\Model\Table\GeoMunicipalitiesTable&\Cake\ORM\Association\HasMany $GeoMunicipalities
 * @property \App\Model\Table\GeoMunicipalityWardsTable&\Cake\ORM\Association\HasMany $GeoMunicipalityWards
 * @property \App\Model\Table\GeoPostOfficesTable&\Cake\ORM\Association\HasMany $GeoPostOffices
 * @property \App\Model\Table\GeoThanasTable&\Cake\ORM\Association\HasMany $GeoThanas
 * @property \App\Model\Table\GeoUnionsTable&\Cake\ORM\Association\HasMany $GeoUnions
 * @property \App\Model\Table\GeoUpazilasTable&\Cake\ORM\Association\HasMany $GeoUpazilas
 * @property \App\Model\Table\OfficesTable&\Cake\ORM\Association\HasMany $Offices
 * @property \App\Model\Table\OfficesBkTable&\Cake\ORM\Association\HasMany $OfficesBk
 *
 * @method \App\Model\Entity\GeoDistrict get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeoDistrict newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GeoDistrict[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeoDistrict|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeoDistrict saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeoDistrict patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeoDistrict[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeoDistrict findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GeoDistrictsTable extends Table
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

        $this->setTable('geo_districts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('GeoDivisions', [
            'foreignKey' => 'geo_division_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('GeoCityCorporationWards', [
            'foreignKey' => 'geo_district_id'
        ]);
        $this->hasMany('GeoCityCorporations', [
            'foreignKey' => 'geo_district_id'
        ]);
        $this->hasMany('GeoMunicipalities', [
            'foreignKey' => 'geo_district_id'
        ]);
        $this->hasMany('GeoMunicipalityWards', [
            'foreignKey' => 'geo_district_id'
        ]);
        $this->hasMany('GeoPostOffices', [
            'foreignKey' => 'geo_district_id'
        ]);
        $this->hasMany('GeoThanas', [
            'foreignKey' => 'geo_district_id'
        ]);
        $this->hasMany('GeoUnions', [
            'foreignKey' => 'geo_district_id'
        ]);
        $this->hasMany('GeoUpazilas', [
            'foreignKey' => 'geo_district_id'
        ]);
        $this->hasMany('Offices', [
            'foreignKey' => 'geo_district_id'
        ]);
        $this->hasMany('OfficesBk', [
            'foreignKey' => 'geo_district_id'
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
            ->scalar('district_name_eng')
            ->maxLength('district_name_eng', 255)
            ->requirePresence('district_name_eng', 'create')
            ->notEmptyString('district_name_eng');

        $validator
            ->scalar('district_name_bng')
            ->maxLength('district_name_bng', 255)
            ->requirePresence('district_name_bng', 'create')
            ->notEmptyString('district_name_bng');

        $validator
            ->scalar('bbs_code')
            ->maxLength('bbs_code', 4)
            ->allowEmptyString('bbs_code');

        $validator
            ->boolean('status')
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

        return $rules;
    }

    public function getDistricts($division_id = 0, $district_id = 0, $division_index = false)
    {
        $upazilas_table = TableRegistry::getTableLocator()->get('GeoUpazilas');
        $query = $this->find();
        if (!empty($division_id)) {
            $query = $query->where(['geo_division_id' => $division_id]);
        }
        if (!empty($district_id)) {
            $query = $query->where(['id' => $district_id]);
        }
        $districts_info = $query->select(['geo_district_id' => 'id', 'district_name_bng', 'district_name_eng', 'bbs_code', 'geo_division_id'])->enableHydration(false)->toArray();
        $upazilas = $upazilas_table->getUpazilas($division_id, $district_id, 0, true, true);

        $indexed_districts = array();
        foreach ($districts_info as $district_info) {
            $division = $district_info['geo_division_id'];
            $district = $district_info['geo_district_id'];

            $indexed_districts[$division]['geo_division_id'] = $district_info['geo_division_id'];
            $indexed_districts[$division]['districts'][$district]['geo_district_id'] = $district;
            $indexed_districts[$division]['districts'][$district]['district_name_bng'] = $district_info['district_name_bng'];
            $indexed_districts[$division]['districts'][$district]['district_name_eng'] = $district_info['district_name_eng'];
            $indexed_districts[$division]['districts'][$district]['bbs_code'] = $district_info['bbs_code'];

            $indexed_districts[$division]['districts'][$district]['upazilas'] = $upazilas[$district]['upazilas'] ?? [];
        }
        return $indexed_districts;
    }

    public function getV1Districts($data)
    {
        $columns = [
            'division_id' => 'geo_division_id',
            'bbs_code' => 'bbs_code',
            'name_eng' => 'district_name_eng',
            'name_bng' => 'district_name_bng',
            'id' => 'id'
        ];


        $query = $this->find();

        $query = $query->select($columns);


        if ($data['id'] != NULL) {
            $query = $query->where(['id' => $data['id']]);
        }
        if ($data['division_id'] != NULL) {
            $query = $query->where(['geo_division_id' => $data['division_id']]);
        }
        if ($data['name_eng'] != NULL) {
            $query = $query->where(['district_name_eng LIKE' => '%' . $data['name_eng'] . '%']);
        }
        if ($data['name_bng'] != NULL) {
            $query = $query->where(['district_name_bng LIKE' => '%' . $data['name_bng'] . '%']);
        }

        if ($data['bbs_code'] != NULL) {
            $query = $query->where(['bbs_code' => $data['bbs_code']]);
        }
        if ($data['status'] != NULL) {
            $query = $query->where(['status' => $data['status']]);
        }

        $total = $query->count();
        if ($data['id'] == NULL) {
            $query = $query->limit($data['per_page'])->offset($data['page']);
        }
        $districts = $query->enableHydration(false)->toArray();

        $response = (new OisfController())->paginator($total, $data['page'], $data['per_page'], count($districts));
        $response['data'] = $districts;

        return $response;
    }
}
