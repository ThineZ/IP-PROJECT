<?php 

if (isset($_POST['sign-up'])) {

    require 'db.php';

    $username = $_POST['uid'] ;
    $password = $_POST['upwd'] ;

    if (empty($username) || empty($password)) {
        header("Location: reg.php?error=emptyfields&uid=".$username);
        exit();
    }

    else {

        $sql = "SELECT idUser FROM logininfo WHERE iduser=?";
        $stmt = mysqli_stmt_init($con);

        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: reg.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);

            if ($resultCheck > 0) {
                header("Location: reg.php?error=usertaken");
                exit();
            }
            else {
                
                $sql = "INSERT INTO logininfo(emailUser, pwdUser) VALUES (?,?)";
                $stmt = mysqli_stmt_init($con);
                
                if (!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: reg.php?error=sqlerror");
                    exit();
                }
                else {

                    $hashPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "ss", $username, $hashPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: reg.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($con);

}

else {
    header("Location: reg.php");
    exit();
}
