<?php

namespace SON;

class Model
{
    private $pdo;

    public function __construct(\PDO $pdo = null)
    {
        $this->pdo = $pdo;
    }
    
    public function get()
    {
        return [
            'nome' => 'Talita Bernardino'
        ];
    }
}
