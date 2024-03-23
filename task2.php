<?php
echo "Введіть число: ";
$number = readline();

if (isPalindrome($number)) {
    echo $number . " - це паліндром.";
} else {
    echo $number . " - не є паліндромом.";
}

function isPalindrome($number) {
    $numberString = strval($number);

    $length = strlen($numberString);

    for ($i = 0; $i < $length / 2; $i++) {
        if ($numberString[$i] != $numberString[$length - 1 - $i]) {
            return false;
        }
    }

    return true;
}

?>