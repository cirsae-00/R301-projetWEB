<?php

require '_assets/includes/autoloader.php';

try {
    
    (new Includes\Autoloader())-> register();
    (new Controllers\Homepage())->execute();
    
} catch (\Controllers\ControllerException $e) {
    
    (new \Views\Error($e->getMessage()))->show();
    
}