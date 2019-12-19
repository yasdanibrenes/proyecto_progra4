<?php
require "config.php";
class Connection {
  private $std;
  public function __construct() {
    $this->std = 'mysql:dbname='.DB_NAME.';charset=utf8;unix_socket='.DB_SOCKET;
  }
  public function openConnection() {
    try {
      $db = new PDO($this->std,DB_USER, DB_PASS);
      return $db;
    } catch (PDOException $e) {
      print 'Database Error.'.$e->getMessage();
    }
  }
}

?>