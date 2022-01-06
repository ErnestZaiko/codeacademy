<?php

function clearEmail($email){
    return trim(strtolower($email));
}

function isEmailValid($email){
    return strpos($email, '@') !== false;
}

function isPasswordValid($pass1, $pass2){
    return $pass1 === $pass2 && strlen($pass1) > 8;
}

function hashPassword($password){
    return md5(md5($password). 'druska');
}

// name, last name, email, pass.
function writeToCsv($data, $fileName){
    $file = fopen($fileName, 'a');
    foreach ($data as $element){
        fputcsv($file, $element);
    }
    fclose($file);
}

function readFromCsv($fileName){
    $data = [];
    $fh = fopen($fileName, 'r');
    while (!feof($fh)){
        $line = fgetcsv($fh);
        if(!empty($line)){
            $data[] = $line;
        }
    }
    fclose($fh);
    return $data;
}

function debug($data){
    echo '<pre>';
    var_dump($data);
    die();
}