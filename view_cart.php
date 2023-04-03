<?php include 'server.php';
include 'header.php';
    $sql= "SELECT * FROM products inner join brands on products.brand_id = brands.brand_id";
    $query = mysqli_query($db, $sql);
    $sqli= "SELECT * FROM `users` inner join `order` on `users`.`id` = `order`.`id_user`";
    $orders = mysqli_query($db, $sqli); 
    $row = mysqli_fetch_assoc($orders);

  ?>
  <title>Giỏ hàng</title>
 <div class="container" style="margin-top: 130px;">
    <?php if(isset($_SESSION['username'])){?>
        <button class="btn btn-info" style="margin-bottom:10px;">
            <a class=""  href="index.php?page_layout=order&id=<?php echo $row['id_user']?>" >Xem đơn hàng</a>
        </button>
    <?php }?>
        <div class="card">
            <div class="card-header">
                <h4>Danh sách sản phẩm</h4>
            </div>
            <div class="card-body">
                <table class="table">  
                    <thead class="thead-dark">
                        <tr>
                            <th>Ảnh sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>                              
                            <th>Đơn giá</th>
                            <th>Thành tiền</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cart as $key => $value):  ?>
                            <tr>
                                <td><img src="admin/images/<?php echo $value['image'];?>" alt="" width="200px"></td>
                                <td><?php echo $value['pr_name']?></td>
                                <td>
                                    <form action="cart.php">
                                        <input type="hidden" name="action" value="update">
                                        <input type="hidden" name="id" value="<?php echo $value['pr_id']?>">
                                        <input type="text" name="quantity" value="<?php echo $value['quantity']?>" style="width:40px;">
                                        <button type="submit" class="btt">Cập nhật</button>
                                    </form>                             
                                </td>
                                <td><?php echo $value['price']?></td>
                                <td><?php echo number_format(($value['price'] * $value['quantity']))?></td>
                                <td><a href="cart.php?id=<?php echo $value['pr_id']?>&action=delete">Xóa</a></td>  
                            </tr>
                        <?php endforeach ?>
                        <tr>
                            <td><b>TỔNG TIỀN:</b></td>
                            <td colspan="6" class="text-center "><b> <?php echo number_format(total_price($cart))?>VNĐ</b></td>
                        </tr>
                        <!-- <button class="btn btn-success" name="sb" type="submit">Đặt hàng</button> -->
                    </tbody>
                </table>
                <h5 ><a href="check-out.php" class="btn btn-success" style="float:right ;"><b>ĐẶT HÀNG</b></a></h5>  
            </div>
        </div>    
 </div>
 <style>
    .btt{
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        background-color: wheat;
        color: #581a14;
        padding: 5px;
        border-radius: 4px;
    }
</style>
 