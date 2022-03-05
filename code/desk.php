<?php
session_start()
?>

    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Доска объявлений</title>
    </head>
    <body>
    <form method="post">
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

<?php

function FindFiles(string $path): array
{
    $dir = dir($path);
    $files = array();
    if ($dir)
    {
        while (false !== ($name = $dir->read()))
        {
            if ($name === '.' || $name === '..') continue;
            $FullName = $path . "/" . $name;
            if (is_file($FullName)) $files[] = $name;
        }
        $dir->close();
    }
    return $files;
}

function AddFile(string $email, $category, $headline, $text)
{
    $file = fopen("./Categories/" . $category . "/" . $headline . ".txt", "w");
    fwrite($file, $email . "\n" . $headline . "\n" . $text);
}

if (!empty($_POST["Email"]) and !empty($_POST["Categories"]) and !empty($_POST["Headline"]) and !empty($_POST["Text"]))
{
    AddFile($_POST["Email"], $_POST["Categories"], $_POST["Headline"], $_POST["Text"]);
}

$path = "./Categories";
$dir = dir($path);
$category = [];
if ($dir)
{
    while (false !== ($name = $dir->read()))
    {
        if ($name === '.' || $name === '..') continue;
        $FullName = $path . "/" . $name;
        $category[] = $name;
    }
    $dir->close();
}

echo nl2br("\n");
echo '<table border="1" width="100%">';
echo '<tr bgcolor="#faebd7">';
echo '<td width="20%">' . "Categories" . '</td>';
echo '<td width="20%">' . "E-mail" . '</td>';
echo '<td width="20%">' . "Headline" . '</td>';
echo '<td width="20%">' . "Text" . '</td>';
echo '</tr>';

foreach ($category as $category_path)
{
    foreach (FindFiles('./Categories/' . $category_path) as $file)
    {
        echo '<tr>';
        $fileInfo = file('./Categories/' . $category_path . "/" . $file);
        echo '<td>' . $category_path . '</td>';
        echo '<td>' . $fileInfo[0] . '</td>';
        echo '<td>' . $fileInfo[1] . '</td>';
        echo '<td>';
        for ($i = 2; $i < sizeof($fileInfo); $i++)
        {
            echo nl2br($fileInfo[$i]);
        }
        echo '</td>';
        echo '</tr>';
    }
}
echo '</table>';