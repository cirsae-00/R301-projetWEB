<?php
require '_assets/includes/autoloader.php';

try {
        ini_set('log_errors', '1');
        ini_set('error_log', __DIR__ . '/logs/error_log.log');
        $ids = parse_ini_file(__DIR__ . '/_assets/includes/.env');

        foreach ($ids as $id => $value) {

            putenv("{$id}={$value}");

        }
        session_start();

        new \includes\autoloader()->register();
        new \controllers\Router()->route();
}   catch (\Exception $e) {



}

