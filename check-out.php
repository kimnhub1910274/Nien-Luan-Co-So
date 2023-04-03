<title>Thanh toán</title>
<?php include 'login-server.php';
include 'header.php';
ob_start();
// session_start();
$cart = (isset($_SESSION['cart']))? $_SESSION['cart'] : [];
    $sql= "SELECT * FROM products inner join brands on products.brand_id = brands.brand_id";
    $query = mysqli_query($db, $sql); 
    $data = $_SESSION['username'] ;
    
    if(isset($_POST['order'])){
        // var_dump($_POST);
        $id_user = $data['id'];
        $note = $_POST['note'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $date = date('Y-m-d H:i:s');
        $total = 0;
        $size = $_POST['size'];
        while($row = mysqli_fetch_assoc($query)){?>
            <?php
                foreach ($cart as $key => $values){
                    $total = $values['quantity'] * $values['price'];
                  }                  
            ?>
        <?php }

        $sql_ins = "INSERT INTO `order`( `id_user`, `size`, `note`, `address`, `phone`,`total`,`date`) 
        VALUES ('$id_user',' $size',' $note','$address','$phone','$total',CURRENT_TIMESTAMP)";
        $query_ins = mysqli_query($db, $sql_ins);
      
        if($query_ins){
            $id_order = mysqli_insert_id($db);
            foreach($cart as $values){
               mysqli_query($db, "INSERT INTO `order_detail`(`id_or`, `id_pro`, `quantity`, `price`)
                VALUES ('$id_order', '$values[pr_id]', '$values[quantity]', '$values[sale_price]') ");
            }
            unset($_SESSION['cart']);
            header('location: index.php?page_layout=home');
        }
      }
  ?>
  <?php if(isset($_SESSION['username'])) {?>
    <form action="" method="POST">
        <div class="container" style="margin-top: 130px;">
            <div class="row">
                <div class="col-lg-8">
                    <table class="table">  
                        <thead class="thead-dark">
                        <tbody>
                            <?php foreach ($cart as $key => $value):  ?>
                                    <tr>
                                        <td><img src="admin/images/<?php echo $value['image'];?>" alt="" width="150px" height="150px" ></td>
                                        <td><?php echo $value['pr_name']?></td>
                                        <td><?php echo $value['quantity']?></td>
                                        <td><?php echo $value['price']?></td>
                                    </tr>
                            <?php endforeach ?>                          
                        </tbody>
                    </table>
                    <?php if(count($cart) > 0){?>
                        <select class="btt" name="size" id="size">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                        <button name="order" class="btn btn-success" style="float:right ;"><b>ĐẶT HÀNG</b></button></h5>
                    <?php }elseif(count($cart) == 0){?>
                            <h6 class="text-center">Giỏ hàng của bạn trống!!</h6>
                            <?php }?>

                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h6>ĐỊA CHỈ GIAO HÀNG</h6>
                        </div>
                        <div class="card-body">
                            <style>
                                input{
                                    width: 355px;
                                }
                            </style>
                            <form>
                                <div class="mb3" style="margin-top: -50px;">
                                    <label for="exampleInputName1" class="form-label">Họ tên</label>
                                    <input type="name"   id="exampleInputName1" name="name" value="<?php echo $data['fullname']?>" required>                        
                                </div>
                                <div class="mb3" style="margin-top: -50px;">
                                    <label  >Email</label>
                                    <input id="input" type="email" class="form-label"  name="email" value="<?php echo $data['email']?>" required>
                                </div>
                                <div class="mb3" style="margin-top: -50px;">
                                    <label for="exampleInputPhone1" class="form-label">Số điện thoại</label>
                                    <input id="exampleInputPhone1" type="text"  name ="phone" required>
                                </div>
                                <div class="mb3" style="margin-top: -50px;">
                                    <label for="exampleInputAddress1" class="form-label">Địa chỉ</label>
                                    <input id="exampleInputAddress1" type="text"  name="address" required>
                                </div>
                                <div class="mb3" style="margin-top: -50px;">
                                    <label for="exampleInputNote1" class="form-label">Ghi chú</label>
                                    <textarea name="note" id="input" class="form-control" rows="3" style="margin-bottom:10px ;"></textarea>
                                </div>
                                <!-- <button type="submit" class="btn btn-primary" >Submit</button> -->
                            </form>
                        </div>             
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <h6>TÓM TẮT ĐƠN HÀNG</h6>
                        </div>
                        <div class="card-body">
                            <p>Giá trị đơn hàng: <?php echo number_format(total_price($cart))?>VNĐ</p>
                            <p>Phí giao hàng: Miễn phí</p> 
                        </div>             
                    </div>
                </div>
            </div>  
        </div>
    </form>
    <?php }else {?>
        <div class="row">
            <div class="col">
                <div class="alert alert-danger "style="margin-top: 100px; ">
                    <strong>Vui lòng đăng nhập để mua hàng!!</strong>
                    <a href="login.php?action=check-out">Đăng nhập</a>
                    <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                </div>
            </div>
        </div>
 <?php } ?>
 <style>
    .btt{
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        background-color: wheat;
        color: #581a14;
        padding: 8px;
        border-radius: 4px;
    }
</style>