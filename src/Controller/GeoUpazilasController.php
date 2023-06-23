<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * GeoUpazilas Controller
 *
 * @property \App\Model\Table\GeoUpazilasTable $GeoUpazilas
 *
 * @method \App\Model\Entity\GeoUpazila[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeoUpazilasController extends OisfController
{
    public function getUpazilla()
    {
        $division = (int)$this->request->getData('division_id');
        $district = (int)$this->request->getData('district_id');
        $upazila = (int)$this->request->getData('upazila_id');
        $upazilas = $this->GeoUpazilas->getUpazilas($division, $district, $upazila, true, true);
        if (!empty($upazilas)) {
            return $this->jsonResponse($this->responseFormat('success', $upazilas));
        } else {
            return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
        }
    }

    public function getV1Upazilla()
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
            $upazilas = $this->GeoUpazilas->getV1Upazilas($data);
            if (!empty($upazilas)) {
                return $this->jsonResponse($this->responseFormat('success', $upazilas['data'], ['meta' => [
                    'total' => $upazilas['total'],
                    'count' => $upazilas['count'],
                    'from' => $upazilas['from'],
                    'to' => $upazilas['to'],
                    'current_page' => $upazilas['page'],
                    'per_page' => $upazilas['per_page'],
                    'last_page' => $upazilas['last_page'],
                ]]));
            } else {
                return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
            }
        } catch (\Exception $exception) {
            return $this->jsonResponse($this->responseFormat('error', $exception->getMessage()));
        }
    }
}
