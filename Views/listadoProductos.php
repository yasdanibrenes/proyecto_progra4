<div class="container py-5">
    <?php echo (isset($msg)) ?  '<div class="alert alert-success" role="alert">' . $msg . '</div>' : ''; ?>

    <!-- Page Header -->
    <div class="row text-center text-dark mb-5">
        <div class="col-lg-7 mx-auto">
            <h1 class="display-4">Products</h1>
        </div>
    </div>
    <!-- End -->

    <div class="row">
        <div class="col-lg-8 mx-auto">

            <!-- List group-->
            <ul class="list-group shadow">
                <?php
                if (count($elements)) {
                    foreach ($elements as $element) {
                        $str = $element->get_element("descripcion");
                        echo
                            '<!-- list group item-->
                            <li class="list-group-item">
                                <!-- Custom content-->
                                <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                    <div class="media-body order-2 order-lg-1">
                                        <h5 class="mt-0 font-weight-bold mb-2">' . $element->get_element("descripcion") . '</h5>
                                        <p class="font-italic text-muted mb-0 small">' . substr($element->get_element("comentarios"), 0, 1000) . '</p>
                                        <div class="d-flex align-items-center justify-content-between mt-1">
                                            <h6 class="font-weight-bold my-2">' . '$ ' . $element->get_element("precio") . '</h6>
                                            <ul class="list-inline small">
                                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                                <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                                            </ul>
                                        </div>
                                        <a href="productos.php?c=ver&id=' . $element->get_element("id") . '" class="badge badge-pill badge-primary">View details »</a>
                                        <a href="cart.php?c=add&id=' . $element->get_element("id") . '&name=' . urlencode($str) . '&price=' . $element->get_element("precio") . '" class="badge badge-pill badge-primary">Add cart »</a>
                                    </div><img src="src/product/' . $element->get_element("imagen") . '" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                                </div>
                                <!-- End -->
                            </li>
                            <!-- End -->';
                    }
                } else {
                    echo '<h2>No hay elementos disponibles</h2>';
                }
                ?>

            </ul>
            <!-- End -->
        </div>
    </div>
    <?php require_once "Views/footer.php"; ?>
</div>