<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmployeeBatch Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 */
class Notice extends Entity
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
        'title' => true,
        'details' => true,
        'starts_at' => true,
        'expires_at' => true,
        'created' => true,
        'modified' => true,
    ];
}
