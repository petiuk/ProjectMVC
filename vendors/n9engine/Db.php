<?php
namespace n9engine;
class Db
{
    private $db;
    private static $_instance;
    private function __construct()
    {
        $config = parse_ini_file('app/config/database.ini');
        $this->db = new mysqli($config['hosts'], $config['username'], $config['password'], $config['database']);
    }
    public static function getInstance()
    {
        if(!self::$_instance)
        {
        self::$_instance = new self();
        return self::$_instance;
        } else {
            return self::$_instance;
        }
    }
    private function __clone (){}// ограничивает клонирование объекта
    public function getConnect()
    {
        return $this->db; 
    }
}