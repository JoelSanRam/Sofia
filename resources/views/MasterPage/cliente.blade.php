<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sofía Coná</title>
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
    {{-- <link rel="stylesheet" href="{{ asset('cliente/demo/demo.css')}}" type="text/css"> --}}

    <!-- custom background -->
    <link rel="stylesheet" href="{{ asset('cliente/css/bg.css')}}" type="text/css">

    <!-- color scheme -->
	<link rel="stylesheet" href="{{ asset('cliente/css/colors/yellow.css')}}" type="text/css" id="colors">
    <link rel="stylesheet" href="{{ asset('cliente/css/color.css')}}" type="text/css">

    <!-- load fonts -->
    <link rel="stylesheet" href="{{ asset('cliente/fonts/font-awesome/css/font-awesome.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/fonts/elegant_font/HTML_CSS/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cliente/fonts/et-line-font/style.css')}}" type="text/css">


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
        <header id="header"  class="header-light scroll-light autoshow ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="{{ route('home') }}">
                                <img id="imgLogo" class="logo logofinal logofinal1" src="{{ asset('cliente/images/Recurso 1.svg')}}" alt="">
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

                                    <li><a href="{{ route('blog') }}">Tinta Mostaza</a></li>

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
        @yield('cliente')
       <!-- content close-->

        <!-- footer begin -->
        <footer class="style-2 light footerespacio">
            <div class="container">
                <div class="row align-items-middle">
                    <div class="col-md-3">
                        <img src="{{ asset('cliente/images/Recurso 1.svg')}}" class="logo-small logofinal" alt=""><br>
                    </div>

                    <div class="col-md-6 footerespacio">
                        &copy; Sofía Coná 2020 – Desarrollado por  <a class="id-color espanconsalto" href="https://www.buho-solutions.com/">Búho
                            Solutions</a>
                    </div>

                    <div class="col-md-3 text-right">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/SOF%C3%8DA-CON%C3%81-609377649742470/"><i class="fa fa-facebook fa-lg"></i></a>
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
   {{--  <script src="{{ asset('cliente/revolution/js/extensions/revolution.extension.video.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('cliente/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script> --}}
   {{--  <script src="{{ asset('cliente/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('cliente/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('cliente/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('cliente/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('cliente/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script> --}}
   {{--  <script src="{{ asset('cliente/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script> --}}
   
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

{{-- <script>
        $(document).ready(function(){
            var $cabecera = $('#header');
            var $logo = $('#logo');
            var $previousScroll = 0;
            var logo2 = "{{ asset('cliente/images/Recurso 1.svg')}}";
            var logo1 = document.getElementById(imgLogo).src;

            $(window).scroll(function(event){
            var scroll = $(this).scrollTop();
            if (scroll > previousScroll && scroll > 200){
                document.getElementById('imgLogo').src = logo2;
            } else {
                document.getElementById('imgLogo').src = logo1; 
            }
            previousScroll = scroll;    });
        
        });
  </script> --}}

</body>
</html>
