<?php
class Database
{

    public static $connection;

    public static function setUpConnection()
    {
        if (!isset(Database::$connection)) {
            Database::$connection = new mysqli("49.12.121.200", "kalanacl_travelzoomlanka", "travelZOOM@24", "kalanacl_travelzoomlanka", "3306");
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
