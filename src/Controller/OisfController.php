<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\ORM\TableRegistry;

/**
 * Efile Controller
 *
 *
 * @method \App\Model\Entity\Efile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OisfController extends AppController
{
    /**
     * Token
     *
     * @var string
     */
    public $token = "";
    /**
     * Payload data decoded from token
     *
     * @var mixed
     */
    public $payload = [];
    public function initialize()
    {
        /*$this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => ['username' => 'username'],
                    'finder' => 'auth'
                ]
            ],
        ]);*/

        /*if ($this->Auth->user()) {
            $this->Auth->logout();
        }*/
        $authorization = $this->request->getAttribute('authorization');

        // set token
        $this->token = isset($authorization['token']) ? $authorization['token'] : [];

        // set payload
        $this->payload = isset($authorization['payload']) ? $authorization['payload'] : [];

        parent::initialize();
    }

    public function jsonResponse($body, $code = 200, $options = [])
    {
        return toJson($this, $body, $code, $options);
    }

    protected function responseFormat($status = 'error', $data = '', $options = [])
    {
        return responseFormat($status, $data, $options);
    }

    public function paginator($total, $page, $per_page, $current_count)
    {
        $from = (int)($page - 1) * $per_page + 1;
        $to = $from + $current_count - 1;
        return [
            'total' => (int)$total,
            'per_page' => (int)$per_page,
            'page' => (int)$page,
            'last_page' => (int)ceil($total / $per_page),
            'from' => $from,
            'to' => $to,
            'count' => $current_count,
        ];
    }
}
