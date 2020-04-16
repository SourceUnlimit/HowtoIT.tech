<?php
if (isset($_POST['submit'])) {

  require 'connect.php';

  $user_code = $_POST['user_code'];
  $user_money = $_POST['user_money'];

    //$sql = "SECLECT * FROM user WHERE name=? AND birthday=? AND email=? AND phone=? AND code=?;";
    //$stmt =  mysqli_stmt_init($conn);
    //mysqli_stmt_bind_param($stmt, 'sssis', $rName, $rBirthday, $rEmail, $rPhone, $_SESSION['pwd']);
    //mysqli_stmt_execute();
    //mysqli_stmt_prepare($stmt, $sql);

  $sql = "SELECT * FROM user WHERE code='$user_code';";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../index.php?error=sqlerror");
    exit();
  }else {
    mysqli_stmt_bind_param($stmt, "s", $user_code);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    if ($user_code == $row['code']) {
      $user_money = $user_money + $row['money'];
      $sql = "UPDATE user SET money = '$user_money' WHERE code='$user_code';";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../register.php");
        exit();
      }else {
        mysqli_stmt_bind_param($stmt, "s", $user_money);
        mysqli_stmt_execute($stmt);
        header('Location: ../admin/admin_control.php');

        $stmt->close();
        $conn->close();
        }
      }
  }
}
?>