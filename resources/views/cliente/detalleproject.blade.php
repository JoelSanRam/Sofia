<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sofía Coná | Detalle de obra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sofía Coná">
    <meta name="keywords" content="architecture,building,business,bootstrap,creative,exterior design,furniture design,gallery,garden design,house,interior design,landscape design,multipurpose,onepage,portfolio,studio">
    <meta name="author" content="">

    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('cliente/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/css/jpreloader.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/css/animate.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/css/plugin.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/css/owl.theme.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/css/owl.transitions.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/css/magnific-popup.cs')}}s" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/css/style.css')}}" type="text/css">
	<link rel="stylesheet" href="{{ asset('cliente/css/twentytwenty.css')}}" type="text/css">

    <!-- custom background -->
    <link rel="stylesheet" href="{{ asset('cliente/css/bg.css')}}" type="text/css">

    <!-- color scheme -->
	<link rel="stylesheet" href="{{ asset('cliente/css/colors/blue-3.css')}}" type="text/css" id="colors">
    <link rel="stylesheet" href="{{ asset('cliente/css/color.css')}}" type="text/css">

    <!-- load fonts -->
    <link rel="stylesheet" href="{{ asset('cliente/fonts/font-awesome/css/font-awesome.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/fonts/elegant_font/HTML_CSS/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/fonts/et-line-font/style.cs')}}s" type="text/css">

    <!-- RS5.0 Stylesheet -->
    <link rel="stylesheet" href="{{ asset('cliente/revolution/css/settings.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/revolution/css/layers.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/revolution/css/navigation.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/css/rev-settings.css')}}" type="text/css">

	<!-- custom font -->
    <link rel="stylesheet" href="{{ asset('cliente/css/font-style-2.css')}}" type="text/css">

    	<!-- Favicon -->
	<link href="{{ asset('admin/logos/favicon.svg')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
	<link href="{{ asset('admin/logos/favicon.svg')}}" sizes="128x128" rel="shortcut icon" />
</head>

