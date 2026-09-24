<?php

use Includes\Autoloader;

require '_assets/includes/autoloader.php';

try {
    /*if (filter_input(INPUT_GET, 'action')) {
        if ($_GET['action'] === 'post') {
            if (filter_input(INPUT_GET, 'id') && $_GET['id'] > 0) {
                (new \Controllers\Post\Post())->execute($_GET['id']);
            }
            throw new ControllerException('Aucun identifiant de billet envoyé');
        } 
        throw new ControllerException('La page que vous recherchez n\'existe pas');
    }*/
    (new Includes\Autoloader())-> register();
    (new \Controllers\Homepage())->execute();
} catch (\Controllers\ControllerException $e) {
    (new \Views\Error($e->getMessage()))->show();
}