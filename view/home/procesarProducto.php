<?php
require_once("c:xampp/htdocs/dsiw/crud/controller/ProductosController.php");

//se crea un objeto de la clase ProductosController
$producto = new ProductosController();

$nomProducto = $_POST['nomProducto'];
$costoProducto = $_POST['costoProducto'];
$proveedor = $_POST['proveedor'];   
$precioVenta = $_POST['precioVenta'];
$cantidad = $_POST['cantidad'];
$categoria = $_POST['categoria'];

$ERROR = "";

//si todos los campos estan vacios entonces se redirecciona a la página de crearProducto.php con un mensaje de error
if(empty($nomProducto) || empty($costoProducto) || empty($proveedor) || empty($precioVenta) || empty($cantidad) || empty($categoria)){

    $ERROR = "Todos los campos son obligatorios";
    //header es una función de php que redirecciona a una página en específico y se le pasa como parámetro la ruta de la página a la que se quiere redireccionar
    //header("Location: c:xampp/htdocs/dsiw/crud/view/home/crearProducto.php?error=$ERROR");
    header("Location:crearProducto.php?error=$ERROR");
}else{
    if($producto->guardarProducto($nomProducto, $costoProducto, $proveedor, $precioVenta, $cantidad, $categoria)){
        $ERROR = "Producto guardado con éxito";
        header("Location:crearProducto.php?error=$ERROR");
    }else{
        $ERROR = "Error al guardar el nuevo producto, intente de nuevo";
        header("Location:crearProducto.php?error=$ERROR");
    }
}
