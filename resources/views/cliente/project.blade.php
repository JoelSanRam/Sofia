@extends('MasterPage.cliente')
@section('cliente')

<!-- subheader -->
<section id="subheader" data-speed="8" data-type="background">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="color: white">Obras</h1>
                <ul class="crumb">
                    <li><a href="{{ route('home') }}" style="color: white">Inicio</a></li>
                    <li class="sep">/</li>
                    <li style="color: white">Obras</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->

<!-- content begin -->
<div id="content">
    <div class="container">

        <div class="spacer-single"></div>

        <!-- portfolio filter begin -->

        <!-- portfolio filter close -->

        <div id="gallery" class="row gallery full-gallery de-gallery pf_4_cols wow fadeInUp" data-wow-delay=".3s">

            @foreach($items as $item)
                <div class="col-md-4 col-sm-6 col-xs-12 item mb30 residential">
                    <div class="picframe galeriatamanio">
                        <a class="" href="{{ route('detallesProject', $item->id) }}">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name">{{ $item->name }}</span>
                                </span>
                            </span>
                        </a>
                        <img src="{{ asset('obras/' . $item->cover_image) }}" alt="{{ $item->name }}" />
                    </div>
                </div>
            @endforeach

            <!-- gallery item -->
            {{--<div class="col-md-4 col-sm-6 col-xs-12 item mb30 hospitaly">
                <div class="picframe galeriatamanio">
                    <a class="simple-ajax-popup-align-top" href="project-details-2.html">
                        <span class="overlay">
                            <span class="pf_text">
                                <span class="project-name">Flores azules</span>
                            </span>
                        </span>
                    </a>

                    <img src="{{ asset('cliente/images-architect/floresazules.png')}}" alt="" />
                </div>
            </div>
            <!-- close gallery item -->

            <!-- gallery item -->
            <div class="col-md-4 col-sm-6 col-xs-12 item mb30 hospitaly">
                <div class="picframe galeriatamanio">
                    <a class="simple-ajax-popup-align-top" href="project-details-3.html">
                        <span class="overlay">
                            <span class="pf_text">
                                <span class="project-name">Flores negro</span>
                            </span>
                        </span>
                    </a>

                    <img src="{{ asset('cliente/images-architect/floresnegras_sfondo.png')}}" alt="" />
                </div>
            </div>
            <!-- close gallery item -->

            <!-- gallery item -->
            <div class="col-md-4 col-sm-6 col-xs-12 item mb30 residential">
                <div class="picframe galeriatamanio">
                    <a class="simple-ajax-popup-align-top" href="project-details-youtube.html">
                        <span class="overlay">
                            <span class="pf_text">
                                <span class="project-name">Lluvia de oro</span>
                            </span>
                        </span>
                    </a>
                    <img src="{{ asset('cliente/images-architect/lluviadeoro_sfondo.png')}}" alt="" />
                </div>
            </div>
            <!-- close gallery item -->

            <!-- gallery item -->
            <div class="col-md-4 col-sm-6 col-xs-12 item mb30 office">
                <div class="picframe galeriatamanio">
                    <a class="simple-ajax-popup-align-top" href="project-details-vimeo.html">
                        <span class="overlay">
                            <span class="pf_text">
                                <span class="project-name">No es un juego</span>
                            </span>
                        </span>
                    </a>
                    <img src="{{ asset('cliente/images-architect/noesunjuego.png')}}" alt="" />
                </div>
            </div>
            <!-- close gallery item -->

            <!-- gallery item -->
            <div class="col-md-4 col-sm-6 col-xs-12 item mb30 commercial">
                <div class="picframe galeriatamanio">
                    <a class="simple-ajax-popup-align-top" href="project-details.html">
                        <span class="overlay">
                            <span class="pf_text">
                                <span class="project-name">Plantas</span>
                            </span>
                        </span>
                    </a>
                    <img src="{{ asset('cliente/images-architect/cajaplanta_sfondo.png')}}" alt="" />
                </div>
            </div>
            <!-- close gallery item -->

            <!-- gallery item -->
            <div class="col-md-4 col-sm-6 col-xs-12 item mb30 residential">
                <div class="picframe galeriatamanio">
                    <a class="simple-ajax-popup-align-top" href="project-details.html">
                        <span class="overlay">
                            <span class="pf_text">
                                <span class="project-name">Saudade</span>
                            </span>
                        </span>
                    </a>

                    <img src="{{ asset('cliente/images-architect/saudade_sfondo.png')}}" alt="" />
                </div>
            </div>
            <!-- close gallery item -->

            <!-- gallery item -->
            <div class="col-md-4 col-sm-6 col-xs-12 item mb30 office">
                <div class="picframe galeriatamanio">
                    <a class="simple-ajax-popup-align-top" href="project-details.html">
                        <span class="overlay">
                            <span class="pf_text">
                                <span class="project-name">Office On Space</span>
                            </span>
                        </span>
                    </a>

                    <img src="{{ asset('cliente/images-architect/flamencas_detalle.png')}}" alt="" />
                </div>
            </div>
            <!-- close gallery item -->

            <!-- gallery item -->
            <div class="col-md-4 col-sm-6 col-xs-12 item mb30 office">
                <div class="picframe galeriatamanio">
                    <a class="simple-ajax-popup-align-top" href="project-details-youtube.html">
                        <span class="overlay">
                            <span class="pf_text">
                                <span class="project-name">Luxury Living Room</span>
                            </span>
                        </span>
                    </a>

                    <img src="{{ asset('cliente/images-architect/flamencas_detalle.png')}}" alt="" />
                </div>
            </div>
            <!-- close gallery item -->

            <!-- gallery item -->
            <div class="col-md-4 col-sm-6 col-xs-12 item mb30 residential">
                <div class="picframe galeriatamanio">
                    <a class="simple-ajax-popup-align-top" href="project-details-vimeo.html">
                        <span class="overlay">
                            <span class="pf_text">
                                <span class="project-name">Cozy Bedroom</span>
                            </span>
                        </span>
                    </a>

                    <img src="{{ asset('cliente/images-architect/flamencas_detalle.png')}}" alt="" />
                </div>
            </div>
            <!-- close gallery item -->

            <!-- gallery item -->
            <div class="col-md-4 col-sm-6 col-xs-12 item mb30 hospitaly">
                <div class="picframe galeriatamanio">
                    <a class="simple-ajax-popup-align-top" href="project-details.html">
                        <span class="overlay">
                            <span class="pf_text">
                                <span class="project-name">Classic Furnishing</span>
                            </span>
                        </span>
                    </a>

                    <img src="{{ asset('cliente/images-architect/flamencas_detalle.png')}}" alt="" />
                </div>
            </div>
            <!-- close gallery item -->

            <!-- gallery item -->
            <div class="col-md-4 col-sm-6 col-xs-12 item mb30 commercial">
                <div class="picframe galeriatamanio">
                    <a class="simple-ajax-popup-align-top" href="project-details-youtube.html">
                        <span class="overlay">
                            <span class="pf_text">
                                <span class="project-name">Restaurant In Cannes</span>
                            </span>
                        </span>
                    </a>

                    <img src="{{ asset('cliente/images-architect/flamencas_detalle.png')}}" alt="" />
                </div>
            </div>--}}
            <!-- close gallery item -->

        </div>
    </div>
</div>

@endsection
