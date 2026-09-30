<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $email = htmlspecialchars($_POST['email']);
    $comentario = htmlspecialchars($_POST['comentario']);

    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fecha_hora = date("d/m/Y H:i:s");

    $nuevo_comentario = '
    <div style="background-color: #f8f9fa; border-left: 4px solid #eab308; padding: 10px; margin-bottom: 12px; border-radius: 4px;">
        <p style="margin: 0; font-weight: bold; color: #333;">' . $nombre . ' ' . $apellido . ' <span style="font-weight: normal; font-size: 0.85em; color: #666;">(' . $email . ')</span></p>
        <p style="margin: 5px 0; color: #444;">' . $comentario . '</p>
        <small style="color: #888;">Enviado el: ' . $fecha_hora . '</small>
    </div>
    ';

    $archivo = fopen("comentarios.txt", "a");
    fwrite($archivo, $nuevo_comentario);
    fclose($archivo);

    header("Location: unidad3.php");
    exit();
}
?>