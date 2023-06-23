<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * OfficeOrigins Controller
 *
 * @property \App\Model\Table\OfficeOriginsTable $OfficeOrigins
 *
 * @method \App\Model\Entity\OfficeOrigin[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OfficeOriginsController extends OisfController
{
    public function getOfficeOriginV1()
    {
        try {

            $data = [
                'id' => (int)$this->request->getQuery('id') ?? NULL,
                'name' => $this->request->getQuery('name') ?? NULL,
                'nameBn' => $this->request->getQuery('nameBn') ?? NULL,
                'ministry' => $this->request->getQuery('ministry') ?? NULL,
                'layer' => (int)$this->request->getQuery('layer') ?? NULL,
                'parent' => $this->request->getQuery('parent') ?? NULL,
                'level' => $this->request->getQuery('level') ?? NULL,
                'sequence' => $this->request->getQuery('sequence') ?? NULL,
                'status' => (int)$this->request->getQuery('status') ?? NULL,
                'xgselect' => $this->request->getQuery('xgselect') ?? NULL,
                'xgcount' => (bool)$this->request->getQuery('xgcount') ?? FALSE,
                'xgorder' => $this->request->getQuery('xgorder') ?? NULL,
                'xgdesc' => (bool)$this->request->getQuery('xgdesc') ?? FALSE,
                'xgoffset' => (int)$this->request->getQuery('xgoffset') ?? NULL,
                'xglimit' => (int)$this->request->getQuery('xglimit') ?? NULL,
                'xglogic' => $this->request->getQuery('xglogic') ?? NULL,
            ];
            $officeinorigins = $this->OfficeOrigins->getOfficeOriginsV1($data);
            if (!empty($officeinorigins)) {
                return $this->jsonResponse($officeinorigins);
            } else {
                return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
            }
        } catch (\Exception $exception) {
            return $this->jsonResponse($this->responseFormat('error', $exception->getMessage()));
        }
    }

    public function getOfficeOrigin()
    {
        try {
            $data = [
                'office_origin_ids' => $this->request->getData('office_origin_ids') ?? '',
                'layer_levels' => $this->request->getData('layer_levels') ?? '',
                'page' => $this->request->getData('page') ?? '',
                'per_page' => $this->request->getData('per_page') ?? 25,
            ];

            $office_origins = $this->OfficeOrigins->getOfficeOrigins($data);

            if (!empty($office_origins)) {
                return $this->jsonResponse($office_origins);
            } else {
                return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
            }
        } catch (\Exception $exception) {
            return $this->jsonResponse($this->responseFormat('error', $exception->getMessage()));
        }
    }
}
