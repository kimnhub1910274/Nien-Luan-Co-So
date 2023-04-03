<?php include('header.php');?>
<?php include('server.php');?>

<?php
    if(isset($_POST['timkiem'])){
        $tukhoa = $_POST['tukhoa'];
    }
    $sql = "SELECT * FROM products WHERE pr_name LIKE '%".$tukhoa."%' ";
    $query = mysqli_query($db, $sql);
    
?>

<div class="container-fluid" style="margin-top: 50px;">
    <h3>Từ khóa tìm kiếm <?php echo $tukhoa ?></h3>
    <title>Tìm kiếm</title>
    <div class="column" style="margin-top: 50px;">  
        <div class="row align-items-start">
            <div class="container">
                <div class="row">
                <?php
                    $i=1;
                    while($row = mysqli_fetch_assoc($query)){?>
                        <div class="col">
                        <a href = "index.php?page_layout=detail&id=<?php echo $row['pr_id']; ?>" class = "column col-xs-6" id = "">
                            <figure class="snip1083 red"> 
                                    <img class="img" style="width:380px ; 
                                                            height:380px; 
                                                            margin:20px 0px; 
                                                            border-radius:5px;" 
                                        src="admin/images/<?php echo $row['image'];?>" alt="">
                                        <figcaption></figcaption>                                           
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
                            style="margin-left:120px ;margin-bottom:30px;" class="">Mua ngay</a>
                            </div>
                <?php  }
                ?>
        </div>
        </div>
</div>