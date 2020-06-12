<?php

namespace DesignPatterns\Creational\Singleton;

class DB
{
    private static $instance;
    private $connection = 'single connection';

    private function __construct(){}

    public static function getInstance(){
        if (is_null(self::$instance))
            self::$instance = new self();

        return self::$instance;
    }

    public function getConnection(){
        return $this->connection;
    }
}