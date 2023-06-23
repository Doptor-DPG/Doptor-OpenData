<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OfficeOriginUnitOrganogram Entity
 *
 * @property int $id
 * @property int|null $office_origin_unit_id
 * @property int|null $superior_unit_id
 * @property int|null $superior_designation_id
 * @property string|null $designation_eng
 * @property string|null $designation_bng
 * @property string|null $short_name_eng
 * @property string|null $short_name_bng
 * @property int $designation_level
 * @property int $designation_sequence
 * @property bool $status
 * @property int|null $created_by
 * @property int|null $modified_by
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\OfficeOriginUnit $office_origin_unit
 * @property \App\Model\Entity\SuperiorUnit $superior_unit
 * @property \App\Model\Entity\SuperiorDesignation $superior_designation
 */
class OfficeOriginUnitOrganogram extends Entity
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
        'id' => true,
        'office_origin_unit_id' => true,
        'superior_unit_id' => true,
        'superior_designation_id' => true,
        'designation_eng' => true,
        'designation_bng' => true,
        'short_name_eng' => true,
        'short_name_bng' => true,
        'designation_level' => true,
        'designation_sequence' => true,
        'status' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'office_origin_unit' => true,
        'superior_unit' => true,
        'superior_designation' => true,
    ];
}
