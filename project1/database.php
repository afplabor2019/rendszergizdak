<?php

//localhost/phpmyadmin-ban hozz létre egy Autoroad nevű adatbázist
//a database.sql tartalmát másold bele és futtasd le

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=Autoroad", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}

?>