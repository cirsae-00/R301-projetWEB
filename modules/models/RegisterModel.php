<?php

namespace models;
use PDO;

class RegisterModel
{

    private PDO $dbh;

    public function __construct()
    {
        $this->dbh = new PDO(
            'mysql:host=mysql-r301-fa.alwaysdata.net;dbname=r301-fa_db;charset=utf8',
            getenv("DB_USER"),
            getenv("DB_PASSWORD"),
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    }

    public function emailExists(string $email): bool{

        $query = "SELECT COUNT(*) FROM player WHERE mail = :mail";
        $prepared = $this->dbh->prepare($query);
        $prepared->execute(['mail' => $email]);
        $result = $prepared -> fetchColumn();

        return $result == 1;

    }

    public function register(string $nom, string $prenom, string $genre, string $email, string $password): void{

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        $query = 'INSERT INTO player (nom,prenom,genre,mail,pwd) VALUES (:nom,:prenom,:genre,:mail,:hashedPwd)';
        $prepared = $this->dbh->prepare($query);
        $prepared->execute([
            ':nom'    => $nom,
            ':prenom' => $prenom,
            ':genre'  => $genre,
            ':mail'  => $email,
            ':hashedPwd'=> $hashedPwd
        ]);

    }

}


