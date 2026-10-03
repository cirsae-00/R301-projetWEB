<?php

require '_assets/includes/autoloader.php';

try {
    
    (new includes\autoloader())-> register();
    (new controllers\Homepage())->execute();
    
} catch (\controllers\ControllersException $e) {
    
    (new \views\Error($e->getMessage()))->show();
    
}