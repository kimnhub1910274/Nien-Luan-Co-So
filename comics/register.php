<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Đăng Ký Ngay
    </title>
    <link rel="stylesheet" type="text/css"
                    href="style.css">
</head>
 
<body>
    <div class="header">
        <h2>Đăng Ký</h2>
    </div>
      
    <form method="post" action="register.php">
  
        <?php include('error.php'); ?>
  
        <div class="input-group">
            <label>Tên đăng nhập</label>
            <input type="text" name="username"
                value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email"
                value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <label>Mật khẩu</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Nhập lại mật khẩu</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="reset" class="btn" name="reg_user">
                Hủy
            </button>
            <button type="submit" class="btn"
                                name="reg_user">
                Đăng Ký
            </button>
            
        </div>
        <p>
        Đã có tài khoản?
            <a href="login.php">
                Đăng Nhập!
            </a>
        </p>
    </form>
</body>
</html>