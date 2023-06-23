<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmployeeOffice Entity
 *
 * @property int $id
 * @property int $employee_record_id
 * @property string $identification_number
 * @property int $office_id
 * @property int $office_unit_id
 * @property int $office_unit_organogram_id
 * @property string $designation
 * @property int $designation_level
 * @property int $designation_sequence
 * @property int $is_default_role
 * @property int $office_head
 * @property int $summary_nothi_post_type
 * @property string $incharge_label
 * @property int|null $main_role_id
 * @property \Cake\I18n\FrozenTime|null $joining_date
 * @property \Cake\I18n\FrozenDate|null $last_office_date
 * @property bool|null $status
 * @property \Cake\I18n\FrozenTime|null $status_change_date
 * @property int $show_unit
 * @property int $protikolpo_status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $created_by
 * @property int|null $modified_by
 *
 * @property \App\Model\Entity\EmployeeRecord $employee_record
 * @property \App\Model\Entity\Office $office
 * @property \App\Model\Entity\OfficeUnit $office_unit
 * @property \App\Model\Entity\OfficeUnitOrganogram $office_unit_organogram
 * @property \App\Model\Entity\MainRole $main_role
 * @property \App\Model\Entity\DesignationUpdateHistory[] $designation_update_history
 * @property \App\Model\Entity\UnitUpdateHistory[] $unit_update_history
 */
class EmployeeOffice extends Entity
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
        'employee_record_id' => true,
        'identification_number' => true,
        'office_id' => true,
        'office_unit_id' => true,
        'office_unit_organogram_id' => true,
        'designation' => true,
        'designation_level' => true,
        'designation_sequence' => true,
        'is_default_role' => true,
        'office_head' => true,
        'summary_nothi_post_type' => true,
        'incharge_label' => true,
        'main_role_id' => true,
        'joining_date' => true,
        'last_office_date' => true,
        'status' => true,
        'status_change_date' => true,
        'show_unit' => true,
        'protikolpo_status' => true,
        'created' => true,
        'modified' => true,
        'created_by' => true,
        'modified_by' => true,
        'employee_record' => true,
        'office' => true,
        'office_unit' => true,
        'office_unit_organogram' => true,
        'main_role' => true,
        'designation_update_history' => true,
        'unit_update_history' => true
    ];
}
