<?php
    require 'Models/users.php';
    switch($action){
        case 'list':
        $contenido = new Users();
        $elements = $contenido->select();
        require 'Views/usersList.php';
        break;
        case 'add':
        if(isset($_POST['id']) && isset($_POST['descripcion']) && isset($_POST['email']) && isset($_POST['password'])){
            $contenido = new Users($_POST['id'], $_POST['name'], $_POST['email'], $_POST['password']);
            if($contenido->insert($contenido)){
            $msg = "User has been successfully add";
            $elements = $contenido->select();
            require 'Views/usersList.php';
            }else{
            $msg = "Error saving user data";
            require 'Views/userssForm.php';
            }
        }else{
            require 'Views/usersForm.php';
        }
        break;
        case 'editar':
        if(isset($_POST['id']) && isset($_POST['descripcion']) && isset($_POST['precio']) && isset($_POST['comentarios'])){
            $contenido = new productos($_POST['id'], $_POST['descripcion'], $_POST['precio'], $_POST['comentarios']);
            if($contenido->update($contenido)){
            $msg = "Exito al actualizar el elemento: ".$_POST['descripcion'];
            $elements = $contenido->select();
            require 'Views/productosListado.php';
            }else{
            $msg = "Error al guardar el valor";
            }
        }else{
            $contenido = new productos();
            $element = $contenido->select($_GET['id'])[0];
            require 'Views/productosForm.php'; 
        }
        break;
        case 'ver':
            if($_GET['id']){
            $contenido = new productos();
            $element = $contenido->select($_GET['id'])[0];
            require 'Views/productosShow.php';
            }else{
            $msg = "Error al obtener el elemento";
            $elements = $contenido->select();
            require 'Views/productosListado.php';
            }
        break;
        case 'borrar':
            if($_GET['id']){
            $contenido = new productos();
            if($contenido->delete($_GET['id'])){
                $msg = "Elemento borrado";
            }else{
                $msg = "Error al Borrar el elemento";
            }
            }
            $elements = $contenido->select();
            require 'Views/productosListado.php';
        break;
        default :
        $contenido = new Users();
        $elements = $contenido->select();
        require 'Views/usersList.php';
        break;
    }