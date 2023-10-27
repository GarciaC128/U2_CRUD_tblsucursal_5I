<?php include("./configuracion.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar Dasar CRUD dengan PHP dan MySQL">
    <title>Carlitos Food | Sucursal</title>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- material icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg-light">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom" style="position: sticky !important;
    top: 0 !important; z-index : 99999 !important;">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">Carlitos Food</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link active text-sm-start text-center" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary ms-md-4 text-white" href="#">Iniciar sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-5">
        <!-- form tambah mahasiswa -->
        <div class="card mb-5">
            <!-- <div class="card-header">
                Latihan CRUD PHP & MySQL
            </div> -->
            <!-- tambah data -->
            <div class="card-body">
                <h3 class="card-title">Carlitos Food Restuarurante</h3>
                <h5 class="card-title">Carlos Santiago García Morales</h5>
                <h5 class="card-title">Tabla: Sucursal</h5><br> 
                <!-- mostrar mensaje de éxito agregado -->
                <?php if (isset($_GET['estatus'])) : ?>
                    <?php
                    if ($_GET['estatus'] == 'exitoso')
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Exitoso!</strong> Datos agregados exitosamente!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    else
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong>  Error al agregar datos!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    ?>
                <?php endif; ?>


                <form class="row g-3" action="agregar.php" method="POST">
                    <div class="col-2">
                        <label for="id" class="form-label">ID de sucursal</label>
                        <input type="text" name="id" class="form-control" placeholder="S01" required>
                    </div>
                    <div class="col-5">
                        <label for="nombre" class="form-label">Nombre de sucursal</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Carlitos Food Las Torres" required>
                    </div>
                    <div class="col-md-5">
                        <label for="NIM" class="form-label">Dirección</label>
                        <input type="text" name="direcc" class="form-control" placeholder="Av. 16 de Septiembre 309" required>
                    </div>
                    <div class="col-md-4">
                        <label for="calif" class="form-label">calificacion</label>
                        <input type="number" name="calif" class="form-control" placeholder="10.00" required>
                    </div>

                    <div class="col-md-4">
                        <label for="tel" class="form-label">Telefono</label>
                        <input type="text" name="tel" class="form-control" placeholder="656 105 0945" required>
                    </div>



                    <div class="col-md-4">
                        <label for="tittle" class="form-label">Servicios</label>
                        <div class="col-md-12">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="seleccionados">Mesas</label>
                                <input class="form-check-input" type="checkbox" name="seleccionados[]" id="m" value="Mesas">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="seleccionados">Recoger pedidos</label>
                                <input class="form-check-input" type="checkbox" name="seleccionados[]" id="r" value="Recoger Pedidos">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="seleccionados"> Entrega a domicilio</label>
                                <input class="form-check-input" type="checkbox" name="seleccionados[]" id="d" value="Domicilio">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="seleccionados"> Fuera de servicio</label>
                                <input class="form-check-input" type="checkbox" name="seleccionados[]" id="f" value="Fuera de Servicio">
                            </div>
                        </div>
                 </div>



                    <div class="col-md-6">
                        <label for="capacidad" class="form-label">capacidad</label>
                        <input type="text" name="capacidad" class="form-control" placeholder="100 personas" required>
                    </div>

                    <div class="col-md-6">
                        <label for="horario" class="form-label">Horario</label>
                        <input type="text" step=0.01 name="horario" class=" form-control" placeholder="Lun-Dom 9 a.m. a 5 p.m." required>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" value="Agregar" name="agregar"><i class="fa fa-plus"></i><span class="ms-2">Enviar</span></button>
                    </div>
                </form>
            </div>
        </div>



        <!-- título de la tabla -->
        <h5 class="mb-3">Tabla Sucursal</h5>

        <div class="row my-3">
            <div class="col-md-2 mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Mostrar entradas</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            <div class="col-md-3 ms-auto">
                <div class="input-group mb-3 ms-auto">
                    <input type="text" class="form-control" placeholder="Encontrar algo..." aria-label="cari" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>


        <!-- mostrar mensaje de eliminación exitosa -->
        <?php if (isset($_GET['borrar'])) : ?>
            <?php
            if ($_GET['borrar'] == 'exitoso')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>exitoso!</strong> Datos eliminados exitosamente!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> No se pudieron eliminar los datos!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- mostrar mensaje de éxito en editar -->
        <?php if (isset($_GET['editar'])) : ?>
            <?php
            if ($_GET['editar'] == 'exitoso')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>exitoso!</strong> Datos actualizados exitosamente!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> Los datos no se pudieron actualizar!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tabel -->
        <div class="table-responsive mb-5 card">
            <?php
            echo "<div class='card-body'>";

            echo "<table class='table table-hover align-middle bg-white'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col' class='text-center'>Id sucursal</th>";
            echo "<th scope='col'>Nombre</th>";
            echo "<th scope='col'>Direccion</th>";
            echo "<th scope='col'>Horario</th>";
            echo "<th scope='col'>Calificación</th>";
            echo "<th scope='col'>capacidad</th>";
            echo "<th scope='col'>servicios</th>";
            echo "<th scope='col'>Telefono</th>";
            echo "<th scope='col' class='text-center'>Opciones</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";



            $limite = 10;
            $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
            $pagina_comienzo = ($pagina > 1) ? ($pagina * $limite) - $limite : 0;

            $previo = $pagina - 1;
            $siguiente = $pagina + 1;
             
            $consulta=
            $data = mysqli_query($db, "SELECT * FROM sucursal");
            $cantidad_datos = mysqli_num_rows($data);
            $total_pagina = ceil($cantidad_datos / $limite);

            $data_mhs = mysqli_query($db, "SELECT * FROM sucursal LIMIT $pagina_comienzo, $limite");
            $no = $pagina_comienzo + 1;

            // $sql = "SELECT * FROM mahasiswa";
            // $query = mysqli_query($db, $sql);




            while ($sucursales = mysqli_fetch_array($data_mhs)) {
                echo "<tr>";
                echo "<td class='text-center'>" . $sucursales['Id_sucursal'] . "</td>";
                echo "<td>" . $sucursales['nombre_sucursal'] . "</td>";
                echo "<td>" . $sucursales['direccion_sucursal'] . "</td>";
                echo "<td>" . $sucursales['horario'] . "</td>";
                echo "<td>" . $sucursales['calificacion'] . "</td>";
                echo "<td>" . $sucursales['capacidad'] . "</td>";
                echo "<td>" . $sucursales['servicios'] . "</td>";
                echo "<td>" . $sucursales['telefono_sucursal'] . "</td>";

                echo "<td class='text-center'>";

                echo "<button type='button' class='btn btn-primary botonEditar pad m-1'><span class='material-icons align-middle'>edit</span></button>";

                // boton borrar
                echo "
                            <!-- Button trigger modal -->
                            <button type='button' class='btn btn-danger botonBorrar pad m-1'><span class='material-icons align-middle'>delete</span></button>";
                echo "</td>";

                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
            if ($cantidad_datos == 0) {
                echo "<p class='text-center'>No hay datos disponibles en esta tabla</p>";
            } else {
                echo "<p>Total $cantidad_datos entradas</p>";
            }

            echo "</div>";
            ?>
        </div>

        <!-- pagination -->
        <nav class="mt-5 mb-5">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php echo ($pagina > 1) ? "href='?pagina=$previo'" : "" ?>><i class="fa fa-chevron-left"></i></a>
                </li>
                <?php
                for ($x = 1; $x <= $total_pagina; $x++) {
                ?>
                    <li class="page-item"><a class="page-link" href="?pagina=<?php echo $x ?>"><?php echo $x; ?></a></li>
                <?php
                }
                ?>
                <li class="page-item">
                    <a class="page-link" <?php echo ($pagina < $total_pagina) ? "href='?pagina=$siguiente'" : "" ?>><i class="fa fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Modal editarar-->
        <div class='modal fade' style="top:58px !important;" id='editModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog' style="margin-bottom:100px !important;">
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Editar datos de sucursal</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>

                    <?php
                    $sql = "SELECT * FROM sucursal";
                    $query = mysqli_query($db, $sql);
                    $sucursales = mysqli_fetch_array($query);
                    ?>

                    <form action='editar.php' method='POST'>
                            <div class='modal-body text-start'>
                            <div class="col-12 mb-3">
                                <label for="editar_Id" class="form-label">Id</label>
                                <input type="text" name="editar_id" id="editar_id" class="form-control" placeholder="S01" required>
                            </div>

                            <label for="editar_nombre" class="form-label">Nombre de sucursal</label>    
                               <input type="text" name="editar_nombre" id="editar_nombre" class="form-control" placeholder="Carlitos Food Las Torres" required>

                            <div class="col-12 mb-3">
                                <label for="editar_direccion" class="form-label">Dirección</label>
                                <input type="text" name="editar_direccion" id="editar_direccion" class="form-control" placeholder="Av. 16 de Septiembre 309" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="editar_horario" class="form-label">Horario</label>
                                <input type="text" name="editar_horario" id="editar_horario" class="form-control" placeholder="Lun-Dom 9 a.m. a 5 p.m." required>
                            </div>


                            <div class="col-12 mb-3">
                                <label for="editar_calificacion" class="form-label">Calificación</label>
                                <input type="number" name="editar_calificacion" class="form-control" id="editar_calificacion" placeholder="10.00" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="editar_telefono" class="form-label">Capacidad</label>
                                <input type="text" step=0.01 name="editar_capacidad" id="editar_capacidad" class=" form-control" placeholder="100 personas" required>
                            </div>

                            <div class="col-12 mb-3">
                                    <label for="tittle" class="form-label">Servicios</label>
                        
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="seleccionados">Mesas</label>
                                            <input class="form-check-input" type="checkbox" name="editar_seleccionados[]" id="mesas" value="Mesas">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="seleccionados">Recoger pedidos</label>
                                            <input class="form-check-input" type="checkbox" name="editar_seleccionados[]" id="recoger" value="Recoger Pedidos">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="seleccionados"> Entrega a domicilio</label>
                                            <input class="form-check-input" type="checkbox" name="editar_seleccionados[]" id="domicilio" value="Entrega a domicilio">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="seleccionados"> Fuera de servicio</label>
                                            <input class="form-check-input" type="checkbox" name="editar_seleccionados[]" id="fuera_de_servicio" value="Fuera de servicio">
                                        </div>
                            
                            </div>
                            
                            <div class="col-12 mb-3">
                                <label for="edit_telefono" class="form-label">Telefono</label>
                                <input type="text" step=0.01 name="editar_telefono" id="editar_telefono" class=" form-control" placeholder="656 105 0945" required>
                            </div>
                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='editar_datos' class='btn btn-primary'>Actualizar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- Modal borrar-->
        <div class='modal fade' style="top:58px !important;" id='deleteModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Confirmar</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>


                    <form action='eliminar.php' method='POST'>

                        <div class='modal-body text-start'>
                            <input type='hidden' name='Borrar_id' id='Borrar_id'>
                            <p>¿Estás seguro de que deseas eliminar estos datos?</p>
                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='borrardatos' class='btn btn-primary'>Eliminar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- tutup container -->
    </div>


    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Javascript bule with popper bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- edit function -->
    <script>
 $(document).ready(function() {
    $('#f').click(function() {
        if ($(this).is(':checked')) {
            $('#m').prop('checked', false);
            $('#r').prop('checked', false);
            $('#d').prop('checked', false);
        }
    });

    // Al hacer clic en cualquiera de los otros, deseleccionar "Fuera de servicio"
    $('#m, #r, #d').click(function() {
        if ($(this).is(':checked')) {
            $('#f').prop('checked', false);
        }
    });
    $('.botonEditar').on('click', function() {
        $('#editModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);
        $('#editar_id').val(data[0]);
        $('#editar_nombre').val(data[1]);
        $('#editar_direccion').val(data[2]);
        $('#editar_horario').val(data[3]);
        $('#editar_calificacion').val(data[4]);
        $('#editar_capacidad').val(data[5]);
        $('#editar_telefono').val(data[7]);
        var serviciosSeleccionados = data[6];

        // Deseleccionar todos los botones
        $('#mesas').prop('checked', false);
        $('#recoger').prop('checked', false);
        $('#domicilio').prop('checked', false);
        $('#fuera_de_servicio').prop('checked', false);

        if (serviciosSeleccionados.includes("Mesas")) {
            $('#mesas').prop('checked', true);
        }
        if (serviciosSeleccionados.includes("Recoger Pedidos")) {
            $('#recoger').prop('checked', true);
        }
        if (serviciosSeleccionados.includes("Entrega a domicilio")) {
            $('#domicilio').prop('checked', true);
        }
        if (serviciosSeleccionados.includes("Fuera de servicio")) {
            $('#fuera_de_servicio').prop('checked', true);
        }
    });

    // Al hacer clic en "Fuera de servicio," deseleccionar los otros
    $('#fuera_de_servicio').click(function() {
        if ($(this).is(':checked')) {
            $('#mesas').prop('checked', false);
            $('#recoger').prop('checked', false);
            $('#domicilio').prop('checked', false);
        }
    });

    // Al hacer clic en cualquiera de los otros, deseleccionar "Fuera de servicio"
    $('#mesas, #recoger, #domicilio').click(function() {
        if ($(this).is(':checked')) {
            $('#fuera_de_servicio').prop('checked', false);
        }
    });
});

    </script>

    <!-- delete function -->
    <script>
        $(document).ready(function() {
            $('.botonBorrar').on('click', function() {
                $('#deleteModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#Borrar_id').val(data[0]);
            });
        });
    </script>

    <script>
        function clicking() {
            window.location.href = './index.php';
        }
    </script>
</body>

</html>