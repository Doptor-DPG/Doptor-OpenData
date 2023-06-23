<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * OfficeLayers Controller
 *
 * @property \App\Model\Table\OfficeLayersTable $OfficeLayers
 *
 * @method \App\Model\Entity\OfficeLayer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OfficeLayersController extends OisfController
{
    public function getLayerByMinistry()
    {
        $ministry_id = (int)$this->request->getData('ministry_id');
        $layer_ids = $this->request->getData('layer_ids');
        if (empty($ministry_id)) {
            return $this->jsonResponse($this->responseFormat('error', 'No ministry_id found.'));
        }
        $layer_by_ministry = $this->OfficeLayers->getLayerByMinistry($ministry_id, $layer_ids);
        if (!empty($layer_by_ministry)) {
            return $this->jsonResponse($this->responseFormat('success', $layer_by_ministry['data'], ['meta' => [
                'total' => $layer_by_ministry['total'],
                'count' => $layer_by_ministry['count'],
                'from' => $layer_by_ministry['from'],
                'to' => $layer_by_ministry['to'],
                'current_page' => $layer_by_ministry['page'],
                'per_page' => $layer_by_ministry['per_page'],
                'last_page' => $layer_by_ministry['last_page'],
            ]]));
        } else {
            return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
        }
    }

    public function getAllOfficesByMinistryAndLayer()
    {
        $ministry_id = (int)$this->request->getData('ministry_id');
        $layer_id = (int)$this->request->getData('layer_id');
        if (empty($ministry_id) || empty($layer_id)) {
            return $this->jsonResponse($this->responseFormat('error', 'ministry_id or layer_id not found.'));
        }
        $offices_table = TableRegistry::getTableLocator()->get('Offices');
        $offices = $offices_table->getAllOfficesByMinistryAndLayer($ministry_id, $layer_id);
        if (!empty($offices)) {
            return $this->jsonResponse($this->responseFormat('success', $offices['data'], ['meta' => [
                'total' => $offices['total'],
                'count' => $offices['count'],
                'from' => $offices['from'],
                'to' => $offices['to'],
                'current_page' => $offices['page'],
                'per_page' => $offices['per_page'],
                'last_page' => $offices['last_page'],
            ]]));
        } else {
            return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
        }
    }

    public function getLayerInfoByMinistry()
    {
        try {

            $data = [
                'id' => (int)$this->request->getQuery('id') ?? NULL,
                'parent' => $this->request->getQuery('parent') ?? NULL,
                'ministry' => $this->request->getQuery('ministry') ?? NULL,
                'name' => $this->request->getQuery('name') ?? NULL,
                'nameBn' => $this->request->getQuery('nameBn') ?? NULL,
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

            $layer_by_ministry = $this->OfficeLayers->getLayerInfoByMinistry($data);
            if (!empty($layer_by_ministry)) {
                return $this->jsonResponse($layer_by_ministry);
            } else {
                return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
            }
        } catch (\Exception $exception) {
            return $this->jsonResponse($this->responseFormat('error', $exception->getMessage()));
        }
    }
}
