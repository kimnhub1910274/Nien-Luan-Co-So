<?php
    $id = $_GET['id'];
    $sql_brand = "SELECT * FROM  brands ";
    $query_brand = mysqli_query($db, $sql_brand);
    
    $sql_edit = "SELECT * FROM products where pr_id = $id ";
    $query_edit = mysqli_query($db, $sql_edit);
    $row_edit=mysqli_fetch_assoc($query_edit);

    if(isset($_POST['sbm'])){
        $pr_name = $_POST['pr_name'];

        if($_FILES['image']['name'] ==''){
            $image = $row_edit['image'];
        }else{
            $image = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($image_tmp, 'images/'.$image);
        }
        while($row = mysqli_fetch_assoc($query_edit)){?>
            <?php
                $price=$_POST['price'];      
                $percent=$_POST['percent'];
                if($row_edit['percent'] > 0){        
                    $sale_price = $row_edit['price'] - ($row_edit['price']*($row_edit['percent']/100)) ;                                                         
                }else{           
                    $sale_price =  ($row_edit['price']);         
                }
            ?>
      <?php  }
        $price=$_POST['price'];      
        $percent=$_POST['percent'];
        $sale_price = $row_edit['price'] - ($row_edit['price']*($row_edit['percent']/100)) ;
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];
        $brand_id = $_POST['brand_id'];

       $sql="UPDATE products SET pr_name = '$pr_name', image = '$image' , price = $price, percent = $percent,sale_price = $sale_price, quantity = $quantity,
        description = '$description', brand_id = $brand_id WHERE pr_id = $id" ;
       $query=mysqli_query($db, $sql);
        header('location: ad.php?page_layout=list');
    }  
?>
<div class="container" style="margin-top: 50px;">
    <div class="card">
        <div class="card-header">
            <h2>Sửa sản phẩm</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="pr_name" class="form-control" required value="<?php echo $row_edit['pr_name']; ?>" > 
                </div>
                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" name="image" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" name="price" class="form-control" required value="<?php echo $row_edit['price']; ?>">
                </div>       
                <div class="form-group">
                    <label for="">Giảm giá</label>
                    <input type="number" name="percent" class="form-control" required value="<?php echo $row_edit['percent']; ?>">
                </div>
                <div>
                    <label for="">Đơn giá</label>
                    <input type="number" name="sale_price" class="form-control" value="<?php echo $row_edit['sale_price'];?>" >                                                      
                </div>
                <div class="form-group">
                    <label for="">Số lượng sản phẩm</label>
                    <input type="number" name="quantity" class="form-control" required value="<?php echo $row_edit['quantity']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Mô tả sản phẩm</label>
                    <input type="text" name="description" class="form-control" required value="<?php echo $row_edit['description']; ?>">
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
                    <button class="btn btn-success" name="sbm" type="submit">Sửa</button>
            </form>
        </div>
    </div>
</div>