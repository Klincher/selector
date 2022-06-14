<?php

include "application/models/model_type.php";

class Controller_Mark extends Controller
{
    function __construct()
    {
        $this->model = new Model_Mark();
        $this->typeModel = new Model_Type();
        $this->view = new View();
    }

    function action_index()
    {
        $typeId = $_POST['type'] ?? 1;
        $data = [];
        $data['typeId'] = $typeId;
        $data['marks'] = $this->model->getData($typeId);
        $data['types'] = $this->typeModel->getData();
        $this->view->generate('main_view.php', 'template_view.php', $data);
    }
}