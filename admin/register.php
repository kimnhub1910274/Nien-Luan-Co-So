<?php include('admin_server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Đăng Ký</title>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="fontawesome-free-6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/trangchu.css">
</head>
<body>           
  <!-- Modal -->
  <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
            <div class="">
              <div class="overlay">
              <i class="fa-solid fa-xmark" style="margin-left: 380px;width:20px"; name="cancel" value="cancel" onClick="window.location.href='home.php';" ></i>
                <form method="post" action="register.php" class="form">
                    <?php include('error.php'); ?>  
                    <div class="con">
                      <header class="head-form "><h2>Đăng Ký</h2></header>
                      <br>
                      <div class="field">                                           
                            <div class="inputt">
                              <label><b>Tên đăng nhập</b></label>
                              <input class=" input-res" type="text" placeholder="Nhập tên đăng nhập"  name="name_ad"
                                value="<?php echo $name_ad; ?>">
                            </div>
                            <div class="inputt">
                                <label><b style="margin-right: 30px; margin-bottom:50px;">Email</b></label>
                                <input class="input-res" type="text" placeholder="Nhập email"  name="email_ad"
                                    value="<?php echo $email_ad; ?>">
                            </div>
                            <div class="inputt">
                                <label><b>Mật khẩu</b></label>
                                <input class="input-res" type="password" placeholder="Nhập mật khẩu" name="password_1">
                            </div>
                            <div class="inputt">
                                <label  ><b>Nhập lại mật khẩu</b></label>
                                <input class="input-res" type="password" placeholder="Nhập lại mật khẩu"  name="password_2">
                            </div>
                            <div class="input-group" style="margin:20px 80px;">
                                <button class="btn btn-danger button" type="reset" class="btn" name="reg_user">Hủy</button>
                                <button class="bt-reg button" type="submit" class="btn" name="reg_user">Đăng Ký</button> 
                              </div>
                            <p style="color: black;">Đã có tài khoản?
                            <a button href="admin.php">Đăng Nhập!</a></p>
                        </form>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>        
            </div>
          </div>
        </div>
    </body>
</html>
<style>
    form{
      margin: 100px 530px;
      border: 2px solid;
      padding: 10px 20px;
      font-family: sans-serif;
    }
    .head-form{
      text-align: center;
      font-size: 20px;
    }
    label{
      margin-right: 200px;
    }
    .input-res{
      margin:10px 50px;
      width: 250px;
      height: 30px;
    }
    .button{
      width: 80px;
      height: 30px;
    }

</style>