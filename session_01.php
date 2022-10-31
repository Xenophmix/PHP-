<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>
<?php

echo "Hi";
session_start();

echo $_SESSION['name'];


?>
<br>
<a href="session.php">回去session首頁</a>
</body>
</html>