<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * GeoCityCorporationWards Controller
 *
 * @property \App\Model\Table\GeoCityCorporationWardsTable $GeoCityCorporationWards
 *
 * @method \App\Model\Entity\GeoCityCorporationWard[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeoCityCorporationWardsController extends OisfController
{
    public function getCityCorporationWard()
    {
        try {

            $data = [
                'id' => (int)$this->request->getData('id') ?? NULL,
                'name_eng' => $this->request->getData('name_eng') ?? NULL,
                'name_bng' => $this->request->getData('name_bng') ?? NULL,
                'bbs_code' => $this->request->getData('bbs_code') ?? NULL,
                'division_id' => (int)$this->request->getData('division_id') ?? NULL,
                'district_id' => (int)$this->request->getData('district_id') ?? NULL,
                'citycorporation_id' => (int)$this->request->getData('citycorporation_id') ?? NULL,
                'per_page' => (int)$this->request->getData('per_page') ?? NULL,
                'page' => (int)$this->request->getData('page') ?? NULL,
            ];

            if (empty($data['per_page'])) {
                $data['per_page'] = 500;
            }

            if (empty($data['page'])) {
                $data['page'] = 1;
            }

            $city_corporation_wards = $this->GeoCityCorporationWards->getCityCorporationWards($data);

            if (!empty($city_corporation_wards)) {
                return $this->jsonResponse($this->responseFormat('success', $city_corporation_wards['data'], ['meta' => [
                    'total' => $city_corporation_wards['total'],
                    'count' => $city_corporation_wards['count'],
                    'from' => $city_corporation_wards['from'],
                    'to' => $city_corporation_wards['to'],
                    'current_page' => $city_corporation_wards['page'],
                    'per_page' => $city_corporation_wards['per_page'],
                    'last_page' => $city_corporation_wards['last_page'],
                ]]));
            } else {
                return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
            }
        } catch (\Exception $exception) {
            return $this->jsonResponse($this->responseFormat('error', $exception->getMessage()));
        }
    }
}
