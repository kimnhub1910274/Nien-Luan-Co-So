
<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM products where pr_id = $id";
    $query = mysqli_query($db, $sql);
    header('location: ad.php?page_layout=list');
?>