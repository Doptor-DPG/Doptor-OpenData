<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmployeeRecord Entity
 *
 * @property int $id
 * @property string $name_eng
 * @property string $name_bng
 * @property string|null $father_name_eng
 * @property string|null $father_name_bng
 * @property string|null $mother_name_eng
 * @property string|null $mother_name_bng
 * @property \Cake\I18n\FrozenTime|null $date_of_birth
 * @property string $nid
 * @property bool $nid_valid
 * @property string|null $bcn
 * @property string|null $ppn
 * @property string|null $gender
 * @property string|null $religion
 * @property string|null $blood_group
 * @property string|null $marital_status
 * @property string|null $personal_email
 * @property string $personal_mobile
 * @property string|null $alternative_mobile
 * @property int $is_cadre
 * @property int|null $employee_cadre_id
 * @property int|null $employee_batch_id
 * @property string|null $identity_no
 * @property string|null $appointment_memo_no
 * @property \Cake\I18n\FrozenTime|null $joining_date
 * @property int|null $service_rank_id
 * @property int|null $service_grade_id
 * @property int|null $service_ministry_id
 * @property int|null $service_office_id
 * @property int|null $current_office_ministry_id
 * @property int|null $current_office_layer_id
 * @property int|null $current_office_id
 * @property int|null $current_office_unit_id
 * @property \Cake\I18n\FrozenTime|null $current_office_joining_date
 * @property int|null $current_office_designation_id
 * @property string|null $current_office_address
 * @property string|null $e_sign
 * @property string|null $d_sign
 * @property string|null $image_file_name
 * @property bool $status
 * @property int $default_sign
 * @property bool $hard_signature
 * @property bool $soft_signature
 * @property string|null $cert_id
 * @property string|null $cert_type
 * @property string|null $cert_provider
 * @property string|null $cert_serial
 * @property int $created_by
 * @property int $modified_by
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\EmployeeCadre $employee_cadre
 * @property \App\Model\Entity\EmployeeBatch $employee_batch
 * @property \App\Model\Entity\ServiceRank $service_rank
 * @property \App\Model\Entity\ServiceGrade $service_grade
 * @property \App\Model\Entity\ServiceMinistry $service_ministry
 * @property \App\Model\Entity\ServiceOffice $service_office
 * @property \App\Model\Entity\CurrentOfficeMinistry $current_office_ministry
 * @property \App\Model\Entity\CurrentOfficeLayer $current_office_layer
 * @property \App\Model\Entity\CurrentOffice $current_office
 * @property \App\Model\Entity\CurrentOfficeUnit $current_office_unit
 * @property \App\Model\Entity\CurrentOfficeDesignation $current_office_designation
 * @property \App\Model\Entity\Cert $cert
 * @property \App\Model\Entity\ApiToken[] $api_tokens
 * @property \App\Model\Entity\DamiSmsRequest[] $dami_sms_request
 * @property \App\Model\Entity\EmployeeOfficeDomain[] $employee_office_domains
 * @property \App\Model\Entity\EmployeeOffice[] $employee_offices
 * @property \App\Model\Entity\EmployeeSchedule[] $employee_schedules
 * @property \App\Model\Entity\PotrojariHeaderSetting[] $potrojari_header_settings
 * @property \App\Model\Entity\SummaryNothiUser[] $summary_nothi_users
 * @property \App\Model\Entity\UserLoginHistory[] $user_login_history
 * @property \App\Model\Entity\User[] $users
 */
class EmployeeRecord extends Entity
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
        'name_eng' => true,
        'name_bng' => true,
        'father_name_eng' => true,
        'father_name_bng' => true,
        'mother_name_eng' => true,
        'mother_name_bng' => true,
        'date_of_birth' => true,
        'nid' => true,
        'nid_valid' => true,
        'bcn' => true,
        'ppn' => true,
        'gender' => true,
        'religion' => true,
        'blood_group' => true,
        'marital_status' => true,
        'personal_email' => true,
        'personal_mobile' => true,
        'alternative_mobile' => true,
        'is_cadre' => true,
        'employee_cadre_id' => true,
        'employee_batch_id' => true,
        'identity_no' => true,
        'appointment_memo_no' => true,
        'joining_date' => true,
        'service_rank_id' => true,
        'service_grade_id' => true,
        'service_ministry_id' => true,
        'service_office_id' => true,
        'current_office_ministry_id' => true,
        'current_office_layer_id' => true,
        'current_office_id' => true,
        'current_office_unit_id' => true,
        'current_office_joining_date' => true,
        'current_office_designation_id' => true,
        'current_office_address' => true,
        'e_sign' => true,
        'd_sign' => true,
        'image_file_name' => true,
        'status' => true,
        'default_sign' => true,
        'hard_signature' => true,
        'soft_signature' => true,
        'cert_id' => true,
        'cert_type' => true,
        'cert_provider' => true,
        'cert_serial' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'employee_cadre' => true,
        'employee_batch' => true,
        'service_rank' => true,
        'service_grade' => true,
        'service_ministry' => true,
        'service_office' => true,
        'current_office_ministry' => true,
        'current_office_layer' => true,
        'current_office' => true,
        'current_office_unit' => true,
        'current_office_designation' => true,
        'cert' => true,
        'api_tokens' => true,
        'dami_sms_request' => true,
        'employee_office_domains' => true,
        'employee_offices' => true,
        'employee_schedules' => true,
        'potrojari_header_settings' => true,
        'summary_nothi_users' => true,
        'user_login_history' => true,
        'users' => true
    ];
}
