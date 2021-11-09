<H1>Mercedes-Benz actualiza el Clase C para 2018 con mejoras en su equipamiento y una nueva gama de motores </h1>
<div class=indi>
    <h2 class="sub">MERCEDES CLASE C</h2>
    <img src="http://localhost/proyecto/img/c2.jpg" class="rounded mx-auto d-block" width=800 />


    <p>
        Mercedes-Benz actualiza en 2018 el nuevo Clase C, un coche que llega para reemplazar al modelo del mismo nombre
        presentado en 2014. Los cambios más destacados están en el apartado mecánico, en los nuevos asistentes a la
        conducción y en los rediseños del interior y del exterior del vehículo. Está disponible desde 41.105 euros la
        versión berlina y desde 43.105 euros la familiar.

        La firma alemana Mercedes-Benz actualiza en 2018 el Clase C, un modelo que llega al mercado con dos carrocerías:
        la berlina y la familiar (Estate). Este vehículo, que reemplaza al modelo homónimo de 2014, tiene como
        principales competidores en el mercado al BMW Serie 3 (disponible desde 34 300 €), el Audi A4 (desde 33 700 €),
        el Volvo S60 (desde 30 800 €) o el Volkswagen Passat (desde 25 275 €), para la carrocería berlina; y el BMW
        Serie 3 Touring (desde 36 300 €), el Audi A4 Avant (desde 35 710 €) o el Volkswagen Passat Variant (desde 26 995
        €), para la carrocería familiar.
    </p>
    <img src="http://localhost/proyecto/img/c3.jpg" class="rounded mx-auto d-block" width=800 />

    <p>
        En el interior puede elegirse entre dos pantallas de instrumentaciones diferentes: la básica de estilo clásico
        que viene de serie con dos esferas a los lados y una pantalla en el medio de 5,5 pulgadas; y otra digital
        (opcional), formada por una pantalla de 12,3 pulgadas que, entre otras cosas, muestra la navegación. La pantalla
        central puede ser de dos tamaños: la de serie de 7 pulgadas y la opcional de 10,25. El salpicadero apenas tiene
        cambios respecto al anterior modelo, aunque opcionalmente puede llevar nuevos elementos decorativos, como las
        molduras en madera de poro abierto de nogal y roble.
    </p>
    <br>
    <img src="http://localhost/proyecto/img/c4.jpg" class="rounded mx-auto d-block" width=800 />
    </br>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://localhost/proyecto/img/c5.jpg" class="rounded mx-auto d-block" width=450px />
            </div>
            <div class="carousel-item">
                <img src="http://localhost/proyecto/img/c6.jpg" class="rounded mx-auto d-block" width=450px />
            </div>
            <div class="carousel-item">
                <img src="http://localhost/proyecto/img/c7.jpg" class="rounded mx-auto d-block" width=450px />
            </div>
            <div class="carousel-item">
                <img src="http://localhost/proyecto/img/c8.jpg" class="rounded mx-auto d-block" width=450px />
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

    <form action="<?php echo base_url(); ?>index.php/Usuarios/merc" method="post">
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
                    foreach($mercedes_clase_c as $mercedes_clase_c ){
                ?>

                    <tr>
                        <td><?php echo $mercedes_clase_c ->Id?></td>
                        <td><?php echo $mercedes_clase_c ->Nombre?></td>
                        <td><?php echo $mercedes_clase_c ->Apellido?></td>
                        <td><?php echo $mercedes_clase_c ->Email?></td>
                        <td><?php echo $mercedes_clase_c ->Cedula?></td>
                        <td><?php echo $mercedes_clase_c ->Fecha?></td>
                        <td><?php echo $mercedes_clase_c ->Agencia?></td>
                        <td><?php echo $mercedes_clase_c ->Presupuesto?></td>
                        <td><img src="http://localhost/proyecto/img/<?php echo $mercedes_clase_c->foto ?>.jpg"
                                width="100px"></td>
                        <td>

                            <a class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#eliminarmercedesclasec<?php echo $mercedes_clase_c->Id?>">Eliminar</a>


                            <!-- Modal -->
                            <div class="modal fade" id="eliminarmercedesclasec<?php echo $mercedes_clase_c ->Id?>"
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
                                            <?php echo $mercedes_clase_c ->Nombre?>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <a href="<?php echo base_url(); ?>index.php/Usuarios/eliminarmercedesclasec/<?php echo $mercedes_clase_c ->Id?>"
                                                class="btn btn-danger btn-sm">Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modificarmercedesclasec<?php echo $mercedes_clase_c ->Id?>">modificar</a>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="modificarmercedesclasec<?php echo $mercedes_clase_c->Id?>"
                                tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form
                                            action="<?php echo base_url(); ?>index.php/Usuarios/modificarmercedesclasec/<?php echo $mercedes_clase_c ->Id?>"
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
                                                    <input type="text" value="<?php echo $mercedes_clase_c->Nombre?>"
                                                        class="form-control" placeholder="Nombre "
                                                        aria-label="First name" name="nombre">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Apellido</label>
                                                <input type="text" value="<?php echo $mercedes_clase_c->Apellido?>"
                                                    class="
                        form-control" placeholder="Apellido" aria-label="Last name" name="apellido">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Email</label>
                                                <input type="text" value="<?php echo $mercedes_clase_c->Email?>"
                                                    class="form-control" placeholder="@" aria-label="Last name"
                                                    name="correo">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Cedula</label>
                                                <input type="text" value="<?php echo $mercedes_clase_c->Cedula?>"
                                                    class="form-control" placeholder="***" aria-label="Last name"
                                                    name="cedula">
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="inputEmail4" class="form-label">fecha</label>
                                                    <input type="text" value="<?php echo $mercedes_clase_c->Fecha?>"
                                                        class="form-control" placeholder="aaaa-mm-dd "
                                                        aria-label="First name" name="fecha">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Agencia</label>
                                                <input type="text" value="<?php echo $mercedes_clase_c->Agencia?>"
                                                    class="form-control" placeholder="" aria-label="Last name"
                                                    name="agencia">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Precio</label>
                                                <input type="text" value="<?php echo $mercedes_clase_c->Presupuesto?>"
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