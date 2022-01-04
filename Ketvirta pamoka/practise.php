<?php

$name = 'Ernest';
$surname = 'Zaiko';

echo getNickName($name, $surname);

function getNickName($name, $surname){
    return strtolower(substr($name, 0, 3).substr($surname, 0, 3));
}