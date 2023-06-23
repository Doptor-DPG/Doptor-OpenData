<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmployeeCadre Entity
 *
 * @property int $id
 * @property string $cadre_name_eng
 * @property string $cadre_name_bng
 * @property int $created_by
 * @property int $modified_by
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\EmployeeGrade[] $employee_grades
 * @property \App\Model\Entity\EmployeeRecord[] $employee_records
 */
class EmployeeCadre extends Entity
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
        'cadre_name_eng' => true,
        'cadre_name_bng' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'employee_grades' => true,
        'employee_records' => true,
    ];
}
