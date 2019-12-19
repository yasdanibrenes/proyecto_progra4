<?php
    // Incluir la clase que maneja la base de datos
    require 'connection.php';
    class Users{
    // Atributos
    private $id;
    public $name;
    public $email;
    public $password;
    
    /**
     * Constructor
     * @param string $pname nombre del usuario
     * @param int $pemail correo del usuario
     * @param string $ppassword contraseña del usuario 
     * @param int $pid ID del usuario
     */
    public function __construct($pid = 0, $pname = '', $pemail = '', $ppassword = '') {
        $this->id = $pid;
        $this->name = $pname;
        $this->email = $pemail;
        $this->password = $ppassword;
    }
    
    /**
     * Inserta un elemento en la base datos usando la tabla usuario
     * @param Users $content Objeto de tipo usuario
     * @return boolean si fue exitoso el insert
     */
    public function insert(users $content){
        try {
        // Abro la base de datos
        $conect = new Connection();
        $pdo = $conect->openConnection();
        // EJECUTAR SENTENCIA 
        $query = "INSERT INTO user (name, email, password) VALUES ('".$content->name."',".$content->email.",'".$content->password."')";
        if($pdo->query($query)){
            return TRUE;
        }
        } catch (Exception $exc) {
        error_log("Error en la ".__FUNCTION__.":". $exc->getTraceAsString());
        }
        return FALSE;
    }
    
    /**
     * Selecciona uno o todos los elementos dentro de la tabla usurio
     * @param int $id Optional nos indica sobre cual elemento iterar 
     * @return boolean 
     */
    public function select($id = 0){
        try{
        $conect =  new Connection();
        $pdo = $conect->openConnection();
        $query = "SELECT id, name, email, password FROM user";
        if($id){
            $query .= " WHERE id='$id'";
        }
        $result = $pdo->query($query);
        $rows = [];
        while($row = $result->fetch()){
            $rows[] = new Users($row['id'], $row['name'], $row['email'], $row['password']);
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
     * Elimina un elemento de la tabla usuario
     * @param type $id
     * @return boolean
     */
    public function delete($id){
        try{
        $conect =  new Connection();
        $pdo = $conect->openConnection();
        $query = "DELETE FROM user WHERE Id=$id";
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
     * Actualiza un elemento en la base datos usando la tala producto
     * @param users $content Objeto de tipo BasicContent
     * @return boolean si fue exitoso el insert
     */
    public function update(users $content){
        try {
        // Abro la base de datos
        $conect = new Connection();
        $pdo = $conect->openConnection();
        // EJECUTAR SENTENCIA 
        $query = "UPDATE user SET name = '".$content->name."', email =".$content->email.", password ='".$content->password."' WHERE id=$content->id";
        if($pdo->query($query)){
            return TRUE;
        }
        } catch (Exception $exc) {
        error_log("Error in ".__FUNCTION__.":". $exc->getTraceAsString());
        }
        return FALSE;
    }
    }