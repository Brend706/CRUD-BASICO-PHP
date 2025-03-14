<?php

class db{
    private $host = 'localhost';
    private $dbUsername = 'root';
    private $dbPassword = '';
    private $dbName = 'crud';

    //funcion para hacer la conexion a la base de datos
    public function conexion(){
        try{
            //pdo es una clase de php que permite la conexion a la base de datos, se le pasan los parametros de la conexion y se guarda en una variable
            $dbConexion = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->dbUsername, $this->dbPassword);
            return $dbConexion;
        }catch(PDOException $e){
            return "Error: ".$e->getMessage();
        }
    }
}
//se crea un objeto de la clase db y se llama a la funcion conexion para hacer la conexion a la base de datos y se imprime el resultado de la conexion en pantalla con print_r
//$obj = new db();
//print_r($obj->conexion());

?>