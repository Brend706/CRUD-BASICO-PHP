<?php 

class ClientesModel{

    private $db;

    //El constructor crea una instancia de la clase db para poder utilizar la conexión a la base de datos en el modelo de productos 
    public function __construct(){
        require_once("c:/xampp/htdocs/dsiw/crud/config/db.php");
        $objdb = new db();
        $this->db = $objdb->conexion();
    }

    //Función que recibe los datos del formulario de crearProducto y los inserta en la base de datos
    public function crearCliente($nombre, $telefono, $direccion, $correo){
        
        //Preparar la consulta para evitar inyección de código
        //statement es una función de la clase PDO que prepara la consulta
        $statement = $this->db->prepare("INSERT INTO clientes(nombre, telefono, direccion, correo) VALUES (:nombre, :telefono, :direccion, :correo)");
        //bindParam es una función de la clase PDO que asigna valores a los parámetros de la consulta
        $statement->bindParam(':nombre', $nombre);
        $statement->bindParam(':telefono', $telefono);
        $statement->bindParam(':direccion', $direccion);
        $statement->bindParam(':correo', $correo);

        try{
            $statement->execute();
            return true;
        }catch(Exception){
            return false;
        }
    }

    //Función que obtiene todos los productos de la base de datos
    public function obtenerClientes(){
        $statement = $this->db->prepare("SELECT * FROM clientes");
        $statement->execute();
        $resultado = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
}

?>