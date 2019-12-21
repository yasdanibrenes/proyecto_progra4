<!DOCTYPE html>
<html lang="en" class=" -webkit-">
    <head>
        <title>Wheels - About Us</title>
        <?php include 'Views/head.php'; ?>

    </head>
    <body>
    <?php require_once "Views/header.php"; ?>

    <?php
        $action = (isset($_GET['c'])) ? $_GET['c'] : 'publicList';
        require_once 'Controllers/BasicContent.php';
        ?>
    
    <?php require_once "Views/footer.php"; ?>
    <div>
    </body>
</html>