<?php
session_start();
echo "User Info:<br>
Name: {$_SESSION['name']}<br>
Surname: {$_SESSION['surname']}<br>
Age: {$_SESSION['age']}<br>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="laba3.php">Back</a>
<ul>
    <?php
    foreach ($_SESSION['userInformation'] as $key => $value)
    {
        echo "<li>$key : $value</li>";
    }
    ?>
</ul>
</body>
</html>

