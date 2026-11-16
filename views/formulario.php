<h1>Nuevo producto</h1>
<?php
$error = isset($error) ? $error : ''; 
?>
<?php if ($error): ?>
    <p style="color:red"><?php echo $error; ?></p>
<?php endif; ?>
<form method="post" action="index.php?accion=guardar">
  <p><label>Nombre: <input name="nombre" required></label></p>
  <p><label>Precio: <input type="number" step="0.01" name="precio" 
required></label></p>
  <p><label>Existencia: <input type="number" name="existencia" 
value="0"></label></p>
  <button>Guardar</button> <a href="index.php">Cancelar</a>
</form>
<?php if ($error): ?>
    <p style="color:red"><?php echo $error; ?></p>
<?php endif; ?>
<form method="post" action="index.php?accion=eliminar">
  <p><label>ID del producto a eliminar: <input type="number" name="id" required></label></p>
  <button>Eliminar</button> <a href="index.php">Cancelar</a>
</form>