<?php
class Database
{

    public static $connection;

    public static function setUpConnection()
    {
        if (!isset(Database::$connection)) {
            Database::$connection = new mysqli("62.72.50.204", "u795678648_travel", "Sulochana_sjr@123@", "u795678648_travel", "3306");
        }
    }

    public static function iud($q)
    {
        Database::setUpConnection();
        Database::$connection->query($q);
    }

    public static function search($q)
    {
        Database::setUpConnection();
        return Database::$connection->query($q);
    }
}
