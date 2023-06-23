<?php

namespace App\Model\Table;

use App\Model\Entity\EmployeeOffice;
use App\Services\FireSyncServices;
use App\Services\PasswordServices;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\UserRolesTable&\Cake\ORM\Association\BelongsTo $UserRoles
 * @property \App\Model\Table\EmployeeRecordsTable&\Cake\ORM\Association\BelongsTo $EmployeeRecords
 * @property \App\Model\Table\UserActivationEmailsTable&\Cake\ORM\Association\HasMany $UserActivationEmails
 * @property \App\Model\Table\UserActivationSmsTable&\Cake\ORM\Association\HasMany $UserActivationSms
 * @property \App\Model\Table\UserDeviceRegistrationTable&\Cake\ORM\Association\HasMany $UserDeviceRegistration
 * @property \App\Model\Table\UserLoginHistoryTable&\Cake\ORM\Association\HasMany $UserLoginHistory
 * @property \App\Model\Table\UserLogsTable&\Cake\ORM\Association\HasMany $UserLogs
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('UserRoles', [
            'foreignKey' => 'user_role_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('EmployeeRecords', [
            'foreignKey' => 'employee_record_id',
        ]);
        $this->hasMany('UserActivationEmails', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('UserActivationSms', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('UserDeviceRegistration', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('UserLoginHistory', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('UserLogs', [
            'foreignKey' => 'user_id',
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('username')
            ->maxLength('username', 255)
            ->requirePresence('username', 'create')
            ->notEmptyString('username')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->scalar('user_alias')
            ->maxLength('user_alias', 50)
            ->requirePresence('user_alias', 'create')
            ->notEmptyString('user_alias');

        $validator
            ->scalar('hash_change_password')
            ->maxLength('hash_change_password', 255)
            ->allowEmptyString('hash_change_password');

        $validator
            ->notEmptyString('is_admin');

        $validator
            ->boolean('active')
            ->allowEmptyString('active');

        $validator
            ->scalar('user_status')
            ->maxLength('user_status', 255)
            ->requirePresence('user_status', 'create')
            ->notEmptyString('user_status');

        $validator
            ->allowEmptyString('is_email_verified');

        $validator
            ->scalar('email_verify_code')
            ->maxLength('email_verify_code', 255)
            ->allowEmptyString('email_verify_code');

        $validator
            ->date('verification_date')
            ->allowEmptyDate('verification_date');

        $validator
            ->scalar('ssn')
            ->maxLength('ssn', 255)
            ->allowEmptyString('ssn');

        $validator
            ->boolean('force_password_change')
            ->allowEmptyString('force_password_change');

        $validator
            ->dateTime('last_password_change')
            ->allowEmptyDateTime('last_password_change');

        $validator
            ->scalar('created_by')
            ->maxLength('created_by', 100)
            ->allowEmptyString('created_by');

        $validator
            ->scalar('modified_by')
            ->maxLength('modified_by', 100)
            ->requirePresence('modified_by', 'create')
            ->notEmptyString('modified_by');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 255)
            ->allowEmptyString('photo');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->existsIn(['user_role_id'], 'UserRoles'));
        $rules->add($rules->existsIn(['employee_record_id'], 'EmployeeRecords'));

        return $rules;
    }

    public function findAuth(\Cake\ORM\Query $query, array $options)
    {
        return $query->select(['id', 'username', 'password', 'user_alias', 'active', 'employee_record_id', 'last_password_change', 'failed_attempt_limit_exceed_time'])
            ->where(
                [
                    'OR' => [
                        $this->aliasField('username') => $options['username'],
                        $this->aliasField('user_alias') => $options['username'],
                    ],
                ],
                [],
                true
            );
    }

    public function findUser($user)
    {
        $user_data = TableRegistry::getTableLocator()->get('Users')->find()
            ->select(['id', 'username', 'password', 'user_alias', 'active', 'employee_record_id'])
            ->where(['username' => $user])->toArray()[0];
        return $user_data;
    }

    public function getUserInfo($user, $user_details = true)
    {
        $user_info['user'] = $user;

        $notifications = [];

        $settings_table = TableRegistry::getTableLocator()->get('XSettings');

        $password_reminder_settings = $settings_table->find()->where(['param' => 'reminder_for_change_password_in_days'])->first();
        $password_reminder_days = $password_reminder_settings->value;

        $force_password_change_settings = $settings_table->find()->where(['param' => 'forcefully_change_password_in_days'])->first();
        $force_password_change_days = $force_password_change_settings->value;

        $user_last_password_change = $user['last_password_change'];
        $user_last_password_change = new \DateTime($user_last_password_change);
        $now = new \DateTime();
        $interval = $user_last_password_change->diff($now);
        $interval = $interval->format("%a");

        if ($interval > $password_reminder_days && $interval < $force_password_change_days) {
            $notifications['reminder_for_change_password'] = [
                'type' => 'warning',
                'message_en' => 'Your password will expire in ' . ($force_password_change_days - $interval) . ' days. Please change your password.',
                'message_bn' => 'আপনার পাসওয়ার্ড ' . enTobn($force_password_change_days - $interval) . ' দিনের মধ্যে মেয়াদ শেষ হবে। অনুগ্রহ করে আপনার পাসওয়ার্ড পরিবর্তন করুন।'
            ];
        }

        if ($interval > $force_password_change_days) {
            $notifications['forcefully_change_password'] = [
                'type' => 'danger',
                'message_en' => 'You did not change your password since ' . ($interval) . ' days. Please change your password.',
                'message_bn' => 'আপনি পাসওয়ার্ড পরিবর্তন করেন নি ' . enTobn($interval) . ' দিন। অনুগ্রহ করে আপনার পাসওয়ার্ড পরিবর্তন করুন।'
            ];
        }

        $user_info['notifications'] = $notifications;

        $employee_records_table = TableRegistry::getTableLocator()->get('EmployeeRecords');
        $employee_offices_table = TableRegistry::getTableLocator()->get('EmployeeOffices');
        $office_unit_organograms_table = TableRegistry::getTableLocator()->get('OfficeUnitOrganograms');
        $office_table = TableRegistry::getTableLocator()->get('Offices');
        $office_unit_table = TableRegistry::getTableLocator()->get('OfficeUnits');
        $office_info = $employee_offices_table->getEmployeeOfficesInfoByEmployeeRecordId($user['employee_record_id']);

        if ($office_info) {
            foreach ($office_info as $key => $office_info_single) {
                $office_id = $office_info_single->office_id;
                $office_unit_id = $office_info_single->office_unit_id;
                $designation_id = $office_info_single->office_unit_organogram_id;

                $office_data = $office_table->find()
                    ->select(['office_name_eng', 'office_name_bng', 'office_ministry_id', 'office_layer_id', 'custom_layer_id'])
                    ->where(['id' => $office_id])->toArray();

                if ($office_data) {
                    $office_data = $office_data[0];
                } else {
                    $employee_offices_table->updateAll(['status' => 0], ['office_unit_organogram_id' => $designation_id, 'office_id' => $office_id]);
                }

                $office_unit_data = $office_unit_table->find()
                    ->select(['unit_name_eng', 'unit_name_bng'])
                    ->where(['id' => $office_unit_id])->toArray();

                if ($office_unit_data) {
                    $office_unit_data = $office_unit_data[0];
                } else {
                    $employee_offices_table->updateAll(['status' => 0], ['office_unit_organogram_id' => $designation_id, 'office_unit_id' => $office_unit_id]);
                }

                $office_unit_organogram_data = $office_unit_organograms_table->find()
                    ->select(['designation_bng', 'designation_eng'])
                    ->where(['id' => $designation_id])->toArray();

                if ($office_unit_organogram_data) {
                    $office_unit_organogram_data = $office_unit_organogram_data[0];
                } else {
                    $employee_offices_table->updateAll(['status' => 0], ['office_unit_organogram_id' => $designation_id]);
                }
                if (!$office_data || !$office_unit_data || !$office_unit_organogram_data) {
                    unset($office_info[$key]);
                    continue;
                }

                $office_info[$key]['office_name_en'] = $office_data['office_name_eng'];
                $office_info[$key]['office_name_bn'] = $office_data['office_name_bng'];

                $office_info[$key]['unit_name_en'] = $office_unit_data['unit_name_eng'];
                $office_info[$key]['unit_name_bn'] = $office_unit_data['unit_name_bng'];
                $office_info[$key]['office_ministry_id'] = $office_data['office_ministry_id'];
                $office_info[$key]['office_layer_id'] = $office_data['office_layer_id'];
                $office_info[$key]['custom_layer_id'] = $office_data['custom_layer_id'];

                $office_info[$key]['designation'] = $office_unit_organogram_data['designation_bng'];
                $office_info[$key]['designation_eng'] = $office_unit_organogram_data['designation_eng'];
            }
        }

        if ($user_details) {
            $employee_info = $employee_records_table->getEmployeeInfo($user['employee_record_id']);
            $user_info['employee_info'] = $employee_info ? $employee_info[0] : [];
            $user_info['office_info'] = $office_info;
            $user_info['organogram_info'] = [];
            foreach ($user_info['office_info'] as $k => $office_info) {
                $organogram_exist = $office_unit_organograms_table->find()
                    ->select(['id'])
                    ->where(['id' => $office_info['office_unit_organogram_id']])->first();
                if ($organogram_exist) {
                    $user_info['organogram_info'][$office_info['office_unit_organogram_id']] = $office_unit_organograms_table->get($office_info['office_unit_organogram_id'])->toArray();
                } else {
                    $employee_offices_table->updateAll(['status' => 0], ['office_unit_organogram_id' => $office_info['office_unit_organogram_id']]);
                }
            }

            $user_digital_ca_lists = TableRegistry::getTableLocator()->get('UserDigitalCertificates')->find()->where(['user_id' => $user['id'], 'status' => 1])->select('digital_ca_id')->enableHydration(false)->all();
            if (!$user_digital_ca_lists->count() || $user_digital_ca_lists->count() == 0) {
                $user_info['has_digital_certificate'] = false;
            } else {
                $user_info['has_digital_certificate'] = true;
            }
        }
        return $user_info;
    }

    public function getUserImageByEmployeeRecordId($employee_record_ids, $encode = 0)
    {
        $usernames = $this->getUsernameByEmployeeRecordId($employee_record_ids);
        if (empty($usernames)) {
            return false;
        }
        $data = [];
        $i = 0;
        foreach ($usernames as $id => $username) {

            $exist = (FILE_FOLDER_DIR . PROFILE_PATH . $username . '.png');
            if (file_exists($exist)) {
                $file = FILE_FOLDER_DIR . PROFILE_PATH . $username . '.png';
                $path = DOMAIN . PROFILE_PATH . $username . '.png';
            } else {
                $file = DOMAIN . DEFAULT_AVATAR;
                $path = $file;
            }

            if ($encode) {
                $type = pathinfo($file, PATHINFO_EXTENSION);
                $image_data = file_get_contents($file);
                $base64 = 'data:image/' . $type . ';base64,' . base64_encode($image_data);
                $data[$i] = ['employee_record_id' => $id, 'image' => $base64];
            } else {
                $data[$i] = ['employee_record_id' => $id, 'image' => $path];
            }
            $i++;
        }
        return $data;
    }

    public function getUsernameByEmployeeRecordId($employee_record_ids)
    {
        $employee_record_ids = explode(",", $employee_record_ids);
        $employee_record_ids = array_map(function ($id) {
            return (int)$id;
        }, $employee_record_ids);
        return $this->find('list', ['keyField' => 'employee_record_id', 'valueField' => 'username'])->where(['employee_record_id IN' => $employee_record_ids])->toArray();
    }

    public function changeUserImageByEmployeeRecordId($id, $file)
    {
        $image_parts = explode(";base64,", $file);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $fileSize = (int)(strlen(rtrim("data:image/png;base64," . $image_base64, '=')) * 0.75);

        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
        $destination = FILE_FOLDER_DIR . PROFILE_PATH . $id . '.png';
        if (in_array(strtolower($image_type), $valid_extensions)) {
            if ($fileSize < 20000) {
                file_put_contents($destination, $image_base64);

                $user_data = TableRegistry::getTableLocator()->get('Users')->find()
                    ->select(['id', 'employee_record_id'])
                    ->where(['username' => $id])->toArray()[0];
                return [
                    'status' => 'success',
                    'message' => 'Image updated.',
                ];
            } else {
                return [
                    'status' => 'error',
                    'message' => 'Image should be 200KB.',
                ];
            }
        } else {
            return [
                'status' => 'error',
                'message' => 'Only jpeg,jpg,png,gif accepted.',
            ];
        }
    }

    public function changePassword($id, $old, $new)
    {
        $user = $this->findByUsername($id)->first();
        if ($user) {
            if ((new DefaultPasswordHasher())->check($old, $user['password'])) {
                $verify_last_pass = (new PasswordServices())->verifyLastPassword($user['employee_record_id'], $new);
                if ($verify_last_pass['status'] == 'error') {
                    return [
                        'status' => 'error',
                        'message' => $verify_last_pass['message'],
                    ];
                } else {
                    (new PasswordServices())->saveLastPassword($user['employee_record_id'], $user);
                    $query = TableRegistry::getTableLocator()->get('Users')->query();
                    $query->update()
                        ->set([
                            'password' => (new DefaultPasswordHasher())->hash($new),
                            'last_password_change' => date('Y-m-d H:i:s'),
                            'force_password_change' => 0
                        ])->where(['username' => $id]);
                    if ($query->execute()) {
                        return [
                            'status' => 'success',
                            'message' => 'Password changed.',
                        ];
                    } else {
                        return [
                            'status' => 'error',
                            'message' => 'Password changing failed.',
                        ];
                    }
                }

            } else {
                return [
                    'status' => 'error',
                    'message' => 'Old password doesn\'t match.',
                ];
            }
        } else {
            return [
                'status' => 'error',
                'message' => 'No user found.',
            ];
        }
    }


    public function getUserImageByOfficeId($office_id, $encode = 0)
    {
        $employee_office_table = TableRegistry::getTableLocator()->get('EmployeeOffices');
        $employee_offices = $employee_office_table->find('list', ['keyField' => 'employee_record_id', 'valueField' => 'employee_record_id'])->where(['office_id' => $office_id, 'status' => 1])->toArray();
        $employee_record_ids = implode(',', $employee_offices);
        $usernames = $this->getUsernameByEmployeeRecordId($employee_record_ids);
        if (empty($usernames)) {
            return false;
        }
        $data = [];
        $i = 0;
        foreach ($usernames as $id => $username) {
            $employee_record_table = TableRegistry::getTableLocator()->get('EmployeeRecords');
            $employee_record = $employee_record_table->get($id);
            if ($employee_record->image_file_name) {
                $path = trim(FILE_FOLDER_DIR, '/') . '/' . trim($employee_record->image_file_name, '/');

                if ($encode) {
                    $type = pathinfo($path, PATHINFO_EXTENSION);
                    $image_data = file_get_contents($path);
                    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($image_data);
                    $data[$i] = ['employee_record_id' => $id, 'photo' => $base64, 'thumb' => $base64];
                } else {
                    $data[$i] = ['employee_record_id' => $id, 'username' => $username, 'photo' => $path, 'thumb' => $path];
                }
            } else {
                continue;
                //$path = null;
                //$data[$i] = ['employee_record_id' => $id, 'username' => $username, 'image' => $path];
            }
            $i++;
        }
        return $data;
    }

    public function checkUserAlias($user_alias, $username)
    {
        if (!$username || strlen($username) != 12) {
            return ['status' => 'error', 'message' => 'সঠিক ইউজারনেম আবশ্যক।'];
        }

        if (is_numeric(substr($user_alias, 0, 1)) == 1) {
            return ['status' => 'error', 'message' => 'ব্যবহারকারীর উপনাম নম্বর দিয়ে শুরু করা যাবে না।'];
        }

        if (!preg_match('/^[a-z]+[0-9_@]*$/', $user_alias)) {
            return ['status' => 'error', 'message' => 'ব্যবহারকারীর উপনামে শুধুমাত্র ইংরেজি ছোট হাতের অক্ষর দিয়ে শুরু হয়ে সংখ্যা, _ অথবা @ ব্যবহার করা যাবে এবং সব অক্ষর। উদাহরণস্বরূপ: xyz, x_yz, xy_1@'];
        }

        if ($user_alias) {
            if ($username == $user_alias) {
                return ['status' => 'success', 'message' => 'উপনামটি ব্যবহার করা যাবে।'];
            }
            $current_user = $this->find()->where(['username' => $username])->first();

            if ($current_user && $current_user->user_alias == $user_alias) {
                return ['status' => 'success', 'message' => 'উপনামটি ব্যবহার করা যাবে।'];
            }

            $users = $this->find()->where([
                'OR' => ['user_alias' => $user_alias, 'username' => $user_alias],
            ])->toArray();

            if (count($users) > 0) {
                return ['status' => 'error', 'message' => 'ব্যবহারকারী উপনাম পূর্বে ব্যবহার করা হয়েছে। অন্য উপনাম ব্যবহার করুন।'];
            } else {
                return ['status' => 'success', 'message' => 'উপনামটি ব্যবহার করা যাবে।'];
            }
        } else {
            return ['status' => 'success', 'message' => 'উপনামটি ব্যবহার করা যাবে।'];
        }
    }
}
