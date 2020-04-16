<?php 

error_reporting(0);

session_start();
require '../includes/connect.php';
$pwd_session = $_SESSION['password'];
$user_session = $_SESSION['user'];
$sql = "SELECT * FROM admin WHERE user='$user_session' AND password='$pwd_session';";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        }else {
            //header("Location: admin_login.php");
            error_reporting(0);
            mysqli_stmt_bind_param($stmt, 'ss', $pwd_session, $user_session);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $row = mysqli_fetch_assoc($result);
            if (!$user_session == row['user'] and $pwd_session== row['password']) {
                header("Location: admin_login.php");  
            }
        } 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
	  		<h1><a class="logo">Admin control</a></h1>
        <div>
        <ul class="list-unstyled components mb-5" >
          <li class="active">
            <a href="?content=homepage" class="nav-link"><!--<span class="fa fa-home mr-3"></span>--> Thanh toán hóa đơn</a>
          </li>
          <li>
              <a href='?content=accountion'><!--<span class="fa fa-user mr-3"></span>--> Thông tin khách hàng</a>
          </li>
          <li>
            <a href="?content=save_invoice"><!--<span class="fa fa-sticky-note mr-3"></span>--> Hóa đơn đã lưu</a>
          </li>
          <li>
            <a href="?content=save_invoice"><!--<span class="fa fa-sticky-note mr-3"></span>--> Thông tin nhân viên</a>
          </li>
         <!-- <li>
         <a href="#"><span class="fa fa-sticky-note mr-3"></span> Subcription</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-paper-plane mr-3"></span> Settings</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-paper-plane mr-3"></span> Information</a>
          </li>-->
        </ul>
        </div>

    	</nav>
  
      <!-- js -->


        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">

<!--<form>
  <div class="form-group">
    <label>Code</label>
    <input name="user_code" class="form-control" placeholder="XXX-XXXX" style="border-bottom: 2px solid black;
  background-color: lightgrey; border-radius:0px;">
  </div>
  <div class="form-group" action="inc.user_setmoney.php" method=POST>
    <label >Số tiền khách hàng dùng</label>
    <input name="user_money" class="form-control"  placeholder="100k = 100000" style="border-bottom: 2px solid black;
  background-color: lightgrey; border-radius:0px;">
  </div>
  <button name="submit" type="submit" class="btn btn-primary">Nhập</button>
</form>-->


        <?php
        $content_acc = $_GET['content'];
        if ($content_acc=='accountion'){
          include 'admin_total.php';
        }
        else if ($content_acc=='homepage'){
          include 'admin_bill.php';
        }
        else if ($content_acc == 'save_invoice'){
          include 'admin_save_invoice.php';
        }
        else if ($content_acc=='bill'){
          include 'admin_search.php';
        }
        ?>
        </div>


		</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>

</html>