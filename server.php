<?php

$username = "";
$fullname = "";
$email    = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'ct271');

// Registration code
if (isset($_POST['reg_user'])) {
  
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    if (empty($username)) { array_push($errors, "Nhập tên đăng nhập!"); }
    if (empty($email)) { array_push($errors, "Nhập email đăng nhập!"); }
    if (empty($password_1)) { array_push($errors, "Nhập mật khẩu đăng nhập!"); }
    //
    $sqlname = "SELECT * FROM users WHERE username = '$username'";
    $resultname = mysqli_query($db, $sqlname);
    $sqlfname = "SELECT * FROM users WHERE fullname = '$fullname'";
    $resultname = mysqli_query($db, $sqlfname);
    // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
    if (mysqli_num_rows($resultname) > 0)
    {
        array_push($errors, "Tên đăng nhập này đã có người dùng!");}
    $sqlemail = "SELECT * FROM users WHERE email = '$email'";
    $resultemail = mysqli_query($db, $sqlemail);
    // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
    if (mysqli_num_rows($resultemail) > 0)
    {
        array_push($errors, "Email này đã có người dùng!");}
    //kiem tra mat khau
    if ($password_1 != $password_2) {
        array_push($errors, "Mật khẩu không trùng khớp");
    }
  
    if (count($errors) == 0) {
         
        $password = md5($password_1);
         
        $query = "INSERT INTO users (username, fullname, email, password)
        VALUES('$username','$fullname', '$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        header('location: home.php');
    }
}
  
// // User login
// if (isset($_POST['login_user'])) {
     
//     $username = mysqli_real_escape_string($db, $_POST['username']);
//     $password = mysqli_real_escape_string($db, $_POST['password']);
  
//     if (empty($username)) {
//         array_push($errors, "Nhập tên đăng nhập!");
//     }
//     if (empty($password)) {
//         array_push($errors, "Nhập mật khẩu!");
//     }
    
//     if (count($errors) == 0) {
         
//         $password = md5($password);
         
//         $query = "SELECT * FROM users WHERE username=
//                 '$username' AND password='$password'";
//         $results = mysqli_query($db, $query);
  
//         if (mysqli_num_rows($results) == 1) {
//             session_start();
//             $_SESSION['username'] = $username;
//             if(isset($_GET['action'])){
//                 $action = $_GET['action'];
//                 header('location: '.$action.'.php');
//             }else{
//                 header('location: home.php');
//             }  
//         }
//         else {
//             array_push($errors, "Tên đăng nhập và mật khẩu không chính xác");
//         }
//     }
// }
  
?>