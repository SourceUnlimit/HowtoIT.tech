<?php
	
$servername = 'localhost';
$dbUsername = 'root';
$dbPwd = 'comthitga';
$dbName = 'membercode';
$conn = mysqli_connect($servername, $dbUsername, $dbPwd, $dbName);

if (!$conn) {
	die('Connection Failed: '.mysqli_connect_error());

}
