<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seccion noticia</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>

</head>

<body>

    <body style="background-color:#000;">
        <div class="p-3 mb-2  text-white">

            <h5 class="text-center">Agendar Cita Automobex</h5>

            <p class="text-center"> Para agendar una cita en nuestros concesionarios solicitamos llenar el siguiente
                formulario y un Agente de Venta se comunicará con usted.</p>
            <div class="text-center">
                <img src="http://localhost/proyecto/img/hol.png" class="rounded" alt="...">
            </div>

            <br>
            <div class="container">
                <form action="<?php echo base_url(); ?>index.php/Usuarios/Delfin" method="post">
                    <div class="row g-3">
                        <div class="col">
                            <label for="inputPassword4" class="form-label">Nombre(s)*</label>
                            <input type="text" class="form-control" placeholder="Nombre(s)" aria-label="Nombre(s)"
                                name="Nombre">
                        </div>
                    </div>

                    <div class="col">
                        <label for="inputPassword4" class="form-label">Apellido(s)*</label>
                        <input type="text" class="form-control" placeholder="Apellido(s)" aria-label="Apellido(s)"
                            name="apellido">
                    </div>

                    <br>
                    <div class="row g-3">
                        <div class="col">
                            <label for="inputPassword4" class="form-label">E-mail*</label>
                            <input type="text" class="form-control" placeholder="E-mail" aria-label="E-mail"
                                name="email">
                        </div>
                    </div>
                    <div class="col">
                        <label for="inputPassword4" class="form-label">Cedula*</label>
                        <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula" name="cedula">
                    </div>


                    <div class="row">
                        <div class="col">
                            <label for="inputPassword4" class="form-label">Fecha*</label>
                            <input type="text" class="form-control" placeholder="aaaa-mm-dd" aria-label="#"
                                name="celular">
                            <P><small>Debe tener de 10 numeros</small></P>
                        </div>

                        <div class="container">
                            <div class="row g-3">
                                <div class="col">
                                    <label for="inputPassword4" class="form-label">Celular*</label>
                                    <input type="text" class="form-control" placeholder="#" aria-label="#" name="fecha">
                                </div>
                            </div>
                        </div>
                        <br>


                        <div class="col">
                            <label for="inputState" class="form-label">Agencia*</label>
                            <input type="text" class="form-control" placeholder="#" aria-label="#" name="agencia">
                        </div>

                        <br>

                        <div class="modal-footer">
                            <button value="btnAgregar" class="btn btn-primary" type="submit"
                                name="accion">Enviar</button>
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
                                    <th scope="col">Email</th>
                                    <th scope="col">Cedula</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Agencia</th>
                                    <th scope="col">Celular</th>
                                    <th scope="col">Foto</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php       
                    foreach($cita_automobex as $cita_automobex){
                ?>

                                <tr>
                                    <td><?php echo $cita_automobex->Id?></td>
                                    <td><?php echo $cita_automobex->Nombre?></td>
                                    <td><?php echo $cita_automobex->Apellido?></td>
                                    <td><?php echo $cita_automobex->Email?></td>
                                    <td><?php echo $cita_automobex->Cedula?></td>
                                    <td><?php echo $cita_automobex->Fecha?></td>
                                    <td><?php echo $cita_automobex->Agencia?></td>
                                    <td><?php echo $cita_automobex->celular?></td>
                                    <td><img src="http://localhost/proyecto/img/<?php echo $cita_automobex->Foto ?>.png"
                                            width="100px">
                                    <td>

                                        <a class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#eliminarnoti<?php echo $cita_automobex->Id?>">Eliminar</a>


                                        <!-- Modal -->
                                        <div class="modal fade" id="eliminarnoti<?php echo $cita_automobex ->Id?>"
                                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Eliminar usuario
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Esta seguro de eliminar usuario
                                                        <?php echo $cita_automobex ->Nombre?>?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <a href="<?php echo base_url(); ?>index.php/Usuarios/eliminar_noti/<?php echo $cita_automobex ->Id?>"
                                                            class="btn btn-danger btn-sm">Eliminar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#modificarnoti<?php echo $cita_automobex ->Id?>">modificar</a>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="modificarnoti<?php echo $cita_automobex ->Id?>"
                                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form
                                                        action="<?php echo base_url(); ?>index.php/Usuarios/modificarnoti/<?php echo $cita_automobex ->Id?>"
                                                        method="post">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row g-3">
                                                                <div class="col">
                                                                    <label for="inputPassword4"
                                                                        class="form-label">Nombre(s)*</label>
                                                                    <input type="text"
                                                                        value="<?php echo $cita_automobex->Nombre?>"
                                                                        class="form-control" placeholder="Nombre(s)"
                                                                        aria-label="Nombre(s)" name="Nombre">
                                                                </div>
                                                            </div>

                                                            <div class="col">
                                                                <label for="inputPassword4"
                                                                    class="form-label">Apellido(s)*</label>
                                                                <input type="text"
                                                                    value="<?php echo $cita_automobex->Apellido?>"
                                                                    class="form-control" placeholder="Apellido(s)"
                                                                    aria-label="Apellido(s)" name="apellido">
                                                            </div>

                                                            <br>
                                                            <div class="row g-3">
                                                                <div class="col">
                                                                    <label for="inputPassword4"
                                                                        class="form-label">E-mail*</label>
                                                                    <input type="text"
                                                                        value="<?php echo $cita_automobex->Email?>"
                                                                        class="form-control" placeholder="E-mail"
                                                                        aria-label="E-mail" name="email">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <label for="inputPassword4"
                                                                    class="form-label">Cedula*</label>
                                                                <input type="text"
                                                                    value="<?php echo $cita_automobex->Cedula?>"
                                                                    class="form-control" placeholder="Cedula"
                                                                    aria-label="Cedula" name="cedula">
                                                            </div>


                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="inputPassword4"
                                                                        class="form-label">Fecha*</label>
                                                                    <input type="text"
                                                                        value="<?php echo $cita_automobex->Fecha?>"
                                                                        class="form-control" placeholder="aaaa-mm-dd"
                                                                        aria-label="#" name="fecha">
                                                                    <P><small>Debe tener de 10 numeros</small></P>
                                                                </div>
                                                            </div>
                                                            <div class="row ">
                                                                <div class="col">
                                                                    <label for="inputPassword4"
                                                                        class="form-label">Celular*</label>
                                                                    <input type="text"
                                                                        value="<?php echo $cita_automobex->celular?>"
                                                                        class="form-control" placeholder="#"
                                                                        aria-label="#" name="celular">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>

                                                        <div class="row ">
                                                            <div class="col">
                                                                <label for="inputState"
                                                                    class="form-label">Agencia*</label>
                                                                <input type="text"
                                                                    value="<?php echo $cita_automobex->Agencia?>"
                                                                    class="form-control" placeholder="#" aria-label="#"
                                                                    name="agencia">
                                                            </div>
                                                        </div>
                                                        <br>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Actualizar</button>
                                                        </div>
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