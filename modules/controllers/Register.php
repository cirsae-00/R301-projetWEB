<?php

namespace controllers;

use PDOException;
use \models\RegisterModel;
use \views\RegisterView;


class Register
{

    public function execute(): void
    {
        try{

            $errors = [];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $nom = trim($_POST['nom']?? '') ;
                $prenom = trim($_POST['prenom']?? '');
                $genre = $_POST['gender'];
                $email = trim($_POST['email']?? '');
                $password = $_POST['password'];


                if (!preg_match("/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/", $email)) {

                    $errors['email'] = "Votre email n'est pas valide !";

                }

                if (strlen($password) < 8) {

                    $errors['passwordLen'] = "Le mot de passe doit contenir au moins 8 caractères !";

                }
                if (!strpbrk($password, '@?!.;&%*')) {

                    $errors['passwordContent'] = "Le mot de passe doit contenir au moins 1 caractère spécial !";
                }
                if(empty($nom)) {

                    $errors['nom'] = "Votre nom ne doit pas contenir d'espaces !";

                }

                if(empty($prenom)) {

                    $errors['prenom'] = "Votre prenom ne doit pas contenir d'espaces !";

                }

                if(empty($errors)) {

                    $register = new RegisterModel();

                    if ($register -> emailExists($email)) {

                        $errors['emailExists'] = "Cet email est déjà utilisé !";

                    } else {

                        $register->register($nom, $prenom, $genre, $email, $password);
                        header('Location: index.php?page=successfulRegister');
                        exit();
                    }

                }

            }

            new RegisterView()->show($errors);
        }

        catch(PDOException $e) {

            header('Location: index.php?page=errorPage');
            error_log($e->getMessage());
            exit();

        }

    }

}