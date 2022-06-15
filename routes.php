<?php

use App\controllers\Controller_Mark;
use App\controllers\Controller_Type;
use Pecee\SimpleRouter\SimpleRouter;
use App\controllers\Controller_Model;

SimpleRouter::get('/', [Controller_Type::class, 'action_index']);
