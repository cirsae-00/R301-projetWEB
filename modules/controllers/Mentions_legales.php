<?php


namespace controllers;

class Mentions_legales
{
    public function execute(): void
    {

        (new \Views\Mentions_legalesView())->show();

    }

}