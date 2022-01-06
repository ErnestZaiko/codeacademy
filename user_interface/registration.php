<?php
include 'helper.php';
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password1'];
$password2 = $_POST['password2'];

$email = clearEmail($email);

if (isPasswordValid($password, $password2) && isEmailValid($email)) {
    $data = [];
    $password = hashPassword($password);
    $data[] = [$firstName, $lastName, $email, $password];
    writeToCsv($data, 'users.csv');
}else{
    echo 'Patikrinkite duomenis ir pabandykite dar karta.';
}