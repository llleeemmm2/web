<?php
require_once __DIR__ . '/vendor/autoload.php';

if (true === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    $email = $_POST['email'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $desc = $_POST['description'];


    $client = new Google_Client();
    $client->setApplicationName("lab4");
    $client->setAuthConfig(__DIR__. '/credentials.json');
    $client->addScope(Google_Service_Sheets::SPREADSHEETS);
    $client->setAccessType('offline');

    $service = new Google_Service_Sheets($client);
    $spreadsheetId = '19OXd7bcOi3HTQmZJT4K88n7vRzE_WC4aNe_brChwn2M';

    $values = [
        [$email, $category, $title, $desc]
    ];

    $range = "lab4!A1:D1000";
    $body = new Google_Service_Sheets_ValueRange([
        'values' => $values
    ]);
    $params = [
        'valueInputOption' => 'RAW'
    ];


    $filePath = "categories/{$category}/{$title}.txt";

    if (false === file_put_contents($filePath, "$email\n$desc")) {
        throw new Exception('Something went wrong.');
    }
    chmod($filePath, 0777);
}

$result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);


header('Location: task3.php');
exit();
?>
