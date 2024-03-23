<?php

$a = 2.67;
$b = -8.63;

$function = sin($a) + (log(abs($b)) / log($a)) - exp($a * $b);

echo "Результат: " . $function;

?>