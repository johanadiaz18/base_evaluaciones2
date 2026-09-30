<?php
include("conexion.php");

$consulta = mysqli_query($conexion, "SELECT * FROM clases");

while ($clase = mysqli_fetch_assoc($consulta)) {
?>
    <div style="background-color: #f4f4f4; padding: 10px; margin-bottom: 10px; border-radius: 5px;">
        <p style="margin: 0; font-weight: bold;"><?php echo htmlspecialchars($clase['unidad']); ?></p>
        <p style="margin: 5px 0 0 0; color: #555;">Fecha: <?php echo htmlspecialchars($clase['fecha']); ?></p>
    </div>
<?php
}
?>