<?php
namespace App\models;

use App\core\Model;

class Model_Model extends Model
{
    function getData($markId = 2) {
        $stmt = $this->conn->prepare("SELECT * FROM models WHERE mark_id = " . $markId);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}