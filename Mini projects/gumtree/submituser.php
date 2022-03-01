<?php

$servername = "localhost";
$username = "root";
$password = "hackme";
$dbName = "shop_lt";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

if (isset($_POST['createUser'])) {

    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $email = cleanEmail($_POST['email']);
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $phone = $_POST['phone'];
    $cityId = intval($_POST['city']);

    if (isPasswordValid($pass1, $pass2) && isEmailValid($email)) {

        $sql = 'INSERT INTO users (name, last_name, email, password, phone, city_id, created_at)
            VALUES ("' . $name . '", "' . $lastName . '", "' . $email . '", "' . $pass1 . '", "' . $phone . '", ' . $cityId . ', current_time)';
        $conn->query($sql);
        echo 'Registration done';
    } else {
        echo 'Check password and email, please';
    }
}

function isPasswordValid($pass1, $pass2)
{
    return $pass1 === $pass2 && strlen($pass1) > 3;
}

function isEmailValid($email)
{
    return strpos($email, '@') !== false;
}

function cleanEmail($email)
{
    return trim(strtolower($email));
}
