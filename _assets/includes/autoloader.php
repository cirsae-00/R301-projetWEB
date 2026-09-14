<?php
    function my_autoload(string $class): void {
        
        include __DIR__. '..\..\modules' . '\\' . $class . '.php';

    }
spl_autoload_register('my_autoload');
