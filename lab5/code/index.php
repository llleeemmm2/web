<?php
$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if (mysqli_connect_errno()) {
    printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $mysqli->real_escape_string($_POST['email']);
    $title = $mysqli->real_escape_string($_POST['title']);
    $category = $mysqli->real_escape_string($_POST['category']);
    $description = $mysqli->real_escape_string($_POST['description']);

    $mysqli->query("INSERT INTO ad (email, title, description, category) VALUES ('$email', '$title', '$description', '$category')");
}

$arr = [];
if ($result = $mysqli->query('SELECT * FROM ad ORDER BY created DESC')) {
    while ($row = $result->fetch_assoc()) {
        $arr[] = $row;
    }
    $result->close();
}
$mysqli->close();
?>
<!doctype html>
<html lang = 'en'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авито</title>
</head>
<body>
<div id="form">
    <form action="savetask3.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" required>

        <label for="category">Category</label>
        <select name="category" required>
            <option value="cars">Cars</option>
            <option value="other">Other</option>
        </select>

        <label for="title">Title</label>
        <input type="text" name="title" required>

        <label for="description">Description</label>
        <textarea rows="3" name="description"></textarea>

        <input type="submit" value="Save">
    </form>
</div>
<div id="table">
    <table>
        <thead>
        <th>Email</th>
        <th>Category</th>
        <th>Title</th>
        <th>Description</th>
        </thead>
        <?php foreach ($arr as $item): ?>
            <tr>
                <td><?= $item['email'] ?></td>
                <td><?= $item['category'] ?></td>
                <td><?= $item['title'] ?></td>
                <td><?= $item['description'] ?></td>
            </tr>
        <?php endforeach; ?>
        <tbody>
        </tbody>
    </table>
</div>
</body>
</html>