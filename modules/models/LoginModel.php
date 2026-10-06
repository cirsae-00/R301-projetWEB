<?php

namespace models;
use mysql_xdevapi\Result;
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
    public function login(string $email): array|false
    {
        $query = 'SELECT mail,pwd,player_id FROM player WHERE mail = :mail';
        $prepared = $this->dbh->prepare($query);
        $prepared->execute([
            ':mail' => $email,
        ]);

        return $prepared->fetch(PDO::FETCH_ASSOC);

    }
}
