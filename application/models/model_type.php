<?php

namespace App\models;

use App\core\Model;

class Model_Type extends Model
{
    function getData()
    {
        $stmt = $this->conn->prepare("SELECT * FROM types;");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
