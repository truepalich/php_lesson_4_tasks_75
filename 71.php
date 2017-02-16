<?php

$fruits = array('banana','apple','pineapple','lemon');

function my_print_r($fruits) {
    foreach ($fruits as $v) {
        if (count($fruits) == 1) {
            echo $v . '.';
            return;
        } else {
            echo $v . ', ';
            array_shift($fruits);
            return my_print_r($fruits);
        }

    }
}
my_print_r($fruits);
