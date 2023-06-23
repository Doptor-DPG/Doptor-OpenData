<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * GeoDivisions Controller
 *
 * @property \App\Model\Table\GeoDivisionsTable $GeoDivisions
 *
 * @method \App\Model\Entity\GeoDivision[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeoDivisionsController extends OisfController
{
    public function getDivision()
    {
        $division = (int)$this->request->getData('division_id');
        $divisions = $this->GeoDivisions->getDivisions($division);
        if (!empty($divisions)) {
            return $this->jsonResponse($this->responseFormat('success', $divisions));
        } else {
            return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
        }
    }

    public function getV1Division()
    {
        try {
            $data = [
                'id' => (int)$this->request->getData('id') ?? NULL,
                'name_eng' => $this->request->getData('name_eng') ?? NULL,
                'name_bng' => $this->request->getData('name_bng') ?? NULL,
                'bbs_code' => $this->request->getData('bbs_code') ?? NULL,
                'status' => (int)$this->request->getData('status') ?? NULL,
                'per_page' => (int)$this->request->getData('per_page') ?? 25,
                'page' => (int)$this->request->getData('page') ?? 1,
            ];

            if (empty($data['per_page'])) {
                $data['per_page'] = 200;
            }

            if (empty($data['page'])) {
                $data['page'] = 1;
            }

            $divisions = $this->GeoDivisions->getV1Divisions($data);
            if (!empty($divisions)) {
                return $this->jsonResponse($this->responseFormat('success', $divisions['data'], ['meta' => [
                    'total' => $divisions['total'],
                    'count' => $divisions['count'],
                    'from' => $divisions['from'],
                    'to' => $divisions['to'],
                    'current_page' => $divisions['page'],
                    'per_page' => $divisions['per_page'],
                    'last_page' => $divisions['last_page'],
                ]]));
            } else {
                return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
            }
        } catch (\Exception $exception) {
            return $this->jsonResponse($this->responseFormat('error', $exception->getMessage()));
        }
    }
}
