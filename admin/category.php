<?php include 'admin_server.php'?>
<?php include 'header.php';
    if(isset($_POST['brand_name'])){
        $brand_name = $_POST['brand_name'];
        $status = $_POST['status'];
        // echo "<pre>";
        // print_r($_POST);

        $sql = "INSERT INTO `brands`(`brand_name`, `status`) VALUES ('$brand_name','$status')";

        mysqli_query($db, $sql);
    }
    $category = mysqli_query($db, "SELECT * FROM brands");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Quản lý danh mục</title>
</head>
<body>
    <style>
        a{
            text-decoration: none;
        }
    </style>
    <?php if(isset($_SESSION['name_ad'])){ ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h6></h6>
                        </div>
                        <div class="panel-boy">
                            <form action="" method="post" role="form">
                                <legend>Thêm mới danh mục</legend>
                                <div class="form-group">
                                    <label for="">Tên danh mục</label>
                                    <input type="text" class="form-control" name="brand_name">
                                </div>
                                <div class="form-group">
                                    <label for="">Trạng thái</label>
                                    <div class="radio">
                                        <label for="">
                                            <input type="radio" name="status" checked="checked" value="1">
                                            Hiện
                                        </label>
                                        <label for="">
                                            <input type="radio" name="status" value="0">
                                            Ẩn
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Thêm</button>
                                
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                        <legend>Danh sách danh mục</legend>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên danh mục</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($category as $key => $value) :?>
                                        <tr>
                                            <td><?php echo $key +1?></td>
                                            <td><?php echo $value['brand_name']?></td>
                                            <?php if($value['status'] ==1 ){?>
                                                <td>Hiện</td>
                                                <?php }else{?>
                                                    <td>Ẩn</td>
                                                    <?php }?>                               
                                        </tr>
                                    <?php endforeach?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>

    
</body>
</html>