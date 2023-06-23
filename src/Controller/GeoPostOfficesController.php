<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * GeoPostOffices Controller
 * @property \App\Model\Table\GeoPostOfficesTable $GeoPostOffices
 *
 * @method \App\Model\Entity\GeoPostOffice[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeoPostOfficesController extends OisfController
{
    public function getPostOffice()
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
            $post_offices = $this->GeoPostOffices->getPostOffices($data);

            if (!empty($post_offices)) {
                return $this->jsonResponse($this->responseFormat('success', $post_offices['data'], ['meta' => [
                    'total' => $post_offices['total'],
                    'count' => $post_offices['count'],
                    'from' => $post_offices['from'],
                    'to' => $post_offices['to'],
                    'current_page' => $post_offices['page'],
                    'per_page' => $post_offices['per_page'],
                    'last_page' => $post_offices['last_page'],
                ]]));
            } else {
                return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
            }
        } catch (\Exception $exception) {
            return $this->jsonResponse($this->responseFormat('error', $exception->getMessage()));
        }
    }
}
