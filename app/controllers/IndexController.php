<?php

namespace app\controllers;

use app\Controller;


use app\views\View;

class IndexController extends \app\Controller
{
    protected function after()
    {
        \app\Validate::blockMethods(['POST', "PUT", "DELETE"]);
    }

    public function indexAction()
    {
        $this->after();
        $View = new View();
        $View-> render("home/index"); 
        unset($View);
    }


    protected function before()
    {

    }
}
?>