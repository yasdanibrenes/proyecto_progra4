<?php
    require 'Models/orders.php';
    require 'Models/services.php';
    require 'Models/products.php';
    require 'Models/users.php';

    $oCount = 1;
    $sCount = 1;
    $pCount = 1;
    $uCount = 1;

    switch($action){
        case 'publicList':
            $contenido = new Services();
            $elements = $contenido->select();
            require 'Views/dashboard.php';
        break;
    
        default :
      require 'Views/dashboard.php';
    break;
  }