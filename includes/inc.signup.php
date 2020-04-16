<?php
session_start();
if (isset($_POST['submit'])) {

	require 'connect.php';

	$rName = $_POST['name'];
	$rBirthday = $_POST['birthday'];
	$rEmail = $_POST['email'];
	$rPhone = $_POST['phone'];

	if (empty($rName) or empty($rEmail) or empty($rEmail) or empty($rPhone)){
		echo 'loi';
		exit();
	} else {
		//$sql = "SECLECT * FROM user WHERE name=? AND birthday=? AND email=? AND phone=? AND code=?;";
		//$stmt =  mysqli_stmt_init($conn);
		//mysqli_stmt_bind_param($stmt, 'sssis', $rName, $rBirthday, $rEmail, $rPhone, $_SESSION['pwd']);
		//mysqli_stmt_execute();
		//mysqli_stmt_prepare($stmt, $sql);
		$sql = "INSERT INTO user (name, birthday, mail, phone, code) VALUES(?, ?, ? ,?, ?);";
		$stmt = mysqli_stmt_init($conn);

		if (!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: ../register.php");
			exit();
		}else {
		mysqli_stmt_bind_param($stmt, "sssss", $rName, $rBirthday, $rEmail, $rPhone, $_SESSION['pwd']);
		mysqli_stmt_execute($stmt);
		header('Location: ../index.php');

		$stmt->close();
		$conn->close();
		}
	}


}