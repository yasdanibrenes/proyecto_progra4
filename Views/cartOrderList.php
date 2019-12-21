<?php
  echo (isset($msg)) ?  '<div class="alert alert-danger" role="alert">' . $msg . '</div>' : '';
  if(count($elements)){    
      foreach($elements as $element){
        $total += (int) $element->get_element("price");
        echo 
          '<li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                  <h6 class="my-0">'.$element->get_element("name").'</h6>
              </div>
              <span class="text-muted">'.$element->get_element("price").'</span>
              <a href=cart.php?c=delete&id='.$element->get_element("id").'><i class="fa fa-trash-o" aria-hidden="true"></i></a>
          </li>';
        }
  }else{
    echo '<h5>No products added</h5>';
  }
