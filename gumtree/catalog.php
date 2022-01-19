<?php

$servername = "localhost";
$username = "root";
$password = "hackme";
$dbName = "shop_lt";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$sql = 'SELECT * FROM ads';
$rez = $conn->query($sql);
$ads = $rez->fetchAll();
echo '<pre>';
print_r($ads);