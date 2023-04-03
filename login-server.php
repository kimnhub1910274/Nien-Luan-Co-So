<?php
    $username = "";
    $fullname = "";
    $email    = "";
    $errors = array();
    $db = mysqli_connect('localhost', 'root', '', 'ct271');
    mysqli_set_charset($db, 'utf8');
  
    if (isset($_POST['login_user'])) {
        if(isset($_POST['username'])){
            $username = $_POST['username'];
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $query = mysqli_query($db, $sql);
            $data = mysqli_fetch_array($query);
            $checkuser = mysqli_num_rows($query);
            if (empty($username)) {
                array_push($errors, "Nhập tên đăng nhập!");
            }
            if (empty($password)) {
                array_push($errors, "Nhập mật khẩu!");
            }
            if($checkuser == 1){
                session_start();
                $_SESSION['username'] = $data;
                if(isset($_GET['action'])){
                    $action = $_GET['action'];
                    header('location: '.$action.'.php');
                }else{
                    header('location: home.php');
                }  
            }
            else {
                array_push($errors, "Tên đăng nhập và mật khẩu không chính xác");
            }


        }
}
?>