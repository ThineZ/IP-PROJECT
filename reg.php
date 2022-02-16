<html>

<head>
    <script src="JS/header.js" defer></script>
    <link rel='stylesheet' type='text/css' href='CSS/reg.css'>
</head>

<body>
    <div class="login-background">
        <a href="index.php">
            <div class="back-home"></div>
        </a>
        <a href="index.php"><label class="back-label"><span></span></label></a>
        <img src="CSS/img/logo.png" alt="logo" width="100px" height="100px">
        <span class="info">WELCOME</span>
        <span class="info">LOGIN/SIGN UP to get started</span>
        <form action="reginsert.php" class="form-container" method="post">
            <label for="#" class="name-tag">
                EMAIL:
            </label>
            <input type="text" name="uid" placeholder="Username" class="form-control">
            <label for="#" class="name-tag">
                PASSWORD:
            </label>
            <input type="password" name="upwd" placeholder="Password" class="form-control">
            <input type="submit" name="sign-up" value="Sign Up">
            <input type="reset" name="clear" value="Clear All">
        </form>
        <span class="reg">Already Hygge Member?? <a href="login.php">LOGIN</a></span>
    </div>
</body>

</html>