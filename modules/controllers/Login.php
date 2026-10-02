<?php

namespace controllers;

class Login
{
    public function execute(): void
    {
        echo "login";
        (new \Views\LoginView())->show();

    }

}