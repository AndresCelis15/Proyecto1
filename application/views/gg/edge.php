<H1>La Nueva Edge ST es la primera SUV de altas prestaciones de Ford. Integra un potente motor turbo de 2.7L es capaz de
    desarrollar impresionantes 335 hp y 380 lb-pie de torque.</h1>
<div class=indi>
    <h2 class="sub">FORD EDGE ST</h2>
    <img src="http://localhost/proyecto/img/edge2.jpg" class="rounded mx-auto d-block" width=800 />


    <p> Tras ponerse al día en 2018, este modelo ahora nos muestra una faceta más temperamental y adopta un poderoso
        motor EcoBoost V6 bajo su capó.

        No es un secreto que los fabricantes de volumen han empezado a seguir tendencias vistas en las marcas premium,
        sobre todo en el segmento de los crossover/SUV, donde se están concentrando buena parte de las ventas. Tal vez
        por ello, Ford vio la oportunidad de fortalecer su gama con los SUV deportivos y el primer exponente es la Edge
        ST.

        Este nuevo modelo de la familiar Ford Perfomance resulta ser inédito (aunque realmente sustituye a la Edge Sport
        que se vendía en algunos mercados) y no solo viene con modificaciones estéticas, sino también con varios cambios
        bajo su carrocería que mejoran sustancialmente sus prestaciones, convirtiéndola en una alternativa única por sus
        características.
    </p>
    <img src="http://localhost/proyecto/img/edge3.jpg" class="rounded mx-auto d-block" width=800 />

    <p>A diferencia del exterior, la cabina de la Ford Edge ST es muy similar a otras versiones de esta camioneta y
        acusa el paso del tiempo en su diseño y algunos materiales. El toque deportivo lo ponen elementos como asientos
        de mayor sujeción, tapizados en cuero y gamuza, molduras de fibra de carbono/negro piano en varios lugares del
        tablero y pedales en aluminio.

        Por lo demás, se mantiene la atmosfera de camioneta familiar que siempre ha caracterizado a este modelo, que
        cuenta con un amplio interior para cinco personas, ya que incluso atrás hay buen espacio en todas la direcciones
        y se agradecen ítems de confort, como la calefacción para todas las sillas, que resulta útil en climas fríos
        como el de Bogotá.. </p>
    <img src="http://localhost/proyecto/img/edge4.jpg" class="rounded mx-auto d-block" width=800 />
    <br>

    </br>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://localhost/proyecto/img/edge5.jpg" class="rounded mx-auto d-block" width=450px />
            </div>
            <div class="carousel-item">
                <img src="http://localhost/proyecto/img/edge6.jpg" class="rounded mx-auto d-block" width=450px />
            </div>
            <div class="carousel-item">
                <img src="http://localhost/proyecto/img/edge7.jpg" class="rounded mx-auto d-block" width=450px />
            </div>
            <div class="carousel-item">
                <img src="http://localhost/proyecto/img/edge8.jpg" class="rounded mx-auto d-block" width=450px />
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

    <form action="<?php echo base_url(); ?>index.php/Usuarios/fordedgest" method="post">
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
                    foreach($ford_edgest as $ford_edgest ){
                ?>

                    <tr>
                        <td><?php echo $ford_edgest ->Id?></td>
                        <td><?php echo $ford_edgest ->Nombre?></td>
                        <td><?php echo $ford_edgest ->Apellido?></td>
                        <td><?php echo $ford_edgest ->Email?></td>
                        <td><?php echo $ford_edgest ->Cedula?></td>
                        <td><?php echo $ford_edgest ->Fecha?></td>
                        <td><?php echo $ford_edgest ->Agencia?></td>
                        <td><?php echo $ford_edgest ->Presupuesto?></td>
                        <td><img src="http://localhost/proyecto/img/<?php echo $ford_edgest->foto ?>.jpg" width="100px">
                        </td>
                        <td>

                            <a class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#eliminarfordedgest<?php echo $ford_edgest->Id?>">Eliminar</a>


                            <!-- Modal -->
                            <div class="modal fade" id="eliminarfordedgest<?php echo $ford_edgest ->Id?>"
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
                                            <?php echo $ford_edgest ->Nombre?>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <a href="<?php echo base_url(); ?>index.php/Usuarios/eliminarfordedgest/<?php echo $ford_edgest ->Id?>"
                                                class="btn btn-danger btn-sm">Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modificarfordedgest<?php echo $ford_edgest ->Id?>">modificar</a>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="modificarfordedgest<?php echo $ford_edgest->Id?>"
                                tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form
                                            action="<?php echo base_url(); ?>index.php/Usuarios/modificarfordedgest/<?php echo $ford_edgest ->Id?>"
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
                                                    <input type="text" value="<?php echo $ford_edgest->Nombre?>"
                                                        class="form-control" placeholder="Nombre "
                                                        aria-label="First name" name="nombre">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Apellido</label>
                                                <input type="text" value="<?php echo $ford_edgest->Apellido?>"
                                                    class="
form-control" placeholder="Apellido" aria-label="Last name" name="apellido">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Email</label>
                                                <input type="text" value="<?php echo $ford_edgest->Email?>"
                                                    class="form-control" placeholder="@" aria-label="Last name"
                                                    name="correo">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Cedula</label>
                                                <input type="text" value="<?php echo $ford_edgest->Cedula?>"
                                                    class="form-control" placeholder="***" aria-label="Last name"
                                                    name="cedula">
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="inputEmail4" class="form-label">fecha</label>
                                                    <input type="text" value="<?php echo $ford_edgest->Fecha?>"
                                                        class="form-control" placeholder="aaaa-mm-dd "
                                                        aria-label="First name" name="fecha">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Agencia</label>
                                                <input type="text" value="<?php echo $ford_edgest->Agencia?>"
                                                    class="form-control" placeholder="" aria-label="Last name"
                                                    name="agencia">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Precio</label>
                                                <input type="text" value="<?php echo $ford_edgest->Presupuesto?>"
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