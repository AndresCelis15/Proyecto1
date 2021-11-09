@extends('layout.layout')

@section('content')

    <div class="Body">
        <div class="Container">
            <div class="BX Row BFluid Sp20">
                <aside class="Sidebar BFixed">
                    <a href="https://www.facebook.com/andres.celis.986" target="_blank" rel="nofollow"><img
                            src="{{ asset('images/facebookfl.png') }}" alt="Facebook AnimeFLV"></a>
                    <br /><br />
                    <div class="Wdgt Emision">
                        <input type="checkbox" hidden="hidden" id="WdgtLink-B">
                        <div class="Top fa-play"><strong>ANIMES EN EMISIÓN</strong> <label for="WdgtLink-B"
                                class="WdgtLink fa-chevron-down"></label></div>
                        <div class="Bod ScrlV Fl">
                            <ul class="ListSdbr">
                                <li><a href="/anime" class="fa-play-circle">One Piece <span
                                            class="Type tv">Anime</span></a></li>
                                <li><a href="/anime" class="fa-play-circle">Detective Conan <span
                                            class="Type tv">Anime</span></a></li>
                                <li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <main class="Main">

                    <div class="Title Page">
                        <h2>Últimos episodios</h2>
                        <div class="Order">
                            <a href="#" class="Active">HOY</a>
                        </div>
                    </div>
                    <ul class="ListEpisodios AX Rows A06 C04 D03">
                        <li>
                            <a href="/ver" class="fa-play">
                                <span class="Image"><img src="/uploads/animes/thumbs/3505.jpg"
                                        alt="Sonny Boy"></span>
                                <span class="Capi">Episodio 9</span>
                                <strong class="Title">Sonny Boy</strong>
                            </a>
                        </li>
                        <li>
                            <a href="/ver" class="fa-play">
                                <span class="Image"><img src="/uploads/animes/thumbs/3497.jpg"
                                        alt="Shiroi Suna no Aquatope"></span>
                                <span class="Capi">Episodio 10</span>
                                <strong class="Title">Shiroi Suna no Aquatope</strong>
                            </a>
                        </li>
                    </ul>
                    <div class="Title Page fa-star">
                        <h2>Últimos animes agregados</h2>
                        <div class="Order">
                            <a href="#" class="Active">HOY</a>
                        </div>
                    </div>

                    <ul class="ListAnimes AX Rows A06 C04 D03">
                        <li>
                            <article class="Anime alt B">
                                <a href="/anime">
                                    <div class="Image fa-play-circle-o">
                                        <figure><img src="/uploads/animes/covers/3509.jpg"
                                                alt="Evangelion 3.0+1.0 Thrice Upon a Time"></figure>
                                        <span class="Type movie">Película</span>
                                    </div>
                                    <h3 class="Title">Evangelion 3.0+1.0 Thrice Upon a Time</h3>
                                </a>

                                <div class="Description">
                                    <div class="Title"><strong>evangelion 3.0+1.0</strong></div>
                                    <p><span class="Type movie">Película</span> <span class="Vts fa-star">4.7</span>
                                    </p>
                                    <p>En el año 2015, el mundo está al borde de su destrucción. La última esperanza
                                        de la humanidad reside en las manos de NERV, una agencia especial bajo el
                                        mando de las Naciones Unidas, y sus Evangelions, unos robots gigantes
                                        capaces de derrotar a los Ángeles que anuncian la ruina de la Tierra. Gen...
                                    </p>
                                    <a class="Button Vrnmlk" href="/anime">VER
                                        ANIME</a>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="Anime alt B">
                                <a href="/anime">
                                    <span class="Estreno"><span>ESTRENO</span></span>
                                    <div class="Image fa-play-circle-o">
                                        <figure><img src="/uploads/animes/covers/3508.jpg" alt="Jahy-sama wa Kujikenai!">
                                        </figure>
                                        <span class="Type tv">Anime</span>
                                    </div>
                                    <h3 class="Title">Jahy-sama wa Kujikenai!</h3>
                                </a>
                                <div class="Description">
                                    <div class="Title"><strong>Jahy-sama wa Kujikenai!</strong></div>
                                    <p><span class="Type tv">Anime</span> <span class="Vts fa-star">4.4</span></p>
                                    <p>Una vez respetada como la segunda mayor autoridad del Reino de los Demonios,
                                        la ayudante del Rey Demonio, Jahy, gobernaba a sus súbditos con miedo. Pero
                                        cuando una chica mágica ataca y destruye una gema mística que contiene un
                                        poder masivo, el Reino de los Demonios es destruido.
                                        Aunque sobrevi...</p>
                                    <a class="Button Vrnmlk" href="/anime/jahysama-wa-kujikenai">VER ANIME</a>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="Anime alt B">
                                <a href="/anime">
                                    <span class="Estreno"><span>ESTRENO</span></span>
                                    <div class="Image fa-play-circle-o">
                                        <figure><img src="/uploads/animes/covers/3507.jpg"
                                                alt="Magia Record: Mahou Shoujo Madoka☆Magica Gaiden (TV) 2nd Season">
                                        </figure>
                                        <span class="Type tv">Anime</span>
                                    </div>
                                    <h3 class="Title">Magia Record: Mahou Shoujo Madoka☆Magica Gaiden (TV)
                                        2nd Season</h3>
                                </a>
                                <div class="Description">
                                    <div class="Title"><strong>Magia Record: Mahou Shoujo Madoka☆Magica
                                            Gaiden (TV) 2nd Season</strong></div>
                                    <p><span class="Type tv">Anime</span> <span class="Vts fa-star">4.3</span></p>
                                    <p>Segunda temporada de Magia Record: Mahou Shoujo Madoka☆Magica Gaiden (TV)</p>
                                    <a class="Button Vrnmlk"
                                        href="/anime">VER
                                        ANIME</a>
                                </div>
                            </article>
                        </li>

                    </ul>
                </main>

            </div>
        </div>
    </div>

@endsection
