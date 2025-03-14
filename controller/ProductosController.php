<?php

class ProductosController{

    private $model; //Variable que almacenara una instancia de ProductosModel

    //El constructor crea una instancia de ProductosModel para poder utilizar sus métodos en el controlador
    public function __construct(){
        require_once("c:/xampp/htdocs/dsiw/crud/model/ProductosModel.php");
        $this->model = new ProductosModel(); //
    }

    //Función que recibe los datos del formulario de crearProducto y los envía al modelo para que se guarden en la base de datos
    public function guardarProducto($nombre, $costo, $proveedor, $precioVenta, $cantidad, $categoria){
        $objProducto = $this->model->crearProducto($nombre, $costo, $proveedor, $precioVenta, $cantidad, $categoria);
        return $objProducto;
    }

    //Función que obtiene todos los productos de la base de datos
    public function verProductos(){
        $productos = $this->model->obtenerProductos();
        return $productos;
    }

}

?>