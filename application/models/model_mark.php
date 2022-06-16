<?php

namespace App\models;

use App\core\Model;

class Model_Mark extends Model
{
    function getData($typeId = 1)
    {
        $stmt = $this->conn->prepare("SELECT * FROM marks WHERE type_id = " . $typeId);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
