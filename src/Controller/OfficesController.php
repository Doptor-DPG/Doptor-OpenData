<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;

/**
 * Offices Controller
 *
 * @property \App\Model\Table\OfficesTable $Offices
 *
 * @method \App\Model\Entity\Office[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OfficesController extends OisfController
{
    public function getOfficeWiseUnitDesigMap()
    {
        $office_id = (int)$this->request->getData('office_id');
        if (empty($office_id)) {
            return $this->jsonResponse($this->responseFormat('error', 'office_id not found.'));
        }
        $mapped_unit_desig_info = $this->Offices->getOfficeWiseUnitDesigMap($office_id);
        if (!empty($mapped_unit_desig_info)) {
            return $this->jsonResponse($this->responseFormat('success', $mapped_unit_desig_info));
        } else {
            return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
        }
    }

    public function getOffice()
    {
        $office_ids = $this->request->getData('office_ids');
        $layer_levels = $this->request->getData('layer_levels');
        $office_origin_ids = $this->request->getData('office_origin_ids');
        $custom_layer_ids = $this->request->getData('custom_layer_ids');
        $search = $this->request->getData('search');

        $per_page = $this->request->getData('per_page');
        $page = $this->request->getData('page');

        if (empty($per_page)) {
            $per_page = 25;
        }
        if (empty($page)) {
            $page = 1;
        }

        $search_options = [
            'layer_levels' => $layer_levels ?? '',
            'office_origin_ids' => $office_origin_ids ?? '',
            'custom_layer_ids' => $custom_layer_ids ?? '',
            'search' => $search ?? '',
        ];

        $office_info = $this->Offices->getOffice($office_ids ?? '', $search_options, $per_page, $page);
        if (!empty($office_info)) {
            return $this->jsonResponse($this->responseFormat('success', $office_info['data'], ['meta' => [
                'total' => $office_info['total'],
                'count' => $office_info['count'],
                'from' => $office_info['from'],
                'to' => $office_info['to'],
                'current_page' => $office_info['page'],
                'per_page' => $office_info['per_page'],
                'last_page' => $office_info['last_page'],
            ]]));
        } else {
            return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
        }
    }

    public function getOfficeV1()
    {
        try {
            $data = [
                'id' => (int)$this->request->getQuery('id') ?? NULL,
                'origin' => (int)$this->request->getQuery('origin') ?? NULL,
                'name' => $this->request->getQuery('name') ?? NULL,
                'nameBn' => $this->request->getQuery('nameBn') ?? NULL,
                'ministry' => $this->request->getQuery('ministry') ?? NULL,
                'layer' => $this->request->getQuery('layer') ?? NULL,
                'status' => (int)$this->request->getQuery('status') ?? NULL,
                'division' => (int)$this->request->getQuery('division') ?? NULL,
                'district' => (int)$this->request->getQuery('district') ?? NULL,
                'upazila' => (int)$this->request->getQuery('upazila') ?? NULL,
                'code' => $this->request->getQuery('code') ?? NULL,
                'address' => $this->request->getQuery('address') ?? NULL,
                'email' => $this->request->getQuery('email') ?? NULL,
                'website' => $this->request->getQuery('website') ?? NULL,
                'phone' => $this->request->getQuery('phone') ?? NULL,
                'mobile' => $this->request->getQuery('mobile') ?? NULL,
                'fax' => $this->request->getQuery('fax') ?? NULL,
                'parent' => $this->request->getQuery('parent') ?? NULL,
                'xgselect' => $this->request->getQuery('xgselect') ?? NULL,
                'xgcount' => (bool)$this->request->getQuery('xgcount') ?? FALSE,
                'xgorder' => $this->request->getQuery('xgorder') ?? NULL,
                'xgdesc' => (bool)$this->request->getQuery('xgdesc') ?? FALSE,
                'xgoffset' => (int)$this->request->getQuery('xgoffset') ?? NULL,
                'xglimit' => (int)$this->request->getQuery('xglimit') ?? NULL,
                'xglogic' => $this->request->getQuery('xglogic') ?? NULL,
            ];

            $office_info = $this->Offices->getOfficeV1($data);
            if (!empty($office_info)) {
                return $this->jsonResponse($office_info);
            } else {
                return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
            }
        } catch (\Exception $exception) {
            return $this->jsonResponse($this->responseFormat('error', $exception->getMessage()));
        }
    }

    public function getOfficeWiseUnit()
    {
        $office_ids = $this->request->getData('office_ids');
        $unit_ids = $this->request->getData('unit_ids');
        if (empty($office_ids)) {
            return $this->jsonResponse($this->responseFormat('error', 'office_ids not found.'));
        }
        $office_units_table = TableRegistry::getTableLocator()->get('OfficeUnits');
        $unit_infos = $office_units_table->getOfficeWiseUnit($office_ids, $unit_ids);
        if (!empty($unit_infos)) {
            return $this->jsonResponse($this->responseFormat('success', $unit_infos));
        } else {
            return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
        }
    }


    public function getEmployeeListByOffice()
    {
        $office_id = $this->request->getData('office_id');

        if (empty($office_id)) {
            return $this->jsonResponse($this->responseFormat('error', 'office_id not found.'));
        }

        $data = TableRegistry::getTableLocator()->get('OfficeUnitOrganograms')->getEmployeeListByOffice($office_id);
        if (!empty($data)) {
            return $this->jsonResponse($this->responseFormat('success', $data['data'], ['meta' => [
                'total' => $data['total'],
                'count' => $data['count'],
                'from' => $data['from'],
                'to' => $data['to'],
            ]]));
        } else {
            return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
        }
    }

    public function getUnitWiseDesignation()
    {
        $unit_ids = $this->request->getData('unit_ids');
        if (empty($unit_ids)) {
            return $this->jsonResponse($this->responseFormat('error', 'unit_ids not found.'));
        }
        $office_units_organograms_table = TableRegistry::getTableLocator()->get('OfficeUnitOrganograms');
        $designation_infos = $office_units_organograms_table->getUnitWiseDesignation($unit_ids);
        if (!empty($designation_infos)) {
            return $this->jsonResponse($this->responseFormat('success', $designation_infos));
        } else {
            return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
        }
    }

    public function getOfficeBasedRelationalData()
    {
        try {
            $office_ids = $this->request->getData('office_ids') ?? '';
            $select = $this->request->getData('show') ?? '';
            $type = $this->request->getData('type') ?? '';
            if (empty($type)) {
                return toJson($this, responseFormat('error', 'Type is not given'));
            }
            $office_info = $this->Offices->getOfficeBasedRelationalData(explodeAndMakeArray($office_ids, 'int'), $type, explodeAndMakeArray($select));
            if (!empty($office_info)) {
                return $this->jsonResponse($this->responseFormat('success', $office_info));
            } else {
                return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
            }
        } catch (\Exception $ex) {
            return $this->jsonResponse($this->responseFormat('error', 'Technical error occurred.', [
                'details' => makeEncryptedData($ex->getMessage()),
            ]));
        }
    }

    public function getOfficeWiseUnitDesignationEmployeeMap()
    {
        $office_id = (int)$this->request->getData('office_id');
        $options['office_visibility'] = !empty($this->request->getData('office_visibility')) ? explodeAndMakeArray($this->request->getData('office_visibility')) : [];
        $options['unit_visibility'] = !empty($this->request->getData('unit_visibility')) ? explodeAndMakeArray($this->request->getData('unit_visibility')) : [];
        $options['designation_visibility'] = !empty($this->request->getData('designation_visibility')) ? explodeAndMakeArray($this->request->getData('designation_visibility')) : [];
        $options['employee_visibility'] = !empty($this->request->getData('employee_visibility')) ? explodeAndMakeArray($this->request->getData('employee_visibility')) : [];
        if (empty($office_id)) {
            return $this->jsonResponse($this->responseFormat('error', 'office_id not found.'));
        }
        $mapped_unit_desig_info = $this->Offices->getOfficeWiseUnitDesignationEmployeeMap($office_id, $options);
        if (!empty($mapped_unit_desig_info)) {
            return $this->jsonResponse($this->responseFormat('success', $mapped_unit_desig_info));
        } else {
            return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
        }
    }

    public function getOfficeUnitHeadAndAdmin()
    {
        $unit_id = (int)$this->request->getData('unit_id');
        if (empty($unit_id)) {
            return $this->jsonResponse($this->responseFormat('error', 'unit_id not found.'));
        }

        $office_units_organograms_table = TableRegistry::getTableLocator()->get('OfficeUnitOrganograms');

        $get_unit_admin = $office_units_organograms_table
            ->find()
            ->where(['office_unit_id' => $unit_id])
            ->where(['is_unit_admin' => 1])->toArray();

        $get_unit_admin_id = !empty($get_unit_admin) ? $get_unit_admin[0]['id'] : null;
        $get_unit_admin = !empty($get_unit_admin) ? $get_unit_admin[0] : null;

        $get_office_unit_admin = $get_unit_admin_id ? $this->makeOfficeUnitHeadOrAdminData($get_unit_admin_id, $get_unit_admin) : null;

        $get_unit_head = $office_units_organograms_table
            ->find()
            ->where(['office_unit_id' => $unit_id])
            ->where(['is_unit_head' => 1])->toArray();

        $get_unit_head_id = !empty($get_unit_head) ? $get_unit_head[0]['id'] : null;
        $get_unit_head = !empty($get_unit_head) ? $get_unit_head[0] : null;

        $get_office_unit_head = $get_unit_head ? $this->makeOfficeUnitHeadOrAdminData($get_unit_head_id, $get_unit_head) : null;

        $result = [
            'unit_admin' => $get_office_unit_admin ?: (object)array(),
            'unit_head' => $get_office_unit_head ?: (object)array(),
        ];

        if (!empty($get_office_unit_admin) || !empty($get_office_unit_head)) {
            return $this->jsonResponse($this->responseFormat(
                'success',
                $result
            ));
        } else {
            return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
        }
    }

    function makeOfficeUnitHeadOrAdminData($office_unit_organogram_id, $office_unit_organogram): array
    {
        $employee_offices_table = TableRegistry::getTableLocator()->get('EmployeeOffices');
        $employee_records_table = TableRegistry::getTableLocator()->get('EmployeeRecords');
        $users_table = TableRegistry::getTableLocator()->get('Users');
        $office_units_table = TableRegistry::getTableLocator()->get('OfficeUnits');

        $get_employee_records_of_unit = $employee_offices_table->find()
            ->select(['employee_record_id', 'incharge_label'])
            ->where(['office_unit_organogram_id' => $office_unit_organogram_id, 'status' => 1])->toArray()[0];

        $get_employee_record_id_of_unit = $get_employee_records_of_unit['employee_record_id'];

        $get_employee_record_of_unit = $employee_records_table->find()
            ->select(['id', 'name_bng', 'name_eng'])
            ->where(['id' => $get_employee_record_id_of_unit])->first();

        $get_unit = $office_units_table->find()
            ->select(['unit_name_bng', 'unit_name_eng', 'office_unit_category', 'parent_unit_id', 'unit_nothi_code', 'unit_level', 'email', 'phone', 'fax', 'active_status'])
            ->where(['id' => $office_unit_organogram['office_unit_id']])->first();

        return [
            'designation_id' => $office_unit_organogram_id,
            'designation_eng' => $office_unit_organogram['designation_eng'],
            'designation_bng' => $office_unit_organogram['designation_bng'],
            'designation_level' => $office_unit_organogram['designation_level'],
            'designation_sequence' => $office_unit_organogram['designation_sequence'],
            'is_admin' => $office_unit_organogram['is_admin'],
            'is_unit_admin' => $office_unit_organogram['is_unit_admin'],
            'is_unit_head' => $office_unit_organogram['is_unit_head'],
            'is_office_head' => $office_unit_organogram['is_office_head'],
            'incharge_label' => $get_employee_records_of_unit['incharge_label'],
            'employee_record' => $get_employee_record_of_unit,
            'unit' => $get_unit,
        ];
    }


    public function getOfficeHeadAndAdmin()
    {
        $office_id = (int)$this->request->getData('office_id');
        if (empty($office_id)) {
            return $this->jsonResponse($this->responseFormat('error', 'office_id not found.'));
        }

        $office_units_organograms_table = TableRegistry::getTableLocator()->get('OfficeUnitOrganograms');

        $get_admin = $office_units_organograms_table
            ->find()
            ->where(['office_id' => $office_id])
            ->where(['is_admin' => 1])->toArray();

        $get_admin_id = !empty($get_admin) ? $get_admin[0]['id'] : null;
        $get_admin = !empty($get_admin) ? $get_admin[0] : null;

        $get_office_admin = $get_admin_id ? $this->makeOfficeHeadOrAdminData($get_admin_id, $get_admin) : null;

        $get_office_head = $office_units_organograms_table
            ->find()
            ->where(['office_id' => $office_id])
            ->where(['is_office_head' => 1])->toArray();

        $get_office_head_id = !empty($get_office_head) ? $get_office_head[0]['id'] : null;
        $get_office_head = !empty($get_office_head) ? $get_office_head[0] : null;

        $get_office_head = $get_office_head ? $this->makeOfficeHeadOrAdminData($get_office_head_id, $get_office_head) : null;

        $result = [
            'office_admin' => $get_office_admin ?: (object)array(),
            'office_head' => $get_office_head ?: (object)array(),
        ];

        if (!empty($get_office_admin) || !empty($get_office_head)) {
            return $this->jsonResponse($this->responseFormat(
                'success',
                $result
            ));
        } else {
            return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
        }
    }

    function makeOfficeHeadOrAdminData($office_unit_organogram_id, $office_unit_organogram): array
    {
        $employee_offices_table = TableRegistry::getTableLocator()->get('EmployeeOffices');
        $employee_records_table = TableRegistry::getTableLocator()->get('EmployeeRecords');
        $users_table = TableRegistry::getTableLocator()->get('Users');
        $office_units_table = TableRegistry::getTableLocator()->get('OfficeUnits');

        $get_employee_records_of_unit = $employee_offices_table->find()
            ->select(['employee_record_id', 'incharge_label'])
            ->where(['office_unit_organogram_id' => $office_unit_organogram_id, 'status' => 1])->toArray()[0];

        $get_employee_record_id_of_unit = $get_employee_records_of_unit['employee_record_id'];

        $get_employee_record_of_unit = $employee_records_table->find()
            ->select(['id', 'name_bng', 'name_eng'])
            ->where(['id' => $get_employee_record_id_of_unit])->first();

        $get_unit = $office_units_table->find()
            ->select(['unit_name_bng', 'unit_name_eng', 'office_unit_category', 'parent_unit_id', 'unit_nothi_code', 'unit_level', 'email', 'phone', 'fax', 'active_status'])
            ->where(['id' => $office_unit_organogram['office_unit_id']])->first();

        return [
            'designation_id' => $office_unit_organogram_id,
            'designation_eng' => $office_unit_organogram['designation_eng'],
            'designation_bng' => $office_unit_organogram['designation_bng'],
            'designation_level' => $office_unit_organogram['designation_level'],
            'designation_sequence' => $office_unit_organogram['designation_sequence'],
            'is_admin' => $office_unit_organogram['is_admin'],
            'is_unit_admin' => $office_unit_organogram['is_unit_admin'],
            'is_unit_head' => $office_unit_organogram['is_unit_head'],
            'is_office_head' => $office_unit_organogram['is_office_head'],
            'incharge_label' => $get_employee_records_of_unit['incharge_label'],
            'employee_record' => $get_employee_record_of_unit,
            'unit' => $get_unit,
        ];
    }
}
