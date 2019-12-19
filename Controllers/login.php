<?php
if($_POST){
  require "Models/user.php";
  $user =  new User();
  if(!empty($_POST['email'])  && !empty($_POST['password'])){
    $user->login($_POST['email'], $_POST['password']);
  }
}
require "Views/login.php";