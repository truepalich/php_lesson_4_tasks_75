<?php

function get_fruits(array $fruits) {
  echo '<pre>';
  print_r($fruits);
  echo '</pre>';
}

get_fruits(array('banana','apple','pineapple','lemon'));
