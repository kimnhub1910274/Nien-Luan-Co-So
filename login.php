<?php include('login-server.php');
  if(isset($_POST['username'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
  }
?>
<!DOCTYPE html>
<html style="background-image: url('admin/images/login1.png');  font-family: 'Montserrat', sans-serif;" >
  <head>
      <title>Đăng Nhập</title>
          <link rel="stylesheet" href="fontawesome-free-6.0.0/css/all.min.css">
          <link rel="stylesheet" href="css/login.css">
  </head>
  <style>
    .input-login{
    display: inline-block;
      color: #252537;
      width: 270px;
      height: 50px;
      padding: 0 10px;
      background: #fff;
      border-radius: 5px;
       outline: none;
      border: none;  
      margin: 5px 16px;
      letter-spacing: 0.05em;
    }
    .field-set{
      margin: 65px;
    }
    h2{
      font-family: 'Montserrat', sans-serif;
      font-size: 250%;
      color: #3e403f;
      text-align: center;
    }
    a{
       text-decoration: none;
      }
  </style>
  <body>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <form action="login.php" method="post" role="form">
              <div class="">
                <div class="overlay">
                <i class="fa-solid fa-xmark btn-close text-reset" style="margin-left: 380px;width:20px"; name="cancel" value="cancel" onClick="window.location.href='home.php';" ></i>
                  <form class="login">
                      <div class="con">
                        <header class="head-form "><h2>Đăng Nhập</h2></header>                     
                        <div class="field-set">                    
                          <form action="login.php" method="POST">
                            <?php include('error.php'); ?>
                              <!-- <span class="input-item"><i class="fa-solid fa-user"></i></span> -->
                              <input class="input-login" name="username" type="text" id="txt-input" placeholder="Nhập tên đăng nhập"> 
                              <br>  
                              <!-- <span class="input-item"><i class="fa-solid fa-key"></i></span> -->
                              <input class="input-login" name="password" type="password" id="pwd" placeholder="Nhập mật khẩu" name="password">  
                          </form>
                          <button class=" bt_login log-in button" name="login_user" type="submit"> Đăng nhập </button>
                        </div> 
                        <div class="other">
                          <button class="btn bt_login submits frgt-pass button">Quên mật khẩu</button>                  
                          <button class="btn bt_login submits sign-up button" ><a href="register.php">Đăng Ký</a>
                            <i class="fa fa-user-plus" aria-hidden="true"></i></button>
                        </div>                      
                      </div> 
                  </form>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>