<!-- Required meta tags -->
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="fontawesome-free-6.0.0/css/all.min.css">
        <!-- Bootstrap CSS -->
            <!-- Boostrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!--<link rel="stylesheet" href="css/main.css">-->
        <link rel="stylesheet" href="css/test.css">
        <link rel="stylesheet" href="css/trangchu.css">
        <link rel="stylesheet" href="css/login.css">

        <!-- JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  
        <link rel="stylesheet" href="js/main.js">
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    
<footer>
    <div class="ft container">
        <div class="row align-items-start">
            <div class="col">
              <b>DANH MỤC</b>
              <div class="contact">
                  <div><a href="home.php" style="text-decoration:none ;color:black;">TRANG CHỦ</a></div>
                  <div><a href="introduce.php" style="text-decoration:none ;color:black;">GIỚI THIỆU</a></div>
                  <div><a href="product.php" style="text-decoration:none ;color:black;">SẢN PHẨM</a></div>
                  <div><a href="news.php" style="text-decoration:none ;color:black;">TIN TỨC</a></div>
                  
              </div>
            </div>
            <div class="col">
              <b>ĐỊA CHỈ</b>
              <div class="contact">
                <div class="col">
                    <b>Địa chỉ: 3/2 - Ninh Kiều - Cần Thơ</b>
                  </div>
                  <div class="col">
                    <b>Số điên thoại: 0246.662.3434</b>
                  </div>
                  <p>Copyright She. All rights reserved. </p>
              </div>
            </div>
            <div class="col">
              <b>LIÊN HỆ CHÚNG TÔI</b>
                <div class="contact">
                    <div class="col">
                        CHÍNH SÁCH
                      </div>
                      <div class="col">
                        LIÊN HỆ
                      </div>
                      <div class="icon">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-youtube"></i>
                      </div>
                </div>
            </div>
      </div>
    </div>   
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>              
<style>
  #myBtn{
    float: right;
    display: none;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    background-color: #581a14;
    color: white;
    cursor: pointer;
    padding: 15px;
    border-radius: 4px;
  }
  #myBtn:hover {
  background-color: #555;
}
</style>    
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
<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>