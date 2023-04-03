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
    <link rel="stylesheet" href="header.css">

    
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
                        <li><a href="lichtruyen.php" class="items_menu active_nav">
                            Lịch Ra Truyện
                        </a></li>
                        <li><a href="theloai.php" class="items_menu ">
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

    <!-- banner -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="banner">
                    <img src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_topic/sliderbanner_desktop-3083b57790a8-1636359174476-HvFfG3k0.jpg?v=0&amp;maxW=1200&amp;format=webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-caption banner-content">
                    <div class="banner-info">
                        <h1 class="banner-info-title">
                            Nhật Kí Sống Sót Của Nữ Phụ Phản Diện
                        </h1>
                        <p class="banner-info-overview">
                            Nguyệt, một diễn viên chuyên vai phản diện trong các bộ phim ngôn tình, nay xuyên không vào chính kịch bản phim mà mình vừa đóng, theo kịch....
                        </p>
                        <button class="btn">
                            <a href="nhatkysongsot.php" class="banner-button-link">Xem Ngay</a>
                        </button>
                    </div>
                    <div class="banner-poster">
                        <img alt="Nhật Kí Sống Sót Của Nữ Phụ Phản Diện" title="Nhật Kí Sống Sót Của Nữ Phụ Phản Diện" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/nuphu_thumb_640x960-b49f611cd199-1634696296441-g3GPK9dp.jpg?v=0&amp;maxW=420&amp;format=jpg">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="banner">
                    <img alt="Câu Lạc Bộ Anti Nhân Vật Chính" title="Câu Lạc Bộ Anti Nhân Vật Chính" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_assets/anti_thumb_1920x1080__notext_-3d3605a1bf54-1628478361632-I69zrwav.jpg?v=0&amp;maxW=1400" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-caption banner-content">
                    <div class="banner-info">
                        <h1 class="banner-info-title">
                            Câu Lạc Bộ Anti Nhân Vật Chính
                        </h1>
                        <p class="banner-info-overview">
                            Vì lỡ buông lời mạt sát một tiểu thuyết rác mà 4 cô bạn thân bị lôi vào chính cuốn truyện đó. Nhiệm vụ của họ là phải khiến nam nữ chính đến với nhau mà không dựa vào những tình huống nhảm nhí mà chính họ căm ghét. Vì mục tiêu quay lại thế giới cũ, 4 cô anti đành hạ IQ của mình xuống bằng IQ của nhân vật chính, nhưng có hạ bao nhiêu cũng không đủ…
                        </p>
                        <button class="btn">
                            <a href="caulacboanti.php" class="banner-button-link">Xem Ngay</a>
                        </button>
                    </div>
                    <div class="banner-poster">
                        <img alt="Câu Lạc Bộ Anti Nhân Vật Chính" title="Câu Lạc Bộ Anti Nhân Vật Chính" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/vertical_thumbnail-1514ac86d743-1628478322840-Il7X9bC4.jpg?v=0&amp;maxW=420&amp;format=jpg">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="banner">
                    <img alt="Tuyệt Đỉnh" title="Tuyệt Đỉnh" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_assets/tuyetdinh_thumb_1920x1080__notext_-2d74d78a5654-1629684498485-Ua4kGx9Y.jpg?v=0&amp;maxW=1400" class="d-block w-100">
                </div>
                <div class="carousel-caption banner-content">
                    <div class="banner-info">
                        <h1 class="banner-info-title">
                            Tuyệt Đỉnh
                        </h1>
                        <p class="banner-info-overview">
                            Giả Phú Quý (thủ lĩnh) đã đặt ra mục tiêu khi mới 15 tuổi – trở thành siêu cao thủ. Vì thế, cậu không ngừng tập luyện và trải qua nhiều thử thách, cuối cùng thành lập nên bang Mục Dã tiếng tăm lừng lẫy. Cùng với việc thực hiện mục tiêu,...
                        </p>
                        <button class="btn">
                            <a href="tuyetdinh.php" class="banner-button-link">Xem Ngay</a>
                        </button>
                    </div>
                    <div class="banner-poster">
                        <img alt="Tuyệt Đỉnh" title="Tuyệt Đỉnh" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/tuyetdinh_thumb_640x960-729813bd9c90-1629440877452-7BhOAsWq.jpg?v=0&amp;maxW=420&amp;format=jpg">                        
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="banner">
                    <img alt="Bỗng Một Ngày Trở Thành Con Gái Nhà Vua" title="Bỗng Một Ngày Trở Thành Con Gái Nhà Vua" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_assets/cgnv_thumb_1920x1080__notext_-b6f0ee6a4280-1629684528924-qtsoOoN6.jpg?v=0&amp;maxW=1400" class="d-block w-100">
                </div>
                <div class="carousel-caption banner-content">
                    <div class="banner-info">
                        <h1 class="banner-info-title">
                            Bỗng Một Ngày Trở Thành Con Gái Nhà Vua
                        </h1>
                        <p class="banner-info-overview">
                            Tai nạn xe khiến cô xuyên không vào thế giới phép thuật. Một giải đấu lại khiến cô trở thành công chúa được hoàng đế nuôi dưỡng. Chỉ là, công chúa nhà người ta đều tận hưởng cuộc sống xúng xính áo gấm lụa là, cao lương mỹ vị no đủ. Tại sao đến lượt cô lại là những ngày tháng sống trong kho củi cũ...
                        </p>
                        <button class="btn">
                            <a href="bongmotngay.php" class="banner-button-link">Xem Ngay</a>
                        </button>
                    </div>
                    <div class="banner-poster">
                        <img alt="Bỗng Một Ngày Trở Thành Con Gái Nhà Vua" title="Bỗng Một Ngày Trở Thành Con Gái Nhà Vua" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/cgnv_thumb_640x960-efc26c426e5a-1628236333906-FJaLHrt0.jpg?v=0&maxW=420&format=jpg">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="banner">
                    <img alt="Tiến Sĩ Hoàng Hậu" title="Tiến Sĩ Hoàng Hậu" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/slider_banner_smart_tv___desktop-75a3e2be0bb7-1626849396618-cvmRhnVy.jpg?v=0&amp;maxW=1400" class="d-block w-100">
                </div>
                <div class="carousel-caption banner-content">
                    <div class="banner-info">
                        <h1 class="banner-info-title">
                            Tiến Sĩ Hoàng Hậu
                        </h1>
                        <p class="banner-info-overview">
                            Câu chuyện kể về một anh Tiến sĩ vật lý trẻ tuổi, thông minh, thành đạt ở thời hiện đại vì quá cao ngạo đã báng bổ thánh thần ở chốn linh thiêng, nên bị thần linh trừng phạt. Anh bị xuyên không về một quốc gia kỳ lạ thời cổ đại, và phải dùng chính những kiến thức thời hiện đại của mình để giúp đỡ...
                        </p>
                        <button class="btn">
                            <a href="tiensihoanghau.php" class="banner-button-link">Xem Ngay</a>
                        </button>
                    </div>
                    <div class="banner-poster">
                        <img alt="Tiến Sĩ Hoàng Hậu" title="Tiến Sĩ Hoàng Hậu" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/vertical_poster-3170a5b8df52-1626849396278-yKxEmjwq.jpg?v=0&amp;maxW=420&amp;format=jpg">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="banner">
                    <img alt="Anh Trai Tôi Là Khủng Long" title="Anh Trai Tôi Là Khủng Long" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/cover-1bd3a7c2e5a2-1593768429512-dqN2Vh7C.jpg?v=0&amp;maxW=1400" class="d-block w-100">
                </div>
                <div class="carousel-caption banner-content">
                    <div class="banner-info">
                        <h1 class="banner-info-title">
                            Anh Trai Tôi Là Khủng Long
                        </h1>
                        <p class="banner-info-overview">
                            Cháu không hiểu sao mọi người lại u mê như thế nữa. Nó rõ rành rành là nguyên-1-con-khủng-long Tyrannosaurus!!! Nó đáng lẽ phải là một bộ hoá thạch mà giờ nó còn sống! Không những nó còn sống mà nó còn biết nói tiếng người!! Không những nó biết nói tiếng người mà nó còn giành giải Nobel khoa học,...
                        </p>
                        <button class="btn">
                            <a href="anhtraitoilakhunglong.php" class="banner-button-link">Xem Ngay</a>
                        </button>
                    </div>
                    <div class="banner-poster">
                        <img alt="Anh Trai Tôi Là Khủng Long" title="Anh Trai Tôi Là Khủng Long" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/ssss-ab295d70f870-1589186041046-Pd1lE9x5.jpg?v=0&amp;maxW=420&amp;format=jpg" >
                    </div>
                </div>
            </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </div>
 <!-- main -->
 <main class="container">
     <!-- owl-carousel -->
     <script>
            $(document).ready(function(){
                var owl = $('.owl-carousel');
                    owl.owlCarousel({
                        items:4,
                        loop:true,
                        margin:10,
                        autoplay:true,
                        autoplayTimeout:2000,
                        autoplayHoverPause:true
                    });
                    $('.play').on('click',function(){
                        owl.trigger('play.owl.autoplay',[1000])
                    })
                    $('.stop').on('click',function(){
                        owl.trigger('stop.owl.autoplay')
                    })
            });
        </script>
        <!-- lich ra truyen -->
        <div class="container">
            <hr>
            <hr>
            <h3 class="h3">Thứ hai</h3>
            <hr>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img class="lich" alt="Tiến Sĩ Hoàng Hậu" title="Tiến Sĩ Hoàng Hậu" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/vertical_poster-3170a5b8df52-1626849396278-yKxEmjwq.jpg?v=0&amp;maxW=260&amp;format=jpg">
                    <p>Tiến Sĩ Hoàng Hậu</p>    
                    <p class="name_topic" style="margin-top: -15px;">Lãng Mạn/Tình Cảm</p> 
                </div>
                <div class="item">
                    <img class="lich" alt="Hãy Mang Anh Trai Tôi Đi " title="Hãy Mang Anh Trai Tôi Đi " src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/anhtoi_thumb_640x960-a3d8ec5effc3-1636098262183-qYi3meqj.jpg?v=0&amp;maxW=260&amp;format=jpg">
                    <p>Hãy Mang Anh Trai Tôi Đi</p>
                    <p class="name_topic" style="margin-top: -15px;">Hài Hước</p> 
                </div>
                <div class="item">
                    <img class="lich" alt="Lullabye - Giai Điệu Cuối" title="Lullabye - Giai Điệu Cuối" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/lullabye_thumb_640x960-de5d6ecbc6af-1631264408902-2vEnRSdp.jpeg?v=0&amp;maxW=260&amp;format=jpg">
                    <p>Lullabye - Giai Điệu Cuối</p>
                    <p class="name_topic" style="margin-top: -15px;">Kinh Dị</p>
                </div><div class="item">
                    <img class="lich" alt="Kiều Nữ Độc Phi " title="Kiều Nữ Độc Phi " src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/kieunudocphi__thumb_640x960-c8939e2909a8-1597291023434-6GlL3keP.jpg?v=0&amp;maxW=420&amp;format=jpg">
                    <p>Kiều Nữ Độc Phi</p>
                    <p class="name_topic" style="margin-top: -15px;">Lãng Mạn/Cổ Trang</p>
                </div>
            </div>
            <hr>
            <h3 class="h3">Thứ ba</h3>
            <hr>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img class="lich" alt="Sếp Tôi Là Chó" title="Sếp Tôi Là Chó" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/copy_of_sepcho_thumb_640x960-89b4259b013e-1643171873622-gGqayTHg.jpg?v=0&amp;maxW=260&amp;format=jpg">
                <p>Sếp Tôi Là Chó</p>
                <p class="name_topic" style="margin-top: -15px;" >Hài Hước</p>
                </div>
                <div class="item">
                    <img class="lich" alt="Cuộn Băng Thời Gian" title="Cuộn Băng Thời Gian" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/cbtg_thumb_640x960-74575dd50f47-1593759782471-QUSToAAY.jpg?v=0&amp;maxW=260&amp;format=jpg">
                <p>Cuộn Băng Thời Gian</p>
                <p class="name_topic" style="margin-top: -15px;">Đời Thường</p>
                </div>
                <div class="item">
                    <img class="lich" alt="Trao Trọn Con Tim" title="Trao Trọn Con Tim" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/traotroncontim_thumb_640x960-b778594afbbe-1600749397266-OU0DhuOr.jpg?v=0&amp;maxW=260&amp;format=jpg">
                <p>Trao Trọn Con Tim</p>
                <p class="name_topic" style="margin-top: -15px;">Lãng Mạn/Tình Cảm</p>
                </div><div class="item">
                    <img class="lich" alt="Bước Lên Gác Vàng" title="Bước Lên Gác Vàng" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/buoclengacvang_thumb_640x960-71f352bb049b-1596018657183-nh6roleG.jpg?v=0&amp;maxW=260&amp;format=jpg">
                <p>Bước Lên Gác Vàng</p>
                <p class="name_topic" style="margin-top: -15px;">Hài Hước</p>
                </div>
            </div>
            <hr>
            <h3 class="h3">Thứ tư</h3>
            <hr>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img class="lich" alt="Tuyệt Đỉnh" title="Tuyệt Đỉnh" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/tuyetdinh_thumb_640x960-729813bd9c90-1629440877452-7BhOAsWq.jpg?v=0&amp;maxW=260&amp;format=jpg">
                <p>Tuyệt Đỉnh</p>
                <p class="name_topic" style="margin-top: -15px;">Hành Động</p>
                </div>
                <div class="item">
                    <img class="lich" alt="Lullabye - Giai Điệu Cuối" title="Lullabye - Giai Điệu Cuối" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/lullabye_thumb_640x960-de5d6ecbc6af-1631264408902-2vEnRSdp.jpeg?v=0&amp;maxW=260&amp;format=jpg">
                <p>Lullabye - Giai Điệu Cuối</p>
                <p class="name_topic" style="margin-top: -15px;">Kinh Dị</p>
                </div>
                <div class="item">
                    <img class="lich" alt="Bỗng Một Ngày Trở Thành Con Gái Nhà Vua" title="Bỗng Một Ngày Trở Thành Con Gái Nhà Vua" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/cgnv_thumb_640x960-efc26c426e5a-1628236333906-FJaLHrt0.jpg?v=0&maxW=420&format=jpg">
                <p>Bỗng Một Ngày Trở Thành Con Gái Nhà Vua</p>
                <p class="name_topic" style="margin-top: -15px;">Kinh Dị</p>
                </div>
                <div class="item">
                    <img class="lich" alt="Kịch Rối" title="Kịch Rối" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/kichroi_thumb_640x960-78aabfabc24d-1629973765010-0UE3o33x.jpg?v=0&amp;maxW=260&amp;format=jpg">
                <p>Kịch Rối</p>
                <p class="name_topic" style="margin-top: -15px;">Kinh Dị</p>
                </div>
            </div>
            <hr>
            <h3 class="h3">Thứ năm</h3>
            <hr>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img class="lich" alt="Bước Lên Gác Vàng" title="Bước Lên Gác Vàng" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/buoclengacvang_thumb_640x960-71f352bb049b-1596018657183-nh6roleG.jpg?v=0&amp;maxW=260&amp;format=jpg">
                <p>Bước Lên Gác Vàng</p>
                <p class="name_topic" style="margin-top: -15px;">Hài Hước</p>
                </div>
                <div class="item">
                    <img class="lich" alt="Tuyệt Đỉnh" title="Tuyệt Đỉnh" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/tuyetdinh_thumb_640x960-729813bd9c90-1629440877452-7BhOAsWq.jpg?v=0&amp;maxW=260&amp;format=jpg">
                <p>Tuyệt Đỉnh</p>
                <p class="name_topic" style="margin-top: -15px;">Hành động</p>
                </div>
                <div class="item">
                    <img class="lich" alt="Cleaner K - Kẻ Dọn Dẹp K" title="Cleaner K - Kẻ Dọn Dẹp K" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/cleanerk_thumb_640x960-280f7f3b048a-1617782888461-pLC01CpF.jpg?v=0&amp;maxW=260&amp;format=jpg">
                <p>Cleaner K - Kẻ Dọn Dẹp K</p>
                <p class="name_topic" style="margin-top: -15px;">Hành Động</p>
                </div><div class="item">
                    <img class="lich" alt="Midnight CITY" title="Midnight CITY" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/mn_thumb_640x960-aeab84869637-1635158417412-QQWaI7pK.jpg?v=0&amp;maxW=260&amp;format=jpg">
                <p>Midnight CITY</p>
                <p class="name_topic" style="margin-top: -15px;">Kinh Dị</p>
                </div>
            </div>
            <hr>
            <h3 class="h3">Thứ sáu</h3>
            <hr>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img class="lich" alt="Ngọn Gió Đời Tôi" title="Ngọn Gió Đời Tôi" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/640x960-807594ff1a53-1590052730072-bWRfojp4.jpg?v=0&amp;maxW=260&amp;format=jpg" >
                <p>Ngọn Gió Đời Tôi</p>
                <p class="name_topic" style="margin-top: -15px;">Đời Thường</p>
                </div>
                <div class="item">
                    <img class="lich" alt="Cộng Sự Lúc Nửa Đêm" title="Cộng Sự Lúc Nửa Đêm" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/congsu_thumb_640x960-0f6fcfae7579-1612511565203-TuST7MwE.jpg?v=0&amp;maxW=260&amp;format=jpg">
                <p>Cộng Sự Lúc Nửa Đêm</p>
                <p class="name_topic" style="margin-top: -15px;">Kinh Dị</p>
                </div>
                <div class="item">
                    <img class="lich" alt="Kiếp Văn Phòng" title="Kiếp Văn Phòng" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/new_verticle_thumb_640x960-15f3b155b380-1640256073132-KwEwwZwL.jpg?v=0&amp;maxW=260&amp;format=jpg">
                <p>Kiếp Văn Phòng</p>
                <p class="name_topic" style="margin-top: -15px;">Hài Hước/Series</p>
                </div>
                <div class="item">
                    <img class="lich" alt="Kiều Nữ Độc Phi " title="Kiều Nữ Độc Phi " src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/kieunudocphi__thumb_640x960-c8939e2909a8-1597291023434-6GlL3keP.jpg?v=0&amp;maxW=420&amp;format=jpg">
                <p>Kiều Nữ Độc Phi</p>
                <p class="name_topic" style="margin-top: -15px;">Lãng mạn/Cổ Trang</p>
                </div>
            </div>
            <hr>
            <h3 class="h3">Thứ bảy</h3>
            <hr>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img class="lich" alt="Shark - Cá Mập" title="Shark - Cá Mập" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/shark_thumb_640x960-0a4f74557138-1616473865665-u7RV4a8u.jpg?v=0&amp;maxW=260&amp;format=jpg">
                <p>Shark - Cá Mập</p>
                <p class="name_topic" style="margin-top: -15px;">Hành Động</p>
                </div>
                <div class="item">
                    <img class="lich" alt="Ngọn Gió Đời Tôi" title="Ngọn Gió Đời Tôi" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/640x960-807594ff1a53-1590052730072-bWRfojp4.jpg?v=0&amp;maxW=260&amp;format=jpg" >
                <p>Ngọn Gió Đời Tôi</p>
                <p class="name_topic" style="margin-top: -15px;">Đời Thường</p>
                </div>
                <div class="item">
                    <img class="lich" alt="Nàng Dâu Của Thiên Giới" title="Nàng Dâu Của Thiên Giới" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/nangdau_thumb_640x960__1_-774ec797c7ff-1624526315861-F5rbzQ1T.jpg?v=0&amp;maxW=260&amp;format=jpg">
                <p>Nàng Dâu Của Thiên Giới</p>
                <p class="name_topic" style="margin-top: -15px;">Lãng Mạn/Tình Cảm</p>
                </div>
                <div class="item">
                    <img  class="lich" alt="Những mùa " title="Những mùa " src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/cover_do_c-c3451671f173-1637833034738-Rere9VT9.jpg?v=0&amp;maxW=260&amp;format=jpg">
                <p>Những mùa</p>
                <p class="name_topic" style="margin-top: -15px;">Đời Thường</p>
                </div>
            </div>
            <hr>
            <h3 class="h3">Chủ nhật</h3>
            <hr>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img class="lich" alt="Lullabye - Giai Điệu Cuối" title="Lullabye - Giai Điệu Cuối" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/lullabye_thumb_640x960-de5d6ecbc6af-1631264408902-2vEnRSdp.jpeg?v=0&amp;maxW=260&amp;format=jpg">
                <p>Lullabye - Giai Điệu Cuối</p>
                <p class="name_topic" style="margin-top: -15px;">Kinh Dị</p>
                </div>
                <div class="item">
                    <img class="lich" alt="Tiến Sĩ Hoàng Hậu" title="Tiến Sĩ Hoàng Hậu" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/vertical_poster-3170a5b8df52-1626849396278-yKxEmjwq.jpg?v=0&amp;maxW=260&amp;format=jpg">
                <p>Tiến Sĩ Hoàng Hậu</p>
                <p class="name_topic" style="margin-top: -15px;">Lãng Mạn/Tình Cảm</p>
                </div>
                <div class="item">
                    <img class="lich" alt="Kịch Rối" title="Kịch Rối" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/kichroi_thumb_640x960-78aabfabc24d-1629973765010-0UE3o33x.jpg?v=0&amp;maxW=260&amp;format=jpg">
                <p>Kịch Rối</p>
                <p class="name_topic" style="margin-top: -15px;">Kinh Dị</p>
                </div>
                <div class="item">
                    <img class="lich" alt="Cuộn Băng Thời Gian" title="Cuộn Băng Thời Gian" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/cbtg_thumb_640x960-74575dd50f47-1593759782471-QUSToAAY.jpg?v=0&amp;maxW=260&amp;format=jpg">
                    <p>Cuộn Băng Thời Gian</p>
                    <p class="name_topic" style="margin-top: -15px;">Lãng mạn</p>
                </div>
            </div>
            <hr>
                
        </div>
      
        
        
    </main>
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
  <!-- cuon header -->
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
          $('.items_menu').click(function(){
          $(this).addClass('active_nav').siblings().removeClass('active_nav');
        })
      })
  </script>
<!-- the loai -->
  <script type="text/javascript">
    $(document).ready(function(){
      $('.list').click(function(){
        const value = $(this).attr('data-filter');
        if (value == 'all'){
          $('.item').show('1000');
        }
        else{
          $('.item').not('.'+value).hide('1000');
          $('.item').filter('.'+value).show('1000');

        }
      })
      // add active class on selected item
      $('.list').click(function(){
        $(this).addClass('active_topic').siblings().removeClass('active_topic');
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
  
</body>
</html>