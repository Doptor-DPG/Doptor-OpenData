<?php

namespace App\Model\Table;

use App\Controller\OisfController;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * GeoMunicipalityWards Model
 *
 * @property \App\Model\Table\GeoDivisionsTable&\Cake\ORM\Association\BelongsTo $GeoDivisions
 * @property \App\Model\Table\GeoDistrictsTable&\Cake\ORM\Association\BelongsTo $GeoDistricts
 * @property \App\Model\Table\GeoUpazilasTable&\Cake\ORM\Association\BelongsTo $GeoUpazilas
 * @property \App\Model\Table\GeoMunicipalitiesTable&\Cake\ORM\Association\BelongsTo $GeoMunicipalities
 *
 * @method \App\Model\Entity\GeoMunicipalityWard get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeoMunicipalityWard newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GeoMunicipalityWard[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeoMunicipalityWard|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeoMunicipalityWard saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeoMunicipalityWard patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeoMunicipalityWard[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeoMunicipalityWard findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GeoMunicipalityWardsTable extends Table
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

        $this->setTable('geo_municipality_wards');

        $this->addBehavior('Timestamp');

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
        $this->belongsTo('GeoMunicipalities', [
            'foreignKey' => 'geo_municipality_id',
            'joinType' => 'INNER',
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
            ->scalar('division_bbs_code')
            ->maxLength('division_bbs_code', 4)
            ->allowEmptyString('division_bbs_code');

        $validator
            ->scalar('district_bbs_code')
            ->maxLength('district_bbs_code', 4)
            ->allowEmptyString('district_bbs_code');

        $validator
            ->scalar('upazila_bbs_code')
            ->maxLength('upazila_bbs_code', 4)
            ->allowEmptyString('upazila_bbs_code');

        $validator
            ->scalar('municipality_bbs_code')
            ->maxLength('municipality_bbs_code', 4)
            ->allowEmptyString('municipality_bbs_code');

        $validator
            ->scalar('ward_name_eng')
            ->maxLength('ward_name_eng', 255)
            ->requirePresence('ward_name_eng', 'create')
            ->notEmptyString('ward_name_eng');

        $validator
            ->scalar('ward_name_bng')
            ->maxLength('ward_name_bng', 255)
            ->requirePresence('ward_name_bng', 'create')
            ->notEmptyString('ward_name_bng');

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
        $rules->add($rules->existsIn(['geo_upazila_id'], 'GeoUpazilas'));
        $rules->add($rules->existsIn(['geo_municipality_id'], 'GeoMunicipalities'));

        return $rules;
    }

    public function getMunicipalityWards($data)
    {
        $columns = [
            'id' => 'id',
            'name_eng' => 'ward_name_eng',
            'name_bng' => 'ward_name_bng',
            'bbs_code' => 'bbs_code',
            'division_id' => 'geo_division_id',
            'district_id' => 'geo_district_id',
            'upazila_id' => 'geo_upazila_id',
            'municipality_id' => 'geo_municipality_id',
        ];
        $query = $this->find()->select($columns);
        if ($data['id'] != NULL) {
            $query = $query->where(['id' => $data['id']]);
        }
        if ($data['division_id'] != NULL) {
            $query = $query->where(['geo_division_id' => $data['division_id']]);
        }
        if ($data['district_id'] != NULL) {
            $query = $query->where(['geo_district_id' => $data['district_id']]);
        }
        if ($data['upazila_id'] != NULL) {
            $query = $query->where(['geo_upazila_id' => $data['upazila_id']]);
        }
        if ($data['municipality_id'] != NULL) {
            $query = $query->where(['geo_municipality_id' => $data['municipality_id']]);
        }
        if ($data['name_eng'] != NULL) {
            $query = $query->where(['ward_name_eng LIKE' => '%' . $data['name_eng'] . '%']);
        }
        if ($data['name_bng'] != NULL) {
            $query = $query->where(['ward_name_bng LIKE' => '%' . $data['name_bng'] . '%']);
        }
        if ($data['bbs_code'] != NULL) {
            $query = $query->where(['bbs_code' => $data['bbs_code']]);
        }

        if (isset($data['districtbbs']) && $data['districtbbs'] != NULL) {
            $query = $query->where(['district_bbs_code' => $data['districtbbs']]);
        }
        if (isset($data['divisionbbs']) && $data['divisionbbs'] != NULL) {
            $query = $query->where(['division_bbs_code' => $data['divisionbbs']]);
        }
        if (isset($data['upazilabbs']) && $data['upazilabbs'] != NULL) {
            $query = $query->where(['upazila_bbs_code' => $data['upazilabbs']]);
        }
        if (isset($data['municipalitybbs']) && $data['municipalitybbs'] != NULL) {
            $query = $query->where(['municipality_bbs_code' => $data['municipalitybbs']]);
        }

        $query = $query->where(['status' => 1]);

        $total = $query->count();

        if ($data['id'] == NULL) {
            $query = $query->limit($data['per_page'])->offset($data['page']);
        }

        $municipality_wards = $query->enableHydration(false)->toArray();

        $response = (new OisfController())->paginator($total, $data['page'], $data['per_page'], count($municipality_wards));
        $response['data'] = $municipality_wards;

        return $response;
    }
}
