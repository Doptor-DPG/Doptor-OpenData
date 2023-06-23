<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Office Entity
 *
 * @property int $id
 * @property int $office_ministry_id
 * @property int $office_layer_id
 * @property int|null $custom_layer_id
 * @property int $office_origin_id
 * @property string $office_name_eng
 * @property string $office_name_bng
 * @property int $geo_division_id
 * @property int $geo_district_id
 * @property int $geo_upazila_id
 * @property int $geo_union_id
 * @property string|null $office_address
 * @property string|null $digital_nothi_code
 * @property string|null $reference_code
 * @property string|null $office_code
 * @property string|null $office_phone
 * @property string|null $office_mobile
 * @property string|null $office_fax
 * @property string|null $office_email
 * @property string|null $office_web
 * @property int $parent_office_id
 * @property int $active_status
 * @property int|null $unit_organogram_edit_option
 * @property \Cake\I18n\FrozenTime|null $unit_organogram_edit_option_status_updated_at
 * @property int $created_by
 * @property int $modified_by
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\OfficeMinistry $office_ministry
 * @property \App\Model\Entity\OfficeLayer $office_layer
 * @property \App\Model\Entity\CustomLayer $custom_layer
 * @property \App\Model\Entity\OfficeOrigin $office_origin
 * @property \App\Model\Entity\GeoDivision $geo_division
 * @property \App\Model\Entity\GeoDistrict $geo_district
 * @property \App\Model\Entity\GeoUpazila $geo_upazila
 * @property \App\Model\Entity\GeoUnion $geo_union
 * @property \App\Model\Entity\ParentOffice $parent_office
 * @property \App\Model\Entity\DakAction[] $dak_actions
 * @property \App\Model\Entity\DesignationUpdateHistory[] $designation_update_history
 * @property \App\Model\Entity\EmployeeOfficeDomain[] $employee_office_domains
 * @property \App\Model\Entity\EmployeeOffice[] $employee_offices
 * @property \App\Model\Entity\ErrorLog[] $error_log
 * @property \App\Model\Entity\NothiArchiveRequest[] $nothi_archive_requests
 * @property \App\Model\Entity\NothiDecision[] $nothi_decisions
 * @property \App\Model\Entity\NotificationSetting[] $notification_settings
 * @property \App\Model\Entity\OfficeDomain[] $office_domains
 * @property \App\Model\Entity\OfficeDomainsWithoutSsl[] $office_domains_without_ssl
 * @property \App\Model\Entity\OfficeFrontDesk[] $office_front_desk
 * @property \App\Model\Entity\OfficeHealthStatus[] $office_health_status
 * @property \App\Model\Entity\OfficeSegregationLog[] $office_segregation_logs
 * @property \App\Model\Entity\OfficeUnitOrganogram[] $office_unit_organograms
 * @property \App\Model\Entity\OfficeUnit[] $office_units
 * @property \App\Model\Entity\PotrojariHeaderSetting[] $potrojari_header_settings
 * @property \App\Model\Entity\PotrojariRequest[] $potrojari_request
 * @property \App\Model\Entity\UnitUpdateHistory[] $unit_update_history
 * @property \App\Model\Entity\UserLoginHistory[] $user_login_history
 * @property \App\Model\Entity\ViewOfficeDashboard[] $view_office_dashboard
 */
class Office extends Entity
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
        'custom_layer_id' => true,
        'office_origin_id' => true,
        'office_name_eng' => true,
        'office_name_bng' => true,
        'geo_division_id' => true,
        'geo_district_id' => true,
        'geo_upazila_id' => true,
        'geo_union_id' => true,
        'office_address' => true,
        'digital_nothi_code' => true,
        'reference_code' => true,
        'office_code' => true,
        'office_phone' => true,
        'office_mobile' => true,
        'office_fax' => true,
        'office_email' => true,
        'office_web' => true,
        'parent_office_id' => true,
        'active_status' => true,
        'unit_organogram_edit_option' => true,
        'unit_organogram_edit_option_status_updated_at' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'office_ministry' => true,
        'office_layer' => true,
        'custom_layer' => true,
        'office_origin' => true,
        'geo_division' => true,
        'geo_district' => true,
        'geo_upazila' => true,
        'geo_union' => true,
        'parent_office' => true,
        'dak_actions' => true,
        'designation_update_history' => true,
        'employee_office_domains' => true,
        'employee_offices' => true,
        'error_log' => true,
        'nothi_archive_requests' => true,
        'nothi_decisions' => true,
        'notification_settings' => true,
        'office_domains' => true,
        'office_domains_without_ssl' => true,
        'office_front_desk' => true,
        'office_health_status' => true,
        'office_segregation_logs' => true,
        'office_unit_organograms' => true,
        'office_units' => true,
        'potrojari_header_settings' => true,
        'potrojari_request' => true,
        'unit_update_history' => true,
        'user_login_history' => true,
        'view_office_dashboard' => true
    ];
}
