<!DOCTYPE html>
<html lang="en" class=" -webkit-">
    <head>
        <meta charset="UTF-8">
        <title>Listado de Productos</title>
        <?php include 'Views/head.php'; ?>
    </head>
    <body>
      <?php require_once "Views/header.php";?>
        <?php
          // la variable c enviada por parametro es la accion a ejecutar en caso de no llegar va a ser listado por defecto.
          $action = (isset($_GET['c'])) ? $_GET['c'] : 'listado';
          require_once 'Controllers/listadoProductos.php';
        ?>
        <?php require_once "Views/footer.php"; ?>
    </body>
</html>