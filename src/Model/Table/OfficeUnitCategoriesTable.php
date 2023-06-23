<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OfficeUnitCategories Model
 *
 * @method \App\Model\Entity\OfficeUnitCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\OfficeUnitCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OfficeUnitCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OfficeUnitCategory|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OfficeUnitCategory saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OfficeUnitCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OfficeUnitCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OfficeUnitCategory findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OfficeUnitCategoriesTable extends Table
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

        $this->setTable('office_unit_categories');

        $this->addBehavior('Timestamp');
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
            ->scalar('category_name_bng')
            ->maxLength('category_name_bng', 255)
            ->requirePresence('category_name_bng', 'create')
            ->notEmptyString('category_name_bng');

        $validator
            ->scalar('category_name_eng')
            ->maxLength('category_name_eng', 255)
            ->requirePresence('category_name_eng', 'create')
            ->notEmptyString('category_name_eng');

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

    public function getOfficeUnitCategories($data)
    {
        $columns = [
            'id' => 'id',
            'name' => 'category_name_eng',
            'nameBn' => 'category_name_bng'
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
                $query = $query->orWhere(['category_name_eng LIKE' => '%' . $data['name'] . '%']);
            } else {
                $query = $query->where(['category_name_eng LIKE' => '%' . $data['name'] . '%']);
            }
        }
        if ($data['nameBn'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['category_name_bng LIKE' => '%' . $data['nameBn'] . '%']);
            } else {
                $query = $query->where(['category_name_bng LIKE' => '%' . $data['nameBn'] . '%']);
            }
        }
        if ($data['xgcount']) {
            $office_unit_categories = $query->enableHydration(false)->count();
        } else {
            $office_unit_categories = $query->enableHydration(false)->toArray();
        }
        return $office_unit_categories;
    }
}
