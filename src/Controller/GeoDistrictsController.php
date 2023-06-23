<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * GeoDistricts Controller
 *
 * @property \App\Model\Table\GeoDistrictsTable $GeoDistricts
 *
 * @method \App\Model\Entity\GeoDistrict[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeoDistrictsController extends OisfController
{
    public function getDistrict()
    {
        $division = (int)$this->request->getData('division_id');
        $district = (int)$this->request->getData('district_id');
        $districts = $this->GeoDistricts->getDistricts($division, $district);
        if (!empty($districts)) {
            return $this->jsonResponse($this->responseFormat('success', $districts));
        } else {
            return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
        }
    }

    public function getV1District()
    {
        try {

            $data = [
                'id' => (int)$this->request->getData('id') ?? NULL,
                'name_eng' => $this->request->getData('name_eng') ?? NULL,
                'name_bng' => $this->request->getData('name_bng') ?? NULL,
                'bbs_code' => $this->request->getData('bbs_code') ?? NULL,
                'status' => (int)$this->request->getData('status') ?? NULL,
                'division_id' => (int)$this->request->getData('division_id') ?? NULL,
                'per_page' => (int)$this->request->getData('per_page') ?? NULL,
                'page' => (int)$this->request->getData('page') ?? NULL,
            ];

            if (empty($data['per_page'])) {
                $data['per_page'] = 200;
            }

            if (empty($data['page'])) {
                $data['page'] = 1;
            }

            $districts = $this->GeoDistricts->getV1Districts($data);
            if (!empty($districts)) {
                return $this->jsonResponse($this->responseFormat('success', $districts['data'], ['meta' => [
                    'total' => $districts['total'],
                    'count' => $districts['count'],
                    'from' => $districts['from'],
                    'to' => $districts['to'],
                    'current_page' => $districts['page'],
                    'per_page' => $districts['per_page'],
                    'last_page' => $districts['last_page'],
                ]]));
            } else {
                return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
            }
        } catch (\Exception $exception) {
            return $this->jsonResponse($this->responseFormat('error', $exception->getMessage()));
        }
    }
}
