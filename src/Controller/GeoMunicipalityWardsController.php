<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * GeoMunicipalityWards Controller
 *
 * @property \App\Model\Table\GeoMunicipalityWardsTable $GeoMunicipalityWards
 *
 * @method \App\Model\Entity\GeoMunicipalityWard[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeoMunicipalityWardsController extends OisfController
{
    public function getMunicipalityWard()
    {
        try {

            $data = [
                'id' => (int)$this->request->getData('id') ?? NULL,
                'name_eng' => $this->request->getData('name_eng') ?? NULL,
                'name_bng' => $this->request->getData('name_bng') ?? NULL,
                'bbs_code' => $this->request->getData('bbs_code') ?? NULL,
                'division_id' => (int)$this->request->getData('division_id') ?? NULL,
                'district_id' => (int)$this->request->getData('district_id') ?? NULL,
                'upazila_id' => (int)$this->request->getData('upazila_id') ?? NULL,
                'municipality_id' => (int)$this->request->getData('municipality_id') ?? NULL,
//                'districtbbs' => $this->request->getData('districtbbs') ?? NULL,
//                'divisionbbs' => $this->request->getData('divisionbbs') ?? NULL,
//                'upazilabbs' => $this->request->getData('upazilabbs') ?? NULL,
//                'municipalitybbs' => $this->request->getData('municipalitybbs') ?? NULL,
                'per_page' => (int)$this->request->getData('per_page') ?? NULL,
                'page' => (int)$this->request->getData('page') ?? NULL,
            ];

            if (empty($data['per_page'])) {
                $data['per_page'] = 500;
            }

            if (empty($data['page'])) {
                $data['page'] = 1;
            }

            $municipality_wards = $this->GeoMunicipalityWards->getMunicipalityWards($data);

            if (!empty($municipality_wards)) {
                return $this->jsonResponse($this->responseFormat('success', $municipality_wards['data'], ['meta' => [
                    'total' => $municipality_wards['total'],
                    'count' => $municipality_wards['count'],
                    'from' => $municipality_wards['from'],
                    'to' => $municipality_wards['to'],
                    'current_page' => $municipality_wards['page'],
                    'per_page' => $municipality_wards['per_page'],
                    'last_page' => $municipality_wards['last_page'],
                ]]));
            } else {
                return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
            }
        } catch (\Exception $exception) {
            return $this->jsonResponse($this->responseFormat('error', $exception->getMessage()));
        }
    }
}
