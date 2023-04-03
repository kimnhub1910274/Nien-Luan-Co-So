<?php include 'header.php'?>
<?php include 'server.php'?>
<?php
    $sql_brand = "SELECT * FROM  brands ";
    $query_brand = mysqli_query($db, $sql_brand);
    $sql= "SELECT * FROM products inner join brands on products.brand_id = brands.brand_id";
    $query = mysqli_query($db, $sql);
?>
<body>
    <title>Sản phẩm</title>
    <main>
        <div class="container">
            <br>
            <p class="topic" style="margin-top:70px; text-align:center ; font-size:30px;"><b>SẢN PHẨM MỚI NHẤT</b></p>
            <div class="column">  
                <div class="row align-items-start">
                    <div class="container" >
                        <div class="row" >                       
                        <?php
                        $i=1;
                        while($row = mysqli_fetch_assoc($query)){?>
                            <div class="col" >
                                <a href = "index.php?page_layout=detail&id=<?php echo $row['pr_id']; ?>" class = "column col-xs-6" id = "zoomIn" style="text-decoration: none;color: black;">
                                    <figure><img class="img" style="width:380px ; height:380px; margin:10px 0px; border-radius:5px;"
                                     src="admin/images/<?php echo $row['image'];?>" alt=""> 
                                    </figure>
                                    <div class="row" >
                                        <p style="text-align: center; margin-bottom:-3px;">
                                            <?php echo $row['pr_name'];?>
                                        </p>        
                                </div>
                                <?php if($row['percent'] > 0){  ?>       
                                        <p style="text-align: center;">
                                            <del><?php echo number_format($row['price'])?></del>VND
                                            <span style="color: red;">
                                                <?php $sale_price = $row['price'] - ($row['price']*($row['percent']/100))?>                                                    
                                                <?php echo -$row['percent']?> %
                                            </span>
                                        </p>
                                        <p style="margin-top: -20px;margin-left: 140px;">
                                            <span >
                                                <?php echo number_format($sale_price)?>
                                            </span>VND
                                        </p>
                                    <?php }else{ ?>
                                        <p style="text-align:center ;" >
                                            <span><?php echo number_format($row['price']) ?></span>VND
                                        </p>
                                    <?php }?>
                                </a>
                                <a href="index.php?page_layout=cart&id=<?php echo $row['pr_id']; ?>" style="margin-left:150px ;margin-bottom:20px;margin-top: -30px;text-decoration: none;color: black;" class="">Mua ngay</a>
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
