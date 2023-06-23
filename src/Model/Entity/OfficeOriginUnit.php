<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OfficeOriginUnit Entity
 *
 * @property int $id
 * @property int $office_ministry_id
 * @property int $office_layer_id
 * @property int $office_origin_id
 * @property string $unit_name_bng
 * @property string $unit_name_eng
 * @property string $office_unit_category
 * @property int $parent_unit_id
 * @property int $unit_level
 * @property int $active_status
 * @property int $created_by
 * @property int $modified_by
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\OfficeMinistry $office_ministry
 * @property \App\Model\Entity\OfficeLayer $office_layer
 * @property \App\Model\Entity\OfficeOrigin $office_origin
 * @property \App\Model\Entity\ParentUnit $parent_unit
 * @property \App\Model\Entity\OfficeOriginUnitOrganogram[] $office_origin_unit_organograms
 * @property \App\Model\Entity\OfficeUnit[] $office_units
 * @property \App\Model\Entity\UnitUpdateHistory[] $unit_update_history
 */
class OfficeOriginUnit extends Entity
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
        'office_ministry_id' => true,
        'office_layer_id' => true,
        'office_origin_id' => true,
        'unit_name_bng' => true,
        'unit_name_eng' => true,
        'office_unit_category' => true,
        'parent_unit_id' => true,
        'unit_level' => true,
        'active_status' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'office_ministry' => true,
        'office_layer' => true,
        'office_origin' => true,
        'parent_unit' => true,
        'office_origin_unit_organograms' => true,
        'office_units' => true,
        'unit_update_history' => true,
    ];
}
