<?php

include "application/models/model_model.php";
include "application/models/model_mark.php";


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
