<?php
require "connection.php";

class User {
  private $id;
  public $name;
  public $email;
  public $pass;

  public function login($email, $pass) {
    $connection = new Connection();
    $db = $connection->openConnection();
    $stmt = $db->query("SELECT * FROM user where email='$email' and password='$pass'");
    while ($record = $stmt->fetch()) {
      $_SESSION['user'] = $record;
      echo "entro";
      header("location: admin.php");
      return TRUE;
    }
    return FALSE;
  }

}