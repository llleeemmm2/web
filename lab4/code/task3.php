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
        <tbody>
        <?php
        $entries = glob('categories/*/*.txt');
        foreach ($entries as $entry) {
            $parts = explode('/', $entry);
            $category = $parts[1];
            $title = basename($parts[2], '.txt');
            $description1 = file_get_contents($entry);
            $data = explode("\n", $description1);
            require_once __DIR__ . '/vendor/autoload.php';


            $client = new Google_Client();
            $client->setAuthConfig('credentials.json');
            $client->addScope(Google_Service_Sheets::SPREADSHEETS_READONLY);
            $service = new Google_Service_Sheets($client);

            $spreadsheetId = '19OXd7bcOi3HTQmZJT4K88n7vRzE_WC4aNe_brChwn2M';
            $range = "lab4!A1:D1000";


            $response = $service->spreadsheets_values->get($spreadsheetId, $range);
            $values = $response->getValues();
            echo "<tr>";
            echo "<td>{$data[0]}</td>";
            echo "<td>{$category}</td>";
            echo "<td>{$title}</td>";
            echo "<td>{$data[1]}</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>