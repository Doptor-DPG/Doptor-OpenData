<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

class OISFTable extends Table{
    public function getAll($select = [],$where = [], $order = [],$options = []){
        if(!empty($options['list'])){
            $query = $this->find('list',[
                'keyField' => isset($options['list']['keyField'])?$options['list']['keyField']:'id',
                'valueField' => isset($options['list']['valueField'])?$options['list']['valueField']:'id',
            ]);
        }else{
            $query = $this->find();
        }
        if(!empty($select)){
            $query->select($select);
        }
        if(!empty($where)){
            if(method_exists($this,'prepareFilterOptions')){
                $query->where($this->prepareFilterOptions($where));
            }else{
                $query->where($where);
            }
        }
        //sometimes prepareFilterOptions can not handle all where condition like id not in (1,2,3) query
        if(!empty($options['custom_where'])){
            $query->where($options['custom_where']);
        }
        if(!empty($order)){
            $query->order($order);
        }
        return $query;
    }

}