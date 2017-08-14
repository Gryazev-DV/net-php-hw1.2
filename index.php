<?php

// $x = $_GET['x'];
$x = rand(0, 100);
echo "Число x = " . $x . ".";
echo PHP_EOL;

$a = 1;
$b = 1;

while(true) {
  if ($a > $x) {
  	echo "Задуманное число не входит в числовой ряд";
  	break;
  } elseif ($a == $x) {
  	echo "Задуманное число входит в числовой ряд";
  	break;
  } else {
  	$c = $a;
  	$a = $a + $b;
  	$b = $c;
  }
}



?>