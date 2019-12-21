<?php
  require 'Models/BasicContent.php';
  switch($action){
    case 'publicList':
        $contenido = new BasicContent();
        $elements = $contenido->select();
        require 'Views/about.php';
    break;
    case 'list':
      $contenido = new BasicContent();
      $elements = $contenido->select();
      require 'Views/BasicContentList.php';
    break;
    case 'add':
      if(isset($_POST['tittle']) && $_POST['description']){
        $contenido = new BasicContent($_POST['tittle'], $_POST['description']);
        if($contenido->insert($contenido)){
          $msg = "Basic Contenet has been successfully add";
          $elements = $contenido->select();
          require 'Views/BasicContentList.php';
        }else{
          $msg = "Error saving service data";
          require 'Views/BasicContentForm.php';
        }
      }else{
        require 'Views/BasicContentForm.php';
      }
      break;
    case 'edit':
      if(isset($_POST['id']) && isset($_POST['tittle']) && isset($_POST['description'])){
        $contenido = new BasicContent($_POST['id'], $_POST['tittle'], $_POST['description']);
        if($contenido->update($contenido)){
          $msg = "Successfully edit BasicContent: ".$_POST['tittle'];
          $elements = $contenido->select();
          require 'Views/BasicContentList.php';
        }else{
          $msg = "Error saving data";
        }
      }else{
        $contenido = new BasicContent();
        $element = $contenido->select($_GET['id'])[0];
        require 'Views/BasicContentForm.php'; 
      }
      break;
      case 'view':
        if($_GET['id']){
          $contenido = new BasicContent();
          $element = $contenido->select($_GET['id'])[0];
          require 'Views/BasicContentShow.php';
        }else{
          $msg = "Error getting data";
          $elements = $contenido->select();
          require 'Views/BasicContentList.php';
        }
      break;
      case 'delete':
        if($_GET['id']){
          $contenido = new BasicContent();
          if($contenido->delete($_GET['id'])){
            $msg = "Service deleted";
          }else{
            $msg = "Error deleting data";
          }
        }
        $elements = $contenido->select();
        require 'Views/BasicContentList.php';
      break;
    default :
      $contenido = new BasicContent();
      $elements = $contenido->select();
      require 'Views/BasicContentList.php';
    break;
  }