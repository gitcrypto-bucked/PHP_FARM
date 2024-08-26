<?php 
namespace config;

return [
    'default' => 'mysql',
    'mysql'=>
    [
        'driver' => 'mysql' ,
        'host' =>'localhost',
        'port' =>'3306',
        'database' => 'www_portal',
        'username' =>'dev',
        'password'=> 'fast9002',
    ],
    'postgres'=>[        
        'driver' => 'postgres' ,
        'host' =>'localhost',
        'database' => 'www_portal',
        'username' =>'root',
        'password'=> 'fast9002',
    ]
]

?>