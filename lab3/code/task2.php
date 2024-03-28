<!DOCTYPE html>
<html>
<head>
    <title>Страница с текстом</title>
</head>
<body>
<form method="post">
    <textarea name="text" rows="4" cols="50"></textarea><br>
    <button type="submit" name="submit">Посчитать</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $text = $_POST['text'];
    $words = str_word_count($text);
    $chars = strlen($text);
    echo "Количество слов: $words<br>";
    echo "Количество символов: $chars";
}
?>
</body>
</html>
