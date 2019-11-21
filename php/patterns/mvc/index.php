<?php

require('Model.php');
require('View.php');
require('Controller.php');

$m = new Model();

$v = new View();

$c = new Controller($m, $v);

$c->updateModel('updated_data');
// $c->updateView('test_update_view');
// var_dump($m->getData());

$v->renderTemplate();