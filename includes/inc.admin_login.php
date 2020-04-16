<?php
$user = $_POST['user'];
$pwd = $_POST['pass'];


if (isset($_POST['submit'])) {

	require 'connect.php';


	if (empty($user and $pwd)) {
		header("Location: ../index.php?error=empty");
		exit();
	}else {
		$sql = "SELECT * FROM admin WHERE user='$user' AND password='$pwd';";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../index.php?error=sqlerror");
			exit();
		}else {
			mysqli_stmt_bind_param("ss", $user, $pwd);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			$row = mysqli_fetch_assoc($result);
			if ($user == $row['user'] and $pwd == $row['password']) {
				session_start();
				$_SESSION['id'] = $row['id'];
				$_SESSION['user'] = $row['user'];
				$_SESSION['password'] = $row['password'];
				header("Location: ../admin/admin_control.php?content=homepage");
				$mysqli -> close();
				$stmt -> close();
				exit();
			}else {
				#header('Location: ../index.php');
				echo $row['user'];
				echo $row['password'];
			}
		}
	}


}else {
	#header("Location: ../index.php");
}