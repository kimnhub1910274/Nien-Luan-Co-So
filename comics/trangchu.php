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
                        <li><a href="trangchu.php" class="items_menu active_nav">
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

                          
                <!-- menu -->
                <label for="nav_menu_input" class="nav_menu_icon">
                    <i class="fa-solid fa-bars"></i>
                </label>
                <input type="checkbox" hidden id="nav_menu_input" class="nav_input">
                <label for="nav_menu_input" class="nev_menu_icon"></label>
                <!-- man xam -->
                <div class="overlay_header"></div>
                <!-- menu -->
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
                        <a href="nhatkysongsot.php" class="banner-button-link">Xem Ngay</a>
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
                        <a href="caulacboanti.php" class="banner-button-link">Xem Ngay</a>
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
                        <a href="tuyetdinh.php" class="banner-button-link">Xem Ngay</a>
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
                        <a href="bongmotngay.php" class="banner-button-link">Xem Ngay</a>
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
                        <a href="tiensihoanghau.php" class="banner-button-link">Xem Ngay</a>
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
                        <a href="anhtraitoilakhunglong.php" class="banner-button-link">Xem Ngay</a>
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

    <!-- main -->
    
    <main class="container">
        
        <!-- lich ra truyen -->
        <div class="mt-4">
            <div class="title">
                <h1 class="topic">Lịch Ra Truyện</h1>
                <a href="lichtruyen.php">
                    <span class="btn_all">Xem tất cả</span>
                </a>
            </div>
            <div class="btn-group">
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Lịch ra truyện
                </button>
                <ul class="dropdown-menu">
                  <li class="list dropdown-item active_topic" data-filter="all">Tất Cả</li>
                  <li class="list dropdown-item" data-filter="t2">Thứ 2</li>
                  <li class="list dropdown-item" data-filter="t3">Thứ 3</li>
                  <li class="list dropdown-item" data-filter="t4">Thứ 4</li>
                  <li class="list dropdown-item" data-filter="t5">Thứ 5</li>
                  <li class="list dropdown-item" data-filter="t6">Thứ 6</li>
                  <li class="list dropdown-item" data-filter="t7">Thứ 7</li>
                  <li class="list dropdown-item" data-filter="cn">Chủ nhật</li>
                </ul>
            </div>
            <section class="section">
                <ul class="nav">
                  <li class="nav-item list active_topic" data-filter="all">Tất Cả</li>
                  <li class="nav-item list" data-filter="t2">Thứ 2</li>
                  <li class="nav-item list" data-filter="t3">Thứ 3</li>
                  <li class="nav-item list" data-filter="t4">Thứ 4</li>
                  <li class="nav-item list" data-filter="t5">Thứ 5</li>
                  <li class="nav-item list" data-filter="t6">Thứ 6</li>
                  <li class="nav-item list" data-filter="t7">Thứ 7</li>
                  <li class="nav-item list" data-filter="cn">Chủ nhật</li>
                </ul>
            </section>
            <div class="comic">
                <!-- row1 -->
                <div class="t2 item">
                  <a href="haymanganhtrai.php" class="item_info">
                    <img alt="Hãy Mang Anh Trai Tôi Đi " title="Hãy Mang Anh Trai Tôi Đi " src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/anhtoi_thumb_640x960-a3d8ec5effc3-1636098262183-qYi3meqj.jpg?v=0&amp;maxW=260&amp;format=jpg">
                  </a>
                  <p class="name_item">Hãy Mang Anh Trai Tôi Đi</p>
                  <p class="name_topic">Hài Hước</p>
                </div>
                <div class="t3 item">
                  <a href="tiensihoanghau.php" class="item_info">
                    <img alt="Tiến Sĩ Hoàng Hậu" title="Tiến Sĩ Hoàng Hậu" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/vertical_poster-3170a5b8df52-1626849396278-yKxEmjwq.jpg?v=0&amp;maxW=260&amp;format=jpg">
                  </a>
                    <p class="name_item">Tiến Sĩ Hoàng Hậu</p>
                    <p class="name_topic">Lãng Mạn/Tình Cảm</p>
                </div>
                <div class="t4 item">
                  <a href="cuonbangthoigian.php" class="item_info">
                    <img alt="Cuộn Băng Thời Gian" title="Cuộn Băng Thời Gian" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/cbtg_thumb_640x960-74575dd50f47-1593759782471-QUSToAAY.jpg?v=0&amp;maxW=260&amp;format=jpg">
                  </a>
                  <p class="name_item">Cuộn Băng Thời Gian</p>
                    <p class="name_topic">Đời Thường</p>
                </div>
                <div class="t5 item">
                  <a href="tuyetdinh.php" class="item_info">
                    <img alt="Tuyệt Đỉnh" title="Tuyệt Đỉnh" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/tuyetdinh_thumb_640x960-729813bd9c90-1629440877452-7BhOAsWq.jpg?v=0&amp;maxW=260&amp;format=jpg">
                  </a>
                  <p class="name_item">Tuyệt Đỉnh</p>
                    <p class="name_topic">Hành Động</p>
                </div>
                <div class="t6 item">
                  <a href="lullabye.php" class="item_info">
                    <img alt="Lullabye - Giai Điệu Cuối" title="Lullabye - Giai Điệu Cuối" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/lullabye_thumb_640x960-de5d6ecbc6af-1631264408902-2vEnRSdp.jpeg?v=0&amp;maxW=260&amp;format=jpg">
                  </a>
                  <p class="name_item">Lullabye - Giai Điệu Cuối</p>
                    <p class="name_topic">Kinh Dị</p>
                </div>
                <div class="t7 item">
                    <a href="buoclengacvang.php" class="item_info">
                      <img alt="Bước Lên Gác Vàng" title="Bước Lên Gác Vàng" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/buoclengacvang_thumb_640x960-71f352bb049b-1596018657183-nh6roleG.jpg?v=0&amp;maxW=260&amp;format=jpg">
                    </a>
                    <p class="name_item">Bước Lên Gác Vàng</p>
                    <p class="name_topic">Hài Hước</p>
                </div>
                <div class="cn item">
                    <a href="traotroncontim.php" class="item_info">
                    <img alt="Trao Trọn Con Tim" title="Trao Trọn Con Tim" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/traotroncontim_thumb_640x960-b778594afbbe-1600749397266-OU0DhuOr.jpg?v=0&amp;maxW=260&amp;format=jpg">
                    </a>
                    <p class="name_item">Trao Trọn Con Tim</p>
                    <p class="name_topic">Lãng Mạn/Tình Cảm</p>
                </div>
                
            </div>
        </div>
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
        <!-- truyen moi -->
        <div class="mt-4">
            <div class="title">
                <h1 class="topic">Truyện Mới</h1>
                <a href="truyenmoi.php">
                    <span class="btn_all">Xem tất cả</span>
                </a>
            </div>
            <div>
                <div class="owl-carousel owl-theme">
                    <a href="bongmotngay.php" class="img_new"> 
                        <img alt="Bỗng Một Ngày Trở Thành Con Gái Nhà Vua" title="Bỗng Một Ngày Trở Thành Con Gái Nhà Vua" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/cgnv_thumb_640x960-efc26c426e5a-1628236333906-FJaLHrt0.jpg?v=0&amp;maxW=420&amp;format=jpg">
                        <h6 title="Bỗng Một Ngày Trở Thành Con Gái Nhà Vua">Bỗng Một Ngày Trở Thành Con Gái Nhà Vua</h6>
                        <p>Hài Hước (New)</p>
                    </a>
                    <a href="anhtraitoilakhunglong.php" class="img_new">
                        <img alt="Anh Trai Tôi Là Khủng Long" title="Anh Trai Tôi Là Khủng Long" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/ssss-ab295d70f870-1589186041046-Pd1lE9x5.jpg?v=0&amp;maxW=420&amp;format=jpg">
                        <h6 title="Anh Trai Tôi Là Khủng Long">Anh Trai Tôi Là Khủng Long</h6>
                        <p>Đời Thường (New)</p>
                    </a>
                    <a href="nhatkysongsot.php" class="img_new"> 
                        <img alt="Nhật Kí Sống Sót Của Nữ Phụ Phản Diện" title="Nhật Kí Sống Sót Của Nữ Phụ Phản Diện" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/nuphu_thumb_640x960-b49f611cd199-1634696296441-g3GPK9dp.jpg?v=0&amp;maxW=420&amp;format=jpg"> 
                        <h6 title="Nhật Kí Sống Sót Của Nữ Phụ Phản Diện">Nhật Kí Sống Sót Của Nữ Phụ Phản Diện</h6>
                        <p>Lạng Mạn/Tình Cảm (New)</p>
                    </a>
                    <a href="caulacboanti.php" class="img_new"> 
                        <img alt="Câu Lạc Bộ Anti Nhân Vật Chính" title="Câu Lạc Bộ Anti Nhân Vật Chính" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/vertical_thumbnail-1514ac86d743-1628478322840-Il7X9bC4.jpg?v=0&amp;maxW=420&amp;format=jpg">     
                        <h6 title="Câu Lạc Bộ Anti Nhân Vật Chính">Câu Lạc Bộ Anti Nhân Vật Chính</h6>
                        <p>Hài Hước (New)</p>
                    </a>
                    
                </div>
            </div>
        </div>
        <!-- truyen nổi bật -->
        <div class="mt-4">
            <div class="title">
                <h1 class="topic">Truyện Nổi Bật (#Bảng Xếp Hạng)</h1>
                <a href="truyenmoi.php">
                    <span class="btn_all">Xem tất cả</span>
                </a>
            </div>
            <div class="mt-4 row justify-content-around">
                <a href="kiepvanphong.php" class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 column">
                    <h1 class="align-self-center me-3" style="color: #e74c3c;">1</h1>
                    <img alt="Kiếp Văn Phòng" title="Kiếp Văn Phòng" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/kvp_thumb_1280x1280-be3b9cb41976-1597996847124-5e48LlAg.jpg?v=0&amp;maxW=200&amp;format=jpg">
                    <div class="info_comic">
                        <h5>Kiếp Văn Phòng</h5>
                        <p>Hài Hước</p>
                        <p>17.8 K</p>
                    </div>
                </a>
                <a href="tiensihoanghau.php" class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 column">
                    <h2 class="align-self-center me-3" style="color: #e74c3c;">2</h2>
                    <img alt="Tiến Sĩ Hoàng Hậu" title="Tiến Sĩ Hoàng Hậu" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/slide_banner_mobile-fb3958ae26a9-1626849396352-gKDC4Ws3.png?v=0&amp;maxW=200&amp;format=jpg">
                    <div class="info_comic">
                        <h5>Tiến Sĩ Hoàng Hậu</h5>
                        <p>Tình Cảm</p>
                        <p>16.1 K</p>
                    </div>
                </a>
            </div>
            <div class="row justify-content-around">
                <a href="septoilacho.php" class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 column">
                    <h3 class="align-self-center me-3" style="color: #e74c3c;">3</h3>
                    <img alt="Sếp Tôi Là Chó" title="Sếp Tôi Là Chó" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/copy_of_sepcho_thumb_1280x1280-3c1463da0baf-1643171873086-a1p7MfcJ.jpg?v=0&amp;maxW=200&amp;format=jpg">
                    <div class="info_comic">
                        <h5>Sếp Tôi Là Chó</h5>
                        <p>Hài Hước</p>
                        <p>15.8 K</p>
                    </div>
                </a>
                <a href="sharkcamap.php" class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 column">
                    <h4 class="align-self-center me-3" style="color: #e74c3c;">4</h4>
                    <img alt="Shark - Cá Mập" title="Shark - Cá Mập" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/shark_thumb_1280x1280-7d514b39a3e8-1616473864324-XG28VfM7.jpg?v=0&amp;maxW=200&amp;format=jpg">
                    <div class="info_comic">
                        <h5>Shark - Cá Mập</h5>
                        <p>Hành Động</p>
                        <p>12.5 K</p>
                    </div>
                </a>
            </div>
            <div class="row justify-content-around">
                <a href="chuyennhas.php" class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 column">
                    <h5 class="align-self-center me-3" style="color: #e74c3c;">5</h5>
                    <img alt="Chuyện nhà S" title="Chuyện nhà S" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/cns_thumb_1280x1280-8f3bf3fda04e-1598949266771-jxJqyUug.jpg?v=0&amp;maxW=200&amp;format=jpg">
                    <div class="info_comic">
                        <h5>Chuyện nhà S</h5>
                        <p>Đời Thường</p>
                        <p>10.8 K</p>
                    </div>
                </a>
                <a href="kieunudocphi.php" class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 column">
                    <h5 class="align-self-center me-3" style="color: #e74c3c;">6</h5>
                    <img alt="Kiều Nữ Độc Phi " title="Kiều Nữ Độc Phi " src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/kieunudocphi__thumb_1280x1280-ec1ac13c5211-1597291024805-eNJOSQYy.jpg?v=0&amp;maxW=200&amp;format=jpg">
                    <div class="info_comic">
                        <h5>Kiều Nữ Độc Phi</h5>
                        <p>Lãng Mạn/ Cổ Trang</p>
                        <p>10.5 K</p>
                    </div>
                </a>
            </div>
        </div>
        <!-- the loai -->
        <div class="mt-4 ">
            <div class="title">
                <h1 class="topic">Các Thể Loại</h1>
                <a href="theloai.php">
                    <span class="btn_all">Xem tất cả</span>
                </a>
            </div>
                    <!-- row1 -->
            <div class="row justify-content-between mt-4">
                <div class="col-3 m-2 topic_items" >
                    <h3>Hài Hước</h3>
                    <p>Đọc truyện cười thả ga, xả stress, tỉnh táo hơn mỗi ngày.</p>
                </div>
                <a href="theloai.php" class="topic_small">Hài Hước</a>
                <div class="col-8 align-self-center">
                    <div class="owl-carousel owl-theme ">
                        <a href="haymanganhtrai.php">
                            <div class="movie-item">
                                <img alt="Hãy Mang Anh Trai Tôi Đi " title="Hãy Mang Anh Trai Tôi Đi " src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/anhtoi_thumb_640x960-a3d8ec5effc3-1636098262183-qYi3meqj.jpg?v=0&amp;maxW=260&amp;format=jpg">
                                <p class="name_item" title="Hãy Mang Anh Trai Tôi Đi ">Hãy Mang Anh Trai Tôi Đi</p>
                            </div>
                        </a>
                        <a href="septoilacho.php">
                            <div class="movie-item">
                                <img alt="Sếp Tôi Là Chó" title="Sếp Tôi Là Chó" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/copy_of_sepcho_thumb_640x960-89b4259b013e-1643171873622-gGqayTHg.jpg?v=0&amp;maxW=260&amp;format=jpg">
                                <p class="name_item" title="Sếp Tôi Là Chó">Sếp Tôi Là Chó</p>
                            </div>
                        </a>
                        <a href="buoclengacvang.php">
                            <div class="movie-item">
                                <img alt="Bước Lên Gác Vàng" title="Bước Lên Gác Vàng" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/buoclengacvang_thumb_640x960-71f352bb049b-1596018657183-nh6roleG.jpg?v=0&amp;maxW=260&amp;format=jpg">
                                <p class="name_item" title="Bước Lên Gác Vàng">Bước Lên Gác Vàng</p>
                            </div>
                        </a>
                        <a href="kiepvanphong.php">
                            <div class="movie-item">
                                <img alt="Kiếp Văn Phòng" title="Kiếp Văn Phòng" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/new_verticle_thumb_640x960-15f3b155b380-1640256073132-KwEwwZwL.jpg?v=0&amp;maxW=260&amp;format=jpg">
                                <p class="name_item" title="Kiếp Văn Phòng">Kiếp Văn Phòng</p>
                            </div>
                        </a>   
                    </div>
                </div>
            </div>
            <!-- row2 -->
            <div class="row justify-content-between mt-4">
                <div class="col-3 m-2 topic_items">
                    <h3>Kinh Dị</h3>
                    <p>Xin giữ bình tĩnh trước khi đọc vì truyện rất là hay và cuốn</p>
                </div>
                <a href="theloai.php" class="topic_small">Lãng Mạn</a>
                <div class="col-8 align-self-center">
                    <div class="owl-carousel owl-theme ">
                        <a href="lullabye.php">
                            <div class="movie-item">
                                <img alt="Lullabye - Giai Điệu Cuối" title="Lullabye - Giai Điệu Cuối" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/lullabye_thumb_640x960-de5d6ecbc6af-1631264408902-2vEnRSdp.jpeg?v=0&amp;maxW=260&amp;format=jpg">
                                <p class="name_item" title="Lullabye - Giai Điệu Cuối">Lullabye - Giai Điệu Cuối</p>
                            </div>
                        </a>
                        <a href="congsulucnuadem.php">
                            <div class="movie-item">
                                <img alt="Cộng Sự Lúc Nửa Đêm" title="Cộng Sự Lúc Nửa Đêm" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/congsu_thumb_640x960-0f6fcfae7579-1612511565203-TuST7MwE.jpg?v=0&amp;maxW=260&amp;format=jpg">
                                <p class="name_item" title="Cộng Sự Lúc Nửa Đêm">Cộng Sự Lúc Nửa Đêm</p>
                            </div>
                        </a>
                        <a href="midnight.php">
                            <div class="movie-item">
                            <img alt="Midnight CITY" title="Midnight CITY" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/mn_thumb_640x960-aeab84869637-1635158417412-QQWaI7pK.jpg?v=0&amp;maxW=260&amp;format=jpg">
                                <p class="name_item" title="Midnight CITY">Midnight CITY</p>
                            </div>
                        </a>
                        <a href="kichroi.php">
                            <div class="movie-item">
                                <img alt="Kịch Rối" title="Kịch Rối" src="https://vnw-img-cdn.popsww.com/api/v2/containers/file2/cms_thumbnails/kichroi_thumb_640x960-78aabfabc24d-1629973765010-0UE3o33x.jpg?v=0&amp;maxW=260&amp;format=jpg">
                                <p class="name_item" title="Kịch Rối">Kịch Rối</p>
                            </div>
                        </a>
                    </div>
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
    <!-- lich ra truyen -->
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
    
</body>
</html>