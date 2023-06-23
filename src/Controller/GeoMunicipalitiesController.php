<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * GeoMunicipalities Controller
 *
 * @property \App\Model\Table\GeoMunicipalitiesTable $GeoMunicipalities
 *
 * @method \App\Model\Entity\GeoMunicipality[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeoMunicipalitiesController extends OisfController
{
    public function getMunicipality()
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

            $municipalities = $this->GeoMunicipalities->getMunicipalities($data);

            if (!empty($municipalities)) {
                return $this->jsonResponse($this->responseFormat('success', $municipalities['data'], ['meta' => [
                    'total' => $municipalities['total'],
                    'count' => $municipalities['count'],
                    'from' => $municipalities['from'],
                    'to' => $municipalities['to'],
                    'current_page' => $municipalities['page'],
                    'per_page' => $municipalities['per_page'],
                    'last_page' => $municipalities['last_page'],
                ]]));
            } else {
                return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
            }
        } catch (\Exception $exception) {
            return $this->jsonResponse($this->responseFormat('error', $exception->getMessage()));
        }
    }
}
