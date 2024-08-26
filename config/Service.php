<?php

declare(strict_types= 1);

namespace config;

ini_set('allow_url_fopen','1');
date_default_timezone_set('America/Sao_Paulo');
header("Access-Control-Allow-Origin: *");

class Service
{
    const DOMAIN = "http://localhost";

	const DEBUG	   = true;

	const ERRORS   = true;

    const KEY_64 = 'wK0dNhSrcgcyrOwbg7JN8BIituVTiq9O2wL2Ze7xZ5w=';

    const RESULTS_PER_PAGE = 18;

    const HTML_TEMPLATE = '.nano.php';

    const ASSETS_FOLDER = "assets";

    const ASSET_PATH = "/app/views/"; //pasta dos assets

    const SESSION = 3; //valor em horas


    public static function create($basepath, $folder)
    {
        if(defined("BASEPATH")==false)
        {
            define('BASEPATH', $basepath);
        }  
        if(defined("FOLDER")==false)
        {
            define('FOLDER', $folder);
        } 

        //----create dynamic assets url save in $_SERVER;
         //---create dynamic URL BASE for requests
        if($_SERVER['SERVER_PORT']!='80')
        {
            $_SERVER['assets']= self::DOMAIN.":".$_SERVER['SERVER_PORT'].'/'.FOLDER.self::ASSET_PATH.self::ASSETS_FOLDER."/";
            $_SERVER['base_url'] =self::DOMAIN.":".$_SERVER['SERVER_PORT'].'/'.FOLDER.'/';
        }
        else
        {
            $_SERVER['assets']= self::DOMAIN.'/'.FOLDER.self::ASSET_PATH.self::ASSETS_FOLDER."/";
            $_SERVER['base_url'] =self::DOMAIN.'/'.FOLDER.'/';
        }
       

    }

    

}