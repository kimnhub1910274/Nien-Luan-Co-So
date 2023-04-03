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
    <title>Tuyệt Đỉnh</title>
    <link rel="stylesheet" href="fontawesome-free-6.0.0/css/all.min.css">   
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="story.css">

    
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
    <!-- header -->
    <header class="header">
        <div class="container inner_header">
            <div class="left_header">
                <a href="trangchu.php" class="logo">
                    COMIC
                </a>
                <nav>
                    <ul class="main_menu">
                        <li><a href="trangchu.php" class="items_menu ">
                            Trang Chủ
                        </a></li>
                        <li><a href="lichtruyen.php" class="items_menu">
                            Lịch Ra Truyện
                        </a></li>
                        <li><a href="theloai.php" class="items_menu">
                            Thể Loại
                        </a></li>
                        <li><a href="truyenmoi.php" class="items_menu">
                        New & Tredding
                        </a></li>
                    </ul>
                </nav>
            </div>
            <div class="right_header">
              <!-- search -->
              <form action="timkiem.php" method="post" class="search_box me-3">
                    <input type="text" name="search" class="search_text" placeholder="Tìm kiếm truyện" required>
                    <button class="search_btn" type="submit" name="ok">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
              </form>
            <!-- Noi dung tim kiem -->
            <div class="autocomplete" ></div>
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
              <label for="nav_menu_input" class="nav_menu_icon">
                  <i class="fa-solid fa-bars"></i>
              </label>
              <input type="checkbox" hidden id="nav_menu_input" class="nav_input">
              <label for="nav_menu_input" class="nev_menu_icon"></label>
              <div class="overlay_header"></div>
              <nav class="nav_menu">
                    <div class="d-flex border-bottom">
                        <div class="logo mt-2 ms-2">
                            COMIC
                        </div>
                        <label for="nav_menu_input" class="nav_menu_close">
                            <i class="fa-solid fa-xmark"></i>
                        </label>
                    </div>
                    <?php 
                    if (isset($_SESSION['username']) && $_SESSION['username']){
                        echo '<div class="float-end p-1">
                        <a class="nav-link dropdown-toggle text-light account" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        '.$_SESSION['username'].'</a>
                        <ul class="dropdown-menu account_ul" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" style="width:fit-content;" href="logout.php" >Thoát</a></li>
                        </ul>
                        </div>';
                    }
                    else{
                        echo '<div class="float-end p-3">
                        
                        <a class="border-end" style="color:#e74c3c; font-weight:500; margin-right:5px; padding-right:10px;" href="register.php">Đăng Ký</a>
                        <a style="color:#e74c3c; font-weight:500" href="login.php">Đăng Nhập</a>
                    
                    </div>';
                    }
                    ?>
                    <ul class="nav_menu_list border border-1">
                        <li><a class="nav_menu_item border-bottom" href="trangchu.php">
                            Trang Chủ
                        </a></li>
                        <li><a class="nav_menu_item border-bottom" href="lichtruyen.php">
                            Lịch Ra Truyện
                        </a></li>
                        <li><a class="nav_menu_item border-bottom" href="theloai.php">
                            Thể Loại
                        </a></li>
                        <li><a class="nav_menu_item" href="truyenmoi.php">
                        New & Tredding
                        </a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    </div>
    <main>
        <div class="container" style="margin-top: 40px;">
            <div class="row m-3 p-4">
              <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                  <img class="justify-content-md-center" style="width:270px; height: 380px; border-radius:5px;"
                  src="
                  https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/tuyetdinh_thumb_640x960-729813bd9c90-1629440877452-7BhOAsWq.jpg?v=0&maxW=420&format=webp                   " alt="">
              </div>
              <div class="col-7">
                  <h1 style="color: #fff; margin-top: 10px;">Tuyệt Đỉnh</h1>
                  <div class="flex py-2 px-2.5 no-underline capitalize desktop:min-w-0 mobile:py-0 mobile:px-4 social_item__0U5H7 comics flex items-center mx-2.5 mobile:flex-col null flex-row">
                        <div style="color: #fff;">
                        <i class="fa-solid fa-eye"></i>
                        <span class="social_infoNumber__8SNKv">300K</span>&nbsp;Lượt xem</span>
                        <i class="fa-solid fa-thumbs-up" style="margin-left: 5px;"></i>
                        <span>3K &nbsp;Thích</span> 
                        </div>
                    </div>
                    <button class="read"> ĐỌC NGAY</button>
                    <p>Tác giả: Tiếu Tân Vũ</p>
                    <p>Họa sĩ: Tiếu Tân Vũ</p>
                    <p>Thể loại: Hành Động, Hài Hước</p>
                    <div class="whitespace-pre-wrap undefined block"><span class="metadata_label__DARMb mr-1 capitalize">
                        <p>Mô tả: 
                            Giả Phú Quý (thủ lĩnh) đã đặt ra mục tiêu khi mới 15 tuổi – trở thành siêu cao thủ. Vì thế, cậu không ngừng tập luyện và trải qua nhiều thử thách, cuối cùng thành lập nên bang Mục Dã tiếng tăm lừng lẫy. Cùng với việc thực hiện mục tiêu, cậu đã trở thành cao thủ, nhưng đầu
                        <span id="dots">...</span>
                        <span id="more">
                            trọc lóc. Cho dù là thủ lĩnh của một bang phái, nhưng chiếc đầu trọc lóc khiến cậu vô cùng tự ti. Cậu gắng sức xây dựng lại hình ảnh bản thân, tìm kiếm danh y ở khắp nơi. Đến khi đội tóc giả quay về, nhìn thấy các anh em trong bang đều vì cậu xuống tóc, cậu cảm động muốn khóc. Một lần tình cờ biết được Thiếu Lâm Trí có công thức mọc tóc bí mật, thế là cậu cùng với phó thủ lĩnh Đường Lâm bắt đầu hành trình tìm kiếm công thức bí mật này. Chuyến đi không hề êm ả,  có đầy rẫy trò đùa và sự tranh chấp, luôn có người tới Đường Lâm kiếm chuyện gây sự bởi vì mọi người đều cạo trọc đầu. Mặt khác, Thiếu Lâm Tri Năng hy vọng thủ lĩnh có thể giúp đỡ ông giải cứu các đệ tử thoát khỏi Hắc đạo, cậu vì muốn mau chóng mọc tóc mà đồng ý lao mình vào cuộc chiến. Nhưng mà giang hồ hiểm ác, vô số trắc trở quái gở xảy ra. 
                        </span>
                            <p onclick="myFunction()" id="mybtn">Xem thêm</p>
                        </div>
                    
            </div>
                </div>
                
    </main>
    </hr>
    <footer>
        <div class="container">
            <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
            <div class="row m-3 p-4">
              <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                  <a href="#" class="logo justify-content-md-center">
                      COMIC
                  </a>
                  <p>
                      Mạng xã hội chia sẻ các nội dung video giải trí chất lượng cao, phù hợp mọi độ tuổi và an toàn cho trẻ em.
                  </p>
              </div>
              <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 link_web ">
                  <ul>
                      <h5>Trang</h5>
                      <li>Trang Chủ</li>
                      <li>Lịch ra truyện</li>
                      <li>Thể loại</li>
                      <li>New & Tredding</li>
                      <h5>Đánh Giá</h5>
                      <li class="widget">
                          <!-- Đánh giá -->
                          <div class="rating">
                              <input type="radio" name="rate" id="rate-5">
                              <label for="rate-5"><i class="fa-solid fa-star"></i></label>
                              <input type="radio" name="rate" id="rate-4">
                              <label for="rate-4"><i class="fa-solid fa-star"></i></label>
                              <input type="radio" name="rate" id="rate-3">
                              <label for="rate-3"><i class="fa-solid fa-star"></i></label>
                              <input type="radio" name="rate" id="rate-2">
                              <label for="rate-2"><i class="fa-solid fa-star"></i></label>
                              <input type="radio" name="rate" id="rate-1">
                              <label for="rate-1"><i class="fa-solid fa-star"></i></label>
                          </div>
                      </li>
                  </ul>
              </div>
              <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                  <div>
                      <h5>Thông tin liên lạc</h5>
                      <form class="py-1">
                          <div class="mb-3">
                              <label style="color: #fff;" for="exampleFormControlInput1" class="form-label">Họ Tên:</label>
                              <input type="text" class="form-control" style="width: fit-content;" id="exampleFormControlInput1">
                          </div>
                          <div class="mb-3">
                              <label style="color: #fff;" for="exampleFormControlInput2" class="form-label">Email:</label>
                              <input type="email" class="form-control" style="width: fit-content;" id="exampleFormControlInput2" placeholder="name@example.com">
                          </div>
                          <div class="mb-3">
                              <label style="color: #fff;" for="exampleFormControlTextarea1" class="form-label">Nhận xét:</label>
                              <textarea class="form-control" style="width: fit-content;" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                          <button type="submit" class="btn" style="background-color: #e74c3c; width: fit-content;">Gửi</button>
                      </form>
                      <h5>Liên kết mạng xã hội</h5>
                      <ul class="row p-0">
                          <li class="col-3"><a href="#">
                              <i class="fa-brands fa-facebook-f" style="font-size: 25px; color: #fff;"></i>
                          </a></li>
                          <li class="col-3"><a href="#">
                              <i class="fa-brands fa-instagram" style="font-size: 25px; color: #fff;"></i>
                          </a></li>
                          <li class="col-3"><a href="#">
                              <i class="fa-brands fa-twitter" style="font-size: 25px; color: #fff;"></i>
                          </a></li>
                      </ul>
                  </div>
              </div>
          </div>
        </div>
    </footer>
    <script src="main.js"></script>
    <!-- header-fixed -->
    <script>
        $(document).ready(function(){
            $(window).scroll(function(){
                if($(this).scrollTop()){
                    $('.header').addClass('fixed');
                }
                else{
                    $('.header').removeClass('fixed');
                }
            })
            $('.list').click(function(){
                $(this).addClass('active').siblings().removeClass('active');
            })
        })
    </script>
    <!-- nut top -->
    <script>
        var mybutton = document.getElementById("myBtn");
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            mybutton.style.display = "block";
            } else {
            mybutton.style.display = "none";
            }
        }
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
      <!--seemore-->
      <script>function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("mybtn");
      
        if (dots.style.display === "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "Xem thêm";
          moreText.style.display = "none";
        } else {
          dots.style.display = "none";
          btnText.innerHTML = "Rút gọn";
          moreText.style.display = "inline";
        }
      }</script>
      
    
</body>
</html>