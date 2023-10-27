<?php
include("./configuracion.php");

// Compruebe si se ha hecho clic en el botón de registro o no
if (isset($_POST['editar_datos'])) {
    // obtener datos del formulario
    $id = $_POST['editar_id'];
    $nombre = $_POST['editar_nombre'];
    $direccion = $_POST['editar_direccion'];
    $horario = $_POST['editar_horario'];
    $calificacion = $_POST['edit_calificacion'];
    $capacidad = $_POST['editar_capacidad'];
    $selecc = $_POST['editar_seleccionados'];
    $servicios = implode(', ', $selecc);
    $telefono = $_POST['editar_telefono'];


    // consulta
    $sql = "UPDATE sucursal SET Id_sucursal='$id', nombre_sucursal='$nombre', direccion_sucursal='$direccion', horario='$horario', calificacion='$calificacion', capacidad='$capacidad', servicios='$servicios', telefono_sucursal='$telefono' WHERE Id_sucursal = '$id'";

    $consulta= mysqli_query($db, $sql);

    // ¿Comprueba si la consulta se guardó correctamente?
    if ($consulta)
        header('Location: ./index.php?editar=exitoso');
    else
        header('Location: ./index.php?editar=fallido');
} else
    die("Akses dilarang...");
