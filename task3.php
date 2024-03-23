<?php

echo "Введіть числа через кому: ";
$numbers = readline();

$numbersArray = explode(",", $numbers);

$hasOppositePair = false;
for ($i = 0; $i < count($numbersArray); $i++) {
    for ($j = $i + 1; $j < count($numbersArray); $j++) {
        if ($numbersArray[$i] + $numbersArray[$j] == 0) {
            $hasOppositePair = true;
            break 2;
        }
    }
}

if ($hasOppositePair) {
    echo "В масиві є пара протилежних чисел.";
} else {
    echo "В масиві немає пар протилежних чисел.";
}

?>