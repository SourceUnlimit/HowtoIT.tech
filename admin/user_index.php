<?php

#SECURE LOGIN!

error_reporting(0); 
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
        include 'admin_search.php';
        ?>
        </div>


		</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>

</html>