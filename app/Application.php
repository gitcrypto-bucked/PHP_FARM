<?php 

namespace app;

use \config\Service as System;

use \app\controllers\MaintenanceController;

class Application
{
    public function __construct()
    {

    }


    public static function configure($basepath, $folder, $boot="NORMAL",$debug=false)
    {
        System::create($basepath, $folder);
        switch ($boot) 
        {
            case 'NORMAL':
                if(System::ERRORS==true)
                {
                    ini_set('display_errors', '1');
                    ini_set('display_startup_errors', '1');
                    error_reporting(E_ALL);
                }
                if(System::ERRORS==false)
                {
                    ini_set('display_errors', '0');
                    ini_set('display_startup_errors', '0');
                    error_reporting(0);
                }
            break;
            case "MAINTENANCE":
                $maintenace = new \app\controllers\MaintenanceController();
                $maintenace->indexAction();
            break;
        }
     
    }
}

?>