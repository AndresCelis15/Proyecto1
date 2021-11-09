<H1> Mercedes-Benz renueva el Clase A en 2018 con más ayudas a la conducción y capacidad de carga </h1>
<div class=indi>
    <h2 class="sub">MERCEDES CLASE A</h2>
    <img src="http://localhost/proyecto/img/a2.jpg" class="rounded mx-auto d-block" width=800 />


    <p>
        Mercedes-Benz anuncia la comercialización de la cuarta generación del Clase A para mayo de 2018. Este modelo,
        del que pueden hacerse pedidos a partir de marzo, sustituye al de 2012. Además de ser más grande e incluir más
        equipamiento y asistencias a la conducción, la conducción puede ser semiautomática en determinadas situaciones.

        Mercedes-Benz pone a la venta en marzo de 2018 la actualización del Clase A desde 28 800 euros para la versión A
        180 (136 CV), un modelo que llega para sustituir al que vendía desde 2012. Hasta mayo de 2018 la marca no
        empieza a entregar las primeras unidades. Las alternativas a este modelo que encontramos en el mercado son el
        Audi A3 (desde 26 470 €), el BMW Serie 1 (desde 26 400 €) y el Infiniti Q30 (24 801 €). Existen también otros
        modelos del mismo segmento, pero más económicos, como el Volkswagen Golf (20 800 €), el SEAT León (18 270 €) o
        el Ford Focus (17 000 €).
    </p>
    <img src="http://localhost/proyecto/img/a3.jpg" class="rounded mx-auto d-block" width=800 />

    <p>
        El nuevo Clase A puede disponer de numerosas de ayudas a la conducción, incluida la conducción semiautomática.
        Así, de serie, cuenta con un asistente de frenado activo con reconocimiento de peatones y bicicletas, así como
        con el sistema ATTENTION ASSIST, que alerta al conductor cuando está cansado o distraído al volante.

        De manera opcional, la marca ofrece al cliente un detector de vehículos en ángulo muerto, un Head-up Display,
        una alerta por cambio involuntario de carril, un sistema de aparcamiento semiautomático, el asistente activo
        para cambio de carril (es capad de pasar al carril contiguo cuando el conductor activa el intermitente para
        adelantar), el asistente activo de distancia DISTRONIC (que mantiene al coche centrado en el carril y funciona
        en conjunto con el programador de velocidad y el de mantenimiento de carril) y el asistente de maniobra evasiva
        (ayuda al conductor a esquivar un animal en caso de encontrárselo en la carretera).
    </p>
    <br>
    <img src="http://localhost/proyecto/img/a4.jpg" class="rounded mx-auto d-block" width=800 />
    </br>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://localhost/proyecto/img/a5.jpg" class="rounded mx-auto d-block" width=450px />
            </div>
            <div class="carousel-item">
                <img src="http://localhost/proyecto/img/a6.jpg" class="rounded mx-auto d-block" width=450px />
            </div>
            <div class="carousel-item">
                <img src="http://localhost/proyecto/img/a7.jpg" class="rounded mx-auto d-block" width=450px />
            </div>
            <div class="carousel-item">
                <img src="http://localhost/proyecto/img/a8.jpg" class="rounded mx-auto d-block" width=450px />
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
    <form action="<?php echo base_url(); ?>index.php/Usuarios/mera" method="post">
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
                    foreach($mercedes_clase_a as $mercedes_clase_a ){
                ?>

                    <tr>
                        <td><?php echo $mercedes_clase_a ->Id?></td>
                        <td><?php echo $mercedes_clase_a ->Nombre?></td>
                        <td><?php echo $mercedes_clase_a ->Apellido?></td>
                        <td><?php echo $mercedes_clase_a ->Email?></td>
                        <td><?php echo $mercedes_clase_a ->Cedula?></td>
                        <td><?php echo $mercedes_clase_a ->Fecha?></td>
                        <td><?php echo $mercedes_clase_a ->Agencia?></td>
                        <td><?php echo $mercedes_clase_a ->Presupuesto?></td>
                        <td><img src="http://localhost/proyecto/img/<?php echo $mercedes_clase_a->foto ?>.jpg"
                                width="100px"></td>
                        <td>

                            <a class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#eliminarmercedesclasea<?php echo $mercedes_clase_a->Id?>">Eliminar</a>


                            <!-- Modal -->
                            <div class="modal fade" id="eliminarmercedesclasea<?php echo $mercedes_clase_a ->Id?>"
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
                                            <?php echo $mercedes_clase_a ->Nombre?>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <a href="<?php echo base_url(); ?>index.php/Usuarios/eliminarmercedesclasea/<?php echo $mercedes_clase_a ->Id?>"
                                                class="btn btn-danger btn-sm">Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modificarmercedesclasea<?php echo $mercedes_clase_a ->Id?>">modificar</a>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="modificarmercedesclasea<?php echo $mercedes_clase_a ->Id?>"
                                tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form
                                            action="<?php echo base_url(); ?>index.php/Usuarios/modificarmercedesclasea/<?php echo $mercedes_clase_a ->Id?>"
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
                                                    <input type="text" value="<?php echo $mercedes_clase_a->Nombre?>"
                                                        class="form-control" placeholder="Nombre "
                                                        aria-label="First name" name="nombre">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Apellido</label>
                                                <input type="text" value="<?php echo $mercedes_clase_a->Apellido?>"
                                                    class="
                        form-control" placeholder="Apellido" aria-label="Last name" name="apellido">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Email</label>
                                                <input type="text" value="<?php echo $mercedes_clase_a->Email?>"
                                                    class="form-control" placeholder="@" aria-label="Last name"
                                                    name="correo">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Cedula</label>
                                                <input type="text" value="<?php echo $mercedes_clase_a->Cedula?>"
                                                    class="form-control" placeholder="***" aria-label="Last name"
                                                    name="cedula">
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="inputEmail4" class="form-label">fecha</label>
                                                    <input type="text" value="<?php echo $mercedes_clase_a->Fecha?>"
                                                        class="form-control" placeholder="aaaa-mm-dd "
                                                        aria-label="First name" name="fecha">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Agencia</label>
                                                <input type="text" value="<?php echo $mercedes_clase_a->Agencia?>"
                                                    class="form-control" placeholder="" aria-label="Last name"
                                                    name="agencia">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Precio</label>
                                                <input type="text" value="<?php echo $mercedes_clase_a->Presupuesto?>"
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