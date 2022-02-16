<?php

if (isset($_POST['login'])) {

	require 'db.php';

	$uid = $_POST['uid'];
	$password = $_POST['pwd'];

	if (empty($uid) || empty($password)) {
		header("Location: login.php?error=emptyfields");
		exit();
	} else {
		$sql = "SELECT * FROM logininfo WHERE emailUser=?;";
		$stmt = mysqli_stmt_init($con);

		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: login.php?error=sqlerror");
			exit();
		} else {
			mysqli_stmt_bind_param($stmt, "s", $uid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);

			if ($row = mysqli_fetch_assoc($result)) {
				$pwdCheck = password_verify($password, $row['pwdUser']);

				if ($pwdCheck == false) {
					header("Location: login.php?error=wrongpwd");
					exit();
				} else if ($pwdCheck == true) {
					session_start();
					$_SESSION['userId'] = $row['idUser'];
					$_SESSION['userUid'] = $row['emailUser'];

					header("Location: index.php?login=success");
					exit();
				} else {
					header("Location: login.php?error=wrongpwd");
					exit();
				}
			} else {
				header("Location: login.php?error=nouser");
				exit();
			}
		}
	}
} else {
	header("Location: login.php");
	exit();
}
