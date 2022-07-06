<?php

use App\controllers\Controller_Mark;
use App\controllers\Controller_Type;
use Pecee\SimpleRouter\SimpleRouter;
use App\controllers\Controller_Model;

SimpleRouter::get('/', [Controller_Type::class, 'action_index']);
SimpleRouter::post('/mark', [Controller_Mark::class, 'action_index']);
SimpleRouter::post('/model', [Controller_Model::class, 'action_index']);
