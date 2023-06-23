<?php

namespace App\Model\Table;

use App\Controller\OisfController;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

/**
 * GeoDivisions Model
 *
 * @property \App\Model\Table\GeoCityCorporationWardsTable&\Cake\ORM\Association\HasMany $GeoCityCorporationWards
 * @property \App\Model\Table\GeoCityCorporationsTable&\Cake\ORM\Association\HasMany $GeoCityCorporations
 * @property \App\Model\Table\GeoDistrictsTable&\Cake\ORM\Association\HasMany $GeoDistricts
 * @property \App\Model\Table\GeoMunicipalitiesTable&\Cake\ORM\Association\HasMany $GeoMunicipalities
 * @property \App\Model\Table\GeoMunicipalityWardsTable&\Cake\ORM\Association\HasMany $GeoMunicipalityWards
 * @property \App\Model\Table\GeoPostOfficesTable&\Cake\ORM\Association\HasMany $GeoPostOffices
 * @property \App\Model\Table\GeoThanasTable&\Cake\ORM\Association\HasMany $GeoThanas
 * @property \App\Model\Table\GeoUnionsTable&\Cake\ORM\Association\HasMany $GeoUnions
 * @property \App\Model\Table\GeoUpazilasTable&\Cake\ORM\Association\HasMany $GeoUpazilas
 * @property \App\Model\Table\OfficesTable&\Cake\ORM\Association\HasMany $Offices
 * @property \App\Model\Table\OfficesBkTable&\Cake\ORM\Association\HasMany $OfficesBk
 *
 * @method \App\Model\Entity\GeoDivision get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeoDivision newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GeoDivision[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeoDivision|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeoDivision saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeoDivision patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeoDivision[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeoDivision findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GeoDivisionsTable extends Table
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

        $this->setTable('geo_divisions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('GeoCityCorporationWards', [
            'foreignKey' => 'geo_division_id'
        ]);
        $this->hasMany('GeoCityCorporations', [
            'foreignKey' => 'geo_division_id'
        ]);
        $this->hasMany('GeoDistricts', [
            'foreignKey' => 'geo_division_id'
        ]);
        $this->hasMany('GeoMunicipalities', [
            'foreignKey' => 'geo_division_id'
        ]);
        $this->hasMany('GeoMunicipalityWards', [
            'foreignKey' => 'geo_division_id'
        ]);
        $this->hasMany('GeoPostOffices', [
            'foreignKey' => 'geo_division_id'
        ]);
        $this->hasMany('GeoThanas', [
            'foreignKey' => 'geo_division_id'
        ]);
        $this->hasMany('GeoUnions', [
            'foreignKey' => 'geo_division_id'
        ]);
        $this->hasMany('GeoUpazilas', [
            'foreignKey' => 'geo_division_id'
        ]);
        $this->hasMany('Offices', [
            'foreignKey' => 'geo_division_id'
        ]);
        $this->hasMany('OfficesBk', [
            'foreignKey' => 'geo_division_id'
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
            ->scalar('division_name_eng')
            ->maxLength('division_name_eng', 255)
            ->requirePresence('division_name_eng', 'create')
            ->notEmptyString('division_name_eng');

        $validator
            ->scalar('division_name_bng')
            ->maxLength('division_name_bng', 255)
            ->requirePresence('division_name_bng', 'create')
            ->notEmptyString('division_name_bng');

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

    public function getDivisions($division_id = 0)
    {
        $districts_table = TableRegistry::getTableLocator()->get('GeoDistricts');
        $query = $this->find()->select(['geo_division_id' => 'id', 'division_name_bng', 'division_name_eng', 'bbs_code']);
        if (!empty($division_id)) {
            $query = $query->where(['id' => $division_id]);
        }
        $divisions = $query->enableHydration(false)->toArray();
        $districts = $districts_table->getDistricts($division_id, 0, true);

        $indexed_divisions = [];
        foreach ($divisions as $division) {
            $indexed_divisions[$division['geo_division_id']] = $division;
            $indexed_divisions[$division['geo_division_id']]['districts'] = $districts[$division['geo_division_id']]['districts'] ?? [];
        }
        return $indexed_divisions;
    }

    public function getV1Divisions($data)
    {

        $columns = [
            'bbs_code' => 'bbs_code',
            'name_eng' => 'division_name_eng',
            'name_bng' => 'division_name_bng',
            'id' => 'id'
        ];
        $query = $this->find();

        $query = $query->select($columns);

        if ($data['id'] != NULL) {
            $query = $query->where(['id' => $data['id']]);
        }

        if ($data['name_eng'] != NULL) {
            $query = $query->where(['division_name_eng LIKE' => '%' . $data['name_eng'] . '%']);
        }
        if ($data['name_bng'] != NULL) {
            $query = $query->where(['division_name_bng LIKE' => '%' . $data['name_bng'] . '%']);
        }
        if ($data['bbs_code'] != NULL) {
            $query = $query->where(['bbs_code' => $data['bbs_code']]);
        }
        $query = $query->where(['status' => 1]);

        $total = $query->count();

        if ($data['id'] == NULL) {
            $query = $query->limit($data['per_page'])->offset($data['page']);
        }

        $divisions = $query->enableHydration(false)->toArray();

        $response = (new OisfController())->paginator($total, $data['page'], $data['per_page'], count($divisions));
        $response['data'] = $divisions;

        return $response;
    }
}
