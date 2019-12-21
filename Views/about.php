<div class="container">
        <section class="pageSection" id="about">
            <div class="row">
            <?php 
                if (count($elements)) {
                    foreach ($elements as $element) {
                            echo '
                                <div class="col-md-12">
                                    <h2 class="text-center">' . $element->get_element("tittle") . '</h2>
                                    <br>
                                </div>
                                <div class="col-md-12">
                                    <p>' . $element->get_element("description") . '</p>
                                </div>' ;
                    }
                } else {
                    echo '<diV class="col-md-12 text-center"><h4>No content available to show.</h4></div>';
                } ?>
    </div>