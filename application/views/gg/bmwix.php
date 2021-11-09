<H1>El diseño monolítico de pocas líneas de gran claridad exhibe una fuerte personalidad dándole una aparencia moderna.
    El BMW iX es robusto y también elegante. </h1>
<div class=indi>
    <h2 class="sub">BMW IX</h2>
    <img src="http://localhost/proyecto/img/bmwix2.jpg" class="rounded mx-auto d-block" width=800 />


    <p>
        El diseño exterior del nuevo BMW iX.
        El rostro de una nueva generación. Para el diseño del BMW iX, queríamos dar el siguiente paso y crear un
        concepto totalmente nuevo: expresivo, pero no sobrecargado. Inteligente, pero no complicado. En pocas palabras:
        un diseño que representara a primera vista una nueva forma de placer de conducir. El resultado es un SAV
        innovador con su emblemática forma monolítica, detalles de marcado carácter y características inteligentes Shy
        Tech: nuevo BMW iX.
    </p>
    <img src="http://localhost/proyecto/img/bmwix3.jpg" class="rounded mx-auto d-block" width=800 />

    <p>
        El diseño interior del nuevo BMW iX.
        La simbiosis de alta tecnología y relajación da lugar a un espacio que contribuye a la calidad de vida. Déjate
        sorprender por el interior del BMW iX. Su elegante minimalismo y las modernas características Shy-Tech, en
        combinación con el techo de cristal panorámico, proporcionan una sensación única que convierte los viajes en una
        experiencia totalmente nueva. Con sus formas claras, materiales exclusivos y tecnología de vanguardia, el
        interior se convierte en tu lugar favorito.
    </p>
    <br>
    <img src="http://localhost/proyecto/img/bmwix4.jpg" class="rounded mx-auto d-block" width=800 />
    </br>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://localhost/proyecto/img/bmwix5.jpg" class="rounded mx-auto d-block" width=450px />
            </div>
            <div class="carousel-item">
                <img src="http://localhost/proyecto/img/bmwix6.jpg" class="rounded mx-auto d-block" width=450px />
            </div>
            <div class="carousel-item">
                <img src="http://localhost/proyecto/img/bmwix7.jpg" class="rounded mx-auto d-block" width=450px />
            </div>
            <div class="carousel-item">
                <img src="http://localhost/proyecto/img/bmwix8.jpg" class="rounded mx-auto d-block" width=450px />
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

    <form action="<?php echo base_url(); ?>index.php/Usuarios/bmix" method="post">
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
                    foreach($bmw_ix as $bmw_ix){
                ?>

                    <tr>
                        <td><?php echo $bmw_ix->Id?></td>
                        <td><?php echo $bmw_ix->Nombre?></td>
                        <td><?php echo $bmw_ix->Apellido?></td>
                        <td><?php echo $bmw_ix->Email?></td>
                        <td><?php echo $bmw_ix->Cedula?></td>
                        <td><?php echo $bmw_ix->Fecha?></td>
                        <td><?php echo $bmw_ix->Agencia?></td>
                        <td><?php echo $bmw_ix->Presupuesto?></td>
                        <td><img src="http://localhost/proyecto/img/<?php echo $bmw_ix->foto ?>.jpg" width="100px"></td>
                        <td>

                            <a class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#eliminarbmwix<?php echo $bmw_ix->Id?>">Eliminar</a>


                            <!-- Modal -->
                            <div class="modal fade" id="eliminarbmwix<?php echo $bmw_ix ->Id?>" tabindex="-1"
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
                                            <?php echo $bmw_ix ->Nombre?>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <a href="<?php echo base_url(); ?>index.php/Usuarios/eliminar_bmwix/<?php echo $bmw_ix ->Id?>"
                                                class="btn btn-danger btn-sm">Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modificarbmwix<?php echo $bmw_ix ->Id?>">modificar</a>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="modificarbmwix<?php echo $bmw_ix ->Id?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form
                                            action="<?php echo base_url(); ?>index.php/Usuarios/modificarbmwix/<?php echo $bmw_ix ->Id?>"
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
                                                    <input type="text" value="<?php echo $bmw_ix->Nombre?>"
                                                        class="form-control" placeholder="Nombre "
                                                        aria-label="First name" name="nombre">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Apellido</label>
                                                <input type="text" value="<?php echo $bmw_ix->Apellido?>" class="
                                                    form-control" placeholder="Apellido" aria-label="Last name"
                                                    name="apellido">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Email</label>
                                                <input type="text" value="<?php echo $bmw_ix->Email?>"  class="form-control"
                                                    placeholder="@" aria-label="Last name" name="correo">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Cedula</label>
                                                <input type="text" value="<?php echo $bmw_ix->Cedula?>"  class="form-control"
                                                    placeholder="***" aria-label="Last name" name="cedula">
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="inputEmail4" class="form-label">fecha</label>
                                                    <input type="text" value="<?php echo $bmw_ix->Fecha?>" class="form-control"
                                                        placeholder="aaaa-mm-dd " aria-label="First name" name="fecha">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Agencia</label>
                                                <input type="text" value="<?php echo $bmw_ix->Agencia?>"  class="form-control"
                                                    placeholder="" aria-label="Last name" name="agencia">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Precio</label>
                                                <input type="text" value="<?php echo $bmw_ix->Presupuesto?>" 
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