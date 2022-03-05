<?php
$language = "/a.{2}b/";
$text = "ahb acb aeb aeeb adcb axeb a2db";
$matches = [];
$count = preg_match_all($language, $text, $matches);
print_r($matches);
echo "<br>";
$language = "/(\d)+/";
$string = "a1b2c3";
echo preg_replace_callback($language, fn($matches) => intval($matches[0]) ** 2, $string)."<br><br>";


?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="US-ASCII">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laba3</title>
    </head>
    <body>
    <form method="POST">
        <label>
<textarea name="textToParse"
          placeholder="Текстареа"
          rows="20" cols="100"></textarea><br>
        </label>
        <input type="submit" name="getWordsAndSyms" value="Кнопка">
    </form>
    </body>
    </html>
<?php
if ($_POST['getWordsAndSyms'])
{
    if ($_POST['textToParse'])
    {
        $_SESSION['textInfo'] = str_word_count($_POST['textToParse'],
                0, 'AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz') . ' слов<br>';
        $_SESSION['textInfo'] .= strlen($_POST['textToParse']) . ' символов.<br>';
    } else
    {
        $_SESSION['textInfo'] = 'Текст отсутствует';
    }
}
echo $_SESSION['textInfo'];


?>
    <body>
    <form method="POST">
        <label>
            Name<input type="text" name="name" required><br>
            Surname<input type="text" name="surname" required><br>
            Age<input type="number" name="age" required><br>
            <input type="submit" value="Отправить" name="send">
        </label>
    </form>
    <a href="/UsersInfo.php">User's Info</a>
    </body>
<?php
if ($_POST['send']) {
    if ($_POST['name'] && $_POST['surname'] && $_POST['age']) {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['surname'] = $_POST['surname'];
        $_SESSION['age'] = $_POST['age'];
    }
}

?>
    <body>
    <form method="POST">
        <label>
            Name<input type="text" name="name2" ><br>
            Surname<input type="text" name="surname2" required><br>
            Salary<input type="number" name="salary2" required><br>
            Country<input type="text" name="country2" required><br>
            <input type="submit" value="Отправить" name="send2"><br>
        </label>
        <a href="/UsersInfo.php">User's Info</a>
    </form>
    </body>
<?php
if ($_POST['send2']) {
    if ($_POST['name2'] && $_POST['surname2'] && $_POST['salary2'] && $_POST['country2']) {
        $_SESSION['userInformation'] = array('name' => $_POST['name2'],
            'surname' => $_POST['surname2'],
            'salary' => $_POST['salary2'],
            'country' => $_POST['country2']
        );
    }
}
?>
