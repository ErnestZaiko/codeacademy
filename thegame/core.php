<?php

include 'helper.php';

const TOOL_ROCK = 'rock';
const TOOL_PAPER = 'paper';
const TOOL_SCISSORS = 'scissors';

$toolsArray = [
    0 => TOOL_ROCK,
    1 => TOOL_PAPER,
    2 => TOOL_SCISSORS
];

if (isset($_POST['play'])) {
    $playerChoice = $_POST['tool'];
    $pcChoice = rand(0, 2);
    $pcChoice = $toolsArray[$pcChoice];
    echo '<table>';
    echo '<tr><td ><img width="200" src="image/' . $playerChoice . '.png"></td><td>VS</td><td ><img width="200" src="image/' . $pcChoice . '.png"></td></tr>';
    echo '</table>';
    if ($playerChoice == $pcChoice) {
        $rezas = 'Lygiosios';
        echo $rezas;
    } elseif ($playerChoice == TOOL_ROCK && $pcChoice == TOOL_SCISSORS) {
        $rezas = 'Laimejote';
        echo $rezas;
    } elseif ($playerChoice == TOOL_PAPER && $pcChoice == TOOL_ROCK) {
        $rezas = 'Laimejote';
        echo $rezas;
    } elseif ($playerChoice == TOOL_SCISSORS && $pcChoice == TOOL_PAPER) {
        $rezas = 'Laimejote';
        echo $rezas;
    } else {
        $rezas = 'Praleimejote';
        echo $rezas;
    }
    $data = [];
    $data[] = ['Player played with - ' . $playerChoice, 'PC played with - ' . $pcChoice, 'Rezas - ' . $rezas];
    writeToCsv($data, 'rezai.csv');
}
