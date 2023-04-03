<?php
ob_start();
session_start();
include 'login-server.php';
include 'cart-function.php';
$cart = (isset($_SESSION['cart']))? $_SESSION['cart'] : [];
$data = $_SESSION['username'] ;
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
    <link rel="stylesheet" href="fontawesome-free-6.0.0/css/all.min.css">   
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/main.css">

    
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
    <header class="header fixed" style="margin-bottom: 50px;">
                <div class="container-fluid d-flex justify-content-between" style=" margin: 10px 30px 20px 3px;">
                    <!-- logo -->
                    <a href="home.php" >
                        <img class="she" src="admin/images/She.png" alt="">
                    </a>
                    <style>
                        .she{width: 200px; height: 70px;}
                        a{
                            text-decoration: none;
                            
                        }
                    </style>
                    <ul class="nav d-sm-none d-md-none d-lg-flex d-xl-flex p-1">
                        <li class="nav-item align-self-center ">
                        <a  class=" menu nav-link  align-self-center d-none d-sm-none d-md-none d-none d-lg-flex d-xl-flex "  style="font-weight: 400;color:black;" href="home.php" aria-current="page">
                            TRANG CHỦ</a>
                        </li>
                        <li class="nav-item align-self-center">
                        <a class=" menu nav-link  align-self-center d-none d-sm-none d-md-none d-none d-lg-flex d-xl-flex" style="font-weight: 400;color:black;" href="introduce.php">
                            GIỚI THIỆU</a>
                        </li>
                        <li class="nav-item align-self-center">
                        <a class=" menu nav-link  align-self-center d-none d-sm-none d-md-none d-none d-lg-flex d-xl-flex" style="font-weight: 400;color:black;" href="product.php">
                            SẢN PHẨM</a>
                        </li>
                        <li class="nav-item align-self-center">
                        <a class="menu nav-link   align-self-center d-none d-sm-none d-md-none d-none d-lg-flex d-xl-flex" style="font-weight: 400;color:black;" href="news.php">
                            TIN TỨC </a>
                        </li>
                    </ul>
                    <!-- offcanvas menu-->
                    <div class="d-flex">
                        <div class="align-self-center me-3">
                            <nav class="navbar navbar-expand-xl navbar-expand-lg navbar-light">
                                <!-- nút menu -->
                                <button class="navbar-toggler"  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                    <span class="navbar-toggler-icon"></span></button>
                                <!-- offcanvas -->
                                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                                    <div class="offcanvas-header">
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="login">
                                        <a href="login.php" style="text-decoration: none;">Đăng nhập</a>
                                    </div>
                                    <div class="d-flex mx-2 justify-content-end">
                                        <?php 
                                            if (isset($_SESSION['username']) && $_SESSION['username']){
                                                echo '<div class="taotk">
                                                <a style="text-decoration:none;color:black;" class="nav-link dropdown-toggle text-light account"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                '.$data['username'].'</a>
                                                <ul class="dropdown-menu account_ul" aria-labelledby="navbarDropdown">
                                                    <li><a class="dropdown-item" href="logout.php" >Đăng xuất</a></li>
                                                </ul>
                                                </div>';
                                            }
                                            else{
                                                echo '<div class="taotk"> 
                                                    <ul class="dropdown-menu account_ul" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" style="text-decoration: none;" href="register.php">Đăng Ký</a></li>
                                                        <li><a class="dropdown-item" style="text-decoration: none;" href="login.php">Đăng Nhập</a></li>
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
                                                    <a href="home.php" style="text-decoration:none;color:black;">TRANG CHỦ</a>
                                                </li>
                                                <li class="nav-item px-xl-5 px-lg-4 px-md-3 pt-3">
                                                    <a  href="introduce.php" style="text-decoration:none;color:black;">GIỚI THIỆU</a>
                                                </li>
                                                <li class="nav-item  px-xl-5 px-lg-4 px-md-3 pt-3">
                                                    <a href="product.php" style="text-decoration:none;color:black;">SẢN PHẨM</a>
                                                </li>
                                                <li class="nav-item px-xl-5 px-lg-4 px-md-3 pt-3">
                                                    <a href="news.php" style="text-decoration:none;color:black;">TIN TỨC</a>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                            <!--search-->
                        <form action="index.php?page_layout=search" method="POST" style="margin-top: 20px ;">
                            <div class="dropdown align-self-center d-sm-none d-md-none d-none d-lg-flex d-xl-flex"> 
                                <div class="dropdown-content">
                                    <div  >
                                        <input class="input-search" name="tukhoa" type="text" placeholder="Tìm kiếm">        
                                    </div>
                                </div>
                                <div >
                                    <button type ="submit" name="timkiem" style="border:white ;">
                                    <i class="search fa-solid fa-magnifying-glass" ></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <style>
                            a{
                                text-decoration: none;
                            }
                        </style>
                        <?php 
                            if (isset($_SESSION['username']) && $_SESSION['username']){
                                echo '<div class="float-end p-3">
                                    <p>
                                        <a  class=" dropdown-toggle text-light account"  data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample1"
                                            style="background: #4f2521; padding: 8px 8px; margin: 30px 10px 20px 20px; border-radius: 5px;text-decoration: none;">
                                            '.$data['username'].'</a>
                                        <div class="collapse" id="collapseExample">
                                            <div class="">
                                                <a class="dropdown-item"  href="logout.php" style="text-decoration: none;" >Đăng xuất</a>
                                            </div>                                 
                                        </div>';
                            }
                            else{
                                echo '<div class="float-end p-3">
                                <a class="border-end" style="color:#e74c3c;text-decoration: none; font-weight:500; margin-right:5px; padding-right:10px;" href="register.php">Đăng Ký</a>
                                <a style="color:#e74c3c; font-weight:500; text-decoration: none; " href="login.php">Đăng Nhập</a>
                            </div>';
                            }
                        ?>
                    </div>
                            
                    <div class="cart">
                        <a href="view_cart.php" style="text-decoration: none; color:black;" ><i class="fa-solid fa-cart-shopping" ></i>
                            <span id="circle"><?php echo count($cart)?></span> 
                        </a>          
                    </div>  
                </div>
        </div>               
    </header>
</html>