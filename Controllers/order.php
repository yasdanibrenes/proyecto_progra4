<?php
require 'Models/order.php';
require 'Models/cart.php';

if($_POST){
    $order = new order();
    $order->send_data($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['address'], $_POST['address2'], $_POST['country'], $_POST['state'], $_POST['zip'], $_POST['paymentMethod'], $_POST['ccName'], $_POST['ccNumber'], $_POST['ccExpiration'], $_POST['ccCvv'], $_POST['cartList']);
    
    $contenido = new OrderList();
    $elements = $contenido->truncate();
}