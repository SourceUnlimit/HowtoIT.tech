
<?php
#error_reporting(0);
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
<h2></h2>
<form class="form-form" method="POST">
  <div class="form-group mx-sm-3 mb-2" style="
    margin-left: 0rem !important;
">  <label>Thông tin khách hàng</label>
    <input name="user_codesearch" class="form-control" placeholder="CODE" style="border-bottom: 2px solid black;
  background-color: lightgrey; border-radius:0px;">
  </div>
  <button type="submit" name="submit_search" class="btn btn-primary mb-2">Tìm kiếm</button>
</form>
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
      <td><?php if (isset($_POST['submit_search'])){ echo $row['money']. 'k';}?></td>
    </tr>
  </tbody>
</table>
