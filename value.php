<?php

$array = ['a', 'b', 'c'];

print_r(addItemToArray($array, 'd'));

function addItemToArray($array, $value) {
    $array[] = $value;
    return $array;
}