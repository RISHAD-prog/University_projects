<?php
function Connection_db()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reg_db";

    try {
        $conn = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . ';charset=utf8', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $conn;
}
