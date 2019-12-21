<?php

    require 'Models/support.php';

    require 'Views/support.php';

    if($_POST){
        $contact_personal = new support();
        $contact_personal->send_data($_POST['email'], $_POST['email'], $_POST['message']);
        header("Location: thanks.php");
    }
