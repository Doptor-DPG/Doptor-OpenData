<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmployeeBatch Entity
 *
 * @property int $id
 * @property string $batch_no
 * @property string|null $batch_year
 * @property int|null $created_by
 * @property int|null $modified_by
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\EmployeeRecord[] $employee_records
 */
class EmployeeBatch extends Entity
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
        'batch_no' => true,
        'batch_year' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'employee_records' => true,
    ];
}
