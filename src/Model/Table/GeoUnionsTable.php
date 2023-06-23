<?php

namespace App\Model\Table;

use App\Controller\OisfController;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GeoUnions Model
 *
 * @property \App\Model\Table\GeoDivisionsTable&\Cake\ORM\Association\BelongsTo $GeoDivisions
 * @property \App\Model\Table\GeoDistrictsTable&\Cake\ORM\Association\BelongsTo $GeoDistricts
 * @property \App\Model\Table\GeoUpazilasTable&\Cake\ORM\Association\BelongsTo $GeoUpazilas
 * @property \App\Model\Table\OfficesTable&\Cake\ORM\Association\HasMany $Offices
 * @property \App\Model\Table\OfficesBkTable&\Cake\ORM\Association\HasMany $OfficesBk
 *
 * @method \App\Model\Entity\GeoUnion get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeoUnion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GeoUnion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeoUnion|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeoUnion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeoUnion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeoUnion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeoUnion findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GeoUnionsTable extends Table
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

        $this->setTable('geo_unions');
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
        $this->belongsTo('GeoUpazilas', [
            'foreignKey' => 'geo_upazila_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Offices', [
            'foreignKey' => 'geo_union_id'
        ]);
        $this->hasMany('OfficesBk', [
            'foreignKey' => 'geo_union_id'
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
            ->scalar('upazila_bbs_code')
            ->maxLength('upazila_bbs_code', 4)
            ->allowEmptyString('upazila_bbs_code');

        $validator
            ->scalar('union_name_eng')
            ->maxLength('union_name_eng', 255)
            ->requirePresence('union_name_eng', 'create')
            ->notEmptyString('union_name_eng');

        $validator
            ->scalar('union_name_bng')
            ->maxLength('union_name_bng', 255)
            ->requirePresence('union_name_bng', 'create')
            ->notEmptyString('union_name_bng');

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

    public function getUnions($division_id = 0, $district_id = 0, $upazila_id = 0, $division_index = false, $district_index = false)
    {
        $query = $this->find()->select(['geo_union_id' => 'id', 'union_name_bng', 'union_name_eng', 'bbs_code', 'geo_division_id', 'geo_district_id', 'geo_upazila_id']);
        if (!empty($division_id)) {
            $query = $query->where(['geo_division_id' => $division_id]);
        }
        if (!empty($district_id)) {
            $query = $query->where(['geo_district_id' => $district_id]);
        }
        if (!empty($upazila_id)) {
            $query = $query->where(['geo_upazila_id' => $upazila_id]);
        }
        $unions = $query->enableHydration(false)->toArray();

        $indexed_union = array();
        foreach ($unions as $union) {
            $division = $union['geo_division_id'];
            if ($division_index) {
                unset($union['geo_division_id']);
            }

            $district = $union['geo_district_id'];
            if ($district_index) {
                unset($union['geo_district_id']);
            }

            $upazila = $union['geo_upazila_id'];
            unset($union['geo_upazila_id']);
                $indexed_union[$upazila]['geo_upazila_id'] ?? $indexed_union[$upazila]['geo_upazila_id'] = $upazila;
                $indexed_union[$upazila]['geo_district_id'] ?? $indexed_union[$upazila]['geo_district_id'] = $district;
                $indexed_union[$upazila]['geo_division_id'] ?? $indexed_union[$upazila]['geo_division_id'] = $division;
            $indexed_union[$upazila]['unions'][$union['geo_union_id']] = $union;
        }
        return $indexed_union;
    }

    public function getV1Unions($data)
    {
        $columns = [
            'id' => 'id',
            'bbs_code' => 'bbs_code',
            'name_eng' => 'union_name_eng',
            'name_bng' => 'union_name_bng',
            'division_id' => 'geo_division_id',
            'district_id' => 'geo_district_id',
            'upazila_id' => 'geo_upazila_id',
        ];
        $query = $this->find();
        $query = $query->select($columns);

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
            $query = $query->where(['union_name_eng LIKE' => '%' . $data['name_eng'] . '%']);
        }
        if ($data['name_bng'] != NULL) {
            $query = $query->where(['union_name_bng LIKE' => '%' . $data['name_bng'] . '%']);
        }
        if ($data['bbs_code'] != NULL) {
            $query = $query->where(['bbs_code' => $data['bbs_code']]);
        }
        $query = $query->where(['status' => 1]);

        $total = $query->count();
        if ($data['id'] == NULL) {
            $query = $query->limit($data['per_page'])->offset($data['page']);
        }
        $unions = $query->enableHydration(false)->toArray();

        $response = (new OisfController())->paginator($total, $data['page'], $data['per_page'], count($unions));
        $response['data'] = $unions;

        return $response;
    }
}
