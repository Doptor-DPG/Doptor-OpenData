<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * GeoThanas Controller
 *
 * @property \App\Model\Table\GeoThanasTable $GeoThanas
 *
 * @method \App\Model\Entity\GeoThana[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeoThanasController extends OisfController
{
    public function getThana()
    {
        try {

            $data = [
                'id' => (int)$this->request->getData('id') ?? NULL,
                'name_eng' => $this->request->getData('name_eng') ?? NULL,
                'name_bng' => $this->request->getData('name_bng') ?? NULL,
                'bbs_code' => $this->request->getData('bbs_code') ?? NULL,
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

            $thanas = $this->GeoThanas->getThanas($data);

            if (!empty($thanas)) {
                return $this->jsonResponse($this->responseFormat('success', $thanas['data'], ['meta' => [
                    'total' => $thanas['total'],
                    'count' => $thanas['count'],
                    'from' => $thanas['from'],
                    'to' => $thanas['to'],
                    'current_page' => $thanas['page'],
                    'per_page' => $thanas['per_page'],
                    'last_page' => $thanas['last_page'],
                ]]));
            } else {
                return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
            }
        } catch (\Exception $exception) {
            return $this->jsonResponse($this->responseFormat('error', $exception->getMessage()));
        }
    }
}
