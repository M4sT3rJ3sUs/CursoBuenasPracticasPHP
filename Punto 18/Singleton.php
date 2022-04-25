<?php
class Database
{
    private $conect;
    private static $instance = null;

    public static function getInstance()
    {
        if(! self::$instance){

            self::$instance = new self();
        }

        return self::$instance;
    }
    private function __constructor()
    {
        $this->conect = new mysqli('localhost', 'root', '', 'DatabaseName');
    }
}