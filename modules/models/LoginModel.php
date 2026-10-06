<?php

namespace models;
use PDO;


class LoginModel{
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
    public function getUser($email){
        $query = "SELECT player_id,mail,pwd FROM player WHERE mail = :email";
        $prepared = $this->dbh->prepare($query);
        $prepared->execute(['mail' => $email]);

        return $prepared->fetch(PDO::FETCH_ASSOC); // (auto complétion phpstorm)
    }

    public function login(string $email, string $password): void{

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        $query = 'SELECT mail,pwd FROM player WHERE mail = :mail AND password = :hashedPwd';
        $prepared = $this->dbh->prepare($query);
        $prepared->execute([
            ':mail'  => $email,
            ':hashedPwd'=> $hashedPwd
        ]);

    }
}
