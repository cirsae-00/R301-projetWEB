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
                $email = $_POST['email'];
                $password = $_POST["password"];
                $player = $login->getUser($email);
                //password_verify compare la variable et le mot de passe hash stocké dans la base de donnée
                if(!$player && !(password_verify($password,$player['pwd']))){
                    $errors[] = "erreur dans le mail ou mot de passe";
                }

                if(empty($errors)) {
                    session_start();
                    $_SESSION['user_id'] = $player['player_id'];

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