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

        $secretEmail = 'gary@gary.gary';

        $isEasterEgg = (isset($_SESSION['player_email']) && $_SESSION['player_email'] === $secretEmail);

        new SuccessfullLoginView()->show($_SESSION['player_id'], $isEasterEgg);
    }
}