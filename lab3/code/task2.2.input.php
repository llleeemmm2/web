<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userData = [
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'salary' => $_POST['salary'],
        'proffesion' => $_POST['proffession']
    ];

    $_SESSION['userData'] = $userData;

    header("Location: task2.2.output.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ввод данных</title>
</head>
<body>
<h2>Введите данные пользователя:</h2>
<form method="post">
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name"><br><br>

    <label for="age">Возраст:</label>
    <input type="text" id="age" name="age"><br><br>

    <label for="salary">Зарплата:</label>
    <input type="text" id="salary" name="salary"><br><br>

    <label for="proffesion">Профессия:</label>
    <input type="text" id="proffession" name="proffession"><br><br>

    <input type="submit" value="Сохранить">
</form>
</body>
</html>

