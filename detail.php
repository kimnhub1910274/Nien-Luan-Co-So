<?php include 'server.php'?>
<?php include 'header.php'?>
<?php
    
    $id = $_GET['id'];
    $sql_brand = "SELECT * FROM  brands ";
    $query_brand = mysqli_query($db, $sql_brand);
    $row_brand=mysqli_fetch_assoc($query_brand);

    $sql_pro = "SELECT * FROM products where pr_id = $id ";
    $query_pro = mysqli_query($db, $sql_pro);
    $row_pro=mysqli_fetch_assoc($query_pro);
?>
<title>Chi tiết</title>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <body>
        <div class="danhmuc " style="margin-top: 100px;">
        <h3 style="text-align: center;">CHI TIẾT SẢN PHẨM</h3>
        <main>  
              <form action="cart.php" method="GET">
                <div class="row">
                  <div class="col">
                    <img class="img" style="width:400px ; height:450px; margin-left: 250px; margin-bottom: 50px;" src="admin/images/<?php echo $row_pro['image'];?>" alt="">
                  </div>
                  <div class="col">
                    <p><b>MÔ TẢ</b></p>
                    <!-- Tên sp-->
                    <p><?php echo $row_pro['pr_name'];?></p>
                    <!-- Giá -->
                    <p> <?php if($row_pro['percent'] > 0){  ?>       
                      <p >
                          <del><?php echo number_format($row_pro['price'])?></del>VND
                          <span style="color: red;">
                              <?php $sale_price = $row_pro['price'] - ($row_pro['price']*($row_pro['percent']/100))?>                                                    
                              <?php echo -$row_pro['percent']?> %  
                          </span>
                      </p>
                      <p style="margin-top: -20px;">
                          <span style="color: red;">
                              <?php echo number_format($sale_price)?>
                          </span>VND
                      </p>
                      <?php }else{ ?>
                          <p>
                              <span><?php echo number_format($row_pro['price']) ?></span>VND
                          </p>
                      <?php }?></p>  
                      <!-- Mô tả                     -->
                    <p><?php echo $row_pro['description'];?></p>  
                     <!--Size  -->
                    <!-- Số lượng -->
                    <p style="margin-top: -5px;">Số lượng:</p>
                    <input type="hidden" name="action" value="add">
                    <input style="margin-top: -10px; width:50px;" type="number" name="quantity" value="1" >
                    <input type="hidden" name="id" value="<?php echo $row_pro['pr_id']?>">
                    <p style="margin-top: 10px;">    
                      <button type="submit" class="btt">Mua ngay</button>
                    </p>
                    <style>
                      .btt{
                        bottom: 20px;
                        right: 30px;
                        z-index: 99;
                        font-size: 18px;
                        border: none;
                        background-color: wheat;
                        color: #581a14;
                        padding: 10px;
                        border-radius: 4px;
                      }
                  </style>
                  
                  </div>
                </div>
              </form>
           
          
        </main> 
    </body>

</html>
<?php include 'footer.php'?>

<script>
      /* Demo purposes only */
  $("figure").mouseleave(
    function() {
      $(this).removeClass("hover");
    }
  );
</script>
<!-- <select class="form-control" name="id_si" id="" style="width:50px;">
                    <option selected>Open this select menu</option>
                            <option value="1">S</option>
                            <option value="2">M</option>
                            <option value="3">L</option>         
                      </select> -->