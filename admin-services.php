<!DOCTYPE html>
<html lang="en" class=" -webkit-">
    <head>
        <meta charset="UTF-8">
        <title>Wheels - Admin Panel</title>
        <?php include_once 'Views/admin_head.php'; ?>
    </head>
    <body>
      <?php include_once "Views/admin_header.php";?>
        <?php
          // la variable c enviada por parametro es la accion a ejecutar en caso de no llegar va a ser listado por defecto.
          $action = (isset($_GET['c'])) ? $_GET['c'] : 'list';
          require_once 'Controllers/services.php';
        ?>
        <?php include_once "Views/admin_footer.php"; ?>
    </body>
</html>