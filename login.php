<html>
<head>
    <script src="JS/login.js" defer></script>
    <link rel='stylesheet' type='text/css' href='CSS/login.css'>
</head>

<body>
    <div class="login-background">
        <a href="index.php"><div class="back-home"></div></a>
        <a href="index.php"><label class="back-label"><span></span></label></a>
        <img src="CSS/img/logo.png" alt="logo" width="100px" height="100px">
        <span class="info">WELCOME</span>
        <span class="info">LOGIN/SIGN UP to get started</span>
        <form action="logininsert.php" class="form-container" method="post" name="userForm" onSubmit="return validateForm()">
            <label for="#" class="name-tag">
                EMAIL:
            </label>
            <input type="text" name="uid" placeholder="Username" class="form-control">
            <label for="#" class="name-tag">
                PASSWORD:
            </label>
            <input type="password" name="pwd" placeholder="Password" class="form-control">
            <input type="submit" name="login" value="Login">
        </form>
        <span class="reg">Not a Hygge Member yet?? <a href="reg.php">SIGN UP</a></span>
    </div>
</body>
</html>