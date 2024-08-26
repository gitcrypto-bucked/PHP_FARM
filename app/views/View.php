<?php 

declare(strict_types=1);

namespace app\views;

use \config\Service;

class View
{
    final function render(string $view, array $args = [], $flaskMessage = ''): void
    {
        $_SESSION['flask_message'] = $flaskMessage;

        $argv = extract(@$args, EXTR_SKIP);

        $view.= Service::HTML_TEMPLATE;
        $file = str_ireplace('\\','/',dirname(__DIR__))  ."/views/$view";


        if (is_readable($file)==true & file_exists($file)==true)
        {
            require_once $file; 
        }
        else if( file_exists($file)==false)
        {
           trigger404();
        }
     
    }


    final function trigger404()
    {
        if(file_exists(str_ireplace('\\','/',dirname(__DIR__))  ."/views/404/index.".Service::HTML_TEMPLATE))
            require_once(str_ireplace('\\','/',dirname(__DIR__))  ."/views/404/index.".Service::HTML_TEMPLATE); exit;
    }
}

?>