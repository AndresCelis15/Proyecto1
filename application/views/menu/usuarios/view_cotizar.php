<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lo hago por dinero</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>

</head>

<body>
    <h5>Datos personales</h5>
    <div class="container">
        <form action="<?php echo base_url(); ?>index.php/Usuarios/registro_usuarios" method="post">

            <div class="row g-3">
                <div class="col">
                    <label for="inputPassword4" class="form-label">Nombre(s)*</label>
                    <input type="text" class="form-control" placeholder="Nombre(s)" aria-label="Nombre(s)"
                        name="nombres">
                </div>

                <div class="col">
                    <label for="inputPassword4" class="form-label">Apellido(s)*</label>
                    <input type="text" class="form-control" placeholder="Apellido(s)" aria-label="Apellido(s)"
                        name="apellidos">
                </div>
            </div>
            <br>
            <div class="row g-3">
                <div class="col">
                    <label for="inputPassword4" class="form-label">E-mail*</label>
                    <input type="text" class="form-control" placeholder="E-mail" aria-label="E-mail" name="cedula">
                </div>

                <div class="col">
                    <label for="inputPassword4" class="form-label">Cedula*</label>
                    <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula" name="celular">
                </div>
            </div>

            <div class="col-sm-6">
                <label for="inputPassword4" class="form-label">Celular*</label>
                <input type="text" class="form-control" placeholder="#" aria-label="#" name="correo">
                <P><small>Debe tener de 10 numeros</small></P>
            </div>
    </div>
    


    <h5>Datos del vehiculo</h5>
    <div class="container">

        <div class="row g-3">
            <div class="col">
                <label for="inputPassword4" class="form-label">Marca</label>
                <input type="text" class="form-control" placeholder="#" aria-label="#" name="marca">
            </div>
        </div>


        <div class="col">
            <label for="inputPassword4" class="form-label">Modelo</label>
            <input type="text" class="form-control" placeholder="#" aria-label="#" name="modelo">
        </div>
    </div>




    <h5>Seleccione su concesionario</h5>
    <div class="container">



        <div class="row g-3">
            <div class="col">
                <label for="inputPassword4" class="form-label">Ciudad</label>
                <input type="text" class="form-control" placeholder="#" aria-label="#" name="ciudad">
            </div>
        </div>


        <div class="col">
            <label for="inputPassword4" class="form-label">Concesionario</label>
            <input type="text" class="form-control" placeholder="#" aria-label="#" name="concesionario">
        </div>
    </div>


    <div class="container">

        <div class="col-auto">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                <label class="form-check-label" for="autoSizingCheck2">
                    Acepto que el concesionario pueda contactarme por mail o telefono
                </label>
            </div>


            <div class="col-auto">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                    <label class="form-check-label" for="autoSizingCheck2">
                        Acepto Terminos y condiciones
                    </label>
                </div>

                <div class="modal-footer">
                    <button value="btnAgregar" class="btn btn-primary" type="submit" name="accion">Enviar</button>
                    <button value="btnCancelar" class="btn btn-danger" type="submit" name="accion">Cancelar</button>

                </div>
            </div>
        </div>
    </div>
    </form>
    <div class="container">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Email</th>
                        <th scope="col">Cedula</th>
                        <th scope="col">marca</th>
                        <th scope="col">modelo</th>
                        <th scope="col">ciudad</th>
                        <th scope="col">concesionario</th>
                        <th scope="col">Foto</th>


                    </tr>
                </thead>
                <tbody>
                    <?php       
                    foreach($cotizacion as $cotizacion ){
                ?>

                    <tr>
                        <td><?php echo $cotizacion ->Id?></td>
                        <td><?php echo $cotizacion ->Nombre?></td>
                        <td><?php echo $cotizacion ->Apellido?></td>
                        <td><?php echo $cotizacion ->celular?></td>
                        <td><?php echo $cotizacion ->Email?></td>
                        <td><?php echo $cotizacion ->Cedula?></td>
                        <td><?php echo $cotizacion ->marca?></td>
                        <td><?php echo $cotizacion ->modelo?></td>
                        <td><?php echo $cotizacion ->ciudad?></td>
                        <td><?php echo $cotizacion ->concesionario?></td>
                        <td><img src="http://localhost/proyecto/img/<?php echo $cotizacion->foto ?>.png" width="100px">
                        <td>

                            <a class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#eliminarUser<?php echo $cotizacion ->Id?>">Eliminar</a>


                            <!-- Modal -->
                            <div class="modal fade" id="eliminarUser<?php echo $cotizacion ->Id?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Eliminar usuario</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Esta seguro de eliminar usuario <?php echo $cotizacion ->Nombre?>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <a href="<?php echo base_url(); ?>index.php/Usuarios/eliminar_user/<?php echo $cotizacion ->Id?>"
                                                class="btn btn-danger btn-sm">Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                        <a class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modificaruser<?php echo $cotizacion ->Id?>">modificar</a>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="modificaruser<?php echo $cotizacion ->Id?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form
                                            action="<?php echo base_url(); ?>index.php/Usuarios/modificaruser/<?php echo $cotizacion ->Id?>"
                                            method="post">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row g-3">
                                                    <div class="col">
                                                        <label for="inputPassword4"
                                                            class="form-label">Nombre(s)*</label>
                                                        <input type="text" value="<?php echo $cotizacion ->Nombre?>"
                                                            class="form-control" placeholder="Nombre(s)"
                                                            aria-label="Nombre(s)" name="nombres">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <label for="inputPassword4" class="form-label">Apellido(s)*</label>
                                                    <input type="text" value="<?php echo $cotizacion ->Apellido?>"
                                                        class="form-control" placeholder="Apellido(s)"
                                                        aria-label="Apellido(s)" name="apellidos">
                                                </div>
                                                <br>
                                                <div class="row g-3">
                                                    <div class="col">
                                                        <label for="inputPassword4" class="form-label">E-mail*</label>
                                                        <input type="text" value="<?php echo $cotizacion ->Email?>"
                                                            class="form-control" placeholder="E-mail"
                                                            aria-label="E-mail" name="correo">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <label for="inputPassword4" class="form-label">Cedula*</label>
                                                    <input type="text" value="<?php echo $cotizacion ->Cedula?>"
                                                        class="form-control" placeholder="Cedula" aria-label="Cedula"
                                                        name="cedula">
                                                </div>

                                                <div class="col-sm-6">
                                                    <label for="inputPassword4" class="form-label">Celular*</label>
                                                    <input type="text" value="<?php echo $cotizacion ->celular?>"
                                                        class="form-control" placeholder="#" aria-label="#"
                                                        name="celular">
                                                    <P><small>Debe tener de 10 numeros</small></P>
                                                </div>




                                                <h5>Datos del vehiculo</h5>


                                                <div class="row g-3">
                                                    <div class="col">
                                                        <label for="inputPassword4" class="form-label">Marca</label>
                                                        <input type="text" value="<?php echo $cotizacion ->marca?>"
                                                            class="form-control" placeholder="#" aria-label="#"
                                                            name="marca">
                                                    </div>
                                                </div>


                                                <div class="col">
                                                    <label for="inputPassword4" class="form-label">Modelo</label>
                                                    <input type="text" value="<?php echo $cotizacion ->modelo?>"
                                                        class="form-control" placeholder="#" aria-label="#"
                                                        name="modelo">
                                                </div>




                                                <h5>Seleccione su concesionario</h5>

                                                <div class="row g-3">
                                                    <div class="col">
                                                        <label for="inputPassword4" class="form-label">Ciudad</label>
                                                        <input type="text" value="<?php echo $cotizacion ->ciudad?>"
                                                            class="form-control" placeholder="#" aria-label="#"
                                                            name="ciudad">
                                                    </div>
                                                </div>


                                                <div class="col">
                                                    <label for="inputPassword4" class="form-label">Concesionario</label>
                                                    <input type="text" value="<?php echo $cotizacion ->concesionario?>"
                                                        class="form-control" placeholder="#" aria-label="#"
                                                        name="concesionario">
                                                </div>




                                                <div class="col-auto">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="autoSizingCheck2">
                                                        <label class="form-check-label" for="autoSizingCheck2">
                                                            Acepto que el concesionario pueda contactarme por mail o
                                                            telefono
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="autoSizingCheck2">
                                                        <label class="form-check-label" for="autoSizingCheck2">
                                                            Acepto Terminos y condiciones
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>

                    <?php
                    }
                ?>

                </tbody>
            </table>
        </div>
    </div>

    <P><small>*Campos obligarios*</small></P>



</body>

</html>