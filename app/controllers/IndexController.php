<?php

namespace App\controllers;

use Core\controller\Action;

use App\database\Connection;


class IndexController extends Action {
    public function index() {
        $this->render("index", "template_front1");
    }

}
?>