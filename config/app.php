<?php
return [
    'name'    => getenv('APP_NAME') ?: 'roomup.app',
    'env'     => getenv('APP_ENV')  ?: 'production',
    'debug'   => getenv('APP_ENV') === 'development',
    'db' => [
        'host'    => getenv('DB_HOST') ?: 'roomup-mysql',
        'port'    => getenv('DB_PORT') ?: '3306',
        'user'    => getenv('DB_USER') ?: '',
        'pass'    => getenv('DB_PASS') ?: '',
    ],
];
