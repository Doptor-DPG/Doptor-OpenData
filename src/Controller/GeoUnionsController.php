<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * GeoUnions Controller
 *
 * @property \App\Model\Table\GeoUnionsTable $GeoUnions
 *
 * @method \App\Model\Entity\GeoUnion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeoUnionsController extends OisfController
{
    public function getUnion()
    {
        $division = (int)$this->request->getData('division_id');
        $district = (int)$this->request->getData('district_id');
        $upazila = (int)$this->request->getData('upazila_id');
        $unions = $this->GeoUnions->getUnions($division, $district, $upazila, true, true);
        if (!empty($unions)) {
            return $this->jsonResponse($this->responseFormat('success', $unions));
        } else {
            return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
        }
    }

    public function getV1Union()
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
                'per_page' => (int)$this->request->getData('per_page') ?? NULL,
                'page' => (int)$this->request->getData('page') ?? NULL,
            ];

            if (empty($data['per_page'])) {
                $data['per_page'] = 500;
            }

            if (empty($data['page'])) {
                $data['page'] = 1;
            }

            $unions = $this->GeoUnions->getV1Unions($data);
            if (!empty($unions)) {
                return $this->jsonResponse($this->responseFormat('success', $unions['data'], ['meta' => [
                    'total' => $unions['total'],
                    'count' => $unions['count'],
                    'from' => $unions['from'],
                    'to' => $unions['to'],
                    'current_page' => $unions['page'],
                    'per_page' => $unions['per_page'],
                    'last_page' => $unions['last_page'],
                ]]));
            } else {
                return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
            }
        } catch (\Exception $exception) {
            return $this->jsonResponse($this->responseFormat('error', $exception->getMessage()));
        }
    }
}
