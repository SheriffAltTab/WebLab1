<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Знаходження літер, що зустрічаються чотири рази</title>
</head>
<body>
<h2>Знаходження літер, що зустрічаються чотири рази</h2>
<form action="" method="POST">
    <label for="text">Введіть текст:</label><br>
    <textarea id="text" name="text" rows="4" cols="50"></textarea><br>
    <button type="submit">Знайти</button>
</form>

<?php
// Перевірка, чи було відправлено форму
if (isset($_POST['text'])) {
    // Отримання введеного тексту від користувача
    $text = $_POST['text'];

    // Визначення літер, які зустрічаються у тексті чотири рази
    function findLetters($text) {
        $lettersCount = []; // Асоціативний масив для зберігання кількості кожної літери
        $letters = preg_replace('/[^A-Za-z]/', '', $text); // Видалення не-латинських літер
        $letters = strtoupper($letters); // Перетворення на великі літери

        // Підрахунок кількості кожної літери
        for ($i = 0; $i < strlen($letters); $i++) {
            $letter = $letters[$i];
            if (isset($lettersCount[$letter])) {
                $lettersCount[$letter]++;
            } else {
                $lettersCount[$letter] = 1;
            }
        }

        // Фільтрація літер, які зустрічаються чотири рази
        $result = [];
        foreach ($lettersCount as $letter => $count) {
            if ($count == 4) {
                $result[] = $letter;
            }
        }

        return $result;
    }

    // Виведення результату
    $foundLetters = findLetters($text);
    echo "<p>Літери, які зустрічаються у тексті чотири рази: " . implode(', ', $foundLetters) . "</p>";
}
?>
</body>
</html>
