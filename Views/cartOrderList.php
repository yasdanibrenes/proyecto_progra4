<?php

if(count($elements)){
    foreach($elements as $element){
      echo 
        '<li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
                <h6 class="my-0">'.$element->get_element("name").'</h6>
            </div>
            <span class="text-muted">'.$element->get_element("price").'</span>
            <a href=cart.php?c=delete&id='.$element->get_element("id").'><i class="fa fa-trash-o" aria-hidden="true"></i></a>
        </li>';
        $x = $element->get_element("price");
}
$total = $x;
}else{
  echo '<h3>No products added</h3>';
}
