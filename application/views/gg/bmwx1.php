<H1>El BMW X1 es un todocamino compacto, del segmento C, fabricado por BMW desde 2009. </h1>
<div class=indi>
<h2 class="sub">BWM X1</h2>
<img src="http://localhost/proyecto/img/bmw2.jpg" class="rounded mx-auto d-block"  width= 800/>


<p> 
El BMW X1 está producido sobre una plataforma de motor delantero transversal, compartida con el MINI Clubman. Ha ganado unos pocos centímetros con respecto a su primera generación, construida sobre la plataforma del BMW Serie 3 Touring.

Su diseño está en línea con las actuales ofertas de BMW y es más estilizado que el de su predecesor. Con el restyling de 2019 de mitad de vida, el BMW X1 recibe novedades en el frontal, perdiendo los antiniebla redondos que compartía con el BMW X2 y modificando tanto el paragolpes, más esculpido y agresivo, como la calandra, con formas mucho más contenidas que las del BMW X7, pero también de mayores dimensiones.
</p>
<img src="http://localhost/proyecto/img/bmw3.jpg" class="rounded mx-auto d-block"  width= 800/>

<p>En el interior del BMW X1 nos encontramos con un habitáculo marcado por la gran calidad de sus materiales así como por un diseño horizontal que prácticamente no revestía cambios respecto al modelo previo a la actualización. Los cromados se dejan entrever a cuentagotas, como continuidad de las manetas de apertura con una fina línea en los paneles de las puertas, en los radios del volante y como separación de los dos colores del salpicadero. Sobrio, elegante y con los elementos muy agrupados para su fácil utilización. Obviamente es la pantalla táctil del sistema de infoentretenimiento la que acapara toda la atención. </p>
<img src="http://localhost/proyecto/img/bmw4.jpg" class="rounded mx-auto d-block"  width= 800/>
<br>

</br>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://localhost/proyecto/img/bmw5.jpg"  class="rounded mx-auto d-block"  width= 450px/>
    </div>
    <div class="carousel-item">
      <img src="http://localhost/proyecto/img/bmw6.jpg" class="rounded mx-auto d-block"  width= 450px/>
    </div>
    <div class="carousel-item">
      <img src="http://localhost/proyecto/img/bmw7.jpg" class="rounded mx-auto d-block"  width= 450px/>
    </div>
    <div class="carousel-item">
      <img src="http://localhost/proyecto/img/bmw8.jpg" class="rounded mx-auto d-block"  width= 450px/>
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
   
<form action="<?php echo base_url(); ?>index.php/Usuarios/bm1" method="post">
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
                    foreach($bmw_x1 as $bmw_x1){
                ?>

                <tr>
                    <td><?php echo $bmw_x1->Id?></td>
                    <td><?php echo $bmw_x1->Nombre?></td>
                    <td><?php echo $bmw_x1->Apellido?></td>
                    <td><?php echo $bmw_x1->Email?></td>
                    <td><?php echo $bmw_x1->Cedula?></td>
                    <td><?php echo $bmw_x1->Fecha?></td>
                    <td><?php echo $bmw_x1->Agencia?></td>
                    <td><?php echo $bmw_x1->Presupuesto?></td>
                    <td><img src="http://localhost/proyecto/img/<?php echo $bmw_x1->foto ?>.jpg" width="100px"></td>

                <td>

                            <a class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#eliminarbmw1<?php echo $bmw_x1->Id?>">Eliminar</a>


                            <!-- Modal -->
                            <div class="modal fade" id="eliminarbmw1<?php echo $bmw_x1 ->Id?>" tabindex="-1"
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
                                            <?php echo $bmw_x1 ->Nombre?>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <a href="<?php echo base_url(); ?>index.php/Usuarios/eliminar_bmw1/<?php echo $bmw_x1 ->Id?>"
                                                class="btn btn-danger btn-sm">Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modificarbmw1<?php echo $bmw_x1 ->Id?>">modificar</a>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="modificarbmw1<?php echo $bmw_x1 ->Id?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form
                                            action="<?php echo base_url(); ?>index.php/Usuarios/modificarbmw1/<?php echo $bmw_x1 ->Id?>"
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
                                                    <input type="text" value="<?php echo $bmw_x1->Nombre?>"
                                                        class="form-control" placeholder="Nombre "
                                                        aria-label="First name" name="nombre">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Apellido</label>
                                                <input type="text" value="<?php echo $bmw_x1->Apellido?>" class="
                                                    form-control" placeholder="Apellido" aria-label="Last name"
                                                    name="apellido">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Email</label>
                                                <input type="text" value="<?php echo $bmw_x1->Email?>"  class="form-control"
                                                    placeholder="@" aria-label="Last name" name="correo">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Cedula</label>
                                                <input type="text" value="<?php echo $bmw_x1->Cedula?>"  class="form-control"
                                                    placeholder="***" aria-label="Last name" name="cedula">
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="inputEmail4" class="form-label">fecha</label>
                                                    <input type="text" value="<?php echo $bmw_x1->Fecha?>" class="form-control"
                                                        placeholder="aaaa-mm-dd " aria-label="First name" name="fecha">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Agencia</label>
                                                <input type="text" value="<?php echo $bmw_x1->Agencia?>"  class="form-control"
                                                    placeholder="" aria-label="Last name" name="agencia">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Precio</label>
                                                <input type="text" value="<?php echo $bmw_x1->Presupuesto?>" 
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