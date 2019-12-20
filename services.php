<!DOCTYPE html>
<html lang="en" class=" -webkit-">
    <head>
        <title>Wheels - Services</title>
        <?php include 'Views/head.php'; ?>

    </head>
    <body>
    <?php require_once "Views/header.php";
            $test = "body";
        ?>
        <?php
        $action = (isset($_GET['c'])) ? $_GET['c'] : 'publicList';
        require_once 'Controllers/services.php';
        ?>
        
    </body>
</html>