<?php include 'server.php';
session_start();
  
  ?>
<?php
  if(isset($_GET['id'])){
     $id = $_GET['id'];
    
  }
$action = (isset($_GET['action'])) ? $_GET['action'] : 'add';

$quantity = (isset($_GET['quantity'])) ? $_GET['quantity'] : 1;
if($quantity <=0){
  $quantity = 1;
}
// echo $action;
// echo "<br>";
// echo $id ;
// var_dump($_GET);
// die();
 
  $query = mysqli_query($db, "SELECT * FROM products where pr_id = '$id' "); 
  if($query){
      $product = mysqli_fetch_assoc($query);
  }
  if($query_brand){
    $brand = mysqli_fetch_assoc($query_brand);
  }

  $item = [
    'pr_id'=>$product['pr_id'],
    'pr_name'=>$product['pr_name'],
    'image'=>$product['image'],
    //gia sale
    'price'=>($product['percent'] > 0) ? $product['sale_price'] : $product['price'],
    'sale_price'=>$product['sale_price'],
    'percent'=>$product['percent'],
    'brand_id'=>$product['brand_id'],
    'size' => ['id_si'],
    'quantity'=>$quantity
  ];

//them vao gio hang
//action = add
if($action == 'add'){
  if(isset($_SESSION['cart'][$id])){
    $_SESSION['cart'][$id]['quantity'] += $quantity;
  }else{
    $_SESSION['cart'][$id] = $item;
  }
}

//cap nhat gio hang
//action = update
 if($action == 'update'){
  // var_dump($quantity);
    $_SESSION['cart'][$id]['quantity'] = $quantity;
}

// xoa san pham trong gio hang
//action = delete
if($action == 'delete'){
  unset($_SESSION['cart'][$id]);
}

//echo "<pre>";
//print_r($_SESSION['cart']);
header('location:view_cart.php');
?>
  
