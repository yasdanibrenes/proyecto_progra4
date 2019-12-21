<?php
// Incluir la clase que maneja la base de datos
require 'connection.php';

class BasicContent{
  // Atributos
  private $id;
  public $tittle;
  public $description;
  
  /**
   * Constructor
   * @param string $pDescription descripcion del contenido
   * @param string $ptittle comentarios del contenido 
   * @param int $pid ID del producto
   */
  public function __construct($pid = 0, $ptittle = '', $pdescription = '') {
    $this->id = $pid;
    $this->tittle = $ptittle;
    $this->description = $pdescription;
  }
  
  /**
   * Inserta un elemento en la base datos usando la tala producto
   * @param BasicContent $content Objeto de tipo producto
   * @return boolean si fue exitoso el insert
   */
  public function insert(BasicContent $content){
    try {
      // Abro la base de datos
      $conect = new Connection();
      $pdo = $conect->openConnection();
      // EJECUTAR SENTENCIA 
      $query = "INSERT INTO basic_content (tittle, description) VALUES ('".$content->tittle."',".$content->description."')";
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
      $query = "SELECT id, tittle, description FROM basic_content";
      if($id){
        $query .= " WHERE id='$id'";
      }
      $result = $pdo->query($query);
      $rows = [];
      while($row = $result->fetch()){
        $rows[] = new BasicContent($row['id'], $row['tittle'], $row['description']);
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
      $query = "DELETE FROM basic_content WHERE Id=$id";
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
   * @param BasicContent $content Objeto de tipo BasicContent
   * @return boolean si fue exitoso el insert
   */
  public function update(BasicContent $content){
    try {
      // Abro la base de datos
      $conect = new Connection();
      $pdo = $conect->openConnection();
      // EJECUTAR SENTENCIA 
      $query = "UPDATE basic_content SET tittle = '".$content->tittle."', description ='".$content->description."' WHERE id=$content->id";
      if($pdo->query($query)){
        return TRUE;
      }
    } catch (Exception $exc) {
      error_log("Error en la ".__FUNCTION__.":". $exc->getTraceAsString());
    }
    return FALSE;
  }
}