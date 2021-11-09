<H1>Llega el nuevo Ford Puma en 2020. Se trata de un crossover de 5 puertas con tracción delantera para el uso diario, gracias a su motorización híbrida suave.</H1>
<div class=indi>
<h2 class="sub">FORD PUMA</h2>
<img src="http://localhost/proyecto/img/puma2.jpg" class="rounded mx-auto d-block"  width= 800/>


<p> No guarda relación con el vehículo homónimo de la marca, un pequeño cupé deportivo de 3 puertas basado en el Fiesta, comercializado entre 1997 y 2002. El nuevo Puma sí se permite un guiño al cupé con unos faros de similar geometría almendrada, ubicados muy arriba en el frontal, que dotan al coche de un aire deportivo.Se encuadra dentro del segmento de micro híbridos, o híbridos suaves. La electrificación basada en la arquitectura Mild Hybrid será el estándar de motorización de los próximos años para los coches de tamaño pequeño y medio. Esta hibridación se fundamenta en tres aspectos:
+Una batería extra de ion de litio.
+Un arranque alternador.
+Un sistema de gestión de la electricidad de 48 v. 
</p>
<img src="http://localhost/proyecto/img/puma3.jpg" class="rounded mx-auto d-block"  width= 800/>

<p> El interior del Ford Fiesta de séptima generación ha sufrido una gran trasformación, perdiendo botones y adoptando una imagen más minimalista, en la que una gran pantalla central cobra protagonismo.En función del acabado escogido para el nuevo Fiesta podremos contar con una pantalla de 6,5 u 8 pulgadas en la que se aúnan múltiples funciones del sistema Ford SYNC 3. Bajo esta y distribuidos por la consola central se encuentran diferentes accesos directos, además de los mandos de la climatización.Los asientos del nuevo Fiesta de Ford se basan en su modelo compacto del segmento C, el Ford Focus, incorporando una mayor amplitud en los reglajes de los mismos. En la segunda fila se mantienen cotas parecidas a las de la generación precedente. </p>
<img src="http://localhost/proyecto/img/puma4.jpg" class="rounded mx-auto d-block"  width= 800/>
<br>

</br>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://localhost/proyecto/img/puma5.jpg"  class="rounded mx-auto d-block"  width= 450px/>
    </div>
    <div class="carousel-item">
      <img src="http://localhost/proyecto/img/puma6.jpg" class="rounded mx-auto d-block"  width= 450px/>
    </div>
    <div class="carousel-item">
      <img src="http://localhost/proyecto/img/puma7.jpg" class="rounded mx-auto d-block"  width= 450px/>
    </div>
    <div class="carousel-item">
      <img src="http://localhost/proyecto/img/puma8.jpg" class="rounded mx-auto d-block"  width= 450px/>
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
   
<form action="<?php echo base_url(); ?>index.php/Usuarios/fordpuma" method="post">
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
                    foreach($ford_puma as $ford_puma ){
                ?>

                <tr>
                    <td><?php echo $ford_puma ->Id?></td>
                    <td><?php echo $ford_puma ->Nombre?></td>
                    <td><?php echo $ford_puma->Apellido?></td>
                    <td><?php echo $ford_puma ->Email?></td>
                    <td><?php echo $ford_puma->Cedula?></td>
                    <td><?php echo $ford_puma ->Fecha?></td>
                    <td><?php echo $ford_puma ->Agencia?></td>
                    <td><?php echo $ford_puma ->Presupuesto?></td>
                    <td><img src="http://localhost/proyecto/img/<?php echo $ford_puma->foto ?>.jpg" width="100px"></td>
                    <td>

<a class="btn btn-danger btn-sm" data-bs-toggle="modal"
    data-bs-target="#eliminarfordpuma<?php echo $ford_puma->Id?>">Eliminar</a>


<!-- Modal -->
<div class="modal fade" id="eliminarfordpuma<?php echo $ford_puma ->Id?>"
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
                <?php echo $ford_puma ->Nombre?>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">Close</button>
                <a href="<?php echo base_url(); ?>index.php/Usuarios/eliminarfordpuma/<?php echo $ford_puma ->Id?>"
                    class="btn btn-danger btn-sm">Eliminar</a>
            </div>
        </div>
    </div>
</div>
</td>
<td>
<a class="btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#modificarfordpuma<?php echo $ford_puma ->Id?>">modificar</a>
</button>
<!-- Modal -->
<div class="modal fade" id="modificarfordpuma<?php echo $ford_puma->Id?>"
    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form
                action="<?php echo base_url(); ?>index.php/Usuarios/modificarfordpuma/<?php echo $ford_puma ->Id?>"
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
                        <input type="text" value="<?php echo $ford_puma->Nombre?>"
                            class="form-control" placeholder="Nombre "
                            aria-label="First name" name="nombre">
                    </div>
                </div>
                <div class="col">
                    <label for="inputEmail4" class="form-label">Apellido</label>
                    <input type="text" value="<?php echo $ford_puma->Apellido?>"
                        class="
form-control" placeholder="Apellido" aria-label="Last name" name="apellido">
                </div>

                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="text" value="<?php echo $ford_puma->Email?>"
                        class="form-control" placeholder="@" aria-label="Last name"
                        name="correo">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Cedula</label>
                    <input type="text" value="<?php echo $ford_puma->Cedula?>"
                        class="form-control" placeholder="***" aria-label="Last name"
                        name="cedula">
                </div>
                <div class="row">
                    <div class="col">
                        <label for="inputEmail4" class="form-label">fecha</label>
                        <input type="text" value="<?php echo $ford_puma->Fecha?>"
                            class="form-control" placeholder="aaaa-mm-dd "
                            aria-label="First name" name="fecha">
                    </div>
                </div>
                <div class="col">
                    <label for="inputEmail4" class="form-label">Agencia</label>
                    <input type="text" value="<?php echo $ford_puma->Agencia?>"
                        class="form-control" placeholder="" aria-label="Last name"
                        name="agencia">
                </div>

                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Precio</label>
                    <input type="text" value="<?php echo $ford_puma->Presupuesto?>"
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