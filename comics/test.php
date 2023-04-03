<?php
session_start();
// if (!isset($_SESSION['username'])) {
//     $_SESSION['msg'] = "You have to log in first";
//     header('location: login.php');
// }
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="fontawesome-free-6.0.0/css/all.min.css">   
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    
    <link rel="stylesheet" href="css/test.css">

    
</head>
<body>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Boostrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- owl carousel -->
    <script src="owlcarousel/owl.carousel.min.js"></script>

    <!-- header -->
    <header class="header fixed">
                <div class="container d-flex justify-content-between">
                <!-- logo -->
                <a href="home.php" style="font-size: 32px; font-weight: 550; color: #000; padding: 0px;">
                She
                </a>
                <ul class="nav d-sm-none d-md-none d-lg-flex d-xl-flex ">
                    <li class="nav-item align-self-center">
                    <a class=" menu nav-link  align-self-center d-none d-sm-none d-md-none d-none d-lg-flex d-xl-flex " href="home.php" aria-current="page">
                        TRANG CHỦ
                    </a>
                    </li>
                    <li class="nav-item align-self-center">
                    <a class=" menu nav-link  align-self-center d-none d-sm-none d-md-none d-none d-lg-flex d-xl-flex" style="font-weight: 400;" href="introduce.php">
                        GIỚI THIỆU
                    </a>
                    </li>
                    <li class="nav-item align-self-center">
                    <a class=" menu nav-link   align-self-center d-none d-sm-none d-md-none d-none d-lg-flex d-xl-flex" style="font-weight: 400;" href="product.php">
                        SẢN PHẨM
                    </a>
                    </li>
                    <li class="nav-item align-self-center">
                    <a class="menu nav-link   align-self-center d-none d-sm-none d-md-none d-none d-lg-flex d-xl-flex" style="font-weight: 400;" href="contact.php">
                        LIÊN HỆ 
                    </a>
                    </li>
                    
                </ul>

                <!-- offcanvas menu-->
                <div class="d-flex">
                    <div class="align-self-center me-3">
                    <nav class="navbar navbar-expand-xl navbar-expand-lg navbar-light">
                        <!-- nút menu -->
                        <button class="navbar-toggler"  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- offcanvas -->
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <img src="images/logo.png" alt="" width="80px" height="80px">
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <form class="d-flex mx-2">
                            <input class="form-control me-2 align-self-center" style="width: 400px;" type="search" placeholder="Search" aria-label="Search" >
                            
                        </form>
                        <div class="d-flex mx-2 justify-content-end">
                        <?php 
                    if (isset($_SESSION['username']) && $_SESSION['username']){
                        
                        echo '<div class="taotk">
                        <a class="nav-link dropdown-toggle text-light account" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        '.$_SESSION['username'].'</a>
                        <ul class="dropdown-menu account_ul" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="logout.php" >Thoát</a></li>
                        </ul>
                        </div>';
                    }
                    else{
                        echo '<div class="taotk">
                        <a class="nav-link dropdown-toggle text-light account" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tài Khoản
                    </a>
                    <ul class="dropdown-menu account_ul" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="register.php">Đăng Ký</a></li>
                        <li><a class="dropdown-item" href="login.php">Đăng Nhập</a></li>
                    </ul>
                    </div>';
                    }
                ?>

                        </div>
                        <hr>
                        <div class="offcanvas-body p-0 mx-3">
                            <div class="dropdown mt-3">
                            <ul class="navbar-nav">
                                <li class="nav-item px-xl-5 px-lg-4 px-md-3 pt-3">
                                <a href="trangchu.php">
                                    MODERN
                                </a>
                                </li>
                                <li class="nav-item px-xl-5 px-lg-4 px-md-3 pt-3">
                                <a  href="ao.php">
                                    ÁO
                                </a>
                                </li>
                                <li class="nav-item  px-xl-5 px-lg-4 px-md-3 pt-3">
                                <a href="jumpsuit.php">
                                   JUMPSUIT
                                </a>
                                </li>
                                <li class="nav-item px-xl-5 px-lg-4 px-md-3 pt-3">
                                <a href="vay.php">
                                    VÁY
                                </a>
                                </li>
                                <li class="nav-item px-xl-5 px-lg-4 px-md-3 pt-3">
                                    <a href="quan.php">
                                    QUẦN
                                    </a>
                                </li>
                            </ul>
                            </div>
                        </div>
                        </div>
                    </nav>
                    </div>
                        <!--search-->
                        <div class="dropdown align-self-center d-sm-none d-md-none d-none d-lg-flex d-xl-flex"> 
                          <div class="dropdown-content">
                          <div  >
                              <input class="input-search" type="text" placeholder="Tìm kiếm">        
                          </div>
                          </div>
                          <div >
                            <button style="border:white ;">
                              <i class="search fa-solid fa-magnifying-glass" ></i>
                            </button>
                          </div>
                      </div>
                    
                     <?php 
                    if (isset($_SESSION['username']) && $_SESSION['username']){
                        echo '<div class="float-end p-1">
                        <p>
                        <a class="btn btn-primary nav-link dropdown-toggle text-light account" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        '.$_SESSION['username'].'
                        </a>
                        
                      <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                        <a class="dropdown-item"  href="logout.php" >Thoát</a>
                        </div>
                      </div>';
                    }
                    else{
                        echo '<div class="float-end p-3">
                        <a class="border-end" style="color:#e74c3c; font-weight:500; margin-right:5px; padding-right:10px;" href="register.php">Đăng Ký</a>
                        <a style="color:#e74c3c; font-weight:500" href="login.php">Đăng Nhập</a>
                         
                    </div>';
                    }
                    ?>
      <!-- Dang nhap -->

                    <!-- Dang ký -->
                    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body">
                            <form action="register.php" method="post" role="form">
          
                              <div class="">
                                <div class="overlay">
                                  <!-- LOGN IN FORM by Omar Dsoky -->
                                  <form class="login">
                                     <!--con = Container  for items in the form-->
                                     <div class="con">
                                     <!--Start  header Content  -->
                                     <header class="head-form ">
                                        <h2>Đăng Ký</h2>
                                        <!--A welcome message or an explanation of the login form -->
                                     </header>
                                     <!--End  header Content  -->
                                     <br>
                                     <div class="field-set">                    
                                     <form method="post" action="register.php">
</form>
                                  </div>
                                     </div>
                                    </div> 
                                  </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="cart">
                        <i class="fa-solid fa-cart-shopping" ></i>
                    </div>
                    <?php
                   
				 ?>
                    
                </div>
                </div>               
            </header>
</html>