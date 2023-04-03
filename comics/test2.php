<?php include 'test.php'?>
<?php include 'server.php'?>
<?php
    
    $sql_brand = "SELECT * FROM  brands ";
    $query_brand = mysqli_query($db, $sql_brand);
    
    

    $sql= "SELECT * FROM products inner join brands on products.brand_id = brands.brand_id";
    $query = mysqli_query($db, $sql);
?>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <body>
        
        <title>Trang Chủ</title>
        <div class="danhmuc">
        <h3 style="text-align: center;">DANH MỤC</h3>
            <div class="row"> 
                </div>
                <div class="" style="text-align: center;">
                    <a href="ao.php"><img src="images/o-thun-icon-png.png" alt="" class="icon-type"></a>
                    <a href="vay.php"><img src="images/vay-icon.png" alt="" class="icon-type"></a>
                    <a href="quan.php"><img src="images/quan icon.png" alt="" class="icon-type"></a>
                    <a href="jumpsuit.php"><img src="images/jumpsuit icon.png" alt="" class="icon-type"></a>     
                </div>
            </div>

        </div>
        <main>
            <div class="container">
                <br>
                <p class="topic" style="margin-top:50px; text-align:center ; font-size:30px;"><b>SIÊU SALE THÁNG 9</b></p>
                <div class="column">  
                    <div class="row align-items-start">
                       <div class="container">
                            <div class="row">
                            <?php
                            $i=1;
                            while($row=mysqli_fetch_assoc($query)){?>
                                <div class="col">
                                    <a href="index.php?page_layout=detail&id=<?php echo $row['pr_id']; ?>" class="detail">
                                    <figure class="snip1083 red"> <img class="img" style="width:380px ; height:380px; margin:20px 0px; border-radius:5px;" src="images/<?php echo $row['image'];?>" alt="">
                                        <figcaption>
                                           
                                        </figcaption>
                                        
                                    </figure>
                                    <div class="row" style="margin-left:50px ;">
                                            <?php echo $row['pr_name'];?>       
                                    </div>
                                    <div class="row" style="margin-left:100px; margin-bottom:20px;" >Giá: <?php echo $row['price'];?></div>
                                    </a>
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