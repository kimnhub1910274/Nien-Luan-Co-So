<?php
session_start();
// ob_start();
include 'admin_server.php';
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['name_ad']);
    header("location: admin_login.php");
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
        <div class="container-fluid d-flex justify-content-between">
        <!-- logo -->
        <ul class="nav d-sm-none d-md-none d-lg-flex d-xl-flex ">
            <li class="nav-item align-self-center">
                <a class=" menu nav-link  align-self-center d-none d-sm-none d-md-none d-none d-lg-flex d-xl-flex " href="ad.php" aria-current="page">
                    QUẢN LÝ SẢN PHẨM</a>
            </li>
            <li class="nav-item align-self-center">
                <a class=" menu nav-link  align-self-center d-none d-sm-none d-md-none d-none d-lg-flex d-xl-flex" style="font-weight: 400;" href="ad.php?page_layout=category">
                    QUẢN LÝ DANH MỤC  </a>
            </li>
            <li class="nav-item align-self-center">
                <a class=" menu nav-link   align-self-center d-none d-sm-none d-md-none d-none d-lg-flex d-xl-flex" style="font-weight: 400;" href="ad.php?page_layout=order">
                    QUẢN LÝ ĐƠN HÀNG</a>
            </li>
            <li class="nav-item align-self-center">
                <a class="menu nav-link   align-self-center d-none d-sm-none d-md-none d-none d-lg-flex d-xl-flex" style="font-weight: 400;" href="ad.php?page_layout=user">
                QUẢN LÝ NGƯỜI DÙNG </a>
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
                        <!-- <form class="d-flex mx-2">
                            <input class="form-control me-2 align-self-center" style="width: 400px;" type="search" placeholder="Search" aria-label="Search" >                      
                        </form> -->
                        <div class="d-flex mx-2 justify-content-end">
                            <?php 
                                if (isset($_SESSION['name_ad']) && $_SESSION['name_ad']){
                                    echo '<div class="float-end p-1">
                                    <p>
                                    <a class=" log dropdown-toggle text-light account" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"
                                    style="background: #4f2521; padding: 8px 8px; margin: 30px 10px 20px 20px; border-radius: 5px;   ">
                                    '.$_SESSION['name_ad'].'
                                    </a>
                                    
                                    <div class="collapse" id="collapseExample">
                                        <div class="">
                                        <a class="dropdown-item"  href="ad_logout.php" >Thoát</a>
                                        </div>
                                    </div>';
                                }
                            ?>
                        </div>
                        
                        <hr>
                        <div class="offcanvas-body p-0 mx-3">
                            <div class="dropdown mt-3">
                                <ul class="navbar-nav">
                                    <li class="nav-item px-xl-5 px-lg-4 px-md-3 pt-3">
                                        <a href="ad.php?page_layout=ad">Quản lý sản phẩm</a></li>
                                    <li class="nav-item px-xl-5 px-lg-4 px-md-3 pt-3">
                                        <a  href="ad.php?page_layout=category">Quản lý danh mục</a></li>
                                    <li class="nav-item  px-xl-5 px-lg-4 px-md-3 pt-3">
                                        <a href="ad.php?page_layout=cart">Quản lý đơn hàng</a></li>
                                    <li class="nav-item px-xl-5 px-lg-4 px-md-3 pt-3">
                                        <a href="ad.php?page_layout=user">Quản lý người dùng</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
                <!--search-->
                <form action="ad.php?page_layout=search" method="POST" style="margin-top: 20px ;">
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
            <div style="margin-top:15px;">
                <?php 
                    if (isset($_SESSION['name_ad']) && $_SESSION['name_ad']){
                        echo '<div class="float-end p-1">
                            <p>
                                <a class=" log dropdown-toggle text-light account" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"
                                    style="background: #4f2521; padding: 8px 8px; margin: 30px 10px 20px 20px; border-radius: 5px;   ">
                                    '.$_SESSION['name_ad'].'</a>
                            
                                <div class="collapse" id="collapseExample">
                                    <div class="">
                                        <a class="dropdown-item"  href="ad_logout.php" >Thoát</a>
                                    </div>
                                </div>
                            </p>
                        </div>';
                }?>
            </div>
                <div style="margin-top:15px;">
                    <a href="admin.php">Thoát</a>
                </div>
            </div>
        </div>               
    </header>
</html>