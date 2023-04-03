<?php include('header.php');?>
<?php
    if(isset($_POST['timkiem'])){
        $tukhoa = $_POST['tukhoa'];
    }
    $sql = "SELECT * FROM products WHERE pr_name LIKE '%".$tukhoa."%' ";
    $query = mysqli_query($db, $sql);
?>
<div class="container">
    <title>Tìm kiếm</title>
    <h3>Từ khóa tìm kiếm: <?php echo $tukhoa ?></h3>
    <div class="column" style="margin-top: 50px;">  
        <div class="row align-items-start">
            <div class="container">
                <div class="row">
                    <hr>  
                    <table>
                        <thead>
                            <tr>
                                <td><h5>STT</h5></td>
                                <td><h5>Tên</h5></td>
                                <td><h5>Ảnh</h5></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i=1;
                                while($row = mysqli_fetch_assoc($query)){?>
                            <tr>                      
                                <td><?php echo $i++?></td>
                                <td><?php echo $row['pr_name']; ?></td>
                                <td>
                                    <figure class="snip1083 red"> 
                                        <img class="img" style="width:300px ; 
                                                                height:300px; 
                                                                margin:20px 0px; 
                                                                border-radius:5px;" 
                                            src="images/<?php echo $row['image'];?>" alt="">
                                        <figcaption></figcaption>                                           
                                    </figure>
                                </td>
                            </tr>                      
                            <?php  }?>
                        </tbody>
                    </table>             
            </div>
        </div>
    </div>
    <style>
        a{
            text-decoration: none;
        }
        col{
            color: black;
        }
    </style>
</div>
