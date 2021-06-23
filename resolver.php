<?php

$resolver = new SON\Resolver;

$resolver['PDO'] = function ($r) {
    $host = '172.19.0.1';
    $port = '3306';
    $user = 'root';
    $password = 'root';

    return new PDO("mysql:host=$host;port=$port", $user, $password);
};

return $resolver;
