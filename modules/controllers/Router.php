<?php

namespace controllers;
class Router
{
    private array $routes = [
        'home'  => Homepage::class,
        'login' => Login::class,
        'register' => Register::class,
        'legal' => Mentions_legales::class,
        'pwforgotten' => PwForgotten::class,
        'successFullLogin' => SuccessFullLogin::class,
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