<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>
    Đăng Nhập
    </title>
    <link rel="stylesheet" type="text/css"
            href="style.css">
</head>
<body>
    <div class="header">
        <h2>Đăng Nhập</h2>
    </div>
    <form method="post" action="login.php">
        <?php include('error.php'); ?>
        <div class="input-group">
            <label>Tên đăng nhập</label>
            <input type="text" name="username" >
        </div>
        <div class="input-group">
            <label>Mật khẩu</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">
            Đăng Nhập
            </button>
            
        </div>
        <p>
            Tạo tài khoản mới?
            <a href="register.php">
                Đăng Ký!
            </a>
        </p>
    </form>
</body>
</html>