@extends('layout.layout')

@section('content')


    <div class="Body">
        <div class="Container">
            <div class="Title Page fa-star B12">
                <h1>Lista completa de Animes</h1>
            </div>
            <main class="Main">

                <form action="/browse" method="get">
                    <div class="filters" style="margin-bottom: 10px;">
                        <select name="genre[]" id="genre_select" multiple="multiple">
                            <option value="accion">Acci&oacute;n</option>
                            <option value="artes-marciales">Artes Marciales</option>
                            <option value="aventura">Aventuras</option>
                            <option value="carreras">Carreras</option>
                            <option value="ciencia-ficcion">Ciencia Ficci&oacute;n</option>
                            <option value="comedia">Comedia</option>
                            <option value="demencia">Demencia</option>
                            <option value="demonios">Demonios</option>
                            <option value="deportes">Deportes</option>
                            <option value="drama">Drama</option>
                            <option value="ecchi">Ecchi</option>
                            <option value="escolares">Escolares</option>
                            <option value="espacial">Espacial</option>
                            <option value="fantasia">Fantas&iacute;a</option>
                            <option value="harem">Harem</option>
                            <option value="historico">Historico</option>
                            <option value="infantil">Infantil</option>
                            <option value="josei">Josei</option>
                            <option value="juegos">Juegos</option>
                            <option value="magia">Magia</option>
                            <option value="mecha">Mecha</option>
                            <option value="militar">Militar</option>
                            <option value="misterio">Misterio</option>
                            <option value="musica">M&uacute;sica</option>
                            <option value="parodia">Parodia</option>
                            <option value="policia">Polic&iacute;a</option>
                            <option value="psicologico">Psicol&oacute;gico</option>
                            <option value="recuentos-de-la-vida">Recuentos de la vida</option>
                            <option value="romance">Romance</option>
                            <option value="samurai">Samurai</option>
                            <option value="seinen">Seinen</option>
                            <option value="shoujo">Shoujo</option>
                            <option value="shounen">Shounen</option>
                            <option value="sobrenatural">Sobrenatural</option>
                            <option value="superpoderes">Superpoderes</option>
                            <option value="suspenso">Suspenso</option>
                            <option value="terror">Terror</option>
                            <option value="vampiros">Vampiros</option>
                            <option value="yaoi">Yaoi</option>
                            <option value="yuri">Yuri</option>
                        </select>
                        <select name="year[]" id="year_select" multiple="multiple">
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                        </select>
                        <select name="type[]" id="type_select" multiple="multiple">
                            <option value="tv">TV</option>
                            <option value="movie">Película</option>
                            <option value="special">Especial</option>
                            <option value="ova">OVA</option>
                        </select>
                        <select name="status[]" id="status_select" multiple="multiple">
                            <option value="1">En emisión</option>
                            <option value="2">Finalizado</option>
                            <option value="3">Próximamente</option>
                        </select>
                        <select name="order" id="order_select">
                            <option value="default">Por Defecto</option>
                            <option value="updated">Recientemente Actualizados</option>
                            <option value="added">Recientemente Agregados</option>
                            <option value="title">Nombre A-Z</option>
                            <option value="rating">Calificación</option>
                        </select>
                        <button type="submit" class="btn btn-sm btn-primary">
                            <span class="fa fa-filter" aria-hidden="true"></span> Filtrar
                        </button>
                    </div>
                </form>

                <ul class="ListAnimes AX Rows A03 C02 D02">
                    <li>
                        <article class="Anime alt B">
                            <a href="/anime">
                                <div class="Image fa-play-circle-o">
                                    <figure><img src="https://animeflv.net/uploads/animes/covers/3508.jpg"
                                            alt="Jahy-sama wa Kujikenai!"></figure>
                                    <span class="Type tv">Anime</span>
                                </div>
                                <h3 class="Title">Jahy-sama wa Kujikenai!</h3>
                            </a>
                            <div class="Description">
                                <div class="Title"><strong>Jahy-sama wa Kujikenai!</strong></div>
                                <p><span class="Type tv">Anime</span> <span class="Vts fa-star">5.0</span></p>
                                <p>Una vez respetada como la segunda mayor autoridad del Reino de los Demonios, la ayudante
                                    del Rey Demonio, Jahy, gobernaba a sus súbditos con miedo. Pero cuando una chica mágica
                                    ataca y destruye una gema mística que contiene un poder masivo, el Reino de los Demonios
                                    es destruido.
                                    Aunque sobrevive, Jahy ha perdido casi todos sus poderes y se en...</p>
                                <span class="Flwrs fa-user"><span>37</span> Seguidores</span>
                                <a class="Button Vrnmlk" href="/anime">VER ANIME</a>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article class="Anime alt B">
                            <a href="/anime">
                                <div class="Image fa-play-circle-o">
                                    <figure><img src="https://animeflv.net/uploads/animes/covers/3507.jpg"
                                            alt="Magia Record: Mahou Shoujo Madoka☆Magica Gaiden (TV) 2nd Season"></figure>
                                    <span class="Type tv">Anime</span>
                                </div>
                                <h3 class="Title">Magia Record: Mahou Shoujo Madoka☆Magica Gaiden (TV) 2nd Season
                                </h3>
                            </a>
                            <div class="Description">
                                <div class="Title"><strong>Magia Record: Mahou Shoujo Madoka☆Magica Gaiden (TV) 2nd
                                        Season</strong></div>
                                <p><span class="Type tv">Anime</span> <span class="Vts fa-star">0.0</span></p>
                                <p>Segunda temporada de Magia Record: Mahou Shoujo Madoka☆Magica Gaiden (TV)</p>
                                <span class="Flwrs fa-user"><span>0</span> Seguidores</span>
                                <a class="Button Vrnmlk" href="/anime">VER ANIME</a>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article class="Anime alt B">
                            <a href="/anime">
                                <div class="Image fa-play-circle-o">
                                    <figure><img src="https://animeflv.net/uploads/animes/covers/3506.jpg"
                                            alt="Heion Sedai no Idaten-tachi"></figure>
                                    <span class="Type tv">Anime</span>
                                </div>
                                <h3 class="Title">Heion Sedai no Idaten-tachi</h3>
                            </a>
                            <div class="Description">
                                <div class="Title"><strong>Heion Sedai no Idaten-tachi</strong></div>
                                <p><span class="Type tv">Anime</span> <span class="Vts fa-star">4.3</span></p>
                                <p>En la historia de este manga, los dioses aparecieron cuando la humanidad estaba al borde
                                    de la aniquilación por parte de los demonios. Deidades llamadas “Idaten” pelearon y
                                    sellaron a los demonios hace 800 años. Ahora, los “Idaten” ya no tiene experiencia en
                                    peleas y viven vidas pacíficas. Pero, al mismo tiempo, los demonios están reviv...</p>
                                <span class="Flwrs fa-user"><span>1384</span> Seguidores</span>
                                <a class="Button Vrnmlk" href="/anime">VER ANIME</a>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article class="Anime alt B">
                            <a href="/anime">
                                <div class="Image fa-play-circle-o">
                                    <figure><img src="https://animeflv.net/uploads/animes/covers/3505.jpg" alt="Sonny Boy">
                                    </figure>
                                    <span class="Type tv">Anime</span>
                                </div>
                                <h3 class="Title">Sonny Boy</h3>
                            </a>
                            <div class="Description">
                                <div class="Title"><strong>Sonny Boy</strong></div>
                                <p><span class="Type tv">Anime</span> <span class="Vts fa-star">0.0</span></p>
                                <p>El drama de ciencia ficción se centra en treinta y seis chicos y chicas. El 16 de agosto,
                                    a mitad de unas vacaciones de verano aparentemente interminables, el estudiante de
                                    tercer año de preparatoria Nagara, la misteriosa estudiante transferida Nozomi y
                                    compañeros de clase como Mizuho y Asakaze, son repentinamente transportados de su
                                    tranquila v...</p>
                                <span class="Flwrs fa-user"><span>0</span> Seguidores</span>
                                <a class="Button Vrnmlk" href="/anime/sonny-boy">VER ANIME</a>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article class="Anime alt B">
                            <a href="/anime">
                                <div class="Image fa-play-circle-o">
                                    <figure><img src="https://animeflv.net/uploads/animes/covers/3504.jpg"
                                            alt="Night Head 2041"></figure>
                                    <span class="Type tv">Anime</span>
                                </div>
                                <h3 class="Title">Night Head 2041</h3>
                            </a>
                            <div class="Description">
                                <div class="Title"><strong>Night Head 2041</strong></div>
                                <p><span class="Type tv">Anime</span> <span class="Vts fa-star">4.4</span></p>
                                <p>Night Head 2041 es una serie anime que sigue la historia de los hermanos Kirhara que,
                                    desde muy jóvenes, fueron encarcelados en una instalación científica debido al
                                    surgimiento de sus poderes sobrenaturales. Pero éstos consiguen escapar tras sobrepasar
                                    la barrera que les impedía usar sus poderes. Tras ellos se encuentran los hermanos
                                    Kuroki qu...</p>
                                <span class="Flwrs fa-user"><span>285</span> Seguidores</span>
                                <a class="Button Vrnmlk" href="/anime">VER ANIME</a>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article class="Anime alt B">
                            <a href="/anime">
                                <div class="Image fa-play-circle-o">
                                    <figure><img src="https://animeflv.net/uploads/animes/covers/3503.jpg"
                                            alt="Megami-ryou no Ryoubo-kun."></figure>
                                    <span class="Type tv">Anime</span>
                                </div>
                                <h3 class="Title">Megami-ryou no Ryoubo-kun.</h3>
                            </a>
                            <div class="Description">
                                <div class="Title"><strong>Megami-ryou no Ryoubo-kun.</strong></div>
                                <p><span class="Type tv">Anime</span> <span class="Vts fa-star">4.5</span></p>
                                <p>La historia se centra en un chico de doce años llamado Koushi Nagumo, quien se encuentra
                                    sin hogar, sin dinero y sin familiares que cuiden de él. Mientras duerme en la calle, es
                                    recogido para convertirse en el encargado de un dormitorio habitado por problemáticas
                                    estudiantes universitarias. Rodeado de estas chicas tan difíciles, la “nueva vid...</p>
                                <span class="Flwrs fa-user"><span>17317</span> Seguidores</span>
                                <a class="Button Vrnmlk" href="/anime">VER ANIME</a>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article class="Anime alt B">
                            <a href="/anime">
                                <div class="Image fa-play-circle-o">
                                    <figure><img src="https://animeflv.net/uploads/animes/covers/3501.jpg"
                                            alt="Deatte 5-byou de Battle"></figure>
                                    <span class="Type tv">Anime</span>
                                </div>
                                <h3 class="Title">Deatte 5-byou de Battle</h3>
                            </a>
                            <div class="Description">
                                <div class="Title"><strong>Deatte 5-byou de Battle</strong></div>
                                <p><span class="Type tv">Anime</span> <span class="Vts fa-star">0.0</span></p>
                                <p>Era solo una mañana normal… Akira Shiroyanagi, un estudiante de preparatoria que ama los
                                    videojuegos y los dulces, de repente ha sido arrastrado al campo de batalla por parte de
                                    una misteriosa chica que se hace llamar Mion. A los participantes se les dice que fueron
                                    borrados del registro familiar, involucrados en un experimento y asignados ciert...</p>
                                <span class="Flwrs fa-user"><span>0</span> Seguidores</span>
                                <a class="Button Vrnmlk" href="/anime">VER ANIME</a>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article class="Anime alt B">
                            <a href="/anime">
                                <div class="Image fa-play-circle-o">
                                    <figure><img src="https://animeflv.net/uploads/animes/covers/3502.jpg"
                                            alt="Love Live! Superstar!!"></figure>
                                    <span class="Type tv">Anime</span>
                                </div>
                                <h3 class="Title">Love Live! Superstar!!</h3>
                            </a>
                            <div class="Description">
                                <div class="Title"><strong>Love Live! Superstar!!</strong></div>
                                <p><span class="Type tv">Anime</span> <span class="Vts fa-star">4.4</span></p>
                                <p>Kanon Shibuya es una “super regular” estudiante de preparatoria que vive con su familia y
                                    ayuda en su cafetería local, el negocio de su familia. Kanon es bastante tímida, y
                                    cantar ante un público es un martirio para ella, sin embargo, su sueño es alegrar a las
                                    personas interpretando las canciones que escribe. “No tengo sueños para el fut...</p>
                                <span class="Flwrs fa-user"><span>3547</span> Seguidores</span>
                                <a class="Button Vrnmlk" href="/anime">VER ANIME</a>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article class="Anime alt B">
                            <a href="/anime">
                                <div class="Image fa-play-circle-o">
                                    <figure><img src="https://animeflv.net/uploads/animes/covers/3500.jpg"
                                            alt="D_Cide Traumerei the Animation"></figure>
                                    <span class="Type tv">Anime</span>
                                </div>
                                <h3 class="Title">D_Cide Traumerei the Animation</h3>
                            </a>
                            <div class="Description">
                                <div class="Title"><strong>D_Cide Traumerei the Animation</strong></div>
                                <p><span class="Type tv">Anime</span> <span class="Vts fa-star">4.5</span></p>
                                <p>La historia del anime se desarrolla en Shibuya y se centra en Ryuuhei. Cuando era niño,
                                    quería ser como su hermano mayor, pero lo vio morir en un misterioso incidente ante sus
                                    ojos. Ahora, siendo un estudiante de preparatoria, Ryuhei no muestra ninguna expresión
                                    sobre el trauma de ese incidente de pesadilla, y pasa la mayor parte de su tiempo li...
                                </p>
                                <span class="Flwrs fa-user"><span>165</span> Seguidores</span>
                                <a class="Button Vrnmlk" href="/anime">VER ANIME</a>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article class="Anime alt B">
                            <a href="/anime">
                                <div class="Image fa-play-circle-o">
                                    <figure><img src="https://animeflv.net/uploads/animes/covers/3499.jpg"
                                            alt="Meikyuu Black Company"></figure>
                                    <span class="Type tv">Anime</span>
                                </div>
                                <h3 class="Title">Meikyuu Black Company</h3>
                            </a>
                            <div class="Description">
                                <div class="Title"><strong>Meikyuu Black Company</strong></div>
                                <p><span class="Type tv">Anime</span> <span class="Vts fa-star">0.0</span></p>
                                <p>Kinji es una persona que no cuenta con una pizca de ética o disciplina laboral, ya que
                                    las considera innecesarias e incluso molestas de considerar. Un día, descubre que ha
                                    sido transportado a otro mundo, pero no uno de fantasía en el que es recibido como el
                                    héroe que derrotará al Rey Demonio o cualquier otro de los clichés actuales de la
                                    indu...</p>
                                <span class="Flwrs fa-user"><span>0</span> Seguidores</span>
                                <a class="Button Vrnmlk" href="/anime">VER ANIME</a>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article class="Anime alt B">
                            <a href="/anime">
                                <div class="Image fa-play-circle-o">
                                    <figure><img src="https://animeflv.net/uploads/animes/covers/3498.jpg"
                                            alt="100-man no Inochi no Ue ni Ore wa Tatteiru 2nd Season"></figure>
                                    <span class="Type tv">Anime</span>
                                </div>
                                <h3 class="Title">100-man no Inochi no Ue ni Ore wa Tatteiru 2nd Season</h3>
                            </a>
                            <div class="Description">
                                <div class="Title"><strong>100-man no Inochi no Ue ni Ore wa Tatteiru 2nd
                                        Season</strong></div>
                                <p><span class="Type tv">Anime</span> <span class="Vts fa-star">4.5</span></p>
                                <p>El estudiante de noveno grado, Yusuke Yotsuya, es un chico práctico, sin amigos y no es
                                    miembro de ningún club. Pero un día, él y dos compañeras de clase son transportados a
                                    otro mundo en el que deberán trabajar juntos para sobrevivir.
                                    Yotsuya es un “lobo solitario” y siempre ha vivido su vida satisfaciéndose a sí mismo,
                                    ¿pero cómo...</p>
                                <span class="Flwrs fa-user"><span>116</span> Seguidores</span>
                                <a class="Button Vrnmlk"
                                    href="/anime/100man-no-inochi-no-ue-ni-ore-wa-tatteiru-2nd-season">VER ANIME</a>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article class="Anime alt B">
                            <a href="/anime">
                                <div class="Image fa-play-circle-o">
                                    <figure><img src="https://animeflv.net/uploads/animes/covers/3497.jpg"
                                            alt="Shiroi Suna no Aquatope"></figure>
                                    <span class="Type tv">Anime</span>
                                </div>
                                <h3 class="Title">Shiroi Suna no Aquatope</h3>
                            </a>
                            <div class="Description">
                                <div class="Title"><strong>Shiroi Suna no Aquatope</strong></div>
                                <p><span class="Type tv">Anime</span> <span class="Vts fa-star">3.7</span></p>
                                <p>La historia se desarrolla en el Acuario Gama Gama, un pequeño acuario en Okinawa, a una
                                    hora de autobús de Naha. Kukuru Misakino es una estudiante de preparatoria de 18 años
                                    que trabaja allí y conoce el “secreto” del acuario: a veces se pueden ver cosas
                                    misteriosas. Un día, Kukuru se encuentra con Fuuka, parada frente a un tanque de agua
                                    c...</p>
                                <span class="Flwrs fa-user"><span>5</span> Seguidores</span>
                                <a class="Button Vrnmlk" href="/anime">VER ANIME</a>
                            </div>
                        </article>
                </ul>

                <div class="NvCnAnm">
                    <ul class="pagination">
                        <li class="disabled"><a href="#" rel="prev">&laquo;</a></li>
                        <li class="active"><a href="/browse?page=1">1</a></li>
                        <li><a href="/browse?page=2">2</a></li>
                        <li><a href="/browse?page=3">3</a></li>
                        <li><a href="/browse?page=4">4</a></li>
                        <li><a href="/browse?page=5">5</a></li>
                        <li><a href="/browse?page=6">6</a></li>
                        <li><a href="/browse?page=7">7</a></li>
                        <li><a href="/browse?page=8">8</a></li>
                        <li><a href="/browse?page=9">9</a></li>
                        <li><a href="/browse?page=10">10</a></li>
                        <li><span>&hellip;</span></li>
                        <li><a href="/browse?page=144">144</a></li>
                        <li><a href="/browse?page=2" rel="next">&raquo;</a></li>
                    </ul>
                </div>
            </main>
        </div>
    </div>

@endsection
