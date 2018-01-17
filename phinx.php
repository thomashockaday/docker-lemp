<?php

require __DIR__ . '/src/bootstrap.php';

return [
    'paths' => [
        'migrations' => __DIR__ . '/src/migrations',
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_database' => 'development',
        'production' => [
            'adapter' => 'mysql',
            'host' => getenv('MYSQL_HOST'),
            'name' => getenv('MYSQL_NAME'),
            'user' => getenv('MYSQL_USER'),
            'pass' => getenv('MYSQL_ROOT_PASSWORD'),
            'charset' => 'utf8',
        ],
        'development' => [
            'adapter' => 'mysql',
            'host' => getenv('MYSQL_HOST'),
            'name' => getenv('MYSQL_NAME'),
            'user' => getenv('MYSQL_USER'),
            'pass' => getenv('MYSQL_ROOT_PASSWORD'),
            'charset' => 'utf8',
        ],
    ],
];
