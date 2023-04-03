<?php
return [
    'paths' => [
        'migrations' => 'db/migrations',
    ],
    'environments' => [
        'default_database' => 'development',
        'development' => [
            'adapter' => 'mysql',
            'host' => 'localhost',
            'name' => 'email',
            'user' => 'root',
            'pass' => '9213',
            'port' => '3306',
            'charset' => 'utf8',
        ],
    ],
];
?>