<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmployeeAdditionalRole Entity
 *
 * @property int $id
 * @property int $office_unit_organogram_id
 * @property int $mapped_office_unit_organogram_id
 * @property int $created_by
 * @property int $modified_by
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\OfficeUnitOrganogram $office_unit_organogram
 * @property \App\Model\Entity\MappedOfficeUnitOrganogram $mapped_office_unit_organogram
 */
class EmployeeAdditionalRole extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'office_unit_organogram_id' => true,
        'mapped_office_unit_organogram_id' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'office_unit_organogram' => true,
        'mapped_office_unit_organogram' => true,
    ];
}
