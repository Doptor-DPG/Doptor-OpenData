<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * GeoCityCorporations Controller
 *
 * @property \App\Model\Table\GeoCityCorporationsTable $GeoCityCorporations
 *
 * @method \App\Model\Entity\GeoCityCorporation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeoCityCorporationsController extends OisfController
{
    public function getCityCorporation()
    {
        try {
            $data = [
                'id' => (int)$this->request->getData('id') ?? NULL,
                'name_eng' => $this->request->getData('name_eng') ?? NULL,
                'name_bng' => $this->request->getData('name_bng') ?? NULL,
                'bbs_code' => $this->request->getData('bbs_code') ?? NULL,
                'status' => (int)$this->request->getData('status') ?? NULL,
                'division_id' => (int)$this->request->getData('division_id') ?? NULL,
                'district_id' => (int)$this->request->getData('district_id') ?? NULL,
                'per_page' => (int)$this->request->getData('per_page') ?? NULL,
                'page' => (int)$this->request->getData('page') ?? NULL,
            ];

            if (empty($data['per_page'])) {
                $data['per_page'] = 500;
            }

            if (empty($data['page'])) {
                $data['page'] = 1;
            }

            $city_corporations = $this->GeoCityCorporations->getCityCorporations($data);

            if (!empty($city_corporations)) {
                return $this->jsonResponse($this->responseFormat('success', $city_corporations['data'], ['meta' => [
                    'total' => $city_corporations['total'],
                    'count' => $city_corporations['count'],
                    'from' => $city_corporations['from'],
                    'to' => $city_corporations['to'],
                    'current_page' => $city_corporations['page'],
                    'per_page' => $city_corporations['per_page'],
                    'last_page' => $city_corporations['last_page'],
                ]]));
            } else {
                return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
            }
        } catch (\Exception $exception) {
            return $this->jsonResponse($this->responseFormat('error', $exception->getMessage()));
        }
    }
}
