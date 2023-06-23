<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OfficeInchargeTypes Model
 *
 * @method \App\Model\Entity\OfficeInchargeType get($primaryKey, $options = [])
 * @method \App\Model\Entity\OfficeInchargeType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OfficeInchargeType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OfficeInchargeType|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OfficeInchargeType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OfficeInchargeType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OfficeInchargeType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OfficeInchargeType findOrCreate($search, callable $callback = null, $options = [])
 */
class OfficeInchargeTypesTable extends Table
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

        $this->setTable('office_incharge_types');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('name_bng')
            ->maxLength('name_bng', 255)
            ->requirePresence('name_bng', 'create')
            ->notEmptyString('name_bng');

        $validator
            ->scalar('name_eng')
            ->maxLength('name_eng', 255)
            ->requirePresence('name_eng', 'create')
            ->notEmptyString('name_eng');

        return $validator;
    }

    public function getOfficeInchargeTypes($data)
    {
        $columns = [
            'name' => 'name_eng',
            'nameBn' => 'name_bng',
            'id' => 'id'
        ];
        $query = $this->find();
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
            $query = $query->where(['id' => $data['id']]);
        }
        if ($data['name'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['name_eng LIKE' => '%' . $data['name'] . '%']);
            } else {
                $query = $query->where(['name_eng LIKE' => '%' . $data['name'] . '%']);
            }
        }
        if ($data['nameBn'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['name_bng LIKE' => '%' . $data['nameBn'] . '%']);
            } else {
                $query = $query->where(['name_bng LIKE' => '%' . $data['nameBn'] . '%']);
            }
        }

        if ($data['xgcount']) {
            $officeInchargeTypes = $query->enableHydration(false)->count();
        } else {
            $officeInchargeTypes = $query->enableHydration(false)->toArray();
        }
        return $officeInchargeTypes;
    }

    public function getEmployeePolicy()
    {
        $query = $this->find()
            ->select([
                'name' => 'name_eng',
                'nameBn' => 'name_bng',
                'id'
            ]);
        return $query->enableHydration(false)->toArray();
    }
}
