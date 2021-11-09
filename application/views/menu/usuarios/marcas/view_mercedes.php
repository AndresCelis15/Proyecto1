<div class="audi">
    <img src="http://localhost/proyecto/img/logomercedesbenz.png" class="rounded mx-auto d-block" width=300px />
    <p> </p>
    <H1>AUTOMOBEX MANEJA ACTUALMENTE 4 MODELOS DISTINTOS DE CARROS DE LA MARCA MERCEDES</H1>
</div>


<div class="card text-white mb-3" style="max-width: 15896rem;">
    <div class="card-header">CLASE A</div>
    <div class="card-body">
        <div class="row g-0">
            <div class="col">
                <img src="http://localhost/proyecto/img/a1.jpg" width=520px />
            </div>

            <div class="col">
                <div class="card-body">
                    <h5 class="card-title">CLASE A</h5>
                    <p class="card-text">SOBRE EL CARRO</p>
                    <p>Mercedes-Benz anuncia la comercialización de la cuarta generación del Clase A para mayo de 2018.
                        Este modelo, del que pueden hacerse pedidos a partir de marzo, sustituye al de 2012. Además de
                        ser más grande e incluir más equipamiento y asistencias a la conducción, la conducción puede ser
                        semiautomática en determinadas situaciones.</p>
                    <a href="<?php echo base_url();?>index.php/Usuarios/clasea" class="btn btn-light">CLASE A</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<div class="card text-white mb-3" style="max-width: 15896rem;">
    <div class="card-header">CLASE B</div>
    <div class="card-body">
        <div class="row g-0">
            <div class="col">
                <img src="http://localhost/proyecto/img/b1.jpg" width=520px />
            </div>

            <div class="col">
                <div class="card-body">
                    <h5 class="card-title">CLASE B</h5>
                    <p class="card-text">SOBRE EL CARRO</p>
                    <p>
                        La tercera generación del Mercedes-Benz Clase B está disponible en España desde 33 375 euros a
                        partir de enero, aunque sus primeras unidades no empiezan a entregarse hasta febrero de 2019.
                        Este monovolumen reemplaza al modelo que fue presentado en 2014 con el mismo nombre. Las
                        principales diferencias están en su nueva gama de motores, un habitáculo más espacioso, una
                        nueva caja de cambios de ocho velocidades y un equipamiento más completo.
                    </p>
                    <a href="<?php echo base_url();?>index.php/Usuarios/claseb" class="btn btn-light">CLASE B</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="card text-white mb-3" style="max-width: 15896rem;">
    <div class="card-header">CLASE C</div>
    <div class="card-body">
        <div class="row g-0">
            <div class="col">
                <img src="http://localhost/proyecto/img/c1.jpg" width=520px />
            </div>
            <div class="col">
                <div class="card-body">
                    <h5 class="card-title">CLASE C</h5>
                    <p class="card-text">SOBRE EL CARRO</p>
                    <p>
                        Mercedes-Benz actualiza en 2018 el nuevo Clase C, un coche que llega para reemplazar al modelo
                        del mismo nombre presentado en 2014. Los cambios más destacados están en el apartado mecánico,
                        en los nuevos asistentes a la conducción y en los rediseños del interior y del exterior del
                        vehículo. Está disponible desde 41.105 euros la versión berlina y desde 43.105 euros la
                        familiar.</p>
                    <a href="<?php echo base_url();?>index.php/Usuarios/clasec" class="btn btn-light">CLASE C</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="card text-white mb-3" style="max-width: 15896rem;">
    <div class="card-header">CLASE CLS</div>
    <div class="card-body">
        <div class="row g-0">
            <div class="col">
                <img src="http://localhost/proyecto/img/cls1.jpg" width=520px />
            </div>

            <div class="col">
                <div class="card-body">
                    <h5 class="card-title">CLASE CLS</h5>
                    <p class="card-text">SOBRE EL CARRO</p>
                    <p>
                        Mercedes-AMG presenta la primera versión de la gama CLS 2018, la 53 4MATIC+. Esta nueva
                        denominación “AMG 53” permite identificar a aquellas versiones con una configuración mecánica
                        compuesta por un sistema eléctrico principal a 48 voltios (12V es lo convencional) y un
                        mecanismo eléctrico unido al motor de combustión interna. Está a la venta a un precio de 127 000
                        euros.
                    </p>

                    <a href="<?php echo base_url();?>index.php/Usuarios/CLS" class="btn btn-light">CLASE CLS</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<h5>Seccion de cotizacion</h5>
