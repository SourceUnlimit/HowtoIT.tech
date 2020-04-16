<?php 
session_start();
require '../includes/connect.php';
$code = '1';
$sql = "SELECT * FROM user WHERE code='$code';";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../index.php?error=sqlerror");
    exit();
  }else {
    $result =  $conn-> query($sql);
    $row = $result->fetch_assoc();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title></title>

    <!-- Icons font CSS-->
    <link href="signup/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="signup/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="signup/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="signup/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="signup/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
               <?php 
                if (isset($code2)){
                    echo '<p class="title">Bạn đã đăng nhập với code '.$_SESSION['code']."<p/>";
                }
                else {
                    header('Location: ../index.php');
                }
                ?>
                    <h2 class="title">Thông tin thành viên</h2>
                    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Tên</th>
      <th scope="col">Ngày sinh</th>
      <th scope="col">Email</th>
      <th scope="col">Sdt</th>
      <th scope="col">Code</th>
      <th scope="col">Tổng tiền chi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['name']; ?>
      </th>
      <td><?php echo $row['birthday']; ?></td>
      <td><?php echo $row['mail']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td><?php echo $row['code']; ?></td>
      <td><?php echo $row['money']. 'k';?></td>
    </tr>
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Jquery JS-->
    <script src="signup/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="signup/vendor/select2/select2.min.js"></script>
    <script src="signup/vendor/datepicker/moment.min.js"></script>
    <script src="signup/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="signup/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
