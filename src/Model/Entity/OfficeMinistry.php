<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OfficeMinistry Entity
 *
 * @property int $id
 * @property int $office_type
 * @property string|null $name_eng
 * @property string|null $name_bng
 * @property string $name_eng_short
 * @property string $reference_code
 * @property int $active_status
 * @property int $created_by
 * @property int $modified_by
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\EmployeeRank[] $employee_ranks
 * @property \App\Model\Entity\OfficeLayer[] $office_layers
 * @property \App\Model\Entity\OfficeLayersBk[] $office_layers_bk
 * @property \App\Model\Entity\OfficeOriginUnit[] $office_origin_units
 * @property \App\Model\Entity\OfficeOrigin[] $office_origins
 * @property \App\Model\Entity\OfficeUnit[] $office_units
 * @property \App\Model\Entity\Office[] $offices
 * @property \App\Model\Entity\OfficesBk[] $offices_bk
 */
class OfficeMinistry extends Entity
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
        'office_type' => true,
        'name_eng' => true,
        'name_bng' => true,
        'name_eng_short' => true,
        'reference_code' => true,
        'active_status' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'employee_ranks' => true,
        'office_layers' => true,
        'office_layers_bk' => true,
        'office_origin_units' => true,
        'office_origins' => true,
        'office_units' => true,
        'offices' => true,
        'offices_bk' => true
    ];
}
