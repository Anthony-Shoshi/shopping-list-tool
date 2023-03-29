<?php

trait Database
{
    private function connect()
    {
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        $dsn = "mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=utf8mb4";
        $pdo = new PDO($dsn, DBUSER, DBPASSWORD, $options);

        return $pdo;
    }

    public function query($query, $data = [])
    {
        $con = $this->connect();
        $statement = $con->prepare($query);

        $check = $statement->execute($data);

        if ($check) {
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        return false;
    }

    
}
