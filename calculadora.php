<?php 
$total = null; 
$total1 = null;
$monto_descuento = "";
$cliente = "";  
if ($_SERVER["REQUEST_METHOD"] === "POST") {    
    $precio   = (float) $_POST["precio"];    
    $cantidad = (int) $_POST["cantidad"];    
    $subtotal = $precio * $cantidad;    
    $total    = $subtotal * 1.16; // IVA 16 % 
    $cliente  = $_POST["cliente"];
    $subtotal_con_descuento = $subtotal - ($subtotal * 0.05);
    $monto_descuento = $subtotal * 0.05;
    $subtotal_con_descuento = $subtotal - $monto_descuento;
    $total1   = $subtotal_con_descuento * 1.16;
    
    } 
    ?> 
    <h1>Calculadora de compra</h1> 
    <form method="get"> 
        <label>Cliente: <input type="text" name="cliente" value="<?= htmlspecialchars($cliente) ?>" required></label>
        <label>Precio: <input type="number" step="1.50" name="precio" required></label>  
        <label>Cantidad: <input type="number" name="cantidad" min="1" required></label> 
        <button>Calcular</button> 
        </form> 
       <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
    <?php if ($cantidad >=  10): ?>  
        <p><strong>Descuento aplicado (5%):</strong> <?= number_format($monto_descuento, 2) ?></p>
        <p><strong>Total con descuento e IVA:</strong> <?= number_format($total1, 2) ?></p> 
        <p>¡Gracias por venir, tenga un gran día, <?= htmlspecialchars($cliente, ENT_QUOTES, 'UTF-8') ?>!</p>
    <?php else: ?>
        <p>Total con IVA: $<?= number_format($total, 2) ?></p> 
        <p>¡Gracias por venir, tenga un gran día, <?= htmlspecialchars($cliente, ENT_QUOTES, 'UTF-8') ?>!</p>
    <?php endif; ?>
<?php endif; ?>