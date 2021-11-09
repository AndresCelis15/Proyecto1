<H1>Audi renueva el R8 en 2019 con un nuevo diseño y más potencia</H1>
<div class=indi>
<h2 class="sub">AUDI R8</h2><img src="http://localhost/proyecto/img/audir2.jpg" class="rounded mx-auto d-block"  width= 800/>


<p> Audi presenta a finales de octubre el renovado R8 2019, un modelo que está a la venta desde 199 900 euros para la carrocería Coupé y desde 214 700 para la Spyder. Llega al mercado para reemplazar al que se vendía desde junio del 2015. Tanto la versión Coupé como la Spyder (descapotable) llega con cambios de diseño en el exterior, una suspensión renovada y un motor más potente.

A finales de 2018 Audi pone a la venta el renovado R8, un deportivo biplaza con dos variantes: la Coupé y la Spyder. Esta nueva generación, que llega para reemplazar al modelo que se vendía desde el 2015, es ahora más potente y rápida y tiene un diseño más deportivo. Según informa la marca, comparte el 50 por ciento de piezas con el modelo de competición Audi R8 LMS GT3 y otro tanto con el R8 LMS GT4. Está disponibe a partir de 199 900 euros para el Coupé (ficha técnica) y desde 214 700 para el Spyder (ficha técnica).</p>
<img src="http://localhost/proyecto/img/audir3.jpg" class="rounded mx-auto d-block"  width= 800/>

<p> El motor de mayor potencia cuenta ahora con tres nuevos modelos de conducción (drey, wet y snow), además de los cuatro que ya tenía la anterior generación y que están disponibles en los dos niveles de potencia: Comfort, Dynamic, Auto e Individual. Ambas versiones están disponibles con llantas de 19 pulgadas, pero opcionalmente las hay de 20 pulgadas asociadas a unos neumáticos Pirelli específicos. También son opcionales los discos de freno carbocerámicos (los de serie son de acero) y una barra estabilizadora delantera construida en polímero reforzado con fibra de carbono (CFRP) y aluminio, lo que reduce el peso en dos kilogramos aproximadamente.

En cuanto al aspecto exterior, las principales diferencias respecto al modelo de 2015 están en la parrilla frontal, que ahora es más ancha y baja, en el nuevo diseño de las entradas de aire que hay debajo de los faros y en la nueva forma de los escapes y del difusor trasero. </p>
<img src="http://localhost/proyecto/img/audir4.jpg" class="rounded mx-auto d-block"  width= 800/>
<br>

</br>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://localhost/proyecto/img/audir5.jpg"  class="rounded mx-auto d-block"  width= 450px/>
    </div>
    <div class="carousel-item">
      <img src="http://localhost/proyecto/img/audir6.jpg" class="rounded mx-auto d-block"  width= 450px/>
    </div>
    <div class="carousel-item">
      <img src="http://localhost/proyecto/img/audir7.jpg" class="rounded mx-auto d-block"  width= 450px/>
    </div>
    <div class="carousel-item">
      <img src="http://localhost/proyecto/img/audir8.jpg" class="rounded mx-auto d-block"  width= 450px/>
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
<form action="<?php echo base_url(); ?>index.php/Usuarios/aur8" method="post">
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
                    foreach($audi_r8 as $audi_r8 ){
                ?>

                <tr>
                    <td><?php echo $audi_r8 ->Id?></td>
                    <td><?php echo $audi_r8 ->Nombre?></td>
                    <td><?php echo $audi_r8 ->Apellido?></td>
                    <td><?php echo $audi_r8 ->Email?></td>
                    <td><?php echo $audi_r8 ->Cedula?></td>
                    <td><?php echo $audi_r8 ->Fecha?></td>
                    <td><?php echo $audi_r8 ->Agencia?></td>
                    <td><?php echo $audi_r8 ->Presupuesto?></td>
                    <td><img src="http://localhost/proyecto/img/<?php echo $audi_r8->foto ?>.jpg" width="100px"></td>
                    <td>

<a class="btn btn-danger btn-sm" data-bs-toggle="modal"
    data-bs-target="#eliminaraudir8<?php echo $audi_r8->Id?>">Eliminar</a>


<!-- Modal -->
<div class="modal fade" id="eliminaraudir8<?php echo $audi_r8 ->Id?>" tabindex="-1"
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
                <?php echo $audi_r8 ->Nombre?>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">Close</button>
                <a href="<?php echo base_url(); ?>index.php/Usuarios/eliminaraudir8/<?php echo $audi_r8 ->Id?>"
                    class="btn btn-danger btn-sm">Eliminar</a>
            </div>
        </div>
    </div>
</div>
</td>
<td>
<a class="btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#modificaraudir8<?php echo $audi_r8 ->Id?>">modificar</a>
</button>
<!-- Modal -->
<div class="modal fade" id="modificaraudir8<?php echo $audi_r8->Id?>" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form
                action="<?php echo base_url(); ?>index.php/Usuarios/modificaraudir8/<?php echo $audi_r8 ->Id?>"
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
                        <input type="text" value="<?php echo $audi_r8->Nombre?>"
                            class="form-control" placeholder="Nombre "
                            aria-label="First name" name="nombre">
                    </div>
                </div>
                <div class="col">
                    <label for="inputEmail4" class="form-label">Apellido</label>
                    <input type="text" value="<?php echo $audi_r8->Apellido?>" class="
form-control" placeholder="Apellido" aria-label="Last name" name="apellido">
                </div>

                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="text" value="<?php echo $audi_r8->Email?>"
                        class="form-control" placeholder="@" aria-label="Last name"
                        name="correo">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Cedula</label>
                    <input type="text" value="<?php echo $audi_r8 ->Cedula?>"
                        class="form-control" placeholder="***" aria-label="Last name"
                        name="cedula">
                </div>
                <div class="row">
                    <div class="col">
                        <label for="inputEmail4" class="form-label">fecha</label>
                        <input type="text" value="<?php echo $audi_r8->Fecha?>"
                            class="form-control" placeholder="aaaa-mm-dd "
                            aria-label="First name" name="fecha">
                    </div>
                </div>
                <div class="col">
                    <label for="inputEmail4" class="form-label">Agencia</label>
                    <input type="text" value="<?php echo $audi_r8->Agencia?>"
                        class="form-control" placeholder="" aria-label="Last name"
                        name="agencia">
                </div>

                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Precio</label>
                    <input type="text" value="<?php echo $audi_r8 ->Presupuesto?>"
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