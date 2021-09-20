<?php

class Dbh
{
    private static $host = "localhost";
    private static $user = "root";
    private static $pwd = "";
    private static $dbName = "sw";

    protected static function connect(){
        $dsn = 'mysql:host='. self::$host .';dbname='. self::$dbName;
        $pdo = new PDO($dsn, self::$user, self::$pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}