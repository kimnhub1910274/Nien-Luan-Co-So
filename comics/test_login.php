<?php include('server.php');
  if(isset($_POST['username'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
  }
?>

<!DOCTYPE html>
<html >
<head>
    <title>
    Đăng Nhập
    </title>
        <!-- Fontawesome -->
        <link rel="stylesheet" href="fontawesome-free-6.0.0/css/all.min.css">
        <!-- CSS -->
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/main.css">

</head>
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
                                  <!-- LOGN IN FORM by Omar Dsoky -->
                                  <form class="login">
                                     <!--con = Container  for items in the form-->
                                     <div class="con">
                                     <!--Start  header Content  -->
                                     <header class="head-form ">
                                        <h2>Đăng Nhập</h2>
                                        <!--A welcome message or an explanation of the login form -->
                                     </header>
                                     <!--End  header Content  -->
                                     
                                     <div class="field-set">                    
                                        <form action="login.php" method="POST">
                                        <?php include('error.php'); ?>
                                          <span class="input-item">
                                            <i class="fa-solid fa-user"></i>
                                          </span>
                                          <input class="input-login" name="username" type="text" id="txt-input" placeholder="Nhập tên đăng nhập"> 
                                          <br>  
                                          <span class="input-item">
                                          <i class="fa-solid fa-key"></i>
                                        </span>
                                        <input class="input-login" name="password" type="password" id="pwd" placeholder="Nhập mật khẩu" name="password"> 
                                        
                                        </form>
                                  <!--buttons -->
                                  <!--button LogIn -->
                                        <button class=" bt_login log-in button" name="login_user" type="submit"> Đăng nhập </button>
                                     </div> 
                                  <!--other buttons -->
                                     <div class="other">
                                  <!--Forgot Password button-->
                                        <button class="btn bt_login submits frgt-pass button">Quên mật khẩu</button>
                                  <!--Sign Up button -->
                                  
                                    <button class="btn bt_login submits sign-up button" ><a href="register.php">Đăng Ký</a>
                                  <!--Sign Up font icon -->
                                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                                        </button>
                                  <!--End Other the Division -->
                                     </div>
                                       
                                  <!--End Conrainer  -->
                                    </div> 
                                    <!-- End Form -->
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