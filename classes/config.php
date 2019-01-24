<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'Electronic';
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $sql.'<br>'.$e->getMessage();
    echo '<br>'.'ERROR YA YEHIA FL CONFIG BT3T EL DB SHOOF MAYTYN EL SERVER'.'<br>';
    die();
}