<body id="homepage" class="de_light">

    <div id="wrapper">

        <!-- header begin -->
        <header class="header-light scroll-light autoshow">
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="column">Working Hours Monday - Friday <span class="id-color"><strong>08:00-16:00</strong></span></div>
                            <div class="column">Toll Free <span class="id-color"><strong>1800.899.900</strong></span></div>
                            <!-- social icons -->
                            <div class="column social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                            <!-- social icons close -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="{{ route('home') }}">
                                <img class="logo logofinal logofinal1" src="{{ asset('cliente/images/Recurso 1.svg')}}" alt="">
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->
							<nav>
								<ul id="mainmenu">
									<li><a href="{{ route('home') }}">Inicio<span></span></a></li>

                                    <li><a href="{{ route('proyectos') }}">Obras</a></li>

                                    <li><a href="{{ route('blog') }}">Tinta mostaza</a></li>

                                    <li><a href="{{ route('contacto') }}">Contacto</a></li>
								</ul>
							</nav>

							<!-- mainmenu close -->

                    </div>

                </div>
            </div>
        </header>
        <!-- header close -->


        <!-- content begin -->
        <div id="content" class="no-bottom no-top">

            <!-- section begin -->
            <section id="section-welcome" class="full-height text-light" data-bgimage="url({{ asset('obras/' . $item->cover_image) }})">

                <div class="center-y">
                    <div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<div class="spacer-double"></div>

								<div class="spacer-double"></div>
							</div>
						</div>
					</div>
                </div>


            </section>
            <!-- section close -->

            <section id="section-gallery-carousel" aria-label="section" class="no-top no-bottom text-light bg-color galeriatamanio">
				<div class="container-fluid">
					<div class="row align-items-center no-gutters">
						<div class="col-md-3 text-center">
							<div class="spacer-single"></div>
							<h3 class="no-bottom">Galería</h3>
							<div class="spacer-single"></div>
						</div>

						<div class="col-md-9">
							<div class="owl-custom-nav">
								<a class="btn-next"></a>
								<a class="btn-prev"></a>
							</div>

							<div id="gallery-carousel-3" class="zoom-gallery owl-carousel owl-theme owl-slide">

    							@foreach($images as $image)
        							<div class="item s2 galeriatamanio">
        								<div class="picframe galeriatamanio">
        									<a href="{{ asset('obras/' . $image->filename) }}" >
        										<span class="overlay-v">
        											<span class="pf_text">

        											</span>
        										</span>
        										<img src="{{ asset('obras/' . $image->filename) }}" />
        									</a>
        								</div>
        							</div>
    							@endforeach

						</div>
					</div>
				</div>
			</div>
			</section>

			<section>
				<div class="container">
                    <h2 class="style-3 titulopequenioobra">{{ $item->name }}</h2>
					<div class="row">

                        <div class="col-md-4 wow fadeInRight" data-wow-delay=".6s">
                            <div class="project-details text-light padingdetalleobra" data-bgcolor="#18191B">

                                <h3 class="detallemovil">Detalles de la obra</h3>

                                <div class="row rowdetallemovil">
                                    <div class="col-sm-5">
                                        <div class="info-text">
                                            <span class="title">Fecha</span>
                                            <span class="val">{{ $item->publish_date }}</span>
                                        </div>

                                        <div class="info-text">
                                            <span class="title">Medidas</span>
                                            <span class="val">{{ $item->dimension }}</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 acomodotexto">
                                        <div class="info-text">
                                            <span class="title">Técnica</span>
                                            <span class="val">{{ $item->technique }}</span>
                                        </div>

                                        <div class="info-text">
                                            <span class="title">Status</span>
                                            <span class="val">{{ $item->status }}</span>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="info-text">
                                    {{-- <a href="#" class="btn-custom btn-fullwidth text-light text-center"><b>Compartir</b></a> --}}
                                    <div class="col-md-12  iconoespacio">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="compartir compartirobra">Compartir obra</label>
                                                <div class="a2a_kit a2a_kit_size_16 a2a_default_style iconoespacioobra" data-a2a-icon-color="#FAB702">

                                                    <a class="a2a_button_facebook "></a>
                                                    <a class="a2a_button_twitter "></a>
                                                    <a class="a2a_button_whatsapp "></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

						<div class="col-md-8 wow fadeInRight" data-wow-delay=".4s">
							<h3>Descripción del proyecto</h3>
							<p>
								{{ $item->description }}
							</p>
							<div class="spacer10"></div>

						</div>


					</div>
				</div>
			</section>


            <!-- footer begin -->
			<footer class="style-2 light">
                <div class="container">
                    <div class="row align-items-middle">
                        <div class="col-md-3">
                            <img src="{{ asset('cliente/images/Recurso 1.svg')}}" class="logo-small logofinal logofinal2" alt=""><br>
                        </div>

                        <div class="col-md-6 footerespacio">
                            &copy; Sofía Coná 2020 – Desarrollado por  <a class="id-color" href="https://www.buho-solutions.com/">Búho
                                Solutions</a>
                        </div>

                        <div class="col-md-3 text-right">
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="https://wa.link/7t3opn"><i class="fa fa-whatsapp fa-lg"></i></a>
                                <a href="https://www.instagram.com/sofiacona_/"><i class="fa fa-instagram fa-lg"></i></a>
                                <a href="{{ route('dashboard') }}"><i class="fa fa-user fa-lg"></i></a>

                            </div>
                        </div>
                    </div>
                </div>


                <a href="#" id="back-to-top"></a>
            </footer>
        <!-- footer close -->
        </div>
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script async src="https://static.addtoany.com/menu/page.js"></script>

    <script src="{{ asset('cliente/js/jquery.min.js')}}"></script>
    <script src="{{ asset('cliente/js/jpreLoader.js')}}"></script>
    <script src="{{ asset('cliente/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('cliente/js/jquery.isotope.min.js')}}"></script>
    <script src="{{ asset('cliente/js/easing.js')}}"></script>
    <script src="{{ asset('cliente/js/jquery.flexslider-min.js')}}"></script>
    <script src="{{ asset('cliente/js/jquery.scrollto.js')}}"></script>
    <script src="{{ asset('cliente/js/owl.carousel.js')}}"></script>
    <script src="{{ asset('cliente/js/jquery.countTo.js')}}"></script>
    <script src="{{ asset('cliente/js/classie.js')}}"></script>
    <script src="{{ asset('cliente/js/video.resize.js')}}"></script>
    <script src="{{ asset('cliente/js/validation.js')}}"></script>
    <script src="{{ asset('cliente/js/wow.min.js')}}"></script>
    <script src="{{ asset('cliente/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('cliente/js/jquery.stellar.min.js')}}"></script>
	<script src="{{ asset('cliente/js/enquire.min.js')}}"></script>
    <script src="{{ asset('cliente/js/designesia.js')}}"></script>
    <script src="{{ asset('cliente/js/jquery.event.move.js')}}"></script>
    <script src="{{ asset('cliente/js/jquery.twentytwenty.js')}}"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="{{ asset('cliente/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('cliente/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- RS5.0 Extensions Files -->
    <script src="{{ asset('cliente/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="{{ asset('cliente/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{ asset('cliente/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{ asset('cliente/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{ asset('cliente/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{ asset('cliente/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{ asset('cliente/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{ asset('cliente/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>

    <script>
        jQuery(document).ready(function() {
            // revolution slider
            jQuery("#slider-revolution").revolution({
                sliderType: "standard",
                sliderLayout: "fullscreen",
                delay: 5000,
                navigation: {
                    arrows: {
                        enable: true
                    },
                    bullets: {
                        enable: false,
                        style: 'hermes'
                    },

                },
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                },
                responsiveLevels:[1920,1380,1240],
				gridwidth:[1360,1200,940],
                spinner: "off",
                gridheight: 700,
                disableProgressBar: "on"
            });
        });
    </script>

	<script>
    $(window).on("load", function(){
      $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.7});
      $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.3, orientation: 'vertical'});
    });
    </script>


</body>

</html>
