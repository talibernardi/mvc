<?php

include_once __DIR__ . '/vendor/autoload.php';
$router = require __DIR__ . '/router.php';
$helpers = require __DIR__ . '/helpers.php';
$resolver = require __DIR__ . '/resolver.php';

$object = $router->handler();

//$controller = new $object['class'](new \App\Models\User);
//$action = $object['action'];
//echo $controller->$action();

$resolver->handler($object['class'], $object['action']);

//$obj = new SON\Controller;
// var_dump($obj->handdle());
