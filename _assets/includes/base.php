<?php
$user = 'r301-fa';
$pass = 'Yolateamalternants20?11';


try {
    $dbh = new PDO('mysql:host=mysql-r301-fa.alwaysdata.net;dbname=r301-fa_db', $user, $pass);
    echo 'connexion réussie';
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
}
