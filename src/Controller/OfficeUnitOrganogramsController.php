<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * OfficeUnitOrganograms Controller
 *
 * @property \App\Model\Table\OfficeUnitOrganogramsTable $OfficeUnitOrganograms
 *
 * @method \App\Model\Entity\OfficeUnitOrganogram[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OfficeUnitOrganogramsController extends OisfController
{
    public function getOfficeUnitOrganogram()
    {
        try {

            $data = [
                'id' => $this->request->getQuery('id') ?? NULL,
                'office' => $this->request->getQuery('office') ?? NULL,
                'unit' => $this->request->getQuery('unit') ?? NULL,
                'superiorUnit' => $this->request->getQuery('superiorUnit') ?? NULL,
                'superiorDesignation' => $this->request->getQuery('superiorDesignation') ?? NULL,
                'name' => $this->request->getQuery('name') ?? NULL,
                'nameBn' => $this->request->getQuery('nameBn') ?? NULL,
                'shortName' => $this->request->getQuery('shortName') ?? NULL,
                'shortNameBn' => (int)$this->request->getQuery('shortNameBn') ?? NULL,
                'designationLevel' => $this->request->getQuery('designationLevel') ?? NULL,
                'designationSequence' => (int)$this->request->getQuery('designationSequence') ?? NULL,
                'description' => $this->request->getQuery('description') ?? NULL,
                'refOrigin' => $this->request->getQuery('refOrigin') ?? NULL,
                'status' => $this->request->getQuery('status') ?? NULL,
                'xgselect' => $this->request->getQuery('xgselect') ?? NULL,
                'xgcount' => (bool)$this->request->getQuery('xgcount') ?? FALSE,
                'xgorder' => $this->request->getQuery('xgorder') ?? NULL,
                'xgdesc' => (bool)$this->request->getQuery('xgdesc') ?? FALSE,
                'xgoffset' => (int)$this->request->getQuery('xgoffset') ?? NULL,
                'xglimit' => (int)$this->request->getQuery('xglimit') ?? NULL,
                'xglogic' => $this->request->getQuery('xglogic') ?? NULL,
            ];

            if ($data['id']) {
                $ids = $data['id'];
                $ids = explode(',', $ids);
                $data['id'] = $ids;
            }

            if ($data['refOrigin']) {
                $refOrigins = $data['refOrigin'];
                $refOrigins = explode(',', $refOrigins);
                $data['refOrigin'] = $refOrigins;
            }


            $organograms = $this->OfficeUnitOrganograms->getOfficeUnitOrganograms($data);

            if (!empty($organograms)) {
                return $this->jsonResponse($organograms);
            } else {
                return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
            }
        } catch (\Exception $exception) {
            return $this->jsonResponse($this->responseFormat('error', $exception->getMessage()));
        }
    }
}
