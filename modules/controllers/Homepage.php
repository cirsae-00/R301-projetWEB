<?php
namespace controllers;
//use Includes\Database\DatabaseConnection, Blog\Models\Post\PostRepository;

class Homepage
{
    public function execute(): void
    {
        echo 'controller';
        (new \Views\HomepageView())->show();

    }
}