<div class="container">
    <form action="<?php echo base_url(); ?>index.php/Usuarios/servicio" method="post">
        <div class="row">
            <div class="col">
                <label for="inputEmail4" class="form-label">Nombre</label>
                <input type="text" class="form-control" placeholder="Nombre " aria-label="First name" name="nombre">
            </div>
            <div class="col">
                <label for="inputEmail4" class="form-label">Apellido</label>
                <input type="text" class="form-control" placeholder="Apellido" aria-label="Last name" name="apellido">
            </div>

            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="text" class="form-control" placeholder="@" aria-label="Last name" name="correo">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Cedula</label>
                <input type="text" class="form-control" placeholder="***" aria-label="Last name" name="cedula">
            </div>
            <div class="row">
                <div class="col">
                    <label for="inputEmail4" class="form-label">fecha</label>
                    <input type="text" class="form-control" placeholder="aaaa-mm-dd " aria-label="First name"
                        name="fecha">
                </div>
                <div class="col">
                    <label for="inputEmail4" class="form-label">Agencia</label>
                    <input type="text" class="form-control" placeholder="" aria-label="Last name" name="agencia">
                </div>


                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Modelo</label>
                    <input type="text" class="form-control" placeholder="" aria-label="Last name" name="precio">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Precio</label>
                    <input type="text" class="form-control" placeholder="$" aria-label="Last name" name="modelo">
                </div>

                <div class="container">
                    <br>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Enviar</button>
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
                        <th scope="col">Presupuesto</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Foto</th>


                    </tr>
                </thead>
                <tbody>
                    <?php       
                    foreach($cotizacion_mercedes as $mercedes){
                ?>

                    <tr>
                        <td><?php echo $mercedes->Id?></td>
                        <td><?php echo $mercedes->Nombre?></td>
                        <td><?php echo $mercedes->Apellido?></td>
                        <td><?php echo $mercedes->Email?></td>
                        <td><?php echo $mercedes->Cedula?></td>
                        <td><?php echo $mercedes->Fecha?></td>
                        <td><?php echo $mercedes->Agencia?></td>
                        <td><?php echo $mercedes->Presupuesto?></td>
                        <td><?php echo $mercedes->Modelo?></td>
                        <td><img src="http://localhost/proyecto/img/<?php echo $mercedes->foto ?>.png" width="100px">
                        <td>

                            <a class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#eliminarmercedes<?php echo $mercedes->Id?>">Eliminar</a>


                            <!-- Modal -->
                            <div class="modal fade" id="eliminarmercedes<?php echo $mercedes ->Id?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <?php echo $mercedes ->Nombre?>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <a href="<?php echo base_url(); ?>index.php/Usuarios/eliminar_mercedes/<?php echo $mercedes ->Id?>"
                                                class="btn btn-danger btn-sm">Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modificarmercedes<?php echo $mercedes ->Id?>">modificar</a>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="modificarmercedes<?php echo $mercedes ->Id?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form
                                            action="<?php echo base_url(); ?>index.php/Usuarios/modificarmercedes/<?php echo $mercedes->Id?>"
                                            method="post">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="inputEmail4" class="form-label">Nombre</label>
                                                    <input type="text" value="<?php echo $mercedes->Nombre?>"
                                                        class="form-control" placeholder="Nombre "
                                                        aria-label="First name" name="nombre">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Apellido</label>
                                                <input type="text" value="<?php echo $mercedes->Apellido?>"
                                                    class="form-control" placeholder="Apellido" aria-label="Last name"
                                                    name="apellido">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Email</label>
                                                <input type="text" value="<?php echo $mercedes->Email?>"
                                                    class="form-control" placeholder="@" aria-label="Last name"
                                                    name="correo">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Cedula</label>
                                                <input type="text" value="<?php echo $mercedes->Cedula?>"
                                                    class="form-control" placeholder="***" aria-label="Last name"
                                                    name="cedula">
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="inputEmail4" class="form-label">fecha</label>
                                                    <input type="text" value="<?php echo $mercedes->Fecha?>"
                                                        class="form-control" placeholder="aaaa-mm-dd "
                                                        aria-label="First name" name="fecha">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Agencia</label>
                                                <input type="text" value="<?php echo $mercedes->Agencia?>"
                                                    class="form-control" placeholder="" aria-label="Last name"
                                                    name="agencia">
                                            </div>


                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Modelo</label>
                                                <input type="text" value="<?php echo $mercedes->Modelo?>"
                                                    class="form-control" placeholder="" aria-label="Last name"
                                                    name="modelo">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Precio</label>
                                                <input type="text" value="<?php echo $mercedes->Presupuesto?>"
                                                    class="form-control" placeholder="$" aria-label="Last name"
                                                    name="precio">
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