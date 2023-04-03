<?php include('admin_server.php') ;
if(isset($_POST['username'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
  }
?>

<!DOCTYPE html>
<html >
<head>
    <title>Đăng nhập</title>
        <!-- Fontawesome -->
        <link rel="stylesheet" href="fontawesome-free-6.0.0/css/all.min.css">
        <!-- CSS -->
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/main.css">

</head>
<body>
    <div class="">
      <form action="" method="POST" style="   WIDTH: 400px;
                                                border: 2px solid gray;
                                                PADDING: 10px 10px;
                                                margin: 100px 550px 100px;">     
          <div class=" ">
            <h2 style="text-align: center;">Đăng Nhập</h2>
            <?php include('error.php'); ?>
            <label for="name_ad" class="form-label">Tên đăng nhập:</label>
            <input class="form-control" name="name_ad" type="text" id="txt-input" placeholder="Nhập tên đăng nhập"> 
          </div>
          <div class="">
            <label for="pwd" class="form-label">Mật khẩu:</label>
            <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" name="password">
          </div>
          <button type="submit" name="login_ad" class="btn btn-primary" style="margin-top:10px ;">Đăng nhập</button>
          <a href="register.php">Đăng Ký</a>
      </form>
    </div>
               
</body>
</html>
<style>
  a{
    text-decoration: none;
  }
</style>