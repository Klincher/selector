<?php

include "application/models/model_type.php";
include "application/models/model_mark.php";


class Controller_Model extends Controller
{
    function __construct()
    {

        $this->model = new Model_Model();
        $this->typeModel = new Model_Type();
        $this->markModel = new Model_Mark();
        $this->view = new View();
    }

    function action_index()
    {
        $typeId = $_POST['type'];
        $markId = $_POST['mark'];
        $modelId = $_POST['model'];

        $data = [];
        $data['typeId'] = $typeId;
        $data['markId'] = $markId;

        $data['types'] = $this->typeModel->getData();
        $data['marks'] = $this->markModel->getData($typeId);
        $data['models'] = $this->model->getData($markId);

        $this->view->generate('main_view.php', 'template_view.php', $data);
    }
}