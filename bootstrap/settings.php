<?php
/**
 * Created by PhpStorm.
 * User: donmarkus
 * Date: 07/10/2016
 * Time: 16:12
 */

return [
    'settings' => [
        'displayErrorDetails' => (bool)getenv('DISPLAY_ERRORS'),
        'db' => [
            'driver' => getenv('DB_DRIVER'),
            'database' => getenv('DB_DATABASE'),
            'host' => getenv('DDB_HOST'),
            'username' => getenv('DB_USERNAME'),
            'password' => getenv('DB_PASSWORD'),
            'collation' => 'utf8_unicode_ci',
            'charset' => 'utf8',
            'prefix' => ''
        ],
        'debug' => (bool)getenv('APP_DEBUG'),
        'whoops.editor' => 'phpstorm' // Support click to open editor
    ],
];