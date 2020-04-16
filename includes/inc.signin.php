<?php

if (isset($_POST['login'])) {

	require 'connect.php';
	$code = $_POST['pwd_code'];

	if (empty($code)) {
		header("Location: ../index.php?error=empty");
		exit();
	}else {
		$sql = "SELECT * FROM code WHERE pwd='$code';";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../index.php?error=sqlerror");
			exit();
		}else {
			mysqli_stmt_bind_param($stmt, "s", $code);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			$row = mysqli_fetch_assoc($result);
			if ($code == $row['pwd']) {
				session_start();
				$_SESSION['id'] = $row['id'];
				$_SESSION['pwd'] = $row['pwd'];
				header("Location: ../register.php");
				$mysqli -> close();
				$stmt -> close();
				exit();
			}else {
				header('Location: ../index.php');
			}
		}
	}


}else {
	header("Location: ../index.php");
}