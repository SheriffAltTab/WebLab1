<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Перевірка на паліндром</title>
</head>
<body>
<h2>Перевірка на паліндром</h2>
<form action="" method="GET">
    <label for="number">Введіть число:</label>
    <input type="text" id="number" name="number">
    <button type="submit">Перевірити</button>
</form>

<?php
if (isset($_GET['number'])) {
    $num = $_GET['number'];

    function isPalindrome($number) {
        $reversed = strrev($number);
        if ($number == $reversed) {
            return true;
        } else {
            return false;
        }
    }

    if (is_numeric($num)) {
        if (isPalindrome($num)) {
            echo "<p>$num є паліндромом.</p>";
        } else {
            echo "<p>$num не є паліндромом.</p>";
        }
    } else {
        echo "<p>Будь ласка, введіть числове значення.</p>";
    }
}
?>
</body>
</html>
