<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Перевірка на протилежні числа</title>
</head>
<body>
<h2>Перевірка на протилежні числа</h2>
<form action="" method="POST">
    <label for="numbers">Введіть числа через кому:</label>
    <input type="text" id="numbers" name="numbers">
    <button type="submit">Перевірити</button>
</form>

<?php
if (isset($_POST['numbers'])) {
    $input = $_POST['numbers'];
    $numbers = explode(',', $input);

    function hasOppositePair($array) {
        $oppositePairs = [];
        foreach ($array as $number) {
            if (in_array(-$number, $array)) {
                $oppositePairs[] = [$number, -$number];
            }
        }
        return $oppositePairs;
    }

    $oppositePairs = hasOppositePair($numbers);

    if (!empty($oppositePairs)) {
        echo "<p>Введені числа: " . implode(', ', $numbers) . "</p>";
        echo "<p>У введеному масиві є хоча б одна пара протилежних чисел.</p>";

    } else {
        echo "<p>Введені числа: " . implode(', ', $numbers) . "</p>";
        echo "<p>У введеному масиві немає жодної пари протилежних чисел.</p>";
    }
}
?>
</body>
</html>
