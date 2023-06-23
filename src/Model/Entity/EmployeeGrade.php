<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmployeeGrade Entity
 *
 * @property int $id
 * @property int $employee_cadre_id
 * @property int $employee_rank_id
 * @property string $grade_name_eng
 * @property string $grade_name_bng
 * @property int $created_by
 * @property int $modified_by
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\EmployeeCadre $employee_cadre
 * @property \App\Model\Entity\EmployeeRank $employee_rank
 */
class EmployeeGrade extends Entity
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
        'employee_cadre_id' => true,
        'employee_rank_id' => true,
        'grade_name_eng' => true,
        'grade_name_bng' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'employee_cadre' => true,
        'employee_rank' => true,
    ];
}
