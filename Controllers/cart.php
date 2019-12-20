<?php
    require 'Models/cart.php';
    $total = 0;
    switch($action){
        case 'list':
        $contenido = new OrderList();
        $elements = $contenido->select();
        require 'Views/cartOrderList.php';
        break;
        case 'add':
        if(isset($_POST['id']) && $_POST['name'] && $_POST['price']){
            $contenido = new OrderList($_POST['id'], $_POST['name'], $_POST['price']);
            if($contenido->insert($contenido)){
                $msg = "Product has been successfully add";
                $elements = $contenido->select();
                require 'Views/cartOrderList.php';
            }else{
                $msg = "Error adding product to cart";
                require './products.php';
            }
        }else{
            require './products.php';
        }
        break;
        // case 'edit':
        // if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
        //     $contenido = new OrderList($_POST['id'], $_POST['name'], $_POST['email'], $_POST['password']);
        //     if($contenido->update($contenido)){
        //         $msg = "Successfully edit user: ".$_POST['name'];
        //         $elements = $contenido->select();
        //         require 'Views/usersList.php';
        //     }else{
        //         $msg = "Error saving data";
        //     }
        // }else{
        //     $contenido = new OrderList();
        //     $element = $contenido->select($_GET['id'])[0];
        //     require 'Views/usersForm.php'; 
        // }
        // break;
        // case 'view':
        //     if($_GET['id']){
        //     $contenido = new OrderList();
        //     $element = $contenido->select($_GET['id'])[0];
        //     require 'Views/usersShow.php';
        //     }else{
        //     $msg = "Error getting data";
        //     $elements = $contenido->select();
        //     require 'Views/usersList.php';
        //     }
        // break;
        case 'delete':
            if($_GET['id']){
            $contenido = new OrderList();
            if($contenido->delete($_GET['id'])){
                $msg = "Product deleted";
            }else{
                $msg = "Error removing product";
            }
            }
            $elements = $contenido->select();
            require 'Views/cartOrderList.php';
        break;
        default :
        $contenido = new OrderList();
        $elements = $contenido->select();
        require 'Views/cartOrderList.php';
        break;
    }