<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

/**
 * OfficeOriginUnitOrganograms Model
 *
 * @property \App\Model\Table\OfficeOriginUnitsTable&\Cake\ORM\Association\BelongsTo $OfficeOriginUnits
 * @property \App\Model\Table\SuperiorUnitsTable&\Cake\ORM\Association\BelongsTo $SuperiorUnits
 * @property \App\Model\Table\SuperiorDesignationsTable&\Cake\ORM\Association\BelongsTo $SuperiorDesignations
 *
 * @method \App\Model\Entity\OfficeOriginUnitOrganogram get($primaryKey, $options = [])
 * @method \App\Model\Entity\OfficeOriginUnitOrganogram newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OfficeOriginUnitOrganogram[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OfficeOriginUnitOrganogram|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OfficeOriginUnitOrganogram saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OfficeOriginUnitOrganogram patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OfficeOriginUnitOrganogram[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OfficeOriginUnitOrganogram findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OfficeOriginUnitOrganogramsTable extends Table
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

        $this->setTable('office_origin_unit_organograms');

        $this->addBehavior('Timestamp');

        $this->belongsTo('OfficeOriginUnits', [
            'foreignKey' => 'office_origin_unit_id',
        ]);
        $this->belongsTo('SuperiorUnits', [
            'foreignKey' => 'superior_unit_id',
        ]);
        $this->belongsTo('SuperiorDesignations', [
            'foreignKey' => 'superior_designation_id',
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
            ->scalar('designation_eng')
            ->maxLength('designation_eng', 255)
            ->allowEmptyString('designation_eng');

        $validator
            ->scalar('designation_bng')
            ->maxLength('designation_bng', 255)
            ->allowEmptyString('designation_bng');

        $validator
            ->scalar('short_name_eng')
            ->maxLength('short_name_eng', 100)
            ->allowEmptyString('short_name_eng');

        $validator
            ->scalar('short_name_bng')
            ->maxLength('short_name_bng', 100)
            ->allowEmptyString('short_name_bng');

        $validator
            ->integer('designation_level')
            ->requirePresence('designation_level', 'create')
            ->notEmptyString('designation_level');

        $validator
            ->integer('designation_sequence')
            ->requirePresence('designation_sequence', 'create')
            ->notEmptyString('designation_sequence');

        $validator
            ->boolean('status')
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        $validator
            ->integer('created_by')
            ->allowEmptyString('created_by');

        $validator
            ->integer('modified_by')
            ->allowEmptyString('modified_by');

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
        $rules->add($rules->existsIn(['office_origin_unit_id'], 'OfficeOriginUnits'));
        $rules->add($rules->existsIn(['superior_unit_id'], 'SuperiorUnits'));
        $rules->add($rules->existsIn(['superior_designation_id'], 'SuperiorDesignations'));

        return $rules;
    }

    public function getOfficeOriginUnitOrganograms($data)
    {
        $columns = [
            'sequence' => 'designation_sequence',
            'superiorUnit' => 'superior_unit_id',
            'superiorDesignation' => 'superior_designation_id',
            'level' => 'designation_level',
            'nameBn' => 'designation_bng',
            'name' => 'designation_eng',
            'shortNameBn' => 'short_name_bng',
            'originUnit' => 'office_origin_unit_id',
            'shortName' => 'short_name_eng',
            'id' => 'id'
        ];
        $query = $this->find()->where(['status' => 1])->order(['designation_level' => 'ASC'])->order(['designation_sequence' => 'ASC']);
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


        if ($data['xgorder'] != NULL) {
            if (array_key_exists($data['xgorder'], $columns)) {
                $query = $query->order([$columns[$data['xgorder']] => 'DESC']);
            }
        }

        if ($data['xgoffset'] != NULL) {
            $query = $query->offset($data['xgoffset']);
        }

        if ($data['xglimit'] != NULL) {
            $query = $query->limit($data['xglimit']);
        } else {
            $query = $query->limit(1000);
        }

        if ($data['id'] != NULL) {
            $query = $query->where(['id IN' => $data['id']]);
        }
        if ($data['originUnit'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['office_origin_unit_id' => $data['originUnit']]);
            } else {
                $query = $query->where(['office_origin_unit_id' => $data['originUnit']]);
            }
        }
        if ($data['superiorUnit'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['superior_unit_id' => $data['superiorUnit']]);
            } else {
                $query = $query->where(['superior_unit_id' => $data['superiorUnit']]);
            }
        }
        if ($data['superiorDesignation'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['superior_designation_id' => $data['superiorDesignation']]);
            } else {
                $query = $query->where(['superior_designation_id' => $data['superiorDesignation']]);
            }
        }
        if ($data['name'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['designation_eng LIKE' => '%' . $data['name'] . '%']);
            } else {
                $query = $query->where(['designation_eng LIKE' => '%' . $data['name'] . '%']);
            }
        }
        if ($data['nameBn'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['designation_bng LIKE' => '%' . $data['nameBn'] . '%']);
            } else {
                $query = $query->where(['designation_bng LIKE' => '%' . $data['nameBn'] . '%']);
            }
        }
        if ($data['shortName'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['short_name_eng LIKE' => '%' . $data['shortName'] . '%']);
            } else {
                $query = $query->where(['short_name_eng LIKE' => '%' . $data['shortName'] . '%']);
            }
        }
        if ($data['shortNameBn'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['short_name_bng LIKE' => '%' . $data['shortNameBn'] . '%']);
            } else {
                $query = $query->where(['short_name_bng LIKE' => '%' . $data['shortNameBn'] . '%']);
            }
        }
        if ($data['level'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['designation_level' => $data['level']]);
            } else {
                $query = $query->where(['designation_level' => $data['level']]);
            }
        }
        if ($data['sequence'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['designation_sequence' => $data['sequence']]);
            } else {
                $query = $query->where(['designation_sequence' => $data['sequence']]);
            }
        }

        if ($data['status'] != NULL) {
            if ($data['xglogic'] == 'or') {
                $query = $query->orWhere(['status' => $data['status']]);
            } else {
                $query = $query->where(['status' => $data['status']]);
            }
        }

        if ($data['xgcount']) {
            return $query->enableHydration(false)->count();
        } else {
            $office_origin_unit_organograms = $query->enableHydration(false)->toArray();
        }

        foreach ($office_origin_unit_organograms as &$office_origin_unit_organogram) {
            if ($office_origin_unit_organogram['originUnit'] > 0) {
                $origin_unit_table = TableRegistry::getTableLocator()->get('OfficeOriginUnits');
                $origin_unit = $origin_unit_table->find()->select(['unit_name_bng', 'unit_name_eng'])->where(['id' => $office_origin_unit_organogram['originUnit']])->first();
                if ($origin_unit) {
                    $office_origin_unit_organogram['unitNameEn'] = $origin_unit['unit_name_eng'];
                    $office_origin_unit_organogram['unitNameBn'] = $origin_unit['unit_name_bng'];
                } else {
                    $office_origin_unit_organogram['unitNameEn'] = '';
                    $office_origin_unit_organogram['unitNameBn'] = '';
                }
            }
        }
        return $office_origin_unit_organograms;
    }
}
