<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

class SanitizeComponent extends Component
{
    public function html($dirty_html)
    {
        $config = \HTMLPurifier_Config::createDefault();
        $config->set('Attr.EnableID',true);
        $config->set('AutoFormat.RemoveSpansWithoutAttributes',true);
        $purifier = new \HTMLPurifier($config);
        $dirty_html = trim($dirty_html);
        return  $purifier->purify($dirty_html);
    }
    public function string($string){
        $string = trim($string);
        return filter_var($string,FILTER_SANITIZE_STRING);
    }
    public function number($number){
        return filter_var($number,FILTER_SANITIZE_NUMBER_FLOAT);
    }
    public function email($email){
        return filter_var($email,FILTER_SANITIZE_EMAIL);
    }
    public function url($url){
        return filter_var($url,FILTER_SANITIZE_URL);
    }
}