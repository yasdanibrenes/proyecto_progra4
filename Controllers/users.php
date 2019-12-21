<?php
    require 'Models/users.php';
    
    switch($action){
        case 'list':
        $contenido = new Users();
        $elements = $contenido->select();
        require 'Views/usersList.php';
        break;
        case 'add':
        if(isset($_POST['id']) && $_POST['name'] && $_POST['email'] && $_POST['password']){
            $contenido = new Users($_POST['id'], $_POST['name'], $_POST['email'], $_POST['password']);
            if($contenido->insert($contenido)){
                $msg = "User has been successfully add";
                $elements = $contenido->select();
                require 'Views/usersList.php';
            }else{
                $msg = "Error saving user data";
                require 'Views/usersForm.php';
            }
        }else{
            require 'Views/usersForm.php';
        }
        break;
        case 'edit':
        if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
            $contenido = new Users($_POST['id'], $_POST['name'], $_POST['email'], $_POST['password']);
            if($contenido->update($contenido)){
                $msg = "Successfully edit user: ".$_POST['name'];
                $elements = $contenido->select();
                require 'Views/usersList.php';
            }else{
                $msg = "Error saving data";
            }
        }else{
            $contenido = new Users();
            $element = $contenido->select($_GET['id'])[0];
            require 'Views/usersForm.php'; 
        }
        break;
        case 'view':
            if($_GET['id']){
            $contenido = new Users();
            $element = $contenido->select($_GET['id'])[0];
            require 'Views/usersShow.php';
            }else{
            $msg = "Error getting data";
            $elements = $contenido->select();
            require 'Views/usersList.php';
            }
        break;
        case 'delete':
            if($_GET['id']){
            $contenido = new Users();
            if($contenido->delete($_GET['id'])){
                $msg = "User deleted";
            }else{
                $msg = "Error deleting data";
            }
            }
            $elements = $contenido->select();
            require 'Views/usersList.php';
        break;
        default :
        $contenido = new Users();
        $elements = $contenido->select();
        require 'Views/usersList.php';
        break;
    }