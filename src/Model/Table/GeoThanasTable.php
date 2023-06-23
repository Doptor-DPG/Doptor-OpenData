<?php

namespace App\Model\Table;

use App\Controller\OisfController;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * GeoThanas Model
 *
 * @property \App\Model\Table\GeoDivisionsTable&\Cake\ORM\Association\BelongsTo $GeoDivisions
 * @property \App\Model\Table\GeoDistrictsTable&\Cake\ORM\Association\BelongsTo $GeoDistricts
 * @property \App\Model\Table\GeoPostOfficesTable&\Cake\ORM\Association\HasMany $GeoPostOffices
 *
 * @method \App\Model\Entity\GeoThana get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeoThana newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GeoThana[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeoThana|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeoThana saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeoThana patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeoThana[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeoThana findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GeoThanasTable extends Table
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

        $this->setTable('geo_thanas');

        $this->addBehavior('Timestamp');

        $this->belongsTo('GeoDivisions', [
            'foreignKey' => 'geo_division_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('GeoDistricts', [
            'foreignKey' => 'geo_district_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('GeoPostOffices', [
            'foreignKey' => 'geo_thana_id',
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
            ->scalar('thana_name_eng')
            ->maxLength('thana_name_eng', 255)
            ->requirePresence('thana_name_eng', 'create')
            ->notEmptyString('thana_name_eng');

        $validator
            ->scalar('thana_name_bng')
            ->maxLength('thana_name_bng', 255)
            ->requirePresence('thana_name_bng', 'create')
            ->notEmptyString('thana_name_bng');

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

    public function getThanas($data)
    {
        $columns = [
            'id' => 'id',
            'name_eng' => 'thana_name_eng',
            'name_bng' => 'thana_name_bng',
            'bbs_code' => 'bbs_code',
            'division_id' => 'geo_division_id',
            'district_id' => 'geo_district_id',
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
        if ($data['name_eng'] != NULL) {
            $query = $query->where(['thana_name_eng LIKE' => '%' . $data['name_eng'] . '%']);
        }
        if ($data['name_bng'] != NULL) {
            $query = $query->where(['thana_name_bng LIKE' => '%' . $data['name_bng'] . '%']);
        }
        if ($data['bbs_code'] != NULL) {
            $query = $query->where(['bbs_code' => $data['bbs_code']]);
        }

        $query = $query->where(['status' => 1]);

        $total = $query->count();

        if ($data['id'] == NULL) {
            $query = $query->limit($data['per_page'])->offset($data['page']);
        }

        $thanas = $query->enableHydration(false)->toArray();

        $response = (new OisfController())->paginator($total, $data['page'], $data['per_page'], count($thanas));
        $response['data'] = $thanas;

        return $response;
    }
}
