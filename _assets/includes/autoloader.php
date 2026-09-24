<?php

namespace Includes;
class Autoloader
{
    public static function register(): void
    {
        spl_autoload_register(function ($class) {

            $path = __DIR__ . '\\..\\..'.'\\' . 'modules\\' . lcfirst($class) . '.php';
            var_dump($path);
            if (file_exists($path)) {
                require $path;
                return $path;
            }
            return false;
        });
    }
}

Autoloader::register();