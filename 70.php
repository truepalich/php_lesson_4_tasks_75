<?php

function is_prime_number($n){
  for($x=2; $x <= sqrt($n); $x++) {
    if($n % $x == 0) {
      return false;
    }
  }
  return true;
}


