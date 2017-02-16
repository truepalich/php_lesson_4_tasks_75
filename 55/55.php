<?php

/*
for ($i = 1; $i <= 9; $i++) {
  for ($j = 1; $j <= $i; $j++) {
    echo $i;
  }
  echo "\n";
}
*/


$f = fopen('test.txt', 'w');

for ($i = 1; $i <= 10; $i++) {
  for ($j = 1; $j <= $i; $j++) {
    //echo $i;
    fwrite($f, $i);
  }
  //echo "\n";
  fwrite($f, '' . PHP_EOL);
}

fclose($f);
