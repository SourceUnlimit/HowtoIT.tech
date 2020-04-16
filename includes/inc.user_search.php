<?php
error_reporting(0);
require "../includes/connect.php";
if (isset($_POST['submit_search'])){

  $code = $_POST['user_codesearch'];

  $sql = "SELECT * FROM user WHERE code='$code';";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../index.php?error=sqlerror");
    exit();
  }else {
    $result =  $conn-> query($sql);
    $row = $result->fetch_assoc();
  }


}
$conn->close();
?>