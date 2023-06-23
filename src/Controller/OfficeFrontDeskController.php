<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * OfficeFrontDesk Controller
 *
 * @property \App\Model\Table\OfficeFrontDeskTable $OfficeFrontDesk
 *
 * @method \App\Model\Entity\OfficeFrontDesk[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OfficeFrontDeskController extends OisfController
{
    public function getOfficeFrontDesk()
    {
        try {
            $data = [
                'id' => (int)$this->request->getData('id') ?? NULL,
                'office_id' => $this->request->getData('office_id') ?? NULL,
//                'officeName' => $this->request->getData('officeName') ?? NULL,
//                'address' => $this->request->getData('address') ?? NULL,
                'office_unit_id' => $this->request->getData('office_unit_id') ?? NULL,
//                'officeUnitName' => $this->request->getData('officeUnitName') ?? NULL,
//                'officeUnitOrganogramId' => (int)$this->request->getData('officeUnitOrganogramId') ?? NULL,
//                'designationLabel' => $this->request->getData('designationLabel') ?? NULL,
//                'officerId' => (int)$this->request->getData('officer_Id') ?? NULL,
//                'officerName' => $this->request->getData('officer_name') ?? NULL,
                'per_page' => (int)$this->request->getData('per_page') ?? NULL,
                'page' => (int)$this->request->getData('page') ?? NULL,
            ];

            if (empty($data['office_id'])) {
                return $this->jsonResponse($this->responseFormat('error', 'Office ID is required'));
            }

            if (empty($data['per_page'])) {
                $data['per_page'] = 200;
            }
            if (empty($data['page'])) {
                $data['page'] = 1;
            }

            $office_front_desks = $this->OfficeFrontDesk->getOfficeFrontDesks($data);

            if (!empty($office_front_desks)) {
                return $this->jsonResponse($this->responseFormat('success', $office_front_desks['data']));
            } else {
                return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
            }
        } catch (\Exception $exception) {
            return $this->jsonResponse($this->responseFormat('error', $exception->getMessage()));
        }
    }


    public function getOfficeUnit()
    {
        try {
            $data = [
                'id' => (int)$this->request->getQuery('id') ?? null,
                'office' => $this->request->getQuery('office') ?? null,
                'ministry' => $this->request->getQuery('ministry') ?? null,
                'name' => $this->request->getQuery('name') ?? null,
                'nameBn' => $this->request->getQuery('nameBn') ?? null,
                'level' => $this->request->getQuery('level') ?? null,
                'layer' => (int)$this->request->getQuery('layer') ?? null,
                'phone' => $this->request->getQuery('phone') ?? null,
                'email' => (int)$this->request->getQuery('email') ?? null,
                'fax' => $this->request->getQuery('fax') ?? null,
                'status' => $this->request->getQuery('status') ?? null,
                'xgselect' => $this->request->getQuery('xgselect') ?? null,
                'xgcount' => (bool)$this->request->getQuery('xgcount') ?? false,
                'xgorder' => $this->request->getQuery('xgorder') ?? null,
                'xgdesc' => (bool)$this->request->getQuery('xgdesc') ?? false,
                'xgoffset' => (int)$this->request->getQuery('xgoffset') ?? null,
                'xglimit' => (int)$this->request->getQuery('xglimit') ?? null,
                'xglogic' => $this->request->getQuery('xglogic') ?? null,
            ];

            $office_units = TableRegistry::getTableLocator()->get('OfficeUnits')->getOfficeUnits($data);

            if (!empty($office_units)) {
                return $this->jsonResponse($office_units);
            } else {
                return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
            }
        } catch (\Exception $exception) {
            return $this->jsonResponse($this->responseFormat('error', $exception->getMessage()));
        }
    }
}
