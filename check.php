<?php

include "connect.php";

class CheckData
{
    public static $username;
    public static $password;

    private static function Database()
    {
        return Connection();
    }

    public static function checkLogin($checkAndRoute)
    {
        session_start();

        self::$username = $_POST['username'];
        $username = self::$username;

        self::$password = $_POST['password'];
        $password = self::$password;

        $database = self::Database();

        $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
        $query = $database->query($sql);

        $check = $query->num_rows;

        if($check) {
            header('Location: ' . $checkAndRoute);

            $_SESSION['username'] = $username;
        } else {
            echo "Error";
        }
    }
}
