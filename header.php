<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>The Hygge</title>
    <script src="JS/header.js" defer></script>
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
                <li><a href="rewards.php">REWARD</a></li>
            </ul>
        </nav>
        <label for="tog" class="tog-label">
            <span></span>
        </label>
    </header>
</body>

</html>