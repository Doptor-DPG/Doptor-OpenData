<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GeoDistrict Entity
 *
 * @property int $id
 * @property int $geo_division_id
 * @property string|null $division_bbs_code
 * @property string $district_name_eng
 * @property string $district_name_bng
 * @property string|null $bbs_code
 * @property bool $status
 * @property int $created_by
 * @property int $modified_by
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\GeoDivision $geo_division
 * @property \App\Model\Entity\GeoCityCorporationWard[] $geo_city_corporation_wards
 * @property \App\Model\Entity\GeoCityCorporation[] $geo_city_corporations
 * @property \App\Model\Entity\GeoMunicipality[] $geo_municipalities
 * @property \App\Model\Entity\GeoMunicipalityWard[] $geo_municipality_wards
 * @property \App\Model\Entity\GeoPostOffice[] $geo_post_offices
 * @property \App\Model\Entity\GeoThana[] $geo_thanas
 * @property \App\Model\Entity\GeoUnion[] $geo_unions
 * @property \App\Model\Entity\GeoUpazila[] $geo_upazilas
 * @property \App\Model\Entity\Office[] $offices
 * @property \App\Model\Entity\OfficesBk[] $offices_bk
 */
class GeoDistrict extends Entity
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
        'geo_division_id' => true,
        'division_bbs_code' => true,
        'district_name_eng' => true,
        'district_name_bng' => true,
        'bbs_code' => true,
        'status' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'geo_division' => true,
        'geo_city_corporation_wards' => true,
        'geo_city_corporations' => true,
        'geo_municipalities' => true,
        'geo_municipality_wards' => true,
        'geo_post_offices' => true,
        'geo_thanas' => true,
        'geo_unions' => true,
        'geo_upazilas' => true,
        'offices' => true,
        'offices_bk' => true
    ];
}
