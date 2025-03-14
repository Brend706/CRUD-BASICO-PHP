<?php

    class ClientesController{

        private $model; //Variable que almacenara una instancia de ProductosModel

        //El constructor crea una instancia de ProductosModel para poder utilizar sus métodos en el controlador
        public function __construct(){
            require_once("c:/xampp/htdocs/dsiw/crud/model/ClientesModel.php");
            $this->model = new ClientesModel(); //
        }

        //Función que recibe los datos del formulario de crearProducto y los envía al modelo para que se guarden en la base de datos
        public function guardarCliente($nombre, $telefono, $direccion, $correo){
            $objCliente = $this->model->crearCliente($nombre, $telefono, $direccion, $correo);
            return $objCliente;
        }

        //Función que obtiene todos los productos de la base de datos
        public function listarClientes(){
            $clientes = $this->model->obtenerClientes();
            return $clientes;
        }

    } 


?>