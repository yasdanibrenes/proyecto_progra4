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
             if($_GET['id'] && $_GET[htmlentities('name')] && $_GET['price']){
                $contenido = new OrderList();
                if($contenido->insert($_GET['id'], $_GET[htmlentities('name')], $_GET['price'])){
                    $contenido = new OrderList();
                    $elements = $contenido->select();
                    require 'Views/cartOrderList.php';
                }else{
                    $msg = "Error adding product";
                }                
            }else{
                $elements = $contenido->select();
                require 'Views/cartOrderList.php';
            }
        break;
        case 'delete':
            if($_GET['id']){
                $contenido = new OrderList();
                if($contenido->delete($_GET['id'])){
                    $msg = "Product deleted";
                }else{
                    $msg = "Error removing product";
                }
            }
            $contenido = new OrderList();
            $elements = $contenido->select();
            require 'Views/cartOrderList.php';
        break;
        default :
            $contenido = new OrderList();
            $elements = $contenido->select();
            require 'Views/cartOrderList.php';
        break;
    }