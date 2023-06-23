<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class CustomLayersController extends OisfController
{
    public function getCustomLayerLevel()
    {
        $data = [
            'layer_levels' => $this->request->getData('layer_levels') ?? '',
        ];
        $officeCustomLayersTable = TableRegistry::getTableLocator()->get('OfficeCustomLayers');
        $custom_layer_levels = $officeCustomLayersTable->getCustomLayerLevel($data);

        if (!empty($custom_layer_levels)) {
            return $this->jsonResponse($this->responseFormat('success', $custom_layer_levels));
        } else {
            return $this->jsonResponse($this->responseFormat('error', 'No data found.'));
        }
    }
}
