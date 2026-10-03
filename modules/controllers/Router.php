<?php

namespace controllers;
require '_assets/includes/autoloader.php';
include 'modules/controllers/ControllersException.php';
include 'modules/views/Error.php';


class Router
{
    private $_ctrl;

    public function routeReq()
    {
        try {
            $url = '';

            if (isset($_GET['url'])) {
                $url = explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));

                /*On récupère le premier paramètre d'url puis on met la première lettre en majuscule
                et le reste en minuscule*/
                $controller = ucfirst(strtolower($url[0]));
                //On recupère le fichier de la classe controlleur (modules/controllers/Homepage.php)
                $controllerFile = "controllers/" . $controller . ".php";
                if (file_exists($controllerFile)) {
                    require_once $controllerFile;
                    $this->_ctrl = new $controller($url);
                } //Si l'url n'existe pas on renvoie une erreur
                else {
                    throw new \controllers\ControllersException('Page introuvable');
                }
            } else {
                require_once 'modules/controllers/Homepage.php';
                $this->_ctrl = new Homepage($url);

            }
        } catch (\controllers\ControllersException $e) {
            $errorMsg = $e->getMessage();
            require_once ('modules/views/Error.php');

        }
    }
}