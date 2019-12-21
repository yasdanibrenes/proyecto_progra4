    
    <div class="container">
        <div class="row pageSection">
            <div class="col-md-12 text-center">
                <h2>Services</h2>
                <br>
            </div>
        </div>

        <div class="row">
        <?php
            if (count($elements)) {
                foreach ($elements as $element) {
                    echo '  <hr class="col-md-12 featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">' . $element->get_element("tittle") . '</h2>
                    <p class="text-muted">$' . $element->get_element("price") . ' per unit</p>
                    <p class="lead">' . substr($element->get_element("description"),0,500) . '</p>
                </div>
                <div class="col-md-5">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="./src/services/' . $element->get_element("img") . '"</img>
                </div>
            </div>';
                }
            } else {
                echo '<h2>No services available to show.</h2>';
            }
        ?>

        </div>

        <div class="row pageSection">
            <div class="col-md-12 text-center">
                <h2>Calculator</h2>
                <p>Calculate the price of our services.</p>
                <br>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4 mb-3">
                <label for="service">Service</label>
                <select class="custom-select d-block w-100" id="service" onchange="calculate()">
                    <option value="">Choose...</option>
                    <?php
                    if (count($elements)) {
                        foreach ($elements as $element) {
                            echo '  <option value="' . $element->get_element("price") . '">' . $element->get_element("tittle") . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label for="qty">Quantity</label>
                <input class="form-control" type="number" min="0" id="qty" onchange="calculate()">
            </div>
            <div class="col-md-4 mb-3">
            <label for="result">Total</label>
                <input class="form-control" type="number" id="result" value="" readonly>
            </div>
        </div>
        <script type="text/javascript">
                function calculate(){
                    var x = parseInt(document.getElementById("service").value);
                    var y = parseInt(document.getElementById("qty").value);
                    var total=x*y;
                    document.getElementById("result").value = total;
                }

        </script>
    
        <?php require_once 'Views/footer.php'; ?> 
    </div>