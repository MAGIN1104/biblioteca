  <!-- MODAL EDITAR LIBRO -->
  <div class="modal fade" id="modal_elibro<?php echo $fila['cod_libro'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <form method="POST" action="./source/editLibro.php">
                            <input type="hidden"  name="cod" value="<?php echo $fila['cod_libro'];?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Categoria:</label>
                                        <input style="text-transform:uppercase" type="text" name="cat" class="form-control" id="recipient-name" value="<?php echo $fila['categoria'];?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Título:</label>
                                        <input style="text-transform:uppercase" type="text" name="tit" class="form-control" id="recipient-name" value="<?php echo $fila['titulo'];?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Autor:</label>
                                        <input style="text-transform:uppercase" type="text" name="aut" class="form-control" id="recipient-name" value="<?php echo $fila['autor'];?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Editorial:</label>
                                        <input style="text-transform:uppercase" type="text" name="edi" class="form-control" id="recipient-name" value="<?php echo $fila['editorial'];?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Año de Publicación:</label>
                                        <input style="text-transform:uppercase" type="number" name="ani" class="form-control" id="recipient-name" value="<?php echo $fila['anio_publicacion'];?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <input type="submit" class="submit btn btn-success" value="Actualizar">
                            </div>
                        </form>
                    </div><!-- FORMULARIO REGISTRO LIBRO -->
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div> -->
            </div>
        </div>
    </div>
    <!-- FINAL  MODAL EDITAR LIBROS -->