<?php

class DatabaseConnection {
    private static ?PDO $connection = null;

    private function __construct() {}

    public static function getInstance(): PDO {
        if (!self::$connection) {
            self::$connection = new PDO('mysql:host=localhost;dbname=pelanggan_db', 'root', '');
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$connection;
    }
}
