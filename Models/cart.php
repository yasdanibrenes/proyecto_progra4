<?php
    // Incluir la clase que maneja la base de datos
    require 'connection.php';
    class OrderList{
    // Atributos
    private $id;
    public $name;
    public $price;
    
    /**
     * Constructor
     * @param string $pname nombre del carrito
     * @param int $pprice precio del carrito
     * @param int $pid ID del carrito
     */
    public function __construct($pid = 0, $pname = '', $pprice = 0) {
        $this->id = $pid;
        $this->name = $pname;
        $this->price = $pprice;
    }
    
    /**
     * Inserta un elemento en la base datos usando la tabla carrito
     * @param OrderList $content Objeto de tipo carrito
     * @return boolean si fue exitoso el insert
     */
    public function insert($id, $name, $price){
        try {
            // Abro la base de datos
            $conect = new Connection();
            $pdo = $conect->openConnection();
            // EJECUTAR SENTENCIA 
            $query = "INSERT INTO temp_cart (id, name, price) VALUES ('".$id."','".$name."','".$price."')";
            if($pdo->query($query)){
                return TRUE;
            }
        } catch (Exception $exc) {
            error_log("Error in ".__FUNCTION__.":". $exc->getTraceAsString());
        }
        return FALSE;
    }
    
    /**
     * Selecciona uno o todos los elementos dentro de la tabla carrito
     * @param int $id Optional nos indica sobre cual elemento iterar 
     * @return boolean 
     */
    public function select($id = 0){
        try{
            $conect =  new Connection();
            $pdo = $conect->openConnection();
            $query = "SELECT id, name, price FROM temp_cart";
        if($id){
            $query .= " WHERE id='$id'";
        }
        $result = $pdo->query($query);
        $rows = [];
        while($row = $result->fetch()){
            $rows[] = new OrderList($row['id'], $row['name'], $row['price']);
        }
        return $rows;
        } catch (Exception $ex) {
            // Captura de error
            print_r($ex->getTraceAsString());
            error_log("Error in ".__FUNCTION__.":". $ex->getTraceAsString());
        }
        return FALSE;
    }
    
    /**
     * Elimina un elemento de la tabla carrito
     * @param type $id
     * @return boolean
     */
    public function delete($id){
        try{
            $conect =  new Connection();
            $pdo = $conect->openConnection();
            $query = "DELETE FROM temp_cart WHERE Id=$id";
            //Preparar el query a ejecutar
            $result = $pdo->prepare($query);
            // Si se logro ejutar con exito
            if($result->execute()){
                return TRUE;
            }
        } catch (Exception $ex) {
            // Captura de error
            error_log("Error in ".__FUNCTION__.":". $ex->getTraceAsString());
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
     * Actualiza un elemento en la base datos usando la tabla carrito
     * @param Users $content Objeto de tipo BasicContent
     * @return boolean si fue exitoso el insert
     */
    public function truncate(){
        try {
            // Abro la base de datos
            $conect = new Connection();
            $pdo = $conect->openConnection();
            // EJECUTAR SENTENCIA 
            $query = "TRUNCATE TABLE temp_cart";
            if($pdo->query($query)){
                return TRUE;
            }
        } catch (Exception $exc) {
            error_log("Error in ".__FUNCTION__.":". $exc->getTraceAsString());
        }
        return FALSE;
    }
}