<?php
  require 'Models/services.php';
  switch($action){
    case 'publicList':
        $contenido = new Services();
        $elements = $contenido->select();
        require 'Views/services.php';
    break;
    case 'list':
      $contenido = new Services();
      $elements = $contenido->select();
      require 'Views/servicesList.php';
    break;
    case 'add':
      if(isset($_POST['id']) && $_POST['tittle'] && $_POST['description'] && $_POST['price'] && $_POST['img']){
        $contenido = new Services($_POST['id'], $_POST['tittle'], $_POST['description'], $_POST['price'], $_POST['img']);
        if($contenido->insert($contenido)){
          $msg = "Service has been successfully add";
          $elements = $contenido->select();
          require 'Views/servicesList.php';
        }else{
          $msg = "Error saving service data";
          require 'Views/servicesForm.php';
        }
      }else{
        require 'Views/servicesForm.php';
      }
      break;
    case 'edit':
      if(isset($_POST['id']) && isset($_POST['tittle']) && isset($_POST['description']) && isset($_POST['price']) && isset($_POST['img'])){
        $contenido = new Services($_POST['id'], $_POST['tittle'], $_POST['description'], $_POST['price'], $_POST['img']);
        if($contenido->update($contenido)){
          $msg = "Successfully edit service: ".$_POST['tittle'];
          $elements = $contenido->select();
          require 'Views/servicesList.php';
        }else{
          $msg = "Error saving data";
        }
      }else{
        $contenido = new Services();
        $element = $contenido->select($_GET['id'])[0];
        require 'Views/servicesForm.php'; 
      }
      break;
      case 'view':
        if($_GET['id']){
          $contenido = new Services();
          $element = $contenido->select($_GET['id'])[0];
          require 'Views/servicesShow.php';
        }else{
          $msg = "Error getting data";
          $elements = $contenido->select();
          require 'Views/servicesList.php';
        }
      break;
      case 'delete':
        if($_GET['id']){
          $contenido = new Services();
          if($contenido->delete($_GET['id'])){
            $msg = "Service deleted";
          }else{
            $msg = "Error deleting data";
          }
        }
        $elements = $contenido->select();
        require 'Views/servicesList.php';
      break;
    default :
      $contenido = new Services();
      $elements = $contenido->select();
      require 'Views/servicesList.php';
    break;
  }