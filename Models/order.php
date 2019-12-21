<?php

class order{
    //public ; puede ser accedido desde fuera de la clase
    //protected ; puede ser accedido pero no ser editado 
    //private ; de todo no puede ser accecido

    public $firstName;
    public $lastName;
    public $email;
    public $address;
    public $address2;
    public $country;
    public $state;
    public $zip;
    public $paymentMethod;
    public $ccName;
    public $ccNumber;
    public $ccExpiration;
    public $ccCvv;
    public $cartList;

    public function send_data($firstName, $lastName, $email, $address, $address2, $country, $zip, $paymentMethod, $ccName, $ccNumber, $ccExpiration, $ccCvv, $cartList,  $to = "yasdani.brenes@ulatina.net"){
        $this->generate_message($email, $name, $message);
        return mail($to, "Contact", $message);
    }

    public function generate_message($firstName, $lastName, $email, $address, $address2, $country, $zip, $paymentMethod, $ccName, $ccNumber, $ccExpiration, $ccCvv, $cartList){
        return "You have receive a order from ".$firstName. " ".$lastName.", email ".$email." and the details: \n Shipping to ".$address.", ".$address2.", ".$country.", ".$state.", ".$zip." \n Payment with ".$paymentMethod.", ".$ccName.", ".$ccNumber.", ".$ccExpiration.", ".$ccCvv." \nProducts: ".$cartList; 
    }
} 