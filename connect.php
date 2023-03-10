<?php


class dbh
{

    private $host = "localhost";

    private $user = "root";

    private $pwd = "";

    private $dbName = "virtualzone";


    protected function connect()
    {
        $dsn = 'msql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);

        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    }
}
