<title>Thêm sản phẩm</title>
<?php
    $sql_brand= "SELECT * FROM  brands ";
    $query_brand = mysqli_query($db, $sql_brand);
    $sql= "SELECT * FROM products ";
    $query = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($query);
    
    if(isset($_POST['sbm'])){
        $pr_name = $_POST['pr_name'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        
        while($row = mysqli_fetch_assoc($query)){?>            
            <?php
                $price = $_POST['price'];      
                $percent = $_POST['percent'];
                if($row['percent'] > 0){        
                    $sale_price = $row['price'] - ($row['price']*($row['percent']/100)) ;                                                         
                }else{           
                    $sale_price =  ($row['price']);         
                }
            ?>           
      <?php  }
     
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];
        $brand_id = $_POST['brand_id'];

       $sql_ins = "INSERT INTO products (pr_name, image, price, percent,sale_price, quantity, description, brand_id)
       VALUES ('$pr_name', '$image', $price, '$percent','$sale_price', '$quantity', '$description', $brand_id)";
       $query = mysqli_query($db, $sql_ins);
        move_uploaded_file($image_tmp, 'img/'.$image);
        header('location: ad.php?page_layout=list');
    }    
?>
<div class="container" style="margin-top:50px ;">
    <div class="card">
        <div class="card-header">
            <h2>Thêm sản phẩm</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="pr_name" class="form-control" required > 
                </div>
                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" name="price" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Giảm giá</label>
                    <input type="number" name="percent" class="form-control" required>
                </div>   
                <div class="form-group">
                    <label for="">Đơn giá</label>
                    <input type="number" name="sale_price" class="form-control" value="<?php echo $row['sale_price'];?>" required>
                </div>
                <div class="form-group">
                    <label for="">Số lượng sản phẩm</label>
                    <input type="number" name="quantity" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Mô tả sản phẩm</label>
                    <input type="text" name="description" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Loại</label>
                    <select class="form-control" name="brand_id" id="">
                        <?php
                            while($row_brand = mysqli_fetch_assoc($query_brand)){?>
                                <option value="<?php echo $row_brand['brand_id']; ?>"><?php echo $row_brand['brand_name']; ?></option>
                            <?php } ?>           
                    </select>    
                </div>
                    <button class="btn btn-success" name="sbm" type="submit">Thêm</button>
                    <?php
                         
                    ?>
            </form>
        </div>
      
    </div>
</div>