<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OfficeUnit Entity
 *
 * @property int $id
 * @property int $office_ministry_id
 * @property int $office_layer_id
 * @property int $office_id
 * @property int $office_origin_unit_id
 * @property string $unit_name_bng
 * @property string $unit_name_eng
 * @property string $office_unit_category
 * @property int $parent_unit_id
 * @property int $parent_origin_unit_id
 * @property string $unit_nothi_code
 * @property int $unit_level
 * @property int $sarok_no_start
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $fax
 * @property int $active_status
 * @property int $created_by
 * @property int $modified_by
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\OfficeMinistry $office_ministry
 * @property \App\Model\Entity\OfficeLayer $office_layer
 * @property \App\Model\Entity\Office $office
 * @property \App\Model\Entity\OfficeOriginUnit $office_origin_unit
 * @property \App\Model\Entity\ParentUnit $parent_unit
 * @property \App\Model\Entity\ParentOriginUnit $parent_origin_unit
 * @property \App\Model\Entity\DesignationUpdateHistory[] $designation_update_history
 * @property \App\Model\Entity\EmployeeOffice[] $employee_offices
 * @property \App\Model\Entity\OfficeFrontDesk[] $office_front_desk
 * @property \App\Model\Entity\OfficeUnitOrganogram[] $office_unit_organograms
 * @property \App\Model\Entity\PotrojariHeaderSetting[] $potrojari_header_settings
 * @property \App\Model\Entity\UnitUpdateHistory[] $unit_update_history
 * @property \App\Model\Entity\UserLoginHistory[] $user_login_history
 */
class OfficeUnit extends Entity
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
        'office_ministry_id' => true,
        'office_layer_id' => true,
        'office_id' => true,
        'office_origin_unit_id' => true,
        'unit_name_bng' => true,
        'unit_name_eng' => true,
        'office_unit_category' => true,
        'parent_unit_id' => true,
        'parent_origin_unit_id' => true,
        'unit_nothi_code' => true,
        'unit_level' => true,
        'sarok_no_start' => true,
        'email' => true,
        'phone' => true,
        'fax' => true,
        'active_status' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'office_ministry' => true,
        'office_layer' => true,
        'office' => true,
        'office_origin_unit' => true,
        'parent_unit' => true,
        'parent_origin_unit' => true,
        'designation_update_history' => true,
        'employee_offices' => true,
        'office_front_desk' => true,
        'office_unit_organograms' => true,
        'potrojari_header_settings' => true,
        'unit_update_history' => true,
        'user_login_history' => true
    ];
}
