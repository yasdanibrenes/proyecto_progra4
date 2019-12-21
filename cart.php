<!DOCTYPE html>
<html lang="en" class=" -webkit-">
    <head>
        <title>Wheels - Cart</title>
        <?php include 'Views/head.php'; ?>

    </head>
    <body>
    <?php require_once "Views/header.php";
            $test = "body";
    ?>
        <div class="container">
            <div class="py-5 text-center">
                <h2>Checkout form</h2>
            </div>

            <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill"></span>
                </h4>
                <ul class="list-group mb-3">

                <?php
                    $action = (isset($_GET['c'])) ? $_GET['c'] : 'list';
                    require_once 'Controllers/cart.php';
                ?>

                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (USD)</span>
                    <strong><?php echo $total ?></strong>
                </li>
                </ul>
            </div>
        
            <?php 
                require_once "Views/cart.php";

                require_once "Views/footer.php"; 
            ?>
    </body>
</html>