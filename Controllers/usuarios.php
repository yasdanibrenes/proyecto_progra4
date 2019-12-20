<?php

  require 'Models/usuarios.php';
  switch($action){
    case 'listado':
      $contenido = new usuarios();
      $elements = $contenido->select();
      require 'Views/usuariosListado.php';
    break;
    case 'agregar':
      if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
        $contenido = new usuarios($_POST['id'], $_POST['name'], $_POST['email'], $_POST['password']);
        if($contenido->insert($contenido)){
          $msg = "Exito al guardar el elemento";
          $elements = $contenido->select();
          require 'Views/usuariosListado.php';
        }else{
          $msg = "Error al guardar el valor";
          require 'Views/usuariosForm.php';
        }
      }else{
        require 'Views/usuariosForm.php';
      }
      break;
    case 'editar':
        if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
            $contenido = new usuarios($_POST['id'], $_POST['name'], $_POST['email'], $_POST['password']);
            if ($contenido->update($contenido)) {
                $msg = "Exito al actualizar el elemento: " . $_POST['name'];
                $elements = $contenido->select();
                require 'Views/usuariosListado.php';
            } else {
                $msg = "Error al guardar el valor";
            }
        } else {
            $contenido = new usuarios();
            $element = $contenido->select($_GET['id'])[0];
            require 'Views/usuariosForm.php';
        }
        break;
      case 'ver':
        if($_GET['id']){
          $contenido = new usuarios();
          $element = $contenido->select($_GET['id'])[0];
          require 'Views/usuariosShow.php';
        }else{
          $msg = "Error al obtener el elemento";
          $elements = $contenido->select();
          require 'Views/usuariosListado.php';
        }
      break;
      case 'borrar':
        if($_GET['id']){
          $contenido = new usuarios();
          if($contenido->delete($_GET['id'])){
            $msg = "Elemento borrado";
          }else{
            $msg = "Error al Borrar el elemento";
          }
        }
        $elements = $contenido->select();
        require 'Views/usuariosListado.php';
      break;
    default :
      $contenido = new usuarios();
      $elements = $contenido->select();
      require 'Views/usuariosListado.php';
    break;
  }