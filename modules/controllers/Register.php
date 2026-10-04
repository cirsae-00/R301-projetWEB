<?php

namespace controllers;

class Register
{
    public function execute(): void
    {

        new \Views\RegisterView()->show();

    }

}