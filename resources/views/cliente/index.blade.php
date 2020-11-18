@extends('MasterPage.cliente')
@section('cliente')
<div id="content" class="no-bottom no-top">

    <!-- section begin -->
    <section id="section-welcome" data-bgimage="url({{ asset('cliente/images/background/bg-35.jpg')}}">

        <div class="center-y">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="spacer-double"></div>
                        <h2 class="style-3">Arts <strong class="id-color">&amp;</strong> Home</h2>
                        <p class="lead">We are team based on Los Angeles. Our expertise on Interior Design. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                        <div class="spacer-single"></div>
                        <a href="contact.html" class="btn-line black btn-big scroll-to">Hire Us Now</a>
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
                    <img src="{{ asset('cliente/images/misc/pic_13.jpg')}}" alt="" class="img-responsive wow fadeInUp" data-wow-duration="1.5s">
                </div>

                <div class="col-md-6 wow fadeInUp">
                    <h2>¿Quién soy yo?</h2>

                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>

                    <a href="contact.html" class="btn-custom">Read more</a>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <div class="titulo">
        <h2 class="style-6">Mis últimos <strong class="id-color"></strong> proyectos</h2>
    </div>
    <section class="no-top no-bottom">
        <div class="grid" data-col="4" data-gridspace="30" data-ratio="466/700">
            <div class="grid-sizer"></div>
            <div class="grid-item residential">
                <!-- gallery item -->
                <div class="item ">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="project-details-1.html">
                            <span class="overlay">
                                <span class="pf_title">
                                    <span class="project-name">Interior ecológico</span>
                                </span>
                            </span>
                        </a>
                        <img src="{{ asset('cliente/images/portfolio-multipurpose/pf%20(1).jpg')}}" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->
            </div>
            <div class="grid-item large-width hospitaly">
                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="project-details-2.html">
                            <span class="overlay">
                                <span class="pf_title">
                                    <span class="project-name">Suite elegante</span>
                                </span>
                            </span>
                        </a>

                        <img src="{{ asset('cliente/images/portfolio-multipurpose/pf%20(2).jpg')}}" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->
            </div>
            <div class="grid-item large-height hospitaly">
                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="project-details-3.html">
                            <span class="overlay">
                                <span class="pf_title">
                                    <span class="project-name">Departamento renovado</span>
                                </span>
                            </span>
                        </a>

                        <img src="{{ asset('cliente/images/portfolio-multipurpose/pf%20(3).jpg')}}" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->
            </div>
            <div class="grid-item residential">
                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="project-details-youtube.html">
                            <span class="overlay">
                                <span class="pf_title">
                                    <span class="project-name">Youtube Videos</span>
                                </span>
                            </span>
                        </a>
                        <img src="{{ asset('cliente/images/portfolio-multipurpose/pf%20(4).jpg')}}" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->
            </div>
            <div class="grid-item large-height office">
                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="project-details-vimeo.html">
                            <span class="overlay">
                                <span class="pf_title">
                                    <span class="project-name">Videocafetera</span>
                                </span>
                            </span>
                        </a>
                        <img src="{{ asset('cliente/images/portfolio-multipurpose/pf%20(5).jpg')}}" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->
            </div>
            <div class="grid-item commercial">
                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="project-details.html">
                            <span class="overlay">
                                <span class="pf_title">
                                    <span class="project-name">Restaurante en Mérida</span>
                                </span>
                            </span>
                        </a>
                        <img src="{{ asset('cliente/images/portfolio-multipurpose/pf%20(6).jpg')}}" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->
            </div>

            <div class="grid-item large-width office">
                <!-- gallery item -->
                <div class="item office">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="project-details.html">
                            <span class="overlay">
                                <span class="pf_title">
                                    <span class="project-name">Oficina en el espacio</span>
                                </span>
                            </span>
                        </a>

                        <img src="{{ asset('cliente/images/portfolio-multipurpose/pf%20(8).jpg')}}" alt="" />
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
                                    <span class="project-name">Casa de verano</span>
                                </span>
                            </span>
                        </a>

                        <img src="{{ asset('cliente/images/portfolio-multipurpose/pf%20(7).jpg')}}" alt="" />
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
                                <span>Proyectos realizados</span>
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
                    <h3 class="size-2">¡Pongamonos en contacto!</h3>
                </div>

                <div class="col-md-4 text-right">
                    <a href="contact.html" class="btn-line btn-big wow fadeInUp">Más información</a>
                </div>
            </div>
        </div>
    </section>
    <!-- logo carousel section close -->

    </div>
@endsection
