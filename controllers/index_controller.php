<?php
namespace Blog\Controllers\Homepage;
use Includes\Database\DatabaseConnection, Blog\Models\Post\PostRepository;
class Homepage
{
    public function execute(): void
    {
        $postRepository = new PostRepository(DatabaseConnection::getInstance());
        $posts = $postRepository->getPosts();
        (new \Blog\Views\Post($posts))->show();
    }
}
