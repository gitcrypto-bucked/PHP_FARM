<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5938428efc8c77926813d04a7a56e37f
{
    public static $prefixLengthsPsr4 = array (
        'r' => 
        array (
            'route\\' => 6,
            'request\\' => 8,
        ),
        'i' => 
        array (
            'interfaces\\' => 11,
        ),
        'd' => 
        array (
            'dataservice\\' => 12,
        ),
        'c' => 
        array (
            'config\\' => 7,
        ),
        'b' => 
        array (
            'bootstrap\\' => 10,
        ),
        'a' => 
        array (
            'app\\views\\' => 10,
            'app\\providers\\' => 14,
            'app\\models\\' => 11,
            'app\\controllers\\' => 16,
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'route\\' => 
        array (
            0 => __DIR__ . '/../..' . '/route',
        ),
        'request\\' => 
        array (
            0 => __DIR__ . '/../..' . '/request',
        ),
        'interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/interfaces',
        ),
        'dataservice\\' => 
        array (
            0 => __DIR__ . '/../..' . '/dataservice',
        ),
        'config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
        'bootstrap\\' => 
        array (
            0 => __DIR__ . '/../..' . '/bootstrap',
        ),
        'app\\views\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/views',
        ),
        'app\\providers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/providers',
        ),
        'app\\models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'app\\controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\Application' => __DIR__ . '/../..' . '/app/Application.php',
        'app\\Controller' => __DIR__ . '/../..' . '/app/Controller.php',
        'app\\Validate' => __DIR__ . '/../..' . '/app/Validate.php',
        'app\\controllers\\Error' => __DIR__ . '/../..' . '/app/controllers/Error.php',
        'app\\controllers\\IndexController' => __DIR__ . '/../..' . '/app/controllers/IndexController.php',
        'app\\controllers\\MaintenanceController' => __DIR__ . '/../..' . '/app/controllers/MaintenanceController.php',
        'app\\views\\View' => __DIR__ . '/../..' . '/app/views/View.php',
        'config\\Service' => __DIR__ . '/../..' . '/config/Service.php',
        'dataservice\\Factory' => __DIR__ . '/../..' . '/dataservice/Factory.php',
        'dataservice\\MySQLConn' => __DIR__ . '/../..' . '/dataservice/MySQLConn.php',
        'dataservice\\PgSQLConn' => __DIR__ . '/../..' . '/dataservice/PgSQLConn.php',
        'interfaces\\IFactoryConnection' => __DIR__ . '/../..' . '/interfaces/IFactoryConnection.php',
        'request\\Requisition' => __DIR__ . '/../..' . '/request/Requisition.php',
        'route\\Router' => __DIR__ . '/../..' . '/route/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5938428efc8c77926813d04a7a56e37f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5938428efc8c77926813d04a7a56e37f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5938428efc8c77926813d04a7a56e37f::$classMap;

        }, null, ClassLoader::class);
    }
}
