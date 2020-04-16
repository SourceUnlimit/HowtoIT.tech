
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/css/glyphicons.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<body style="background-color: #f2f2f2;">
  <!--  <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
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
    -->
    <script src="signup/js/global.js"></script>
<style type="text/css">
  ul.nav li a{
    color: white;
    font-weight: 500
  }

  ul.nav li.active:hover a {
    background-color: white;
    color: #212121;
  }
  
  ul.nav li:hover a {
        color: #212121
  }

  ul.nav li.active a{
    background-color: white;
    color: #212121;

  }
  ul.nav li:hover {
    background-color: white;
  }
</style>
<div class="container" style="padding:77px 160px 0px 160px">
<div style="background-color: white; border-radius: 10px; box-shadow:0px 5px 10px 0px rgba(0, 0, 0, 0.2)">
<ul class="nav" style="border-top-right-radius: 10px; border-top-left-radius: 10px; background-color: #212121;">
  <script type="text/javascript">
    $('.nav').on('click', 'li', function(){ 
      $('.nav li.active').removeClass('active'); 
      $(this).addClass('active'); 
    });
  </script>
  

  <li class="nav-item active" id="navborder" style="border-top-left-radius: 9px; font-weight: 700">
    <a class="nav-link" href="#"><span class="glyphicon glyphicon-user"></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><span class="glyphicon glyphicon-usd"> </span> Chi tiêu</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Lịch sử Salon</a>
  </li>
  <p class="col"></p>
  <li class="nav-item float-right">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
<div class="text-center">
  <h1 style="padding-top: 55px"> Name of Hero </h1>
   <small class="text-muted">Là thành viên kể từ</small>
   <div style="padding:0px 16px 0px 16px;"><div><hr></div></div>
</div>
<div style="padding:45px 16px 0px 16px">
  <dl class="row">
  <dt class="col-sm-3">Điểm tiêu dùng</dt>
  <dd class="col-sm-9"><p>100000d</p></dd>

  <dt class="col-sm-3">Code</dt>
  <dd class="col-sm-9">
    <p>69699669</p>

  <dt class="col-sm-3">Số điện thoại</dt>
  <dd class="col-sm-9"><p>09090909000</p></dd>

  <dt class="col-sm-3">Email</dt>
  <dd class="col-sm-9"><p>abc@gmail.com</p></dd>
  </dd>
</dl>
</div>
</div>
</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
