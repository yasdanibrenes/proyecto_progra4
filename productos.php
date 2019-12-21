<!DOCTYPE html>
<html lang="en" class=" -webkit-">
    <head>
        <meta charset="UTF-8">
        <title>Tires Collection</title>
        <?php include 'Views/head.php'; ?>
    </head>
    <body>
      <?php require_once "Views/header.php";
          $action = (isset($_GET['c'])) ? $_GET['c'] : 'listado';
          require_once 'Controllers/listadoProductos.php';
        ?>
        
    </body>
</html>