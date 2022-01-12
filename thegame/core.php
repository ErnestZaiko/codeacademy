<?php

include 'helper.php';

const TOOL_ROCK = 'rock';
const TOOL_PAPER = 'paper';
const TOOL_SCISSORS = 'scissors';

$toolsArray = [
    0 => TOOL_ROCK,
    1 => TOOL_PAPER,
    2 => TOOL_SCISSORS,
];

if (isset($_POST['play'])) {
    $playerChoice = $_POST['tool'];
    $pcChoice = rand(0, 2);
    $pcChoice = $toolsArray[$pcChoice];
    echo '<table>';
    echo '<tr><td ><img width="200" src="image/' . $playerChoice . '.png"></td><td>VS</td><td ><img width="200" src="image/' . $pcChoice . '.png"></td></tr>';
    echo '</table>';
    if ($playerChoice == $pcChoice) {
        $outcome = 'Draw';
        echo $outcome;
    } elseif ($playerChoice == TOOL_ROCK && $pcChoice == TOOL_SCISSORS) {
        $outcome = 'Player_won';
        echo $outcome;
    } elseif ($playerChoice == TOOL_PAPER && $pcChoice == TOOL_ROCK) {
        $outcome = 'Player_won';
        echo $outcome;
    } elseif ($playerChoice == TOOL_SCISSORS && $pcChoice == TOOL_PAPER) {
        $outcome = 'Player_won';
        echo $outcome;
    } else {
        $outcome = 'Player_lost';
        echo $outcome;
    }
    $data = [];
    $data[] = [$playerChoice, $pcChoice, $outcome];
    writeToCsv($data, 'outcomes.csv');
}