<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * XSetting Entity
 *
 * @property int $id
 * @property string $param
 * @property string $value
 * @property int $parent_id
 * @property \Cake\I18n\FrozenTime $last_changed_date
 * @property int $created_by
 * @property int|null $modified_by
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\ParentXSetting $parent_x_setting
 * @property \App\Model\Entity\ChildXSetting[] $child_x_settings
 */
class XSetting extends Entity
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
        'param' => true,
        'value' => true,
        'parent_id' => true,
        'last_changed_date' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'parent_x_setting' => true,
        'child_x_settings' => true,
    ];
}
