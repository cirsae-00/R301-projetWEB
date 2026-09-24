<?php

namespace Includes;
class Autoloader
{
    public static function register(): void
    {
        spl_autoload_register(function ($class) {

            $path = __DIR__ . DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'. DIRECTORY_SEPARATOR . 'modules'. DIRECTORY_SEPARATOR . lcfirst(str_replace('\\', DIRECTORY_SEPARATOR, $class)) . '.php';
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