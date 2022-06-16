<?php

namespace App\controllers;

use App\core\Controller;
use App\models\Model_Type;
use App\models\Model_Mark;
use App\models\Model_Model;
use App\core\View;

class Controller_Type extends Controller
{
    function __construct()
    {
        $this->model = new Model_Type();
        $this->markModel = new Model_Mark();
        $this->modelModel = new Model_Model();
        $this->view = new View();
    }

    function action_index()
    {
        $data = [];
        $data['types'] = $this->model->getData();
        $data['marks'] = $this->markModel->getData(1);
        $data['models'] = $this->modelModel->getData(1);

        $this->view->generate('main_view.php', 'template_view.php', $data);
    }
}
