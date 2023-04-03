<?php include 'header.php'?>
<?php include 'server.php'?>
<?php
    $sql_brand = "SELECT * FROM  brands ";
    $query_brand = mysqli_query($db, $sql_brand);
    $sql= "SELECT * FROM products inner join brands on products.brand_id = brands.brand_id";
    $query = mysqli_query($db, $sql);
?>
    <body>
        <title>Giới thiệu</title>
        <div class="container">
            <div class="row " style="margin-top: 150px; margin-bottom:-100px;">
                <div class="col-5">
                    <img src="admin/images/gioithieu1.jpg" alt="" style="width:500px; height:510px;">
                    </div>
                    <div class="col-7" style="text-align: justify;">
                    <h3>CHÍNH SÁCH BẢO HÀNH & SỬA CHỮA</h3>
                    <p><b>Khi mua sắm sản phẩm tại SHE , bạn sẽ nhận được đặc quyền bảo hành trọn đời miễn phí!</b></p>
                    <p><b>Tuy nhiên, trong chính sách này không bao gồm những trường hợp đặc biệt như sau:</b></p>
                    <p>- Cửa hàng chỉ bảo hành/sửa chữa đơn giản như cắt gấu, bóp nới sản phẩm. Không nhận sửa chữa 
                        các tình tiết phức tạp có thể làm thay đổi thiết kế chuẩn của sản phẩm hoặc các sản phẩm gặp vấn đề như bị phai màu, lỗi hỏng nặng trong quá trình sử dụng do lỗi từ phía cá nhân người dùng.</p>
                    <p>- Nếu muốn chỉnh sửa sản phẩm theo yêu cầu cá nhân, quý khách vui lòng mất thêm chi phí 
                        nguyên vật liệu.</p>
                    <p>- Đặc quyền với khách hàng mua hàng online: Quý khách có yêu cầu sửa chữa bảo hành sản phẩm, 
                        có thể đến bất kỳ showroom chính hãng của SHE để sử dụng dịch vụ.</p>               
                    <p><b>“Cảm ơn bạn đã yêu thích sản phẩm và đồng hành cùng SHE!”</b></p>
                    <p><b>Mọi thắc mắc liên quan đến chính sách bảo hành trọn đời. Vui lòng liên hệ: 0246.662.3434</b></p>
                </div>
                <div class="col-4" style="margin-top: 200px;">
                    <h5><b>ĐỒNG HÀNH CÙNG SHE</b></h5>
                    <p>Cảm ơn bạn đã yêu thích sản phẩm và đồng hành cùng SHE. Mọi thắc mắc liên quan đến chính 
                        sách thanh toán, vui lòng liên hệ theo số thông tin bên dưới</p>
                    <button  class="btt">GỌI NGAY</button>
                </div>
                <div class="col-8" style="width:500px; height:510px;margin-top: 50px;">
                    <img src="admin/images/gioithieu2.jpg" alt="">
                </div>
            </div>
        </div> 
    </body>
</html>
<?php include 'footer.php'?>
<style>
    .btt{
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        background-color: wheat;
        color: #581a14;
        padding: 8px;
        border-radius: 4px;
    }
</style>