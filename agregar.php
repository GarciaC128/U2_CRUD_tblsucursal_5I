<?php
include("./configuracion.php");

// Compruebe si se ha hecho clic en el botón de registro o no
if (isset($_POST['agregar'])) {
    // recuperar datos del formulario
    $id=$_POST['id'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direcc'];
    if (isset($_POST['seleccionados'])) {
        $selecc = $_POST['seleccionados'];

        
        $servicios = implode(', ', $selecc);
    } else {

    };
    $calificacion = $_POST['calif'];
    $telefono = $_POST['tel'];
    $capacidad = $_POST['capacidad'];
    $horario = $_POST['horario'];

    // consulta
    $sql = "INSERT INTO sucursal(Id_sucursal, nombre_sucursal, direccion_sucursal, horario, calificacion, capacidad, servicios, telefono_sucursal)
    VALUES('$id', '$nombre', '$direccion', '$horario', '$calificacion', '$capacidad','$servicios','$telefono')";
    $query = mysqli_query($db, $sql);

    // Comprueba si la consulta se guardó correctamente
    if ($query)
        header('Location: ./index.php?estatus=exitoso');
    else
        header('Location: ./index.php?estatus=fallido');
} else
    die("Acceso denegado...");
