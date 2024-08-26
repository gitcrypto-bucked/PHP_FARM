<?php

namespace app\controllers;

use app\Controller;

use app\Validade;

use app\views\View;

class MaintenanceController extends \app\Controller
{
    protected function after()
    {
        \app\Validate::blockMethods(['POST', "PUT", "DELETE"]);
    }

    public function indexAction()
    {
        $this->after();
        $View = new View();
        $View-> render("maintenance/index");  
        unset($View);
        exit;
    }


    protected function before()
    {

    }
}
?>