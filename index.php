<?php

$x = rand(0,100);
echo "Число ".$x;

$a=1;
$b=1;

while(true) {
  if ($a > $x) {
  	echo "Задуманное число не входит в числовой ряд";
  	break;
  } elseif ($a = $x) {
  	echo "Задуманное число входит в числовой ряд";
  	break;
  } else {
  	$c = $a;
  	$a += $b;
  	$b = $c;
  }
}

echo "Число b".$b


?>