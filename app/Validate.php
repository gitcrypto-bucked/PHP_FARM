<?php

namespace app;

use \config\Service;

class Validate
{
	/**
	 * Aceita POST apenas de dentro do site
	 * @throws Exception
	 * @return void
	 */
	public static function doPost(): void
	{
		if (strtolower($_SERVER['REQUEST_METHOD']) !== 'post') {
			if (Service::DEBUG)
				throw new \Exception('ONLY POST METHODS!');
			else
				header('Location: /');
			exit;
		}
		if ($_SERVER['HTTP_ORIGIN'] !== Service::DOMAIN) {
			if (Service::DEBUG)
				throw new \Exception('DOMAIN ERROR!');
			else
				header('Location: /');
			exit;
		}
	}


    /**
	 * Aceita GET apenas de dentro do site
	 * @throws Exception
	 * @return void
	 */
	public static function doGet(): void
	{
		
		if (strtolower($_SERVER['REQUEST_METHOD']) !== 'get') 
        {
			if (Service::DEBUG)
				throw new \Exception('ONLY GET METHODS!');
			else
				header('Location: ./');
			exit;
		}
	}

    /**
	 * Aceita PUT apenas de dentro do site
	 * @throws Exception
	 * @return void
	 */
	public static function doPut(): void
	{
		if (strtolower($_SERVER['REQUEST_METHOD']) !== 'put') {
			if (Service::DEBUG)
				throw new \Exception('ONLY PUT METHODS!');
			else
				header('Location: /');
			exit;
		}
		if ($_SERVER['HTTP_ORIGIN'] !== Config::DOMAIN) {
			if (Config::DEBUG)
				throw new \Exception('DOMAIN ERROR!');
			else
				header('Location: /');
			exit;
		}
	}

	/**
	 * Bloqueia métodos
	 * @see chamado por Core\Controller::__call
	 * @throws Exception
	 * @return void
	 */
	public static function blockMethods(array $methods): void
	{
		if (in_array(strtolower($_SERVER['REQUEST_METHOD']), $methods )) 
        {
			if (Service::DEBUG)
				throw new \Exception("{$_SERVER['REQUEST_METHOD']} METHOD NOT ALLOWED", 405);
			else
				header('HTTP/1.0 405 Method Not Allowed');
			exit;
		}
	}

	
	public static function isSessionTimeout()
	{
		if(strtotime($_SESSION['fim'])<= strtotime(date('H:s')))
		{
			return true;
		}
		else return false;
	}

	public static function isSession()
	{
		if(!isset($_SESSION['ativa']))
		{
			return false;
		}
		elseif(isset($_SESSION['ativa']) && $_SESSION['ativa']=='false')
		{
			return false;
		}
		else return true;
	}
}

