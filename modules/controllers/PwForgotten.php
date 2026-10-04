<?php

namespace controllers;

class PwForgotten
{
    public function execute(): void {
        new \Views\PwForgottenView()->show();
    }
}