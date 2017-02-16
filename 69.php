<?php

function get_fruits(array $fruits) {
  
  $fruits[] = count($fruits);
  
  echo '<pre>';
  print_r($fruits);
  echo '</pre>';   
  
}

get_fruits(array('banana','apple','pineapple','lemon'));