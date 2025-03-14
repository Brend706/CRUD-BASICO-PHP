<!-- Incluir el header que contiene tambien el head, para que se muestre el navbar -->
 <?php
 require_once("c:/xampp/htdocs/dsiw/crud/view/head/header.php");
 require_once("c:/xampp/htdocs/dsiw/crud/controller/ProductosController.php");
 $controller = new ProductosController(); //
 $productos = $controller->verProductos(); //Se llama a la función verProductos del controlador para obtener todos los productos
 ?>

<!-- Tabla de productos -->
 <h1>Productos</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Producto</th>
      <th scope="col">Costo</th>
      <th scope="col">Proveedor</th>
      <th scope="col">Precio</th>
      <th scope="col">Cantidad Stock</th>
      <th scope="col">Categoria</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <!-- Se recorre el arreglo de productos y se imprimen en la tabla -->
    <?php if(!empty($productos)): ?>
      <?php foreach ($productos as $producto) : ?>
      <tr>
        <th scope="row"><?= $producto['idProducto'] ?></th>
        <td><?= $producto['nombre'] ?></td>
        <td><?= $producto['costo'] ?></td>
        <td><?= $producto['proveedor'] ?></td>
        <td><?= $producto['precio_venta'] ?></td>
        <td><?= $producto['cantidad'] ?></td>
        <td><?= $producto['categoria'] ?></td>
        <td>
          <button>Editar</button>
          <button>Eliminar</button>
        </td>
      </tr>
      <?php endforeach; ?>
    <?php else: ?>
      <tr>
        <td colspan="8">No hay productos registrados</td>
      </tr>
    <?php endif; ?>
  </tbody>
</table>