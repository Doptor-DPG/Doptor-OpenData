<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $user_alias
 * @property string|null $hash_change_password
 * @property int $user_role_id
 * @property int $is_admin
 * @property bool|null $active
 * @property string $user_status
 * @property int|null $is_email_verified
 * @property string|null $email_verify_code
 * @property \Cake\I18n\FrozenDate|null $verification_date
 * @property string|null $ssn
 * @property bool|null $force_password_change
 * @property \Cake\I18n\FrozenTime|null $last_password_change
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $created_by
 * @property string $modified_by
 * @property string|null $photo
 * @property int|null $employee_record_id
 *
 * @property \App\Model\Entity\UserRole $user_role
 * @property \App\Model\Entity\EmployeeRecord $employee_record
 * @property \App\Model\Entity\UserActivationEmail[] $user_activation_emails
 * @property \App\Model\Entity\UserActivationSm[] $user_activation_sms
 * @property \App\Model\Entity\UserDeviceRegistration[] $user_device_registration
 * @property \App\Model\Entity\UserLoginHistory[] $user_login_history
 * @property \App\Model\Entity\UserLog[] $user_logs
 */
class User extends Entity
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
        'username' => true,
        'password' => true,
        'user_alias' => true,
        'hash_change_password' => true,
        'user_role_id' => true,
        'is_admin' => true,
        'active' => true,
        'user_status' => true,
        'is_email_verified' => true,
        'email_verify_code' => true,
        'verification_date' => true,
        'ssn' => true,
        'force_password_change' => true,
        'last_password_change' => true,
        'created' => true,
        'modified' => true,
        'created_by' => true,
        'modified_by' => true,
        'photo' => true,
        'employee_record_id' => true,
        'user_role' => true,
        'employee_record' => true,
        'user_activation_emails' => true,
        'user_activation_sms' => true,
        'user_device_registration' => true,
        'user_login_history' => true,
        'user_logs' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
