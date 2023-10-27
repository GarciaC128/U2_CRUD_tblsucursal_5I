<?php
include("./configuracion.php");

if (isset($_POST['borrardatos'])) {
    // tomar la identificación de la cadena de consulta
    $id = $_POST['Borrar_id'];

    // consulta para eliminar
    $sql = "DELETE FROM sucursal WHERE id_sucursal = '$id'";
    $consulta = mysqli_query($db, $sql);

    // ¿Se eliminó correctamente la consulta?
    if ($consulta) {
        header('Location: ./index.php?borrar=exitoso');
    } else
        die('Location: ./index.php?borrar=fallido');
} else
    die("acceso denegado...");
