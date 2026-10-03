<?php
namespace controllers;
//use Includes\Database\DatabaseConnection, Blog\Models\Post\PostRepository;

class Homepage
{
    public function execute(): void
    {

        (new \Views\HomepageView())->show();

    }

}
