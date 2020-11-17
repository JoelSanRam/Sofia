<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Archi - Creative Interior Design Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Archi is best selling interior design website template with responsive stunning design">
    <meta name="keywords" content="architecture,building,business,bootstrap,creative,exterior design,furniture design,gallery,garden design,house,interior design,landscape design,multipurpose,onepage,portfolio,studio">
    <meta name="author" content="">


    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->


    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('cliente/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/css/jpreloader.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/css/animate.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/css/plugin.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/css/owl.theme.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/css/owl.transitions.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/demo/demo.css')}}" type="text/css">

    <!-- custom background -->
    <link rel="stylesheet" href="{{ asset('cliente/css/bg.css')}}" type="text/css">

    <!-- color scheme -->
	<link rel="stylesheet" href="{{ asset('cliente/css/colors/yellow.css')}}" type="text/css" id="colors">
    <link rel="stylesheet" href="{{ asset('cliente/css/color.css')}}" type="text/css">

    <!-- load fonts -->
    <link rel="stylesheet" href="{{ asset('cliente/fonts/font-awesome/css/font-awesome.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/fonts/elegant_font/HTML_CSS/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/fonts/et-line-font/style.css')}}" type="text/css">

    <!-- revolution slider -->
    <link rel="stylesheet" href="{{ asset('cliente/rs-plugin/css/settings.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/css/rev-settings.css')}}" type="text/css">

    <!-- RS5.0 Stylesheet -->
    <link rel="stylesheet" href="{{ asset('cliente/revolution/css/settings.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/revolution/css/layers.cs')}}s" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/revolution/css/navigation.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/css/rev-settings.css')}}" type="text/css">

	<!-- custom font -->
	<link rel="stylesheet" href="{{ asset('cliente/css/font-style-2.css')}}" type="text/css">
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
                            <a href="index.html">
                                <img class="logo" src="{{ asset('cliente/images/logo-dark.png')}}" alt="">
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->
							<nav>
								<ul id="mainmenu">
									<li><a href="index-arts.html">Inicio<span></span></a></li>

									<li><a href="project-contained-3-cols.html">Obras</a></li>

                                    <li><a href="contact-map-api.html">Blog</a></li>

                                    <li><a href="blog-left-sidebar-light.html">Contacto</a></li>


								</ul>
							</nav>

							<!-- mainmenu close -->

                    </div>

                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- content begin -->
        @yield('cliente')
       <!-- content close-->

        <!-- footer begin -->
        <footer class="style-2 light">
            <div class="container">
                <div class="row align-items-middle">
                    <div class="col-md-4">
                        <img src="{{ asset('cliente/images/logo-dark.png')}}" class="logo-small" alt=""><br>
                    </div>

                    <div class="col-md-5">
                        &copy; Sofía Coná 2020 – Desarrollado por  <span class="id-color">Búho
                            Solutions</span>
                    </div>

                    <div class="col-md-3 text-right">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-whatsapp fa-lg"></i></a>
                            <a href="#"><i class="fa fa-instagram fa-lg"></i></a>

                        </div>
                    </div>
                </div>
            </div>


            <a href="#" id="back-to-top"></a>
        </footer>
        <!-- footer close -->
        </div>




    <!-- Javascript Files
    ================================================== -->
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

</body>
</html>
