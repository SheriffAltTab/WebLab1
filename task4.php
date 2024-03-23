<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Операції з матрицею</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
<h2>Операції з матрицею</h2>
<form action="" method="POST">
    <label for="matrix">Введіть матрицю 4х5 (кожен рядок в новому рядку):</label><br>
    <textarea id="matrix" name="matrix" rows="5" cols="30"></textarea><br>
    <button type="submit">Обробити матрицю</button>
</form>

<?php
if (isset($_POST['matrix'])) {
    $input = $_POST['matrix'];
    $rows = explode("\n", $input);

    if (count($rows) == 5) {
        $matrix = [];
        foreach ($rows as $row) {
            $numbers = explode(',', $row);
            if (count($numbers) == 4) {
                $matrix[] = $numbers;
            } else {
                echo "<p>Кожен рядок має містити 4 числа.</p>";
                break;
            }
        }

        if (count($matrix) == 5) {
            function processMatrix($matrix) {
                foreach ($matrix as &$row) {
                    foreach ($row as &$element) {
                        if ($element >= 0) {
                            $element /= 5;
                        } else {
                            $element /= 10;
                        }
                    }
                }
                return $matrix;
            }

            // Обробка матриці
            $processedMatrix = processMatrix($matrix);

            // Виведення результату
            echo "<p>Оригінальна матриця:</p>";
            echo "<table>";
            foreach ($matrix as $row) {
                echo "<tr>";
                foreach ($row as $element) {
                    echo "<td>$element</td>";
                }
                echo "</tr>";
            }
            echo "</table>";

            echo "<p>Оброблена матриця:</p>";
            echo "<table>";
            foreach ($processedMatrix as $row) {
                echo "<tr>";
                foreach ($row as $element) {
                    echo "<td>$element</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    } else {
        echo "<p>Матриця має містити 5 рядків.</p>";
    }
}
?>
</body>
</html>
