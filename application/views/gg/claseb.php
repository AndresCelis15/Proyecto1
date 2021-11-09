<H1> El Mercedes-Benz Clase B 2019 estrena motores y equipamiento </h1>
<div class=indi>
    <h2 class="sub">MERCEDES CLASE B</h2>
    <img src="http://localhost/proyecto/img/b2.jpg" class="rounded mx-auto d-block" width=800 />


    <p>
        La tercera generación del Mercedes-Benz Clase B está disponible en España desde 33 375 euros a partir de enero,
        aunque sus primeras unidades no empiezan a entregarse hasta febrero de 2019. Este monovolumen reemplaza al
        modelo que fue presentado en 2014 con el mismo nombre. Las principales diferencias están en su nueva gama de
        motores, un habitáculo más espacioso, una nueva caja de cambios de ocho velocidades y un equipamiento más
        completo.

        En octubre de 2018 Mercedes-Benz presenta el renovado Clase B, un monovolumen que llega para reemplazar al
        modelo que se vendía desde el 2014. Las primeras unidades empiezan a entregarse a partir de febrero de 2019,
        pero los pedidos pueden hacerse a partir de enero con unos precios comprendidos entre los 33 375 y los 41 850
        euros. Ahora tiene una longitud de 4400 milímetros (7 mm más) y una distancia entre ejes de 2729 milímetros (30
        mm más). Este aumento de dimensiones hace que el habitáculo sea más amplio que el del modelo al que reemplaza.
        Por ejemplo, la anchura de las plazas delanteras ha aumentado 33 milímetros.
    </p>
    <img src="http://localhost/proyecto/img/b3.jpg" class="rounded mx-auto d-block" width=800 />

    <p>
        El interior del Clase B guarda cierta similitud con el Clase A puesto a la venta en marzo de 2018. Tanto la
        instrumentación (sin visera, algo poco común en los coches) como la pantalla multimedia se muestran en dos
        pantallas contiguas. El cliente puede escoger entre diferentes tamaños de pantallas y combinarlo de tres maneras
        posibles: dos de siete pulgadas, una de siete pulgadas para la instrumentación y una de 10,25 pulgadas para la
        pantalla multimedia o bien las dos de 10,25 pulgadas. El sistema multimedia que emplea este modelo es el MBUX y
        puede ser manejado con toques en la pantalla, con unos mandos que hay entre los asientos delanteros, con los
        mandos del volante o bien con comandos vocales.
        <br>
        <img src="http://localhost/proyecto/img/b4.jpg" class="rounded mx-auto d-block" width=800 />
        </br>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://localhost/proyecto/img/b5.jpg" class="rounded mx-auto d-block" width=450px />
            </div>
            <div class="carousel-item">
                <img src="http://localhost/proyecto/img/b6.jpg" class="rounded mx-auto d-block" width=450px />
            </div>
            <div class="carousel-item">
                <img src="http://localhost/proyecto/img/b7.jpg" class="rounded mx-auto d-block" width=450px />
            </div>
            <div class="carousel-item">
                <img src="http://localhost/proyecto/img/b8.jpg" class="rounded mx-auto d-block" width=450px />
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
    <form action="<?php echo base_url(); ?>index.php/Usuarios/merb" method="post">
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
                    foreach($mercedes_clase_b as $mercedes_clase_b ){
                ?>

                    <tr>
                        <td><?php echo $mercedes_clase_b ->Id?></td>
                        <td><?php echo $mercedes_clase_b ->Nombre?></td>
                        <td><?php echo $mercedes_clase_b ->Apellido?></td>
                        <td><?php echo $mercedes_clase_b ->Email?></td>
                        <td><?php echo $mercedes_clase_b ->Cedula?></td>
                        <td><?php echo $mercedes_clase_b ->Fecha?></td>
                        <td><?php echo $mercedes_clase_b ->Agencia?></td>
                        <td><?php echo $mercedes_clase_b ->Presupuesto?></td>
                        <td><img src="http://localhost/proyecto/img/<?php echo $mercedes_clase_b->foto ?>.jpg"
                                width="100px"></td>
                        <td>

                            <a class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#eliminarmercedesclaseb<?php echo $mercedes_clase_b->Id?>">Eliminar</a>


                            <!-- Modal -->
                            <div class="modal fade" id="eliminarmercedesclaseb<?php echo $mercedes_clase_b ->Id?>"
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
                                            <?php echo $mercedes_clase_b ->Nombre?>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <a href="<?php echo base_url(); ?>index.php/Usuarios/eliminarmercedesclaseb/<?php echo $mercedes_clase_b ->Id?>"
                                                class="btn btn-danger btn-sm">Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modificarmercedesclaseb<?php echo$mercedes_clase_b ->Id?>">modificar</a>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="modificarmercedesclaseb<?php echo $mercedes_clase_b ->Id?>"
                                tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form
                                            action="<?php echo base_url(); ?>index.php/Usuarios/modificarmercedesclaseb/<?php echo $mercedes_clase_b ->Id?>"
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
                                                    <input type="text" value="<?php echo $mercedes_clase_b->Nombre?>"
                                                        class="form-control" placeholder="Nombre "
                                                        aria-label="First name" name="nombre">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Apellido</label>
                                                <input type="text" value="<?php echo $mercedes_clase_b->Apellido?>"
                                                    class="
                        form-control" placeholder="Apellido" aria-label="Last name" name="apellido">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Email</label>
                                                <input type="text" value="<?php echo $mercedes_clase_b->Email?>"
                                                    class="form-control" placeholder="@" aria-label="Last name"
                                                    name="correo">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Cedula</label>
                                                <input type="text" value="<?php echo $mercedes_clase_b->Cedula?>"
                                                    class="form-control" placeholder="***" aria-label="Last name"
                                                    name="cedula">
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="inputEmail4" class="form-label">fecha</label>
                                                    <input type="text" value="<?php echo $mercedes_clase_b->Fecha?>"
                                                        class="form-control" placeholder="aaaa-mm-dd "
                                                        aria-label="First name" name="fecha">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Agencia</label>
                                                <input type="text" value="<?php echo $mercedes_clase_b->Agencia?>"
                                                    class="form-control" placeholder="" aria-label="Last name"
                                                    name="agencia">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Precio</label>
                                                <input type="text" value="<?php echo $mercedes_clase_b->Presupuesto?>"
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