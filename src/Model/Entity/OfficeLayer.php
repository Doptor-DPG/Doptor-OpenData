<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OfficeLayer Entity
 *
 * @property int $id
 * @property int $office_ministry_id
 * @property int|null $parent_layer_id
 * @property string|null $layer_name_eng
 * @property string|null $layer_name_bng
 * @property int|null $custom_layer_id
 * @property int $layer_level
 * @property int $layer_sequence
 * @property int $active_status
 * @property int $created_by
 * @property int $modified_by
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\OfficeMinistry $office_ministry
 * @property \App\Model\Entity\ParentLayer $parent_layer
 * @property \App\Model\Entity\CustomLayer $custom_layer
 * @property \App\Model\Entity\OfficeOriginUnit[] $office_origin_units
 * @property \App\Model\Entity\OfficeOrigin[] $office_origins
 * @property \App\Model\Entity\OfficeUnit[] $office_units
 * @property \App\Model\Entity\Office[] $offices
 * @property \App\Model\Entity\OfficesBk[] $offices_bk
 */
class OfficeLayer extends Entity
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
        'parent_layer_id' => true,
        'layer_name_eng' => true,
        'layer_name_bng' => true,
        'custom_layer_id' => true,
        'layer_level' => true,
        'layer_sequence' => true,
        'active_status' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'office_ministry' => true,
        'parent_layer' => true,
        'custom_layer' => true,
        'office_origin_units' => true,
        'office_origins' => true,
        'office_units' => true,
        'offices' => true,
        'offices_bk' => true
    ];
}
