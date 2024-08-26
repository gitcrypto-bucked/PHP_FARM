<?php

namespace app\controllers;


use app\Controller;

use app\views\View; 

class Error extends \app\Controller
{
    protected function after()
    {
        \app\Validate::blockMethods(['POST', "PUT", "DELETE"]);
    }

    public function notFound()
    {
        $this->after();
        $View = new View();
        $View-> render("404/index"); 
    }


    protected function before()
    {

    }
}
?>