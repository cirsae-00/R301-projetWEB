<?php

require '_assets/includes/autoloader.php';

try {
    (new includes\autoloader())-> register();
    if (isset($_GET['url'])) {

        $url = explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));
        $controller = ucfirst(strtolower($url[0]));
        //On recupère le fichier de la classe controlleur (modules/controllers/Homepage.php)
        var_dump($controller);
        $controllerLink = "controllers\\" . $controller;
        (new $controllerLink())->execute();


    } else {
        require_once 'modules/controllers/Homepage.php';
        $this->_ctrl = new Homepage($url);

    }
} catch (\controllers\ControllersException $e) {
    $errorMsg = $e->getMessage();
    require_once ('modules/views/Error.php');

}


    
