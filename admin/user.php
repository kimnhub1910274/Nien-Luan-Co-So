<?php include 'header.php'?>
<?php
    // $orders = mysqli_query($db, "SELECT order.*, users.fullname as 'fullname' FROM order JOIN users on order.id_user = users.id");
    $sql= "SELECT * FROM `users` ";
    $orders = mysqli_query($db, $sql); 
?>
<?php if(isset($_SESSION['name_ad'])){ ?>
    <div class="container">
    <title>Quản lý người dùng</title>
        <div class="card">
            <div class="card-header"><h4>Danh sách khách hàng</h4></div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>STT</th>
                                <th>Mã khách hàng </th>
                                <th>Tên khách hàng </th>
                                <th>Email</th>
                                <th>Tên đăng nhập</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($orders as $key => $value){?>
                                <tr>
                                    <td><?php echo $key +1?></td>
                                    <td><?php echo $value['id']?></td>
                                    <td><?php echo $value['fullname']?></td>
                                    <td><?php echo $value['email']?></td>
                                    <td><?php echo $value['username']?></td>
                                    
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<style>
    a{
        text-decoration: none;
    }
</style>
