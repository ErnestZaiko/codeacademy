<?php


// $email = $_POST['email'];

// function isEmailValid($email)
// {
//     if(strpos($email, '@')) {
//         return true;
//     } else {
//             return false;
//     }
// }
// if(isEmailValid($email))
// {
//     echo 'Valid email';
// } else {
//     echo 'Invalid email';
// }

//////////////////////////////////////////////////////////////////

// if($_POST) {
//     echo $_POST["skaicius1"] + $_POST["skaicius2"];
// }

//////////////////////////////////////////////////////////////////

// if($_POST) {
//     if($_POST["veiksmas"] == "+")
//         echo $_POST["skaicius1"] + $_POST["skaicius2"];
//     if($_POST["veiksmas"] == "-")
//         echo $_POST["skaicius1"] - $_POST["skaicius2"];
//     if($_POST["veiksmas"] == "*")
//         echo $_POST["skaicius1"] * $_POST["skaicius2"];
//     if($_POST["veiksmas"] == "/")
//         echo $_POST["skaicius1"] / $_POST["skaicius2"];
// }

//////////////////////////////////////////////////////////////////


$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirm_password'];
function clearEmail($email)
{
    return trim(strtolower($email));
}
function isEmailValid($email)
{
    if (strpos($email, '@')) {
        return true;
    } else {
        echo 'Invalid email';
    }
}
function getNickName($name, $lastname)
{
    return trim(strtolower(substr($name, 0, 3) . substr($lastname, 0, 3)) . rand(1, 100));
}
function isPasswordValid($password, $confirmPassword)
{
    if (strlen($password) > 5) {
        if ($password == $confirmPassword) {
            return true;
        } else {
            echo 'Password and Confirm password should match!';
        }
    } else {
        echo 'Password must be at least 6 charecters long';
    }
}
function register($name, $lastname, $email, $password, $confirmPassword)
{
    if (isEmailValid(clearEmail($email))) {
        if (isPasswordValid($password, $confirmPassword)) {
            echo "Welcome " . $name . " " . $lastname;
            echo "<br>" . "Your email is: " . $email;
            echo "<br>" . "Your Username is: " . getNickName($name, $lastname);
        }
    }
}
$data = $_POST;

if (
    empty($data['name']) ||
    empty($data['lastname']) ||
    empty($data['password']) ||
    empty($data['email']) ||
    empty($data['confirm_password'])
) {

    die('Please fill all required fields!');
}
register($name, $lastname, $email, $password, $confirmPassword);

//////////////////////////////////////////////////////////////////