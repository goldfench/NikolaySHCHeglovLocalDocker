<?php
require "../vendor/autoload.php";
$client = new Google_Client();
$client->setApplicationName('Google Sheets API PHP Quickstart');
$client->setScopes(Google_Service_Sheets::SPREADSHEETS_READONLY);
$client->setAuthConfig('../credentials.json');
$client->setAccessType('offline');
$client->setPrompt('select_account consent');
$service = new Google_Service_Sheets($client);
$spreadsheetId = '13ixJlPRuhkFhySTPfW5Suu65t5iHVZYfPrTC0-y42uE';
$range = 'AdData!A1:D';
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();
var_dump($values);
?>

    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Доска объявлений</title>
    </head>
    <body>
    <form action="/saveinfo.php" method="GET">
        <label>
            e-mail<br>
            <input type="Email" name="Email"><br>
            Category<br>
            <select name="Categories" required>
                <option>Activities</option>
                <option>Loking for parties</option>
                <option>Traiding</option>
            </select><br>
            Headline<br>
            <input type="Text" name="Headline"><br>
            Advs<br>
            <textarea cols="100" rows="10" name="Text"></textarea>
            <br><br>
            <input type="Submit" name="Submit" value="add"><br><br>
        </label>
    </form>
    </body>
    </html>
    <br>
    <h1> Ads </h1>
    <br>

<?php

$categories = scandir(__DIR__."/categories");
$ads = [];
foreach($categories as $category){
    if ($category != "." && $category != ".."){
        $ads[$category] = scandir("categories/$category");
    }
};
echo "<table border=1><caption>Ads</caption>";
foreach($ads as $category => $arr) {
    echo "<tr><th colspan=3 align=center>" . ucfirst($category) . "</th></tr>";
    foreach ($arr as $ad) {
        if ($ad != "." && $ad != "..") {
            $file = fopen("categories/$category/$ad", "r");
            $email = fgets($file);
            $header = fgets($file);
            $adText = fgets($file);
            echo "<tr><td>$email</td><td>$header</td><td>$adText</td></tr>";
        }
    }
}
echo "</table>";
?>
<body>
<form>
    <label>
        <h1>Ads from GoogleSheets</h1>
        <table border=1>
            <tr><th>Category</th><th>Email</th><th>Header</th><th>Text</th></tr>
            <tbody>

            <?php
            foreach($values as $adData){
                echo "<tr>" . "<td>" . ucfirst($adData[0]) . "</td>";
                echo "<td>" . $adData[1] . "</td>";
                echo "<td>" . $adData[2] . "</td>";
                echo "<td>" . $adData[3] . "</td>" . "</tr>";
            }
            ?>
            </tbody>
        </table>
    </label>
</form>
</body>