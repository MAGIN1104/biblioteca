<?php
include_once "./source/models.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Hojas de estilo personalizado -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Font awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <!-- Iconos Google -->
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css" rel="stylesheet">
    <!-- Fuente -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <title>BIBLIOTECA VIRTUAL</title>
    <link rel="shortcut icon" type="image/jpeg" href="../img/img2.jpg">
</head>

<body>

    <div class="container-fluid fondo">
        <div class="row alto align-items-center justify-content-center text-center text-light">
            <div class="col-md-8">
                <h1 class="display-1"> <i class="mdi mdi-book-open-page-variant" aria-hidden="true"></i> </h1>
                <h3 class="display-3" style="font-family: 'Tangerine', serif; text-shadow: 4px 4px 4px #aaa;">Biblioteca Virtual</h3>
                <p class="lead">Plataforma virtual para el registro de libros y usuarios. Asi mismo realizar reservas de libros.</p>
                <hr class="bg-light">
                <!-- <button type="button" class="btn btn-outline-light mt-3 mt-sm-0" data-toggle="modal" data-target="#modal_libro"> <i class="fas fa-book-open"></i> Libros</button> -->
                <button type="button" class="btn btn-outline-light mt-3 mt-sm-0" data-toggle="modal" data-target="#modal_rlibro"><i class="fas fa-book"></i> Registrar Libro</button>
                <button type="button" class="btn btn-outline-light mt-3 mt-sm-0" data-toggle="modal" data-target="#modal_rusuario"><i class="fas fa-user-plus"></i> Registrar Usuario</button>
                <button type="button" class="btn btn-outline-light mt-3 mt-sm-0" data-toggle="modal" data-target="#modal_reserva"><i class="fas fa-ticket-alt"></i> Reservar</button>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row align-items-center justify-content-center text-center text-light ">
            <div class="col-md-8">
                <h3 class="display-5" text-shadow: 4px 4px 4px #aaa;">Lista de Libros</h3>
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th scope="col">COD</th>
                            <th scope="col">TITULO</th>
                            <th scope="col">AUTOR</th>
                            <th scope="col">ACCIÓN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        if ($resultado->num_rows) {
                            while ($fila = $resultado->fetch_assoc()) {
                                echo '<tr>' .
                                    '<td scope="row">' . $fila['cod_libro'] . '</td>' .
                                    '<td>' . $fila['titulo'] . '</td>' .
                                    '<td>' . $fila['autor'] . '</td>' .
                                    '<td>' .
                                    '<form method="POST" action="./source/borrarLibro.php">' .
                                    '<input type="hidden" name="id_libro" value="' . $fila['cod_libro'] . '">' .
                                    '<button type="submit" class="btn btn-danger"> <i class="fas fa-trash"></i> </button>'.
                                    '<button type="button" class="btn btn-success ml-2" data-toggle="modal" data-target="#modal_elibro'.$fila['cod_libro'].'"> <i class="fas fa-edit"></i> </button>'.
                                '</form>'
                        ?>
                                </td>
                                </tr>
                        <?php
                                include "./source/ModalEditar.php";
                            }
                        } else {
                            echo '<td>No hay registro</td>';
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>





    <!-- MODAL REGISTRAR LIBRO -->
    <div class="modal fade" id="modal_rlibro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header">
                    <h5 class="display-5 lead"> <i class="fas fa-book"></i> Registrar Libro </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="fa-layers fa-fw">
                            <i class="fa-inverse fas fa-times" data-fa-transform="shrink-6"></i>
                        </span>
                </div>
                <div class="modal-body">
                    <div class="container mt-3 mb-3">
                        <form method="POST" action="./source/registroLibro.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Código:</label>
                                        <input type="text" name="cod_libro" class="form-control" id="recipient-name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Categoria:</label>
                                        <input style="text-transform:uppercase" type="text" name="categoria" class="form-control" id="recipient-name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Título:</label>
                                        <input style="text-transform:uppercase" type="text" name="titulo" class="form-control" id="recipient-name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Autor:</label>
                                        <input style="text-transform:uppercase" type="text" name="autor" class="form-control" id="recipient-name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Editorial:</label>
                                        <input style="text-transform:uppercase" type="text" name="editorial" class="form-control" id="recipient-name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Año de Publicación:</label>
                                        <input type="number" name="anio_publicacion" class="form-control" id="recipient-name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <input type="submit" class="submit btn btn-success" value="Registrar Libro">
                            </div>
                        </form>
                    </div><!-- FORMULARIO REGISTRO LIBRO -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- FINAL  MODAL REGISTRO LIBROS -->



    <!-- MODAL REGISTRAR USUARIO -->
    <div class="modal fade" id="modal_rusuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header">
                    <h6 class="display-5 lead"><i class="fas fa-user-plus"></i> Registrar Usuario </h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="fa-layers fa-fw">
                            <i class="fa-inverse fas fa-times" data-fa-transform="shrink-6"></i>
                        </span>
                </div>
                <div class="modal-body">
                    <div class="container mt-3 mb-3">
                        <form method="POST" action="./source/registroUser.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Nombres</label>
                                        <input style="text-transform:uppercase" type="text" name="nombre" class="form-control" id="recipient-name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Apellidos:</label>
                                        <input style="text-transform:uppercase" type="text" name="apellidos" class="form-control" id="recipient-name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Código:</label>
                                        <input style="text-transform:uppercase" type="text" name="codigo" class="form-control" id="recipient-name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Email:</label>
                                        <input type="text" name="email" class="form-control" id="recipient-name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Celular:</label>
                                        <input type="number" name="cel" class="form-control" id="recipient-name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <input type="submit" class="submit btn btn-success" value="Registrar Usuario">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div><!-- MODAL PRODUCTS -->


    <!-- RESERVA -->
    <div class="modal fade" id="modal_reserva" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header">
                    <h5 class="display-5 lead"><i class="fas fa-ticket-alt"></i> Reservar Libro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="fa-layers fa-fw">
                            <i class="fa-inverse fas fa-times" data-fa-transform="shrink-6"></i>
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <form method="POST" action="./source/registroReserva.php">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Fecha Salida:</label>
                                    <input type="date" class="form-control" id="recipient-name" name="prestamo" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Fecha Devolucion:</label>
                                    <input type="date" class="form-control" id="recipient-name" name="devolucion" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Codigo Estudiante:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="estudiante" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Codigo Libro:</label>
                                    <input type="number" class="form-control" id="recipient-name" name="libro" required>
                                </div>
                                <div class="row justify-content-center">
                                    <input type="submit" class="submit btn btn-success" value="Solicitar Libro">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-8 mt-3 mt-md-4">
                            <p class="display-5">LIBROS PRESTADOS</p>
                            <table class="table table-striped text-white">
                                <thead>
                                    <tr>
                                        <th scope="col">De</th>
                                        <th scope="col">Hasta</th>
                                        <th scope="col">Cod. Est</th>
                                        <th scope="col">Cod. Libro</th>
                                        <th scope="col">Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    if ($resultados->num_rows) {
                                        while ($fila = $resultados->fetch_assoc()) {
                                            echo '<tr>' .
                                                '<td scope="row">' . $fila['f_prestamo'] . '</td>' .
                                                '<td>' . $fila['f_devolucion'] . '</td>' .
                                                '<td>' . $fila['id_estudiante'] . '</td>' .
                                                '<td>' . $fila['id_libro'] . '</td>' .
                                                '<td>' .
                                                '<form method="POST" action="./source/borrarRegistro.php">' .
                                                '<input type="hidden" name="id_prestamo" value="' . $fila['id_prestamo'] . '">' .
                                                '<button type="submit" class="btn btn-danger"> <i class="fas fa-trash"></i> </button>' .
                                                '</form>'
                                                .'</td>' .
                                                '</tr>';
                                        }
                                    } else {
                                        echo '<td>No hay registro</td>';
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!--RESERVA -->







    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>