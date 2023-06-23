<?php

namespace App\Model\Table;

use App\Controller\OisfController;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * OfficeFrontDesk Model
 *
 * @property \App\Model\Table\OfficesTable&\Cake\ORM\Association\BelongsTo $Offices
 * @property \App\Model\Table\OfficeUnitsTable&\Cake\ORM\Association\BelongsTo $OfficeUnits
 * @property \App\Model\Table\OfficeUnitOrganogramsTable&\Cake\ORM\Association\BelongsTo $OfficeUnitOrganograms
 * @property \App\Model\Table\OfficersTable&\Cake\ORM\Association\BelongsTo $Officers
 *
 * @method \App\Model\Entity\OfficeFrontDesk get($primaryKey, $options = [])
 * @method \App\Model\Entity\OfficeFrontDesk newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OfficeFrontDesk[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OfficeFrontDesk|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OfficeFrontDesk saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OfficeFrontDesk patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OfficeFrontDesk[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OfficeFrontDesk findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OfficeFrontDeskTable extends Table
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

        $this->setTable('office_front_desk');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Offices', [
            'foreignKey' => 'office_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('OfficeUnits', [
            'foreignKey' => 'office_unit_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('OfficeUnitOrganograms', [
            'foreignKey' => 'office_unit_organogram_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Officers', [
            'foreignKey' => 'officer_id',
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
            ->requirePresence('id', 'create')
            ->notEmptyString('id');

        $validator
            ->scalar('office_name')
            ->maxLength('office_name', 200)
            ->requirePresence('office_name', 'create')
            ->notEmptyString('office_name');

        $validator
            ->scalar('office_address')
            ->maxLength('office_address', 200)
            ->requirePresence('office_address', 'create')
            ->notEmptyString('office_address');

        $validator
            ->scalar('office_unit_name')
            ->maxLength('office_unit_name', 200)
            ->requirePresence('office_unit_name', 'create')
            ->notEmptyString('office_unit_name');

        $validator
            ->scalar('designation_label')
            ->maxLength('designation_label', 200)
            ->requirePresence('designation_label', 'create')
            ->notEmptyString('designation_label');

        $validator
            ->scalar('officer_name')
            ->maxLength('officer_name', 200)
            ->requirePresence('officer_name', 'create')
            ->notEmptyString('officer_name');

        $validator
            ->allowEmptyString('created_by');

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
        $rules->add($rules->existsIn(['office_id'], 'Offices'));
        $rules->add($rules->existsIn(['office_unit_id'], 'OfficeUnits'));
        $rules->add($rules->existsIn(['office_unit_organogram_id'], 'OfficeUnitOrganograms'));
        $rules->add($rules->existsIn(['officer_id'], 'Officers'));

        return $rules;
    }

    public function getOfficeFrontDesks($data)
    {
        $columns = [
            'id' => 'OfficeFrontDesk.id',
            'office_id' => 'OfficeFrontDesk.office_id',
            'office_name' => 'OfficeFrontDesk.office_name',
            'address' => 'OfficeFrontDesk.office_address',
            'office_unit_id' => 'OfficeFrontDesk.office_unit_id',
            'office_unit_name' => 'OfficeFrontDesk.office_unit_name',
            'office_unit_organogram_id' => 'OfficeFrontDesk.office_unit_organogram_id',
            'designation' => 'OfficeFrontDesk.designation_label',
            'officer_name' => 'OfficeFrontDesk.officer_name'
        ];
        $query = $this->find();
        $query = $query->select($columns);

        if ($data['office_id'] != NULL) {
            $query = $query->where(['OfficeFrontDesk.office_id' => $data['office_id']]);
        }
        if ($data['office_unit_id'] != NULL) {
            $query = $query->where(['OfficeFrontDesk.office_unit_id' => $data['office_unit_id']]);
        }
        $frontdesks = $query->enableHydration(false)->first();
        $response['data'] = $frontdesks;

        return $response;
    }
}
