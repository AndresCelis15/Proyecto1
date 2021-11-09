<H1>Audi renueva sus TT Coupé y Roadster 2019 con cambios en el diseño y los motores</H1>
<div class=indi>
    <h2 id="sub">AUDI TT</h2>
    <img src="http://localhost/proyecto/img/audi2.jpg" class="rounded mx-auto d-block" width=800 />
    <p>A finales de 2018 Audi comienza a entregar las primeras unidades de los nuevos TT: Coupé y Roadster. Unas
        versiones que los clientes pueden empezar a reservar a partir de octubre desde 42 220 euros en el caso del Coupé
        y desde 45 990 euros para el descapotable (Roadster). Este modelo llega con cambios respecto al del 2014 en su
        diseño exterior, gama de motores y equipamiento.
        Audi saca a la venta a finales de 2018 una actualización de la tercera generación del TT en sus versiones Coupé
        y Roadster. Este modelo apareció por primera vez en el mercado en 1998, fue renovado en 2006 y, más tarde, en
        2014, llegó esta tercera y última generación. A partir de octubre ya pueden empezar a hacerse los primeros
        pedidos de este vehículo que está a la venta desde 42 220 euros en el caso el Coupé y desde 45 990 euros en el
        del Roadster.
        Alguno de los posibles rivales que tiene este TT en cuanto a diseño y precio en el mercado son el Subaru BRZ (29
        900 €), el Nissan 370Z (34 330 €) y el Toyota GT86 (34 490 €) para la variante Coupé, mientras que para el
        Roadster están el Nissan 370Z Roadster (43 180 €) y el Mercedes-Benz SLC (45 250 €). </p>
    <img src="http://localhost/proyecto/img/audi3.jpg" class="rounded mx-auto d-block" width=800 />
    <p> En el interior, la consola central se ha orientado ligeramente hacia el puesto de conducción. Los asientos
        deportivos cuentan con unos reposacabezas integrados y, como opción, existen otros asientos con ajuste neumático
        en los laterales para un mejor agarre en curvas (de serie en el S line). La instrumentación es una pantalla
        digital de 12,3 pulgadas. En cuanto a la capacidad de maletero, las dos variantes mantienen el mismo volumen que
        los del 2014: 305 litros la variante Coupé y 280 litros la Roadster.
        Entre el equipamiento de serie que puedes encontrar en estos Audi TT está el selector de modos de conducción, el
        encendido y apagado automático de luces y limpiaparabrisas, el paquete de iluminación interior de ledes, los
        espejos retrovisores exteriores calefactados, el volante multifunción o la conexión Bluetooth para teléfonos
        móviles.
        Otras ayudas a la conducción con las que también cuenta son el asistente de cambio de carril, el aviso de salida
        de carril, el reconocimiento de señales de tráfico o el asistente de aparcamiento con cámara trasera y
        reconocimiento de imágenes del entorno, entre otros.</p>
    <img src="http://localhost/proyecto/img/audi4.jpg" class="rounded mx-auto d-block" width=800 />
    <br>
    </br>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://localhost/proyecto/img/audi5.jpg" class="rounded mx-auto d-block" width=450px />
            </div>
            <div class="carousel-item">
                <img src="http://localhost/proyecto/img/audi6.jpg" class="rounded mx-auto d-block" width=450px />
            </div>
            <div class="carousel-item">
                <img src="http://localhost/proyecto/img/audi7.jpg" class="rounded mx-auto d-block" width=450px />
            </div>
            <div class="carousel-item">
                <img src="http://localhost/proyecto/img/audi8.jpg" class="rounded mx-auto d-block" width=450px />
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
   
<form action="<?php echo base_url(); ?>index.php/Usuarios/autt" method="post">
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
                    <input type="text" class="form-control" placeholder="aaaa-mm-dd " aria-label="First name" name="fecha">
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
                    foreach($audi_tt as $audi_tt ){
                ?>

                <tr>
                    <td><?php echo $audi_tt ->Id?></td>
                    <td><?php echo $audi_tt ->Nombre?></td>
                    <td><?php echo $audi_tt ->Apellido?></td>
                    <td><?php echo $audi_tt ->Email?></td>
                    <td><?php echo $audi_tt ->Cedula?></td>
                    <td><?php echo $audi_tt ->Fecha?></td>
                    <td><?php echo $audi_tt ->Agencia?></td>
                    <td><?php echo $audi_tt ->Presupuesto?></td>
                    <td><img src="http://localhost/proyecto/img/<?php echo $audi_tt->foto ?>.jpg" width="100px"></td>
                    <td>

<a class="btn btn-danger btn-sm" data-bs-toggle="modal"
    data-bs-target="#eliminarauditt<?php echo $audi_tt->Id?>">Eliminar</a>


<!-- Modal -->
<div class="modal fade" id="eliminarauditt<?php echo $audi_tt ->Id?>" tabindex="-1"
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
                <?php echo $audi_tt ->Nombre?>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">Close</button>
                <a href="<?php echo base_url(); ?>index.php/Usuarios/eliminarauditt/<?php echo $audi_tt ->Id?>"
                    class="btn btn-danger btn-sm">Eliminar</a>
            </div>
        </div>
    </div>
</div>
</td>
<td>
<a class="btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#modificarauditt<?php echo $audi_tt ->Id?>">modificar</a>
</button>
<!-- Modal -->
<div class="modal fade" id="modificarauditt<?php echo $audi_tt ->Id?>" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form
                action="<?php echo base_url(); ?>index.php/Usuarios/modificarauditt/<?php echo $audi_tt ->Id?>"
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
                        <input type="text" value="<?php echo $audi_tt ->Nombre?>"
                            class="form-control" placeholder="Nombre "
                            aria-label="First name" name="nombre">
                    </div>
                </div>
                <div class="col">
                    <label for="inputEmail4" class="form-label">Apellido</label>
                    <input type="text" value="<?php echo $audi_tt->Apellido?>" class="
form-control" placeholder="Apellido" aria-label="Last name" name="apellido">
                </div>

                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="text" value="<?php echo $audi_tt->Email?>"
                        class="form-control" placeholder="@" aria-label="Last name"
                        name="correo">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Cedula</label>
                    <input type="text" value="<?php echo $audi_tt->Cedula?>"
                        class="form-control" placeholder="***" aria-label="Last name"
                        name="cedula">
                </div>
                <div class="row">
                    <div class="col">
                        <label for="inputEmail4" class="form-label">fecha</label>
                        <input type="text" value="<?php echo $audi_tt->Fecha?>"
                            class="form-control" placeholder="aaaa-mm-dd "
                            aria-label="First name" name="fecha">
                    </div>
                </div>
                <div class="col">
                    <label for="inputEmail4" class="form-label">Agencia</label>
                    <input type="text" value="<?php echo $audi_tt ->Agencia?>"
                        class="form-control" placeholder="" aria-label="Last name"
                        name="agencia">
                </div>

                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Precio</label>
                    <input type="text" value="<?php echo $audi_tt ->Presupuesto?>"
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