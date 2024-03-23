<?php

echo "Введіть текст: ";
$text = readline();

$characters = str_split($text);

$frequencies = array();
foreach ($characters as $character) {
    if (!isset($frequencies[$character])) {
        $frequencies[$character] = 0;
    }
    $frequencies[$character]++;
}

foreach ($frequencies as $character => $frequency) {
    if ($frequency == 4) {
        echo $character;
    }
}

?>