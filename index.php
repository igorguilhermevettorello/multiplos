<?php
  echo "teste";
  for ($i = 1; $i <= 100; $i++) {
    $m3 = ($i % 3 == 0);
    $m5 = ($i % 5 == 0);
    if ($m3 && $m5) {
      echo "FizzBuzz <br />";
    } elseif ($m3) {
      echo "Fizz <br />";
    } elseif ($m5) {
      echo "Buzz <br />";
    } else {
      echo "{$i} <br />";
    }

  }
?>