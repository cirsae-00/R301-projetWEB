<?php

namespace controllers;

use views\SuccessfullLoginView;

class SuccessFullLogin
{
    public function execute(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['player_id'])) {
            header('Location: index.php?page=login');
            exit();
        }

        new SuccessfullLoginView()->show($_SESSION['player_id']);
    }
}