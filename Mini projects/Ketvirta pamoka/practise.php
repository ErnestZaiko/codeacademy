<?php

$name = 'Ernest';
$surname = 'Zaiko';

echo getNickName($name, $surname);
echo "<br>";

function getNickName($name, $surname){
    return strtolower(substr($name, 0, 3).substr($surname, 0, 3)).mt_rand(1, 100);
}

//////////////////////////////////////////////////////////////////////////////////////

$title = "Labas rytas siandien yra salta lauke";
echo getSlug($title);
function getSlug($title) {
    return strtolower(str_replace(" ", "-", $title));
}

//////////////////////////////////////////////////////////////////////////////////////