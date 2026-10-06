<?php

namespace controllers;

class SuccessFullLogin
{
    public function execute(): void {
        new \Views\SuccesfullLoginView()->show();
    }
}
