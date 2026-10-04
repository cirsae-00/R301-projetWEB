<?php
$user = 'r301-fa';
$pass = 'Yolateamalternants20?11';


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

if ($nom && $prenom && $email && $password) {
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT); //PASSWORD_DEFAULT = algo de hachage

    $query = 'INSERT INTO player (player_id,nom,prenom,genre,mail,pwd) VALUES 
            ('.$password.','.$prenom.','.$gender.','.$email.','.$password.')';

    /*préparation de la requête finale (les :variable c'est pour la sécurité + éviter)
    les erreurs de syntaxe*/
    $requete_f = $dbh->prepare($query);
    $requete_f->execute([
        ':nom'    => $nom,
        ':prenom' => $prenom,
        ':genre'  => $gender,
        ':email'  => $email,
        ':pwd'    => $hashedPwd
    ]);

}

