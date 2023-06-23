<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GeoPostOffice Entity
 *
 * @property int $id
 * @property int $geo_division_id
 * @property int $geo_district_id
 * @property int $geo_upazila_id
 * @property int $geo_thana_id
 * @property string|null $division_bbs_code
 * @property string|null $district_bbs_code
 * @property string|null $upazila_bbs_code
 * @property string|null $thana_bbs_code
 * @property string $postoffice_name_eng
 * @property string $postoffice_name_bng
 * @property string|null $bbs_code
 * @property bool $status
 * @property int $created_by
 * @property int $modified_by
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\GeoDivision $geo_division
 * @property \App\Model\Entity\GeoDistrict $geo_district
 * @property \App\Model\Entity\GeoUpazila $geo_upazila
 * @property \App\Model\Entity\GeoThana $geo_thana
 */
class GeoPostOffice extends Entity
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
        'geo_division_id' => true,
        'geo_district_id' => true,
        'geo_upazila_id' => true,
        'geo_thana_id' => true,
        'division_bbs_code' => true,
        'district_bbs_code' => true,
        'upazila_bbs_code' => true,
        'thana_bbs_code' => true,
        'postoffice_name_eng' => true,
        'postoffice_name_bng' => true,
        'bbs_code' => true,
        'status' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'geo_division' => true,
        'geo_district' => true,
        'geo_upazila' => true,
        'geo_thana' => true,
    ];
}
