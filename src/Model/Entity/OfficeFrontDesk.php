<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OfficeFrontDesk Entity
 *
 * @property int $id
 * @property int $office_id
 * @property string $office_name
 * @property string $office_address
 * @property int $office_unit_id
 * @property string $office_unit_name
 * @property int $office_unit_organogram_id
 * @property string $designation_label
 * @property int $officer_id
 * @property string $officer_name
 * @property int|null $created_by
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Office $office
 * @property \App\Model\Entity\OfficeUnit $office_unit
 * @property \App\Model\Entity\OfficeUnitOrganogram $office_unit_organogram
 * @property \App\Model\Entity\Officer $officer
 */
class OfficeFrontDesk extends Entity
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
        'id' => true,
        'office_id' => true,
        'office_name' => true,
        'office_address' => true,
        'office_unit_id' => true,
        'office_unit_name' => true,
        'office_unit_organogram_id' => true,
        'designation_label' => true,
        'officer_id' => true,
        'officer_name' => true,
        'created_by' => true,
        'created' => true,
        'modified' => true,
        'office' => true,
        'office_unit' => true,
        'office_unit_organogram' => true,
        'officer' => true,
    ];
}

