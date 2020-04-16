
  <form action="../includes/inc.admin_total.php" method="POST">
  <div class="form-group">
    <label>Code</label>
    <input name="user_code" class="form-control" placeholder="XXX-XXXX" style="border-bottom: 2px solid black;
  background-color: lightgrey; border-radius:0px;" required="required">
  </div>
  <div class="form-group" action="inc.user_setmoney.php" method=POST>
    <label >Số tiền khách hàng dùng</label>
    <input name="user_money" class="form-control"  placeholder="100k = 100" style="border-bottom: 2px solid black;
  background-color: lightgrey; border-radius:0px;" required="required" pattern="(?=.*[0-9]).{2,9}">
  </div>
  <button name="submit" type="submit" class="btn btn-primary">Nhập</button>
</form>