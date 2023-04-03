<?php include('server.php') ;
      
?>
<!DOCTYPE html>
<html style="background-image: url('admin/images/login.png');font-family: 'Montserrat', sans-serif;">
  <head>
      <title>Đăng Ký</title>
      <!-- Fontawesome -->
      <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
      <link rel="stylesheet" href="fontawesome-free-6.0.0/css/all.min.css">
      <link rel="stylesheet" href="css/register.css">
      <link rel="stylesheet" href="css/trangchu.css">
  </head>
  <body>           
      <!-- Modal -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <div class="overlay">
                <i class="fa-solid fa-xmark" style="margin-left: 400px;width:20px"; name="cancel" value="cancel" onClick="window.location.href='home.php';" ></i>               
                    <div class="col-5">
                      <div class="con">
                          <header class="head-form"> <h2>Đăng Ký</h2></header>
                            <br>
                            <div class="field">  
                              <style>
                                .field{
                                  margin-left: 30px;
                                }
                                .head-form{
                                  text-align: center;
                                  font-size: 130%;
                                }
                                a{
                                  text-decoration: none;
                                }
                              </style>                  
                              <form method="post" action="register.php">
                                      <?php include('error.php'); ?>
                                      <div class="input-g">
                                        <label><b>Tên đăng nhập</b></label>
                                        <input class="input-res" type="text" placeholder="Nhập tên đăng nhập" style="margin-left: 30px; margin-top:10px; margin-bottom:10px; border-radius:5px;" name="username"
                                          value="<?php echo $username; ?>">
                                      </div>
                                      <div class="input-g">
                                        <label><b>Họ tên</b></label>
                                        <input class="input-res" type="text" placeholder="Nhập họ tên " style="margin-left: 30px; margin-top:10px; margin-bottom:10px; border-radius:5px;" name="fullname"
                                          value="<?php echo $fullname; ?>">
                                      </div>
                                      <div class="input-g">
                                          <label><b style="margin-right: 30px; margin-bottom:50px;">Email</b></label>
                                          <input class="input-res" type="text" placeholder="Nhập email" style="margin-left: 30px;margin-top:10px; margin-bottom:10px; border-radius:5px;" name="email"
                                              value="<?php echo $email; ?>">
                                      </div>
                                      <div class="input-g">
                                          <label><b>Mật khẩu</b></label>
                                          <input class="input-res" type="password" placeholder="Nhập mật khẩu" style="margin-left: 30px;margin-top:10px; margin-bottom:10px; border-radius:5px;" name="password_1">
                                      </div>
                                      <div class="input-g">
                                          <label  ><b>Nhập lại mật khẩu</b></label>
                                          <input class="input-res" type="password" placeholder="Nhập lại mật khẩu" style="margin-left: 30px;margin-top:10px; margin-bottom:10px; border-radius:5px;" name="password_2">
                                      </div>
                                      <div class="input-group" style="margin:20px 80px;">
                                          <button class="bt-cancel button" type="reset" class="btn" name="reg_user">Hủy</button>
                                          <button class="bt-reg button" type="submit" class="btn" name="reg_user">Đăng Ký</button> 
                                      </div>
                                      <p style="color: black;">Đã có tài khoản?
                                          <a button href="login.php">Đăng Nhập!</a>
                                      </p>
                                  </form>
                            </div>
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