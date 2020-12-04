@extends('MasterPage.cliente')
@section('cliente')
<div id="content" class="no-bottom no-top">

    <!-- section begin -->
    <section id="section-welcome" class="espacioindexarriba">

        <div class="center-y ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 indextexto">
                        <div class="spacer-double"></div>
                        <h2 class="style-3">Arte <strong class="id-color espanconsalto">&amp;</strong> Letras</h2>
                        <p class="lead indextexto">Es fascinante la exactitud de las palabras para abrazar perfectamente lo que sentimos. Pero luego lo que sentimos es tan grande o revuelto que las palabras no alcanzan. Y seguirá pasando que las palabras no alcancen. Ahí el pincel hace lo suyo. </p>
                        <div class="spacer-single"></div>
                        <a href="contact.html" class="btn-line black btn-big scroll-to">Más información</a>
                        <div class="spacer-double"></div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="section-no-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('cliente/images/misc/sofia.png')}}" alt="" class="img-responsive wow fadeInUp" data-wow-duration="1.5s">
                </div>

                <div class="col-md-6 wow fadeInUp indextexto">
                    <h2>¿Quién soy yo?</h2>

                    <p class="lead">Me gusta el amarillo, soy casi adicta al café y hay palabras que, bien acomodadas, me
                        hacen llorar. Disfruto las noches y más sin tienen estrellas o una luna bien grandota. De
                        chiquita mi abuela me regaló la luna, por eso creo que es mía, aunque sé que no. Nací en
                        un país lleno de creatividad y en una familia que me ayudó a desarrollar la mía. A veces
                        quiero controlarlo todo; tal vez por eso me gusta el mar, que no se deja. Tal vez también
                        por eso pinto, que ahí no controlo. Creo que todos tenemos mucho adentro y necesitamos
                        algo para no explotar. Lo mío es pintar, ¿y lo tuyo?</p>



                    <a href="contact.html" class="btn-custom">Leer más</a>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <div class="titulo">
        <h2 class="style-6 ultimasobrasindex">Mis últimos <strong class="id-color"></strong> proyectos</h2>
    </div>
    <section class="no-top no-bottom">
        <div class="grid" data-col="3" data-gridspace="10" data-ratio="466/700">
            <div class="grid-sizer"></div>
            <div class="grid-item residential">
                <!-- gallery item -->
                <div class="item ">
                    <div class="picframe">
                        <a class="" href="#">
                            <span class="overlay">
                                <span class="pf_title">
                                    <span class="project-name"></span>
                                </span>
                            </span>
                        </a>
                        <img src="{{ asset('cliente/images/portfolio-multipurpose/Recurso 6-20.jpg')}}" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->
            </div>
            <div class="grid-item large-width hospitaly">
                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="#">
                            <span class="overlay">
                                <span class="pf_title">
                                    <span class="project-name"></span>
                                </span>
                            </span>
                        </a>

                        <img src="{{ asset('cliente/images/portfolio-multipurpose/Recurso 7-20.jpg')}}" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->
            </div>
            <div class="grid-item large-height hospitaly">
                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="#">
                            <span class="overlay">
                                <span class="pf_title">
                                    <span class="project-name"></span>
                                </span>
                            </span>
                        </a>

                        <img src="{{ asset('cliente/images/portfolio-multipurpose/Recurso 1-20.jpg')}}" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->
            </div>
            <div class="grid-item residential">
                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="#">
                            <span class="overlay">
                                <span class="pf_title">
                                    <span class="project-name"></span>
                                </span>
                            </span>
                        </a>
                        <img src="{{ asset('cliente/images/portfolio-multipurpose/Recurso 3-20.jpg')}}" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->
            </div>
            <div class="grid-item large-height office">
                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="#">
                            <span class="overlay">
                                <span class="pf_title">
                                    <span class="project-name"></span>
                                </span>
                            </span>
                        </a>
                        <img src="{{ asset('cliente/images/portfolio-multipurpose/Recurso 2-20.jpg')}}" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->
            </div>
            <div class="grid-item commercial">
                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="#">
                            <span class="overlay">
                                <span class="pf_title">
                                    <span class="project-name"></span>
                                </span>
                            </span>
                        </a>
                        <img src="{{ asset('cliente/images/portfolio-multipurpose/Recurso 4-20.jpg')}}" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->
            </div>

            <div class="grid-item large-width office">
                <!-- gallery item -->
                <div class="item office">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="#">
                            <span class="overlay">
                                <span class="pf_title">
                                    <span class="project-name"></span>
                                </span>
                            </span>
                        </a>

                        <img src="{{ asset('cliente/images/portfolio-multipurpose/Recurso 8-20.jpg')}}" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->
            </div>

            <div class="grid-item residential">
                <!-- gallery item -->
                <div class="item residential">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top">
                            <span class="overlay">
                                <span class="pf_title">
                                    <span class="project-name"></span>
                                </span>
                            </span>
                        </a>

                        <img src="{{ asset('cliente/images/portfolio-multipurpose/Recurso 5-20.jpg')}}" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->
            </div>


        </div>
    </section>


    <!-- section begin -->
    <section id="section-fun-facts" class="mb30">
        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6">
                    <div class="spacer-single"></div>
                    <div class="row">

                        <div class="col-md-6 wow fadeIn" data-wow-delay="0">
                            <div class="de_count">
                                <h3 class="timer" data-to="2350" data-speed="2500">0</h3>
                                <span>Horas de trabajo</span>
                            </div>
                        </div>

                        <div class="col-md-6 wow fadeIn" data-wow-delay=".25s">
                            <div class="de_count">
                                <h3 class="timer" data-to="128" data-speed="2500">0</h3>
                                <span>Borradores escritos</span>
                            </div>
                        </div>

                        <div class="col-md-6 wow fadeIn" data-wow-delay=".5s">
                            <div class="de_count">
                                <h3 class="timer" data-to="750" data-speed="2500">0</h3>
                                <span>Tazas de Café</span>
                            </div>
                        </div>

                        <div class="col-md-6 wow fadeIn" data-wow-delay=".75s">
                            <div class="de_count">
                                <h3 class="timer" data-to="520" data-speed="2500">0</h3>
                                <span>Pinceles usados</span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <img src="{{ asset('cliente/images/misc/pic_14.jpg')}}" alt="" class="img-responsive wow fadeInUp" data-wow-duration="1.5s">
                </div>

            </div>

        </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="view-all-projects" class="call-to-action text-light padding40" data-speed="5" data-type="background" aria-label="cta" data-bgcolor="#3562a8">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h3 class="size-2 pongamonos">¡Pongámonos en contacto!</h3>
                </div>

                <div class="col-md-4 text-right">
                    <a href="{{ route('contacto') }}" class="btn-line btn-big wow fadeInUp">Más información</a>
                </div>
            </div>
        </div>
    </section>
    <!-- logo carousel section close -->

    </div>
@endsection
