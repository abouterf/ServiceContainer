<?php
namespace App;

use Exception;

class ServiceContainer{
    protected $services = [];


    public function addService(string $name, $service){
        $this->services[$name] = $service;
    }

    public function getService($name){
        if(isset($this->services[$name]))
        //we user call_user_func to handle closure callback(web.php)
            return call_user_func($this->services[$name]) ;

        throw new Exception('Service Not Found.');
    }
}