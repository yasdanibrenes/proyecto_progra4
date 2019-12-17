<!DOCTYPE html>
<html lang="en" class=" -webkit-">
    <head>
        <title>Wheels - Home</title>
        <?php include 'Views/head.php'; ?>

    </head>
    <body>
    <?php require_once "Views/header.php";
            $test = "body";
        ?>
        <?php
        if ($_GET) {
          require_once 'Controllers/' . $_GET['c'] . '.php';
        } else {
          require_once "Views/home.php";
        }
        ?>
    <?php require_once "Views/footer.php"; ?>

    </body>
</html>