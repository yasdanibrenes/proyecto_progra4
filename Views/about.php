<div class="container">

        <section class="section" id="about">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center"><?php echo (isset($element)) ? $element->get_element('tittle') : '' ?></h2>
                    <br>
                </div>
                <div class="col-md-12">
                    <p><?php echo (isset($element)) ? $element->get_element('description') : '' ?></p>
                </div>