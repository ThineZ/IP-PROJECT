<html>

<head>
    <link rel='stylesheet' type='text/css' href='CSS/footer.css'>
</head>

<body>
    <footer>
        <div class="footer-layout">
            <img class="logo-footer" src="CSS/img/logo.png" alt="logo" width="90px" height="90px">
            <nav class="nav-one">
                <h1>NAVINGATION</h1>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="shop.php">SHOP</a></li>
                    <li><a href="rewards.php">REWARDS</a></li>
                </ul>
            </nav>
            <nav class="nav-two">
                <?php

                if (isset($_SESSION['userId'])) {
                    echo '<h1>ACCOUNT</h1>
                        <ul>
                            <li><a href="logout.php">LOGOUT</a></li>
                            <li><a href="CART/cart.php">CART</a></li>
                        </ul>';
                } else {
                    echo '<h1>ACCOUNT</h1>
                        <ul>
                            <li><a href="login.php">LOGIN</a></li>
                            <li><a href="reg.php">REGISTER</a></li>
                        </ul>';
                }
                ?>
            </nav>
            <nav class="nav-three">
                <h1>SOCIAL MEDIA LINKS</h1>
                <a href="https://instagram.com/hygge_furnitureshop"><img src="CSS/img/insta.png" alt="insta" width="40px" height="40px"></a>
                <a href="https://twitter.com/hygge_furniture"><img src="CSS/img/twitter.png" alt="twitter" width="40px" height="40px"></a>
            </nav>
            <span class="footer_copy">@2022 HYGGE <br> ALL RIGHT RESEVER</span>
        </div>
    </footer>
</body>

</html>