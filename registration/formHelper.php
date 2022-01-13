<?php

function generateInput($data)
{
    $input = '';
    $input .= '<input ';
    foreach ($data as $key => $value) {
        $input .= $key . '="' . $value . '" ';
    }
    $input .= '>';
    return $input;
}


//     'type' => 'select',
//     'name' => 'children_number',
//     'options' => [0, 1, 2, 3, '4+']
function generateSelect($data)
{
    $select = '';
    $select .= '<select ';
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            foreach ($value as $option)
                $select .= '<option value="' . $option . '">' . $option . '</option>';
        } elseif ($key == 'name') {
            $select .= $key . '="' . $value . '" id="' . $value . '" >';
        }
    }
    $select .= '</select>';
    return $select;
}
