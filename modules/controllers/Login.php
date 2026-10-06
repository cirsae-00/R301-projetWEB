<?php

namespace controllers;

use PDOException;
use \models\LoginModel;
use \views\LoginView;

class Login
{
    public function execute(): void
    {
        try {

            $errors = [];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $login = new LoginModel();
                $email = trim($_POST['email']);
                $password = $_POST["password"] ?? '';
                $player = $login->login($email, $password);

                if(empty($player) || !(password_verify($password,$player['pwd']))){

                    $errors['emailPwd'] = "erreur dans le mail ou mot de passe";

                }

                if(empty($errors)) {

                    session_regenerate_id(true);
                    $_SESSION['player_id'] = $player['player_id'];
                    header('Location: index.php?page=successFullLogin');
                    exit();

                }
            }

            new LoginView()->show($errors);
        }
        catch (PDOException $e){

            header('Location: index.php?page=errorPage');
            error_log($e->getMessage());
            exit();

        }

    }

}