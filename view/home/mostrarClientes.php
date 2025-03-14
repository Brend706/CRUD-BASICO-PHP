<?php 
require_once("c:/xampp/htdocs/dsiw/crud/view/head/header.php");
require_once("c:/xampp/htdocs/dsiw/crud/controller/ClientesController.php");

$controller = new ClientesController();
$clientes = $controller->listarClientes();
?>

<!-- Tabla de clientes -->
<h1>Mis Clientes</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre del Cliente</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion</th>
      <th scope="col">Correo</th>
    </tr>
  </thead>
  <tbody>
    <?php if(!empty($clientes)): ?>
      <?php foreach ($clientes as $cliente) : ?>
      <tr>
        <th scope="row"><?= $cliente['idCliente'] ?></th>
        <td><?= $producto['nombreCliente'] ?></td>
        <td><?= $producto['telefono'] ?></td>
        <td><?= $producto['direccion'] ?></td>
        <td><?= $producto['correo'] ?></td>
        <td>
          <button>Editar</button>
          <button>Eliminar</button>
        </td>
      </tr>
      <?php endforeach; ?>
    <?php else: ?>
      <tr>
        <td colspan="8">No hay clientes registrados</td>
      </tr>
    <?php endif; ?>
  </tbody>
</table>