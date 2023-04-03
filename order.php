<?php include 'header.php'?>
<?php
    $id = $_GET['id'];
    $sql= "SELECT * FROM `users` inner join `order` on `users`.`id` = `order`.`id_user` WHERE `id_user` = $id";
    $orders = mysqli_query($db, $sql); 

?>
<?php if(isset($_SESSION['username'])){?>
    <div class="container" style="margin-top: 150px;">
    <title>Lịch sử đơn hàng</title>
        <div class="card">
            <div class="card-header"><h4>Đơn hàng đã đặt</h4></div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>STT</th>
                                <th>Mã đơn hàng </th>
                                <th>Tên khách hàng </th>
                                <th>Tổng tiền</th>
                                <th>Ngày đặt</th>
                                <th>Trạng thái</th>
                                <th>Xem chi tiết</th>                  
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($orders as $key => $value){?>
                                <tr>
                                    <td><?php echo $key +1?></td>
                                    <td><?php echo $value['id']?></td>
                                    <td><?php echo $value['fullname']?></td>
                                    <td><?php echo $value['total']?></td>
                                    <td><?php echo $value['date']?></td>
                                    <td>
                                        <?php if($value['status'] == 0){?>
                                            <span class="label-bg-red">Chưa xác nhận</span>
                                            <?php }elseif($value['status'] == 1){?>
                                                <span class="label-bg-green">Đã xác nhận</span>
                                                <?php }elseif($value['status'] == 2){ ?>
                                                    <span class="label-bg-green">Đang giao hàng</span>
                                                    <?php }elseif($value['status'] == 3){?>
                                                        <span class="label-bg-green">Giao hàng thành công</span>
                                                        <?php }elseif($value['status'] == 4){?>
                                                        <span class="label-bg-green">Giao hàng không thành công</span>
                                                            <?php }?>
                                    </td>
                                    <td>
                                        <span><a href="order-detail.php?id=<?php echo $value['id']?>">Xem</a></span>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php }?>

