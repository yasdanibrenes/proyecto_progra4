<div class="container py-5">
    <?php echo (isset($msg)) ?  '<div class="alert alert-success" role="alert">' . $msg . '</div>' : ''; ?>

    <!-- Page Header -->
    <div class="row text-center text-dark mb-5">
        <div class="col-lg-7 mx-auto">
            <h1 class="display-4">Tires Detail</h1>
        </div>
    </div>
    <!-- End -->

    <div class="row">
        <div class="col-lg-8 mx-auto">

            <!-- List group-->
            <ul class="list-group shadow">

                <!-- list group item-->
                <li class="list-group-item">
                    <!-- Custom content-->
                    <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                        <div class="media-body order-2 order-lg-1">
                            <h5 class="mt-0 font-weight-bold mb-2"><?php echo (isset($element)) ? $element->get_element('descripcion') : '' ?></h5>
                            <p class="font-italic text-muted mb-0 small"><?php echo (isset($element)) ? $element->get_element('comentarios') : '' ?></p>
                            <div class="d-flex align-items-center justify-content-between mt-1">
                                <h6 class="font-weight-bold my-2">$ <?php echo (isset($element)) ? $element->get_element('precio') : '$ 0.00' ?></h6>
                                <ul class="list-inline small">
                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                                </ul>
                            </div>
                        </div><img src="src/product/<?php echo (isset($element)) ? $element->get_element('imagen') : '' ?>" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                    </div>
                    <!-- End -->
                </li>
                <!-- End -->


                <!-- list group item -->
                <li class="list-group-item">
                    <!-- Custom content-->
                    <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                        <a href="productos.php?" class="btn btn-primary"><i class="fa fa-undo" aria-hidden="true"></i> Back</a>
                    </div>
                    <!-- End -->
                </li>
                <!-- End -->

            </ul>
            <!-- End -->
        </div>
    </div>
</div>