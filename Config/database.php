<?php

return [
    'mysql' => [
        'name' => 'php_docker', // Database Name
        'username' => 'php_docker', // Database Username
        'password' => 'password', // Database Password
        'connection' => 'mysql:host=db', // Database Connection
        // 'connection' => 'mysql:host=127.0.0.1', // Database Connection
        'options' => [ // Database Connection Options
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];