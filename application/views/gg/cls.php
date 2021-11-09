<H1>La versión AMG 53 4MATIC+ llega a la gama CLS 2018 </h1>
<div class=indi>
    <h2 class="sub">MERCEDES CLS</h2>
    <img src="http://localhost/proyecto/img/c2.jpg" class="rounded mx-auto d-block" width=800 />


    <p>
        Mercedes-AMG presenta la primera versión de la gama CLS 2018, la 53 4MATIC+. Esta nueva denominación “AMG 53”
        permite identificar a aquellas versiones con una configuración mecánica compuesta por un sistema eléctrico
        principal a 48 voltios (12V es lo convencional) y un mecanismo eléctrico unido al motor de combustión interna.
        Está a la venta a un precio de 127 000 euros.

        El nuvo Mercedes-Benz CLS Coupé AMG cuenta con un dispositivo eléctrico bautizado como EQ Boost. Este sistema
        sirve de apoyo al motor de combustión cuando se pisa el acelerador, trabaja como un alternador porque recupera
        la energía eléctrica que se obtiene en la frenada y arranca el motor de gasolina. Mercedes-AMG asegura que este
        mecanismo reduce el consumo de combustible y hace que la respuesta del motor sea más rápida cuando se acelera.
    </p>
    <img src="http://localhost/proyecto/img/cls3.jpg" class="rounded mx-auto d-block" width=800 />

    <p>
        A nivel interior, el Mercedes-Benz CLS Coupé 2018 no pide nada a sus hermanos mayores de la Clase E o Clase S,
        equipa difusores de aire retroiluminados, que cambian de color (azul o rojo), dependiendo la temperatura del
        climatizador.
        El volante cuenta con molduras y botones de aluminio. Mercedes-Benz afirma que también estarán disponibles
        molduras de madera de poro abierto o madera brillante, así como la iluminación ambiental de 64 colores que ya
        habíamos visto en el Clase E.

        De forma opcional estará disponible el cuadro de instrumentos digital conformado por dos pantallas de 12.3
        pulgadas, que muestran la información de los instrumentos y del sistema multimedia.
    </p>
    <br>
    <img src="http://localhost/proyecto/img/cls4.jpg" class="rounded mx-auto d-block" width=800 />
    </br>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://localhost/proyecto/img/cls5.jpg" class="rounded mx-auto d-block" width=450px />
            </div>
            <div class="carousel-item">
                <img src="http://localhost/proyecto/img/cls6.jpg" class="rounded mx-auto d-block" width=450px />
            </div>
            <div class="carousel-item">
                <img src="http://localhost/proyecto/img/cls7.jpg" class="rounded mx-auto d-block" width=450px />
            </div>
            <div class="carousel-item">
                <img src="http://localhost/proyecto/img/cls8.jpg" class="rounded mx-auto d-block" width=450px />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</div>
<h5>Seccion de cotizacion</h5>
<div class="container">

    <form action="<?php echo base_url(); ?>index.php/Usuarios/mers" method="post">
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
                    <label for="inputPassword4" class="form-label">Precio</label>
                    <input type="text" class="form-control" placeholder="$" aria-label="Last name" name="precio">
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
                        <th scope="col">Foto</th>


                    </tr>
                </thead>
                <tbody>
                    <?php       
                    foreach($mercedes_clase_cls as $mercedes_clase_cls ){
                ?>

                    <tr>
                        <td><?php echo $mercedes_clase_cls ->Id?></td>
                        <td><?php echo $mercedes_clase_cls ->Nombre?></td>
                        <td><?php echo $mercedes_clase_cls ->Apellido?></td>
                        <td><?php echo $mercedes_clase_cls ->Email?></td>
                        <td><?php echo $mercedes_clase_cls ->Cedula?></td>
                        <td><?php echo $mercedes_clase_cls ->Fecha?></td>
                        <td><?php echo $mercedes_clase_cls ->Agencia?></td>
                        <td><?php echo $mercedes_clase_cls ->Presupuesto?></td>
                        <td><img src="http://localhost/proyecto/img/<?php echo $mercedes_clase_cls->foto ?>.jpg"
                                width="100px"></td>
                        <td>

                        <td>

                            <a class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#eliminarmercedesclasecls<?php echo $mercedes_clase_cls->Id?>">Eliminar</a>


                            <!-- Modal -->
                            <div class="modal fade" id="eliminarmercedesclasecls<?php echo $mercedes_clase_cls ->Id?>" tabindex="-1"
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
                                            <?php echo $mercedes_clase_cls ->Nombre?>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <a href="<?php echo base_url(); ?>index.php/Usuarios/eliminarmercedesclasecls/<?php echo $mercedes_clase_cls ->Id?>"
                                                class="btn btn-danger btn-sm">Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modificarmercedesclasecls<?php echo $mercedes_clase_cls ->Id?>">modificar</a>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="modificarmercedesclasecls<?php echo $mercedes_clase_cls ->Id?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form
                                            action="<?php echo base_url(); ?>index.php/Usuarios/modificarmercedesclasecls/<?php echo $mercedes_clase_cls ->Id?>"
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
                                                    <input type="text" value="<?php echo $mercedes_clase_cls->Nombre?>"
                                                        class="form-control" placeholder="Nombre "
                                                        aria-label="First name" name="nombre">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Apellido</label>
                                                <input type="text" value="<?php echo $mercedes_clase_cls->Apellido?>" class="
                        form-control" placeholder="Apellido" aria-label="Last name" name="apellido">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Email</label>
                                                <input type="text" value="<?php echo $mercedes_clase_cls->Email?>"
                                                    class="form-control" placeholder="@" aria-label="Last name"
                                                    name="correo">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Cedula</label>
                                                <input type="text" value="<?php echo $mercedes_clase_cls->Cedula?>"
                                                    class="form-control" placeholder="***" aria-label="Last name"
                                                    name="cedula">
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="inputEmail4" class="form-label">fecha</label>
                                                    <input type="text" value="<?php echo $mercedes_clase_cls->Fecha?>"
                                                        class="form-control" placeholder="aaaa-mm-dd "
                                                        aria-label="First name" name="fecha">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Agencia</label>
                                                <input type="text" value="<?php echo $mercedes_clase_cls->Agencia?>"
                                                    class="form-control" placeholder="" aria-label="Last name"
                                                    name="agencia">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Precio</label>
                                                <input type="text" value="<?php echo $mercedes_clase_cls->Presupuesto?>"
                                                    class="form-control" placeholder="$" aria-label="Last name"
                                                    name="precio">
                                            </div>

                                            <div class="container">
                                                <br>

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