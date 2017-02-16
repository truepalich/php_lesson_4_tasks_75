<?php

function get_fruits(array $fruits, $view = 123) {
    echo '<pre>';
    if ($view == 123) {
      print_r($fruits);
    } else {
      var_dump($fruits);
    }
    
  echo '</pre>';
}

get_fruits(array('banana','apple','pineapple','lemon'), 2);
