<H1> Ya está en Colombia la monumental BMW X7, disponible en dos versiones: xDrive40i de seis cilindros y xDrive50i V8, ambas con caja automática Steptronic de ocho velocidades y tracción a las cuatro ruedas. </h1>
<div class=indi>
<h2 class="sub">BWM X7</h2>
<img src="http://localhost/proyecto/img/bmwx72.jpg" class="rounded mx-auto d-block"  width= 800/>


<p> 
Luego de su estreno mundial a finales de 2018, llegó a nuestro país el nuevo buque insignia de la marca bávara. Se trata de la totalmente nueva BMW X7, una enorme SUV de alto lujo producida en Carolina del Sur, Estados Unidos, con la que este constructor alemán busca ofrecer una alternativa frente a las Mercedes-Benz GLS y Range Rover, ubicándose en lo más alto de la gama.

Por su tamaño y características, podría decirse que este modelo está más enfocado en satisfacer el gusto de los compradores norteamericanos frente a los vehículos de alta gama, que el de los europeos.

Descrestante en cada uno de sus detalles, Autogermana ofrece la BMW X7 en Colombia en dos versiones: xDrive40i con motor de 3.0 litros y seis cilindros, y xDrive50i con motor V8 de 4.4 litros.
</p>
<img src="http://localhost/proyecto/img/bmwx73.jpg" class="rounded mx-auto d-block"  width= 800/>

<p> 
Al entrar a la BMW X7, se puede detallar su amplio habitáculo con tres filas de asientos para llevar a siete pasajeros. Todos los asientos incorporan apoyabrazos, portavasos, puertos USB y calefactor, y la segunda fila se puede configurar para dos asientos individuales.

Para Colombia se ofrece con el acabado Pure Excellence, con revestimientos en madera noble (Fineline Stripe Brown) con efecto brillante, inserciones en aluminio satinado, tapicería en cuero BMW Individual Merino y un volante deportivo multifuncional con levas de cambio.

También destaca el sistema Live Cockpit Professional con sistema operativo BMW 7.0. Consta de un cuadro de instrumentos digital con pantalla de 12,3 pulgadas, y una pantalla táctil de similar tamaño en la consola para operar el centro multimedia y el navegador. Ello se complementa con el Head-Up Display que ofrece un área de proyección más amplia y gráficos optimizados.
</p>
<br>
<img src="http://localhost/proyecto/img/bmwx74.jpg" class="rounded mx-auto d-block"  width= 800/>
</br>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://localhost/proyecto/img/bmwx75.jpg"  class="rounded mx-auto d-block"  width= 450px/>
    </div>
    <div class="carousel-item">
      <img src="http://localhost/proyecto/img/bmwx76.jpg" class="rounded mx-auto d-block"  width= 450px/>
    </div>
    <div class="carousel-item">
      <img src="http://localhost/proyecto/img/bmwx77.jpg" class="rounded mx-auto d-block"  width= 450px/>
    </div>
    <div class="carousel-item">
      <img src="http://localhost/proyecto/img/bmwx78.jpg" class="rounded mx-auto d-block"  width= 450px/>
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
   
<form action="<?php echo base_url(); ?>index.php/Usuarios/bmx7" method="post">
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
                    foreach($bmw_x7 as $bmw_x7){
                ?>

                <tr>
                    <td><?php echo $bmw_x7->Id?></td>
                    <td><?php echo $bmw_x7->Nombre?></td>
                    <td><?php echo $bmw_x7->Apellido?></td>
                    <td><?php echo $bmw_x7->Email?></td>
                    <td><?php echo $bmw_x7->Cedula?></td>
                    <td><?php echo $bmw_x7->Fecha?></td>
                    <td><?php echo $bmw_x7->Agencia?></td>
                    <td><?php echo $bmw_x7->Presupuesto?></td>
                    <td><img src="http://localhost/proyecto/img/<?php echo $bmw_x7->foto ?>.jpg" width="100px"></td>

               <td>

                            <a class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#eliminarbmwx7<?php echo $bmw_x7->Id?>">Eliminar</a>


                            <!-- Modal -->
                            <div class="modal fade" id="eliminarbmwx7<?php echo $bmw_x7 ->Id?>" tabindex="-1"
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
                                            <?php echo $bmw_x7 ->Nombre?>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <a href="<?php echo base_url(); ?>index.php/Usuarios/eliminar_bmwx7/<?php echo$bmw_x7 ->Id?>"
                                                class="btn btn-danger btn-sm">Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modificarbmwx7<?php echo $bmw_x7 ->Id?>">modificar</a>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="modificarbmwx7<?php echo $bmw_x7 ->Id?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form
                                            action="<?php echo base_url(); ?>index.php/Usuarios/modificarbmwx7/<?php echo $bmw_x7 ->Id?>"
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
                                                    <input type="text" value="<?php echo $bmw_x7->Nombre?>"
                                                        class="form-control" placeholder="Nombre "
                                                        aria-label="First name" name="nombre">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Apellido</label>
                                                <input type="text" value="<?php echo $bmw_x7->Apellido?>" class="
                                                    form-control" placeholder="Apellido" aria-label="Last name"
                                                    name="apellido">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Email</label>
                                                <input type="text" value="<?php echo $bmw_x7->Email?>"  class="form-control"
                                                    placeholder="@" aria-label="Last name" name="correo">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Cedula</label>
                                                <input type="text" value="<?php echo $bmw_x7->Cedula?>"  class="form-control"
                                                    placeholder="***" aria-label="Last name" name="cedula">
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="inputEmail4" class="form-label">fecha</label>
                                                    <input type="text" value="<?php echo $bmw_x7->Fecha?>" class="form-control"
                                                        placeholder="aaaa-mm-dd " aria-label="First name" name="fecha">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Agencia</label>
                                                <input type="text" value="<?php echo $bmw_x7->Agencia?>"  class="form-control"
                                                    placeholder="" aria-label="Last name" name="agencia">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Precio</label>
                                                <input type="text" value="<?php echo $bmw_x7->Presupuesto?>" 
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