<?php

include 'formHelper.php';

$inputs = [
    [
        'type' => 'text',
        'name' => 'name',
        'placeholder' => 'vardas'
    ],
    [
        'type' => 'text',
        'name' => 'last_name',
        'placeholder' => 'pavarde'
    ],
    [
        'type' => 'password',
        'name' => 'password',
        'placeholder' => '********'
    ],
    [
        'type' => 'password',
        'name' => 'password2',
        'placeholder' => '********'
    ],
    [
        'type' => 'submit',
        'name' => 'registrer',
        'value' => 'Registruotis'
    ],
    [
        'type' => 'select',
        'name' => 'children_number',
        'options' => [0, 1, 2, 3, '4+']
    ],
    [
        'type' => 'textarea',
        'name' => 'text'
    ],

];

echo '<form action="registration.php" method="post">';

foreach ($inputs as $input) {
    if ($input['type'] !== 'select') {
        echo generateInput($input) . '<br>';
    } else {
        echo generateSelect($input);
    }
}

echo '</form>';