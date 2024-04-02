<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обчислення PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        pre {
            background-color: #f6f6f6;
            padding: 10px;
            border-radius: 5px;
            overflow: auto;
        }

        .result {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
<h1>Обчислення PHP</h1>
<pre>
<?php

$a = 2.67;
$b = -8.63;

$result = sin($a) + (log(abs($b)) / log($a)) - exp($a * $b);

echo "Оригінальна формула: sin(a) + (ln|b|)/(lna) - e^ab\n";
echo "Значення a: $a\n";
echo "Значення b: $b\n";
echo "Результат: <span class=\"result\">$result</span>\n";

?>
    </pre>
</body>
</html>
