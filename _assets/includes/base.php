<?php

$user = getenv("DB_USER");
$pass = getenv("DB_PASSWORD");

try {
    $dbh = new PDO('mysql:host=mysql-r301-fa.alwaysdata.net;dbname=r301-fa_db', $user, $pass);
    echo 'connexion réussie';
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
}

// ?? null = met la valeur à null si pas renseigné pour gérer les erreurs
$nom = $_POST['nom'] ?? null;
$prenom = $_POST['prenom'] ?? null;
$gender = $_POST['gender'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;


//Vérif que les champs sont renseignés
if ($nom && $prenom && $email && $password && $gender) {
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT); //PASSWORD_DEFAULT = algo de hachage

    //pas besoin de mettre l'id parce que j'ai mis l'auto increment dans mysql
    $query = 'INSERT INTO player (nom,prenom,genre,mail,pwd) VALUES (:nom,:prenom,:genre,:mail,:pwd)';

    /*préparation de la requête finale (les :variable c'est pour la sécurité + éviter)
    les erreurs de syntaxe*/
    $requete_f = $dbh->prepare($query);
    $requete_f->execute([
        ':nom'    => $nom,
        ':prenom' => $prenom,
        ':genre'  => $gender,
        ':mail'  => $email,
        ':pwd'    => $hashedPwd
    ]);

}

