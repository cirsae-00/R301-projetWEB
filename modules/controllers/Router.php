<?php

namespace controllers;
class Router
{
    private array $routes = [
        'home'  => \Controllers\Homepage::class,
        'login' => \Controllers\Login::class,
        //'register' => 'Register',
        'legal' => \Controllers\Mentions_legales::class,
        'pwforgotten' => \Controllers\PwForgotten::class,
    ];

    public function route(): void
    {
        $page = $_GET['page'] ?? 'home';

        if (!isset($this->routes[$page])) {
            http_response_code(404);
            require __DIR__ . '/../views/Error.php';
            return;
        }

        $class = $this->routes[$page];
        new $class()->execute();
    }

}