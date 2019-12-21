
<?php

class support{
    //public ; puede ser accedido desde fuera de la clase
    //protected ; puede ser accedido pero no ser editado 
    //private ; de todo no puede ser accecido

    public $email;
    public $name;
    public $message;

    public function send_data($email, $name, $message, $to = "yasdani.brenes@ulatina.net"){
        $this->generate_message($email, $name, $message);
        return mail($to, "Support", $message);
    }

    public function generate_message($email, $name, $message){
        return "You have receive a support message from ".$name.", email ".$email." and the message is\n".$message; 
    }
} 