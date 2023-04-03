
<?php include 'server.php'?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
    <?php
        if(isset($_GET['page_layout'])){
            switch($_GET['page_layout']){
                
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
                case 'view_cart':
                    require_once 'view_cart.php';
                    break;
                case 'search':
                    require_once 'search.php';
                    break;
                case 'check-out':
                    require_once 'check-out.php';
                    break;
                case 'home':
                    require_once 'home.php';
                    break;
                case 'order':
                    require_once 'order.php';
                    break;
                default:
                    require_once 'cart.php';
                    break;
            }
        }else{
            require_once 'cart.php';
        }
    ?>
</body>