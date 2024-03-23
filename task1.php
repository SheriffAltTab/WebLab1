<?php

$a = 2.67;
$b = -8.63;

$result = sin($a) + (log(abs($b)) / log($a)) - exp($a * $b);

echo "Оригінальна формула: sin(a) + (ln|b|)/(lna) - e^ab\n";
echo "Значення a: $a\n";
echo "Значення b: $b\n";
echo "Результат: $result\n";
?>
