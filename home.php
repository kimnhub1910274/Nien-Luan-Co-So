<?php include 'header.php';
// ob_start();
?>

<?php
    $sql_brand = "SELECT * FROM  brands ";
    $query_brand = mysqli_query($db, $sql_brand);
    $sql= "SELECT * FROM products inner join brands on products.brand_id = brands.brand_id";
    $query = mysqli_query($db, $sql);
?>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<body>
    <title>HÀNG MỚI VỀ</title>
    <div class="danhmuc" style="margin-top: 140px;">
        <div class="" style="text-align: center;">
            <a href=""><img src="admin/images/o-thun-icon-png.png" alt="" class="icon-type"></a>
            <a href=""><img src="admin/images/vay-icon.png" alt="" class="icon-type"></a>
            <a href=""><img src="admin/images/quan icon.png" alt="" class="icon-type"></a>
            <a href=""><img src="admin/images/jumpsuit icon.png" alt="" class="icon-type"></a>     
        </div>
    </div>
    <main>      
        <div class="container">
            <br>
            <p class="topic" style="text-align:center ; font-size:30px;"><b>SIÊU SALE THÁNG 12</b></p>
            <div class="column">  
                <div class="row align-items-start">
                    <div class="container">
                        <div class="row">
                            <style>
                                a{
                                    color: black;
                                }
                            </style>
                            <?php
                            $i=1;
                            while($row=mysqli_fetch_assoc($query)){?>
                                <div class="col">
                                    <a  href = "index.php?page_layout=detail&id=<?php echo $row['pr_id']; ?>" class = "column col-xs-6" id = "" style="text-decoration:none; color:black;">
                                        <figure class="snip1083 red"> 
                                            <img class="img" style="width:380px ; 
                                                                    height:380px; 
                                                                    margin:20px 0px; 
                                                                    border-radius:5px;" 
                                                src="admin/images/<?php echo $row['image'];?>" alt="">
                                                <figcaption>
                                                    <h6><span> SIÊU SALE</span></h6>
                                                </figcaption>                                           
                                        </figure>
                                        <div style="text-align: center;">
                                            <span ><?php echo $row['pr_name']; ?></span>
                                            <?php if($row['percent'] > 0){  ?>       
                                                <p >
                                                    <del><?php echo number_format($row['price'])?></del>VND
                                                    <span style="color: red;">
                                                        <?php $sale_price = $row['price'] - ($row['price']*($row['percent']/100))?>                                                    
                                                        <?php echo -$row['percent']?> %
                                                    </span>
                                                </p>
                                                <p style="margin-top: -20px;">
                                                    <span style="color: red;">
                                                        <?php echo number_format($sale_price)?>
                                                    </span>VND
                                                </p>
                                            <?php }else{ ?>
                                                <p>
                                                    <span><?php echo number_format($row['price']) ?></span>VND
                                                </p>
                                            <?php }?>
                                        </div>                                   
                                    </a>
                                    <a href="index.php?page_layout=cart&id=<?php echo $row['pr_id']; ?> " 
                                    style="margin-left:120px ;margin-bottom:30px;text-decoration:none ;color:black;" class="">Mua ngay</a>
                                </div>
                            <?php  }
                            ?>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </main> 
</body>

</html>
<?php include 'footer.php'?>

<script>
      /* Demo purposes only */
  $("figure").mouseleave(
    function() {
      $(this).removeClass("hover");
    }
  );
</script>