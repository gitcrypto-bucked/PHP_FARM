<?php
declare(strict_types=1);

namespace dataservice;

require_once("../interfaces/IFactoryConnection.php");

use dataservice\MySQLConn;
use dataservice\PgSQLConn;

class Factory implements \interfaces\IFactoryConnection
{
    public static function getConnection()
    {
        $config = require_once(dirname(__DIR__,1)."/config/database.php");
        switch ($config["default"])
        {
            case "mysql":
                return new MySQLConn($config['mysql']['host'], $config['mysql']['port'], 
                                     $config['mysql']['database'],$config['mysql']['username'], 
                                     $config['mysql']['password']);
            break;
            case "postgres":
                return new PgSQLConn($config['postgres']['host'], $config['postgres']['port'], 
                                     $config['postgres']['database'],$config['postgres']['username'], 
                                     $config['postgres']['password'] );
            break;
        }
    }
}

?>