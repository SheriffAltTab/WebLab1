<?php

$a1 = array(1, 2, 3, -14, 25, 6, 7);
$a2 = array(7, -9, 1, 11, 12, 6, 14);

$s1 = 0;
for ($i = 0; $i < count($a1); $i++) {
    if (abs($a1[$i]) <= 7) {
        $s1 += $a1[$i];
    }
}

$s2 = 0;
for ($i = 0; $i < count($a2); $i++) {
    if (abs($a2[$i]) <= 7) {
        $s2 += $a2[$i];
    }
}

$s = $s1 + $s2;

echo "s = " . $s;

?>