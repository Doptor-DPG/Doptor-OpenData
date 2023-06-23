<?php

namespace App\Model\Table;

use App\Controller\OisfController;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * GeoPostOffices Model
 *
 * @property \App\Model\Table\GeoDivisionsTable&\Cake\ORM\Association\BelongsTo $GeoDivisions
 * @property \App\Model\Table\GeoDistrictsTable&\Cake\ORM\Association\BelongsTo $GeoDistricts
 * @property \App\Model\Table\GeoUpazilasTable&\Cake\ORM\Association\BelongsTo $GeoUpazilas
 * @property \App\Model\Table\GeoThanasTable&\Cake\ORM\Association\BelongsTo $GeoThanas
 *
 * @method \App\Model\Entity\GeoPostOffice get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeoPostOffice newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GeoPostOffice[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeoPostOffice|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeoPostOffice saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeoPostOffice patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeoPostOffice[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeoPostOffice findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GeoPostOfficesTable extends Table
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

        $this->setTable('geo_post_offices');

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
        $this->belongsTo('GeoThanas', [
            'foreignKey' => 'geo_thana_id',
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
            ->scalar('thana_bbs_code')
            ->maxLength('thana_bbs_code', 4)
            ->allowEmptyString('thana_bbs_code');

        $validator
            ->scalar('postoffice_name_eng')
            ->maxLength('postoffice_name_eng', 255)
            ->requirePresence('postoffice_name_eng', 'create')
            ->notEmptyString('postoffice_name_eng');

        $validator
            ->scalar('postoffice_name_bng')
            ->maxLength('postoffice_name_bng', 255)
            ->requirePresence('postoffice_name_bng', 'create')
            ->notEmptyString('postoffice_name_bng');

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
        $rules->add($rules->existsIn(['geo_thana_id'], 'GeoThanas'));

        return $rules;
    }

    public function getPostOffices($data)
    {
        $columns = [
            'id' => 'id',
            'name_eng' => 'postoffice_name_eng',
            'name_bng' => 'postoffice_name_bng',
            'bbs_code' => 'bbs_code',
            'division_id' => 'geo_division_id',
            'district_id' => 'geo_district_id',
            'upazila_id' => 'geo_upazila_id',
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
            $query = $query->where(['postoffice_name_eng LIKE' => '%' . $data['name_eng'] . '%']);
        }
        if ($data['name_bng'] != NULL) {
            $query = $query->where(['postoffice_name_bng LIKE' => '%' . $data['name_bng'] . '%']);
        }
        if ($data['bbs_code'] != NULL) {
            $query = $query->where(['bbs_code' => $data['bbs_code']]);
        }

        $query = $query->where(['status' => 1]);

        $total = $query->count();

        if ($data['id'] == NULL) {
            $query = $query->limit($data['per_page'])->offset($data['page']);
        }

        $post_offices = $query->enableHydration(false)->toArray();

        $response = (new OisfController())->paginator($total, $data['page'], $data['per_page'], count($post_offices));
        $response['data'] = $post_offices;

        return $response;
    }
}
