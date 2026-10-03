<?php

namespace controllers;

class Login
{
    public function execute(): void
    {

        (new \Views\LoginView())->show();

    }

}