<H1>Un modelo innovador y rompedor dentro de la gama de la marca bávara, con gran impacto internacional, BMW X2 que llega a Colombia casi en forma simultánea al inicio de su comercialización en Europa. </h1>
<div class=indi>
<h2 class="sub">BWM X2</h2>
<img src="http://localhost/proyecto/img/bmwx2.jpg" class="rounded mx-auto d-block"  width= 800/>


<p> 
Manteniendo los clásicos riñones en el frontal, este modelo adopta grupos ópticos con faros halógenos y luces diurnas LED, así como tres entradas de aire en el bumper teniendo forma triangular las de los extremos, ubicándose sobre ellas las luces exploradoras. En los laterales hay una juvenil línea con cintura alta y una superficie acristalada estilizada, con el logo BMW en el paral C como homenaje a los coupés de los años 60 y 70.

Los protectores en plástico negro en los pasos de rueda y bumpers, típicos de las SUV, son reemplazados por acabados de color gris presentes solo en el M Sport X. Los rines son de 17 pulgadas en la versión sDrive20i, y de 19 pulgadas en la M Sport X.
El estilo innovador del vehículo se refleja también en la parte posterior, con ópticas LED con firma lumínica en 3D, spoiler trasero, antena de radio tipo aleta de tiburón, y un gran espacio para la placa que se complementa con dos tubos de escape en la versión más equipada.
</p>
<img src="http://localhost/proyecto/img/bmwx3.jpg" class="rounded mx-auto d-block"  width= 800/>

<p>
La cabina de la BMW X2 destaca por la calidad de sus materiales, una presentación muy refinada y una completa dotación. La plancha de bordo mantiene los trazos tradicionales, con una pantalla flotante de 6,5 pulgadas para el centro de infoentretenimiento y un clúster de relojes análogos que se complementa con el computador a bordo proyectado al fondo en formato digital por sistema “Black Panel“.
</p>
<img src="http://localhost/proyecto/img/bmwx4.jpg" class="rounded mx-auto d-block"  width= 800/>
<br>

</br>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://localhost/proyecto/img/bmwx5.jpg"  class="rounded mx-auto d-block"  width= 450px/>
    </div>
    <div class="carousel-item">
      <img src="http://localhost/proyecto/img/bmwx6.jpg" class="rounded mx-auto d-block"  width= 450px/>
    </div>
    <div class="carousel-item">
      <img src="http://localhost/proyecto/img/bmwx7.jpg" class="rounded mx-auto d-block"  width= 450px/>
    </div>
    <div class="carousel-item">
      <img src="http://localhost/proyecto/img/bmwx8.jpg" class="rounded mx-auto d-block"  width= 450px/>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>
</div>

  <h5>Seccion de cotizacion</h5>
<div class="container">
<form action="<?php echo base_url(); ?>index.php/Usuarios/bmx2" method="post">
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
                    foreach($bmw_x2 as $bmw_x2){
                ?>

                <tr>
                    <td><?php echo $bmw_x2->Id?></td>
                    <td><?php echo $bmw_x2->Nombre?></td>
                    <td><?php echo $bmw_x2->Apellido?></td>
                    <td><?php echo $bmw_x2->Email?></td>
                    <td><?php echo $bmw_x2->Cedula?></td>
                    <td><?php echo $bmw_x2->Fecha?></td>
                    <td><?php echo $bmw_x2->Agencia?></td>
                    <td><?php echo $bmw_x2->Presupuesto?></td>
                    <td><img src="http://localhost/proyecto/img/<?php echo $bmw_x2->foto ?>.jpg" width="100px"></td>

              <td>

                            <a class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#eliminarbmw_ix<?php echo $bmw_x2->Id?>">Eliminar</a>


                            <!-- Modal -->
                            <div class="modal fade" id="eliminarbmw_ix<?php echo $bmw_x2 ->Id?>" tabindex="-1"
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
                                            <?php echo $bmw_x2 ->Nombre?>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <a href="<?php echo base_url(); ?>index.php/Usuarios/eliminar_bmwx2/<?php echo $bmw_x2 ->Id?>"
                                                class="btn btn-danger btn-sm">Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modificarbmw_ix<?php echo $bmw_x2 ->Id?>">modificar</a>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="modificarbmw_ix<?php echo $bmw_x2 ->Id?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form
                                            action="<?php echo base_url(); ?>index.php/Usuarios/modificarbmwx2/<?php echo $bmw_x2 ->Id?>"
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
                                                    <input type="text" value="<?php echo  $bmw_x2->Nombre?>"
                                                        class="form-control" placeholder="Nombre "
                                                        aria-label="First name" name="nombre">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Apellido</label>
                                                <input type="text" value="<?php echo  $bmw_x2->Apellido?>" class="
                                                    form-control" placeholder="Apellido" aria-label="Last name"
                                                    name="apellido">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Email</label>
                                                <input type="text" value="<?php echo  $bmw_x2->Email?>"  class="form-control"
                                                    placeholder="@" aria-label="Last name" name="correo">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Cedula</label>
                                                <input type="text" value="<?php echo  $bmw_x2->Cedula?>"  class="form-control"
                                                    placeholder="***" aria-label="Last name" name="cedula">
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="inputEmail4" class="form-label">fecha</label>
                                                    <input type="text" value="<?php echo  $bmw_x2->Fecha?>" class="form-control"
                                                        placeholder="aaaa-mm-dd " aria-label="First name" name="fecha">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Agencia</label>
                                                <input type="text" value="<?php echo  $bmw_x2->Agencia?>"  class="form-control"
                                                    placeholder="" aria-label="Last name" name="agencia">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Precio</label>
                                                <input type="text" value="<?php echo  $bmw_x2->Presupuesto?>" 
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