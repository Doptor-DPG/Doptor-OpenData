<?php

namespace App\Model\Table;

use App\Controller\OisfController;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * GeoMunicipalities Model
 *
 * @property \App\Model\Table\GeoDivisionsTable&\Cake\ORM\Association\BelongsTo $GeoDivisions
 * @property \App\Model\Table\GeoDistrictsTable&\Cake\ORM\Association\BelongsTo $GeoDistricts
 * @property \App\Model\Table\GeoUpazilasTable&\Cake\ORM\Association\BelongsTo $GeoUpazilas
 * @property \App\Model\Table\GeoMunicipalityWardsTable&\Cake\ORM\Association\HasMany $GeoMunicipalityWards
 *
 * @method \App\Model\Entity\GeoMunicipality get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeoMunicipality newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GeoMunicipality[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeoMunicipality|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeoMunicipality saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeoMunicipality patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeoMunicipality[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeoMunicipality findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GeoMunicipalitiesTable extends Table
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

        $this->setTable('geo_municipalities');

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
        $this->hasMany('GeoMunicipalityWards', [
            'foreignKey' => 'geo_municipality_id',
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
            ->scalar('municipality_name_eng')
            ->maxLength('municipality_name_eng', 255)
            ->requirePresence('municipality_name_eng', 'create')
            ->notEmptyString('municipality_name_eng');

        $validator
            ->scalar('municipality_name_bng')
            ->maxLength('municipality_name_bng', 255)
            ->requirePresence('municipality_name_bng', 'create')
            ->notEmptyString('municipality_name_bng');

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

        return $rules;
    }

    public function getMunicipalities($data)
    {
        //$municipalities_table = TableRegistry::getTableLocator()->get('GeoMunicipalities');
        $columns = [
            'id' => 'id',
            'name_eng' => 'municipality_name_eng',
            'name_bng' => 'municipality_name_bng',
            'bbs_code' => 'bbs_code',
            'district_id' => 'geo_district_id',
            'upazila_id' => 'geo_upazila_id',
            'division_id' => 'geo_division_id',
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

        if ($data['name_eng'] != NULL) {
            $query = $query->where(['municipality_name_eng LIKE' => '%' . $data['name_eng'] . '%']);
        }
        if ($data['name_bng'] != NULL) {
            $query = $query->where(['municipality_name_bng LIKE' => '%' . $data['name_bng'] . '%']);
        }
        if ($data['bbs_code'] != NULL) {
            $query = $query->where(['bbs_code' => $data['bbs_code']]);
        }
        $query = $query->where(['status' => 1]);

        $total = $query->count();

        if ($data['id'] == NULL) {
            $query = $query->limit($data['per_page'])->offset($data['page']);
        }

        $municipalities = $query->enableHydration(false)->toArray();

        $response = (new OisfController())->paginator($total, $data['page'], $data['per_page'], count($municipalities));
        $response['data'] = $municipalities;

        return $response;
    }
}
