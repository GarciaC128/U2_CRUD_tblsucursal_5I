<?php

$servidor = "localhost";
$usuario = "root";
$contra = "";
$base_de_datos = "carlitos_food";

$db = mysqli_connect($servidor, $usuario, $contra, $base_de_datos);

if (!$db)
    die("No se pudo conectar a la base de datos: " . mysqli_connect_error());
