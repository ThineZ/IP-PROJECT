<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>The Hygge</title>
    <link rel='stylesheet' type="text/css" href='CSS/header.css'>
</head>

<body>
    <header>
        <a href="index.php"><img class="logo" src="CSS/img/logo.png" alt="logo"></a>
        <input type="checkbox" id="tog" class="tog">
        <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="shop.php">SHOP</a></li>
                <li><a href="#">REWARD</a></li>
            </ul>
        </nav>
        <label for="tog" class="tog-label">
            <span></span>
        </label>
    </header>
</body>

</html>