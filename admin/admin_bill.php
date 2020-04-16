<!DOCTYPE html>
<!-- saved from url=(0083)https://phpzag.com/demo/build-invoice-system-with-php-mysql-demo/create_invoice.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
           <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"></head>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- jQuery -->


<title>admin control</title>
<script src="./admin control_files/invoice.js.tải xuống"></script>
</script></head>
<body class="">

  
  <div class="container" style="min-height: 0px !important; height: auto !important;">
  <!-- Responsive Header -->
  <div class="container content-invoice">
  <form action="https://phpzag.com/demo/build-invoice-system-with-php-mysql-demo/create_invoice.php" id="invoice-form" method="post" class="invoice-form" role="form" novalidate=""> 
    <div class="load-animate animated fadeInUp">
      <div class="row">
                    
      </div>
      <input id="currency" type="hidden" value="$">
      <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2">
          <h3>Mã khách hàng</h3>  
                    <div class="input-group" style="
    padding-bottom: 15px">
                <div class="input-group-addon currency">CODE</div>
                <input value="" type="number" class="form-control" placeholder="">
              </div>
    <span data-placeholder="Mật khẩu"></span>
    
        </div>  
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-7">
    
        </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
            
                    
    <h3>Ngày: <span id="datetime"></span></h3>
<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
</script>
    
        </div>
        
      </div>     
        
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
          <table class="table table-bordered table-hover" id="invoiceItem"> 
            <tbody><tr>
              <th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>
    <th width="15%">Dịch vụ</th>
              <th width="15%">Thợ làm</th>
              <th width="15%">Số lượng</th>
              <th width="15%">Đơn giá</th>                
              <th width="15%">Tổng tiền</th>
            </tr>             
            <tr>
              <td><input class="itemRow" type="checkbox"></td>
              <td><select class="form-control" id="sel1">
        <option >Cắt tóc</option>
        <option>Duỗi tóc</option>
        <option>Nhuộm tóc</option>
        <option>Gội đầu</option>
        <script type="text/javascript">
            $(document).on('change', '#sel1', function(){
             var select=$("#sel1 option:selected").text();
             document.getElementById('price_1').value="200";
  });
        </script>
      </select></td>      
              <td><input type="text" name="productName[]" id="productName_1" class="form-control" autocomplete="off"></td>      
              <td><input type="number" name="quantity[]" id="quantity_1" class="form-control quantity" autocomplete="off"></td>
              <td><input type="number" name="price[]" id="price_1" class="form-control price" autocomplete="off"></td>
              <td><input type="number" name="total[]" id="total_1" class="form-control total" autocomplete="off" readonly></td>
            </tr>           
          </tbody></table>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <button class="btn btn-success" id="addRows" style="background-color: #2f89fc; border-color: #2f89fc;" type="button">Thêm</button>
          <button class="btn btn-danger delete" id="removeRows" type="button">Xóa</button>
          
        </div>
      </div>
      <div class="row"> 
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <h3>Notes: </h3>
          <div class="form-group">
            <textarea class="form-control txt" rows="5" name="notes" id="notes" placeholder="Ghi chú"></textarea>
          </div>
          <br>
          <div class="form-group">
            <input type="hidden" value="123456" class="form-control" name="userId">
            <input data-loading-text="Saving Invoice..." style="background-color: #2f89fc;" type="submit" name="invoice_btn" value="IN HÓA ĐƠN" class="btn btn-success submit_btn invoice-save-btm">           
          </div>
          
        </div>
        <div class="col-1"></div>
        <div class="col">
            <div class="form-group">
              <label>Tổng tiền thanh toán: &nbsp;</label>
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">$</span>
                <input type="number" class="form-control" name="subTotal" id="subTotal" placeholder="" readonly>
              </div>
            </div>
            
                          
            
            
            
          </span>
        </div>
      </div>
      <div class="clearfix"></div>            
    </div>
  </form>     
</div>
</div>  


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49752503-1', 'auto');
  ga('send', 'pageview');

</script>



<ins class="adsbygoogle adsbygoogle-noablate" data-adsbygoogle-status="done" style="display: none !important;"><ins id="aswift_2_expand" style="display:inline-table;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;"><ins id="aswift_2_anchor" style="display:block;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;"><iframe frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_2" name="aswift_2" style="left:0;position:absolute;top:0;border:0px;width:0px;height:0px;" src="./admin control_files/saved_resource.html"></iframe></ins></ins></ins><iframe id="google_osd_static_frame_1450893121183" name="google_osd_static_frame" style="display: none; width: 0px; height: 0px;" src="./admin control_files/saved_resource(1).html"></iframe></body><iframe id="google_esf" name="google_esf" src="./admin control_files/zrt_lookup.html" data-ad-client="ca-pub-1169273815439326" style="display: none;"></iframe></html>