<?php

    require 'Models/contact.php';

    require 'Views/contact.php';

    if($_POST){
        $contact_personal = new contact();
        $contact_personal->send_data($_POST['email'], $_POST['email'], $_POST['message']);
        header("Location: thanks.php");
    }

    