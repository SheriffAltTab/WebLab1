<?php

$matrixE = array(
    array(1, 2, -3, 4),
    array(5, -6, 7, -8),
    array(-9, 10, -11, 12),
    array(13, -14, 15, -16),
    array(17, -18, 19, 20),
);

$newMatrix = array();

for ($i = 0; $i < count($matrixE); $i++) {
    for ($j = 0; $j < count($matrixE[0]); $j++) {
        if ($matrixE[$i][$j] >= 0) {
            $newMatrix[$i][$j] = $matrixE[$i][$j] / 5;
        } else {
            $newMatrix[$i][$j] = $matrixE[$i][$j] / 10;
        }
    }
}

for ($i = 0; $i < count($newMatrix); $i++) {
    for ($j = 0; $j < count($newMatrix[0]); $j++) {
        echo $newMatrix[$i][$j] . " ";
    }
    echo "\n";
}

?>