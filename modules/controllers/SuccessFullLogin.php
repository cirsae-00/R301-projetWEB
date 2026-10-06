<?php

namespace controllers;

class SuccessFullLogin
{
    public function execute(): void {
        new \Views\SuccessfullLoginView()->show();
    }
}
