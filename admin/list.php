<?php include 'header.php'?>
<?php
    $sql= "SELECT * FROM products inner join brands on products.brand_id = brands.brand_id";
    $query = mysqli_query($db, $sql);
?>
<?php if(isset($_SESSION['name_ad'])){?>
    <div class="container">
        <title>Quản lý sản phẩm</title>
        <div class="card">
            <div class="card-header"><h4>Danh sách sản phẩm</h4></div>
                <div class="card-body">
                    <table class="table">
                        <a class="btn btn-primary" href="ad.php?page_layout=add">Thêm mới</a>
                        <thead class="thead-dark">
                            <tr>
                                <th>STT</th>
                                <th>Tên </th>
                                <th>Ảnh </th>
                                <th>Giá sản phẩm</th>
                                <th>Giá sale</th>
                                <th>Giảm giá (%)</th>
                                <th>Số lượng</th>
                                <th>Mô tả</th>
                                <th>Loại</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i=1;
                                while($row = mysqli_fetch_assoc($query)){?>
                                    <tr>
                                        <td><?php echo $i++;?></td>
                                        <td><?php echo $row['pr_name'];?></td>
                                        <td>
                                            <img class="img" style="width:150px ; height:150px;" src="images/<?php echo $row['image'];?>" alt="">      
                                        </td>
                                        <td><?php echo $row['price'];?></td>
                                        <td>
                                            <?php if($row['percent'] > 0){  ?>       
                                                <p style="margin-left:80px ;">    
                                                    <span><?php $sale_price = $row['price'] - ($row['price']*($row['percent']/100))?></span>
                                                </p>
                                                <p>
                                                    <span><?php echo number_format($sale_price)?></span>VND
                                                </p>
                                            <?php }else{ ?>
                                                <p >
                                                    <span><?php echo number_format($row['price']) ?></span>VND
                                                </p>
                                            <?php }?>
                                        </td>
                                        <td><?php echo $row['percent'];?></td>
                                        <td><?php echo $row['quantity'];?></td>
                                        <td><?php echo $row['description'];?></td>
                                        <td><?php echo $row['brand_name'];?></td>
                                        <td>
                                            <a href="ad.php?page_layout=edit&id=<?php echo $row['pr_id']; ?>">Sửa</a>
                                        </td>
                                        <td>
                                            <a onclick="return Del('<?php echo $row['pr_name']; ?>') " 
                                            href="ad.php?page_layout=delete&id=<?php echo $row['pr_id']; ?>">Xóa</a>
                                        </td>

                                    </tr>
                                <?php  }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php }?>
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
let mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
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
<style>
        a{
            text-decoration: none;
        }
    </style>
<script>
    function Del(name){
        return confirm("Bạn có muốn xóa sản phẩm: " + name + " ?");
    }
</script>
