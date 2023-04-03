<?php
 ob_start();
$name_ad = "";
$email_ad    = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'ct271');

if (isset($_POST['reg_user'])) {
  
    $name_ad = mysqli_real_escape_string($db, $_POST['name_ad']);
    $email_ad = mysqli_real_escape_string($db, $_POST['email_ad']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    if (empty($name_ad)) { array_push($errors, "Nhập tên đăng nhập!"); }
    if (empty($email_ad)) { array_push($errors, "Nhập email đăng nhập!"); }
    if (empty($password_1)) { array_push($errors, "Nhập mật khẩu đăng nhập!"); }
    //
    $sqlname = "SELECT * FROM admin WHERE name_ad = '$name_ad'";
    $resultname = mysqli_query($db, $sqlname);
    if (mysqli_num_rows($resultname) > 0)
    {
        array_push($errors, "Tên đăng nhập này đã có người dùng!");}
    $sqlemail = "SELECT * FROM admin WHERE email_ad = '$email_ad'";
    $resultemail = mysqli_query($db, $sqlemail);
    if (mysqli_num_rows($resultemail) > 0)
    {
        array_push($errors, "Email này đã có người dùng!");}
    //kiem tra mat khau
    if ($password_1 != $password_2) {
        array_push($errors, "Mật khẩu không trùng khớp");
    }
  
    if (count($errors) == 0) {
        $password = md5($password_1);
                 $query = "INSERT INTO admin (name_ad, email_ad, password)
                  VALUES('$name_ad', '$email_ad', '$password')";
         
        mysqli_query($db, $query);

        $_SESSION['name_ad'] = $name_ad;
         
        header('location: admin.php');
    }
}
  
// User login
if (isset($_POST['login_ad'])) {
     
    $name_ad = mysqli_real_escape_string($db, $_POST['name_ad']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    // Error message if the input field is left blank
    if (empty($name_ad)) {
        array_push($errors, "Nhập tên đăng nhập!");
    }
    if (empty($password)) {
        array_push($errors, "Nhập mật khẩu!");
    }
    
    if (count($errors) == 0) {
         
        $password = md5($password);
         
        $query = "SELECT * FROM admin WHERE name_ad=
                '$name_ad' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            session_start();
            $_SESSION['name_ad'] = $name_ad;
             
            header('location: ad.php');
        }
        else {
            array_push($errors, "Tên đăng nhập và mật khẩu không chính xác");
        }
    }
}
?>