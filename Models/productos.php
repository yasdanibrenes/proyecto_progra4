<?php
// Incluir la clase que maneja la base de datos
require 'connection.php';
class productos{
  // Atributos
  private $id;
  public $descripcion;
  public $precio;
  public $comentarios;
  public $imagen;
  
  /**
   * Constructor
   * @param string $pdescripcion descripcion del producto
   * @param int $pprecio precio del producto
   * @param string $pcomentarios comentarios del producto 
   * @param string $pimagen comentarios del producto 
   * @param int $pid UID del producto
   */
  public function __construct($pid = 0, $pdescripcion = '', $pprecio = 0, $pcomentarios = '', $pimagen = '') {
    $this->id = $pid;
    $this->descripcion = $pdescripcion;
    $this->precio = $pprecio;
    $this->comentarios = $pcomentarios;
    $this->imagen = $pimagen;
  }
  
  /**
   * Inserta un elemento en la base datos usando la tala producto
   * @param productos $content Objeto de tipo producto
   * @return boolean si fue exitoso el insert
   */
  public function insert(productos $content){
    try {
      // Abro la base de datos
      $conect = new Connection();
      $pdo = $conect->openConnection();
      // EJECUTAR SENTENCIA 
      $query = "INSERT INTO producto (descripcion, precio, comentarios, imagen) VALUES ('".$content->descripcion."',".$content->precio.",'".$content->comentarios."','".$content->imagen."')";
      if($pdo->query($query)){
        return TRUE;
      }
    } catch (Exception $exc) {
      error_log("Error en la ".__FUNCTION__.":". $exc->getTraceAsString());
    }
    return FALSE;
  }
  
  /**
   * Selecciona uno o todos los elementos dentro de la tabla producto
   * @param int $id Optional nos indica sobre cual elemento iterar 
   * @return boolean 
   */
  public function select($id = 0){
    try{
      $conect =  new Connection();
      $pdo = $conect->openConnection();
      $query = "SELECT id, descripcion, precio, comentarios, imagen FROM producto";
      if($id){
        $query .= " WHERE id='$id'";
      }
      $result = $pdo->query($query);
      $rows = [];
      while($row = $result->fetch()){
        $rows[] = new productos($row['id'], $row['descripcion'], $row['precio'], $row['comentarios'], $row['imagen']);
      }
      return $rows;
    } catch (Exception $ex) {
      // Captura de error
      print_r($ex->getTraceAsString());
      error_log("Error en la ".__FUNCTION__.":". $ex->getTraceAsString());
    }
    return FALSE;
  }
  
  /**
   * Elimina un elemento de la tabla producto
   * @param type $id
   * @return boolean
   */
  public function delete($id){
    try{
      $conect =  new Connection();
      $pdo = $conect->openConnection();
      $query = "DELETE FROM producto WHERE Id=$id";
      //Preparar el query a ejecutar
      $result = $pdo->prepare($query);
      // Si se logro ejutar con exito
      if($result->execute()){
        return TRUE;
      }
    } catch (Exception $ex) {
      // Captura de error
      error_log("Error en la ".__FUNCTION__.":". $ex->getTraceAsString());
    }
    // En caso de llegar a esta linea significa que existio algun error
    return FALSE;
  }
  /**
   * Obtener cualquier parametro por nombre sin importar privacidad
   * @param string $name nombre del parametro
   * @return valor del parametro
   */
  public function get_element($name){
    return $this->$name;
  }
  
  /**
   * Actualiza un elemento en la base datos usando la tala producto
   * @param productos $content Objeto de tipo BasicContent
   * @return boolean si fue exitoso el insert
   */
  public function update(productos $content){
    try {
      // Abro la base de datos
      $conect = new Connection();
      $pdo = $conect->openConnection();
      // EJECUTAR SENTENCIA 
      $query = "UPDATE producto SET descripcion = '".$content->descripcion."', precio =".$content->precio.", comentarios ='".$content->comentarios."', imagen ='".$content->imagen."' WHERE id=$content->id";
      if($pdo->query($query)){
        return TRUE;
      }
    } catch (Exception $exc) {
      error_log("Error en la ".__FUNCTION__.":". $exc->getTraceAsString());
    }
    return FALSE;
  }
}