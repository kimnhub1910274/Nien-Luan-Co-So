
<?php include 'admin_server.php'?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Fontawesome -->
<link rel="stylesheet" href="fontawesome-free-6.0.0/css/all.min.css">
        <!-- CSS -->
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/main.css">
<body>
    <?php
        if(isset($_GET['page_layout'])){
            switch($_GET['page_layout']){
                case 'admin_login':
                    require_once 'admin_login.php';
                    break;
                case 'ad':
                    require_once 'ad.php';
                    break;
                case 'edit':
                    require_once 'edit.php';
                    break;
                case 'delete':
                    require_once 'delete.php';
                    break;
                case 'detail':
                    require_once 'detail.php';
                    break;
                case 'cart':
                    require_once 'cart.php';
                    break;
                default:
                    require_once 'list.php';
                    break;
            }
        }else{
            require_once 'admin_login.php';
        }
    ?>
</body>