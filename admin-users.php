<?php
session_start();  
if (!isset($_SESSION['user'])) {
?>
<!DOCTYPE html>
<html lang="en" class=" -webkit-">
    <head>
        <meta charset="UTF-8">
        <title>Wheels - Admin Panel</title>
        <?php include 'Views/admin_head.php'; ?>
    </head>
        <body>
        <?php require_once "Views/admin_header.php";?>
        <?php
          // la variable c enviada por parametro es la accion a ejecutar en caso de no llegar va a ser listado por defecto.
          $action = (isset($_GET['c'])) ? $_GET['c'] : 'list';
          require_once 'Controllers/users.php';
        ?>
    <?php require_once "Views/admin_footer.php"; ?>

    </body>
</html>
<?php
}else{
  session_destroy();
  header("location: login.php");
  exit; 
} 
