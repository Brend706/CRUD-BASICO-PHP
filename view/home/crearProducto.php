<!-- Incluir el header que contiene tambien el head para que se muestre el navbar-->
<?php
 require_once("c:/xampp/htdocs/dsiw/crud/view/head/header.php");
 ?>

 <!-- Formulario para crear un producto -->
    <h1>Crear Producto</h1>
    <form action="procesarProducto.php" class="row g-3" id="formCrearProducto" method="POST" autocomplete="off">  
  <div class="col-md-6">
    <label for="nomProducto" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nomProducto" name="nomProducto" placeholder="Nombre del producto...">
  </div>
  <div class="col-md-4">
    <label for="costoProducto" class="form-label">Costo Unitario</label>
    <input type="text" class="form-control" id="costoProducto" name="costoProducto">
  </div>
  <div class="col-md-6">
    <label for="" class="form-label">Proveedor</label>
    <input type="text" class="form-control" id="proveedor" placeholder="Nombre del proveedor..." name="proveedor">
  </div>
  <div class="col-md-4">
    <label for="precioVenta" class="form-label">Precio de Venta</label>
    <input type="text" class="form-control" id="precioVenta" name="precioVenta">
  </div>
  <div class="col-md-6">
    <label for="stock" class="form-label">Cantidad de ingreso</label>
    <input type="text" class="form-control" id="stock" name="cantidad">
  </div>
  <div class="col-md-4">
    <label for="catProducto" class="form-label">Categoria</label>
    <select id="catProducto" class="form-select" name="categoria">
      <option selected value="Bebidas">Bebidas</option>
      <option value="Lacteos">Lacteos</option>
      <option value="Cereales">Cereales</option>
      <option value="Embutidos">Embutidos</option>
    </select>
  </div>

  <!-- Alerta de error -->
  <?php if(!empty($_GET['error'])): ?>
  <div class="alert alert-warning alert-dismissible fade show mb-3" id="alerterror" style="margin:auto;" role="alert">
    <?=$_GET['error'] ?> <!-- Se imprime el mensaje de error en el boton -->
    <button class="btn-close" type="button" data-bs-dismiss="alert" arial-label="Close"></button>
  </div>
  <?php endif; ?>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Crear Producto</button>
  </div>
</form>

<?php
 require_once("c:/xampp/htdocs/dsiw/crud/view/head/footer.php");
 ?>