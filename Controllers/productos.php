<?php

  require 'Models/productos.php';
  switch($action){
    case 'listado':
      $contenido = new productos();
      $elements = $contenido->select();
      require 'Views/productosListado.php';
    break;
    case 'agregar':
      if(isset($_POST['id']) && isset($_POST['descripcion']) && isset($_POST['precio']) && isset($_POST['comentarios']) && isset($_POST['imagen'])){
        $contenido = new productos($_POST['id'], $_POST['descripcion'], $_POST['precio'], $_POST['comentarios'], $_POST['imagen']);
        if($contenido->insert($contenido)){
          $msg = "Exito al guardar el elemento";
          $elements = $contenido->select();
          require 'Views/productosListado.php';
        }else{
          $msg = "Error al guardar el valor";
          require 'Views/productosForm.php';
        }
      }else{
        require 'Views/productosForm.php';
      }
      break;
    case 'editar':
      if(isset($_POST['id']) && isset($_POST['descripcion']) && isset($_POST['precio']) && isset($_POST['comentarios']) && isset($_POST['imagen'])){
        $contenido = new productos($_POST['id'], $_POST['descripcion'], $_POST['precio'], $_POST['comentarios'], $_POST['imagen']);
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
      $contenido = new productos();
      $elements = $contenido->select();
      require 'Views/productosListado.php';
    break;
  }