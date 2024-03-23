<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обчислення значення змінної s</title>
</head>
<body>
<h2>Обчислення значення змінної s</h2>
<form action="" method="POST">
    <label for="array1">Введіть масив A1 (розділіть числа комою):</label><br>
    <input type="text" id="array1" name="array1"><br>
    <label for="array2">Введіть масив A2 (розділіть числа комою):</label><br>
    <input type="text" id="array2" name="array2"><br>
    <button type="submit">Обчислити</button>
</form>

<?php
function calculateSum($array, $limit) {
    $sum = 0;
    foreach ($array as $number) {
        if (abs($number) <= $limit) {
            $sum += $number;
        }
    }
    return $sum;
}

if (isset($_POST['array1']) && isset($_POST['array2'])) {
    $array1 = explode(',', $_POST['array1']);
    $array2 = explode(',', $_POST['array2']);

    if (count($array1) == 7 && count($array2) == 7) {
        $s1 = calculateSum($array1, 7);
        $s2 = calculateSum($array2, 7);

        $s = $s1 + $s2;

        // Виведення результату
        echo "<p>Значення змінної s: $s</p>";
    } else {
        echo "<p>Кожен масив має містити 7 елементів.</p>";
    }
}
?>
</body>
</html>
