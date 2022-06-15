<?php
namespace App\core;

use PDO;
use PDOException;

require_once("config.php");

class Model
{
    protected $conn = null;
    private $_host = HOST;
    private $_dbname = DBNAME;
    private $_user = USER;
    private $_password = PASSWORD;

    public function __construct()
    {
        $dsn = "mysql:host=".$this->_host.";dbname=".$this->_dbname.";charset=utf8";

        try {
            $this->conn = new PDO($dsn, $this->_user, $this->_password);
        } catch (PDOException $e) {
            $this->conn = null;
            var_dump($e->getMessage());
            die();
        }
    }

    public function get_data()
    {
    }
}