<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * OfficeMinistries Controller
 *
 * @property \App\Model\Table\OfficeMinistriesTable $OfficeMinistries
 *
 * @method \App\Model\Entity\OfficeMinistry[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OfficeMinistriesController extends OisfController
{
    public function getMinistry()
    {
        // Here search = search by ministry name
        $search = $this->request->getData('search');
        if (!empty($search)) {
            $this->loadComponent('Sanitize');
            $search = $this->Sanitize->string($search);
        }
        $ministry_id = (int)$this->request->getData('ministry_id');
        $ministries = $this->OfficeMinistries->getMinistries($search ?? '', $ministry_id);
        if (!empty($ministries)) {
            return $this->jsonResponse($this->responseFormat('success', $ministries['data'], ['meta' => [
                'total' => $ministries['total'],
                'count' => $ministries['count'],
                'from' => $ministries['from'],
                'to' => $ministries['to'],
                'current_page' => $ministries['page'],
                'per_page' => $ministries['per_page'],
                'last_page' => $ministries['last_page'],
            ]]));
        } else {
            return $this->jsonResponse($this->responseFormat('error', 'No data found'));
        }
    }

    public function getMinistryInfo()
    {
        try {

            $data = [
                'id' => (int)$this->request->getQuery('id') ?? NULL,
                'type' => $this->request->getQuery('type') ?? NULL,
                'reference' => $this->request->getQuery('reference') ?? NULL,
                'name' => $this->request->getQuery('name') ?? NULL,
                'nameShort' => $this->request->getQuery('nameShort') ?? NULL,
                'nameBn' => $this->request->getQuery('nameBn') ?? NULL,
                'status' => (int)$this->request->getQuery('status') ?? NULL,
                'xgselect' => $this->request->getQuery('xgselect') ?? NULL,
                'xgcount' => (bool)$this->request->getQuery('xgcount') ?? FALSE,
                'xgorder' => $this->request->getQuery('xgorder') ?? NULL,
                'xgdesc' => (bool)$this->request->getQuery('xgdesc') ?? FALSE,
                'xgoffset' => (int)$this->request->getQuery('xgoffset') ?? NULL,
                'xglimit' => (int)$this->request->getQuery('xglimit') ?? NULL,
                'xglogic' => $this->request->getQuery('xglogic') ?? NULL,
            ];
            $ministries = $this->OfficeMinistries->getMinistryInfos($data);
            if (!empty($ministries)) {
                return $this->jsonResponse($ministries);
            } else {
                return $this->jsonResponse($this->responseFormat('error', 'No data found'));
            }
        } catch (\Exception $exception) {
            return $this->jsonResponse($this->responseFormat('error', $exception->getMessage()));
        }
    }
}
