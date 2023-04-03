<?php 
ob_start();
    include 'header.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query_order = mysqli_query($db, "SELECT * FROM `order` WHERE `id` = $id");
        $order = mysqli_fetch_assoc($query_order);

        $id_user = $order['id_user'];
        $query_customer = mysqli_query($db, "SELECT * FROM `users` WHERE `id` = $id_user");
        $customer = mysqli_fetch_assoc($query_customer);

        $product = mysqli_query($db, "SELECT order_detail.id_or, order_detail.price, order_detail.quantity, 
        products.image, products.pr_name FROM order_detail JOIN products ON order_detail.id_pro = products.pr_id
        WHERE order_detail.id_or = $id ");
    }
    if(isset($_POST['status'])){
        $status = $_POST['status'];
        mysqli_query($db, "UPDATE  `order` SET `status` = '$status' WHERE  `id` = $id");
        header('location:order.php') ;
    }
        $sqli= "SELECT * FROM `users` inner join `order` on `users`.`id` = `order`.`id_user`";
        $orders = mysqli_query($db, $sqli); 
        $row = mysqli_fetch_assoc($orders);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chi tiết đơn hàng</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>
        <div class="container" style="margin-top: 150px;">
            <a href="index.php?page_layout=order&id=<?php echo $row['id_user']?>" style="text-decoration: none">Quay lại</a>
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h5 class="panel-title">Thông tin khách hàng</h5>
                        </div>
                        <div class="panel-boy text-left">
                            <h6>Tên khách hàng: <?php echo $customer['fullname']?></h6>
                            <h6>Địa chỉ: <?php echo $order['address']?></h6>
                            <h6>Số điện thoại: <?php echo $order['phone']?></h6>
                            <h6>Ghi chú: <?php echo $order['note']?></h6>
                            <h6>Ngày đặt hàng: <?php echo $order['date']?></h6>
                            <h6>Kích cỡ: <?php echo $order['size']?></h6>
                            <h6>Trạng thái đơn hàng: <?php if($order['status'] == 0){?>
                                Chưa xác nhận
                            <?php }elseif($order['status'] == 1){?>
                                Đã xác nhận
                                <?php }elseif($order['status'] == 2){?>
                                    Đang giao hàng
                                    <?php }elseif($order['status'] == 3){?>
                                        Giao hàng thành công
                                        <?php }elseif($order['status'] == 4){?>
                                            Giao hàng không thành công
                                            <?php }?>
                        </h6>                     
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h5 class="panel-title">Thông tin đơn hàng</h5>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <td>STT</td>
                                        <td>Tên sản phẩm</td>
                                        <td>Ảnh</td>
                                        <td>Số lượng</td>
                                        <td>Giá</td>
                                        <td>Thành tiền</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($product as $key => $value):?>
                                        <tr>
                                            <td><?php echo $key +1?></td>
                                            <td><?php echo $value['pr_name']?></td>
                                            <td><img src="admin/images/<?php echo $value['image']?>" alt="" width="100px"></td>
                                            <td><?php echo $value['quantity']?></td>
                                            <td><?php echo $value['price']?></td>
                                            <td><?php echo $value['quantity']*$value['price']?></td>

                                        </tr>                            
                                    <?php endforeach ?>
                                    <tr>
                                        <td><h6>Tổng</h6></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><b><?php echo number_format(total_price($product))?>VNĐ</b></td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>       
        </div>
    </body>
</html>
