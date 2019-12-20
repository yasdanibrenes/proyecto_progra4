<?php
    // Incluir la clase que maneja la base de datos
    require 'connection.php';
    class Services{
        // Atributos
        private $id;
        public $tittle;
        public $description;
        public $price;
        public $img;
        
        /**
         * Constructor
         * @param string $ptittle titulo del servicio
         * @param string $pdescription descripcion del servicio
         * @param int $pprice precio del servicio
         * @param string $pimg imagen del servicio 
         * @param int $pid ID del servicio
         */
        public function __construct($pid = 0, $ptittle = '', $pdescription = '', $pprice = '', $pimg ='') {
            $this->id = $pid;
            $this->tittle = $ptittle;
            $this->description = $pdescription;
            $this->price = $pprice;
            $this->img = $pimg;
        }
        
        /**
         * Inserta un elemento en la base datos usando la tabla servicio
         * @param Services $content Objeto de tipo servicio
         * @return boolean si fue exitoso el insert
         */
        public function insert(Services $content){
            try {
            // Abro la base de datos
            $conect = new Connection();
            $pdo = $conect->openConnection();
            // EJECUTAR SENTENCIA 
            $query = "INSERT INTO service (tittle, description, price, img) VALUES ('".$content->tittle."','".$content->description."','".$content->price."','".$content->img."')";
            if($pdo->query($query)){
                return TRUE;
            }
            } catch (Exception $exc) {
            error_log("Error in ".__FUNCTION__.":". $exc->getTraceAsString());
            }
            return FALSE;
        }
        
        /**
         * Selecciona uno o todos los elementos dentro de la tabla servicio
         * @param int $id Optional nos indica sobre cual elemento iterar 
         * @return boolean 
         */
        public function select($id = 0){
            try{
            $conect =  new Connection();
            $pdo = $conect->openConnection();
            $query = "SELECT id, tittle, description, price, img FROM service";
            if($id){
                $query .= " WHERE id='$id'";
            }
            $result = $pdo->query($query);
            $rows = [];
            while($row = $result->fetch()){
                $rows[] = new Services($row['id'], $row['tittle'], $row['description'], $row['price'], $row['img']);
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
            $query = "DELETE FROM service WHERE Id=$id";
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
         * @param Services $content Objeto de tipo BasicContent
         * @return boolean si fue exitoso el insert
         */
        public function update(Services $content){
            try {
            // Abro la base de datos
            $conect = new Connection();
            $pdo = $conect->openConnection();
            // EJECUTAR SENTENCIA 
            $query = "UPDATE service SET tittle = '".$content->tittle."', description = '".$content->description."', price = '".$content->price."', img = '".$content->img."' WHERE id=$content->id";
            if($pdo->query($query)){
                return TRUE;
            }
            } catch (Exception $exc) {
            error_log("Error in ".__FUNCTION__.":". $exc->getTraceAsString());
            }
            return FALSE;
        }
    }