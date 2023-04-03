<?php include 'admin_server.php'?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
    <?php
        if(isset($_GET['page_layout'])){
            switch($_GET['page_layout']){
                case 'list':
                    require_once 'list.php';
                    break;
                case 'search':
                    require_once 'search.php';
                    break;
                case 'add':
                    require_once 'add.php';
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
                case 'search':
                    require_once 'search.php';
                    break;
                case 'order':
                    require_once 'order.php';
                    break;
                case 'category':
                    require_once 'category.php';
                    break;
                case 'user':
                    require_once 'user.php';
                    break;
                
                default:
                    require_once 'list.php';
                    break;
            }
        }else{
            require_once 'list.php';
        }
    ?>
</body>