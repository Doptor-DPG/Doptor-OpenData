<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OfficeUnitOrganogram Entity
 *
 * @property int $id
 * @property int $office_id
 * @property int $office_unit_id
 * @property int|null $superior_unit_id
 * @property int|null $superior_designation_id
 * @property int $ref_origin_unit_org_id
 * @property int|null $ref_sup_origin_unit_desig_id
 * @property int|null $ref_sup_origin_unit_id
 * @property string|null $designation_eng
 * @property string|null $designation_bng
 * @property string|null $short_name_eng
 * @property string|null $short_name_bng
 * @property int $designation_level
 * @property int $designation_sequence
 * @property string|null $designation_description
 * @property bool $status
 * @property bool $is_admin
 * @property int|null $created_by
 * @property int|null $modified_by
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Office $office
 * @property \App\Model\Entity\OfficeUnit $office_unit
 * @property \App\Model\Entity\SuperiorUnit $superior_unit
 * @property \App\Model\Entity\SuperiorDesignation $superior_designation
 * @property \App\Model\Entity\RefOriginUnitOrg $ref_origin_unit_org
 * @property \App\Model\Entity\RefSupOriginUnitDesig $ref_sup_origin_unit_desig
 * @property \App\Model\Entity\RefSupOriginUnit $ref_sup_origin_unit
 * @property \App\Model\Entity\EmployeeAdditionalRole[] $employee_additional_roles
 * @property \App\Model\Entity\EmployeeOffice[] $employee_offices
 * @property \App\Model\Entity\OfficeFrontDesk[] $office_front_desk
 * @property \App\Model\Entity\PotrojariHeaderSetting[] $potrojari_header_settings
 */
class OfficeUnitOrganogram extends Entity
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
        'office_id' => true,
        'office_unit_id' => true,
        'superior_unit_id' => true,
        'superior_designation_id' => true,
        'ref_origin_unit_org_id' => true,
        'ref_sup_origin_unit_desig_id' => true,
        'ref_sup_origin_unit_id' => true,
        'designation_eng' => true,
        'designation_bng' => true,
        'short_name_eng' => true,
        'short_name_bng' => true,
        'designation_level' => true,
        'designation_sequence' => true,
        'designation_description' => true,
        'status' => true,
        'is_admin' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'office' => true,
        'office_unit' => true,
        'superior_unit' => true,
        'superior_designation' => true,
        'ref_origin_unit_org' => true,
        'ref_sup_origin_unit_desig' => true,
        'ref_sup_origin_unit' => true,
        'employee_additional_roles' => true,
        'employee_offices' => true,
        'office_front_desk' => true,
        'potrojari_header_settings' => true
    ];
}
