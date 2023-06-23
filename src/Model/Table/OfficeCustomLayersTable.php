<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

class OfficeCustomLayersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('office_custom_layers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        return $validator;
    }

    public function getCustomLayerLevel($data): array
    {
        if (!empty($data['layer_levels'])) {
            $layer_levels = explode(",", $data['layer_levels']);
            $layer_levels = array_map(function ($id) {
                return (int)$id;
            }, $layer_levels);

            return $this->find()->where(['layer_level IN' => $layer_levels])->select(['id', 'name', 'layer_level', 'name_en' => 'name_eng'])->orderAsc('layer_level')->enableHydration(false)->toArray();
        } else {
            $layer_levels = $this->find()->select('layer_level')->groupBy('layer_level')->toArray();
            $layers = $this->find()->toArray();
            $custom_layers_temp = array();
            $custom_layers = array();
            foreach ($layer_levels as $key => $values) {
                $name = [];
                $name_en = [];
                foreach ($values as $value) {
                    foreach ($layers as $key => $layer) {
                        if ($value->layer_level == $layer->layer_level) {
                            if ($value->layer_level == 3) {
                                $name[] = 'অন্যান্য দপ্তর/সংস্থা';
                                $name_en[] = 'Other Office/Institution';
                            } else {
                                $name[] = $layer->name;
                                $name_en[] = $layer->name_eng;
                            }
                        }
                    }
                }
                $custom_layers_temp['layer_level'] = $value->layer_level;
                $name = array_unique($name, SORT_STRING);
                $name_en = array_unique($name_en, SORT_STRING);
                $custom_layers_temp['name'] = implode('/', $name);
                $custom_layers_temp['name_en'] = implode('/', $name_en);
                $custom_layers[] = $custom_layers_temp;
            }

            $layer_levels = array_column($custom_layers, 'layer_level');
            array_multisort($layer_levels, SORT_ASC, $custom_layers);

            return $custom_layers;

        }
    }
}
