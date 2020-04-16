<?php


if (isset($_POST['submit'])) {

	require 'connect.php';
	$code = $_POST['code'];
	$sdt = $_POST['sdt'];

	if (empty($code and $sdt)) {
		header("Location: ../index.php?error=empty");
		exit();
	}else {
		#EDITING DATABASE
		$sql = "SELECT * FROM user WHERE code='$code' AND phone='$sdt';";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../index.php?error=sqlerror");
			exit();
		}else {
			mysqli_stmt_prepare($stmt, $sql);
			mysqli_stmt_bind_param($stmt, "ss", $code, $sdt);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			$row = mysqli_fetch_assoc($result);
			if ($code == $row['code'] and $sdt == $row['phone']) {
				#session_start();
				#$_SESSION['code'] = $row['code'];
				#echo $_SESSION['code'];
				#$_SESSION['user'] = $row['user'];
				#$_SESSION['password'] = $row['password'];
				#header("Location: register.php");
				#$mysqli -> close();
				#$stmt -> close();
				#exit();
			}else {
				header('Location: ../index.php');
			}
		}
	}


}else {
	#header("Location: ../index.php");
}