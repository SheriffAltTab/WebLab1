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
if (isset($_POST['text'])) {
    $text = $_POST['text'];

    function findLetters($text) {
        $lettersCount = [];
        $letters = preg_replace('/[^A-Za-z]/', '', $text);
        $letters = strtoupper($letters);

        for ($i = 0; $i < strlen($letters); $i++) {
            $letter = $letters[$i];
            if (isset($lettersCount[$letter])) {
                $lettersCount[$letter]++;
            } else {
                $lettersCount[$letter] = 1;
            }
        }

        $result = [];
        foreach ($lettersCount as $letter => $count) {
            if ($count == 4) {
                $result[] = $letter;
            }
        }

        return $result;
    }

    $foundLetters = findLetters($text);
    echo "<p>Введений текст:</p>";
    echo "<p>$text</p>";
    echo "<p>Літери, які зустрічаються у тексті чотири рази: " . implode(', ', $foundLetters) . "</p>";
}
?>
</body>
</html>