<?php

$sc = new \App\ServiceContainer();

$sc->addService('user',function(){
    return new \App\Services\UserService();
});

$userService = $sc->getService('user');

var_dump($userService->getUsers());
//it will return our user array