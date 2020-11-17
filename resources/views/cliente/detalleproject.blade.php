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
                                <a href="#"><i class="fa fa-google-plus"></i></a>
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
                                <img class="logo" src="{{ asset('cliente/images-architect/logo.png')}}" alt="">
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

								<li><a href="project-contained-3-cols.html">Proyectos</a></li>

								<li><a href="contact-map-api.html">Contacto</a></li>

								<li><a href="blog-left-sidebar-light.html">Blog</a></li>

								<li><a href="08_project-details.html">Detalle de Proyecto</a></li>
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
            <section id="section-welcome" class="full-height text-light" data-bgimage="url({{ asset('cliente/images-architect/bg/1.jpg')}})">

                <div class="center-y">
                    <div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<div class="spacer-double"></div>
								<h2 class="style-3">Modern Building</h2>
								<div class="spacer-double"></div>
							</div>
						</div>
					</div>
                </div>


            </section>
            <!-- section close -->

            <section id="section-gallery-carousel" aria-label="section" class="no-top no-bottom text-light bg-color">
				<div class="container-fluid">
					<div class="row align-items-center no-gutters">
						<div class="col-md-3 text-center">
							<div class="spacer-single"></div>
							<h3 class="no-bottom">Project Gallery</h3>
							<div class="spacer-single"></div>
						</div>

						<div class="col-md-9">
							<div class="owl-custom-nav">
								<a class="btn-next"></a>
								<a class="btn-prev"></a>
							</div>

							<div id="gallery-carousel-3" class="owl-carousel owl-theme owl-slide">

							<!-- gallery item -->
							<div class="item s2">
								<div class="picframe">
									<a class="image-popup-no-margins" href="{{ asset('cliente/images-architect/portfolio/1.jpg')}}">
										<span class="overlay-v">
											<span class="pf_text">
												<span class="project-name"><i class="icon_plus_alt2"></i></span>
											</span>
										</span>
										<img src="{{ asset('cliente/images-architect/portfolio/1.jpg')}}" alt="" />
									</a>
								</div>
							</div>
							<!-- close gallery item -->

							<!-- gallery item -->
							<div class="item s2">
								<div class="picframe">
									<a class="image-popup-no-margins" href="{{ asset('cliente/images-architect/portfolio/2.jpg')}}">
										<span class="overlay-v">
											<span class="pf_text">
												<span class="project-name"><i class="icon_plus_alt2"></i></span>
											</span>
										</span>
										<img src="{{ asset('cliente/images-architect/portfolio/2.jpg')}}" alt="" />
									</a>
								</div>
							</div>
							<!-- close gallery item -->

							<!-- gallery item -->
							<div class="item s2">
								<div class="picframe">
									<a class="image-popup-no-margins" href="{{ asset('cliente/images-architect/portfolio/3.jpg')}}">
										<span class="overlay-v">
											<span class="pf_text">
												<span class="project-name"><i class="icon_plus_alt2"></i></span>
											</span>
										</span>
										<img src="{{ asset('cliente/images-architect/portfolio/3.jpg')}}" alt="" />
									</a>
								</div>
							</div>
							<!-- close gallery item -->

							<!-- gallery item -->
							<div class="item s2">
								<div class="picframe">
									<a class="image-popup-no-margins" href="{{ asset('cliente/images-architect/portfolio/4.jpg')}}">
										<span class="overlay-v">
											<span class="pf_text">
												<span class="project-name"><i class="icon_plus_alt2"></i></span>
											</span>
										</span>
										<img src="{{ asset('cliente/images-architect/portfolio/4.jpg')}}" alt="" />
									</a>
								</div>
							</div>
							<!-- close gallery item -->

							<!-- gallery item -->
							<div class="item s2">
								<div class="picframe">
									<a class="image-popup-no-margins" href="{{ asset('cliente/images-architect/portfolio/5.jpg')}}">
										<span class="overlay-v">
											<span class="pf_text">
												<span class="project-name"><i class="icon_plus_alt2"></i></span>
											</span>
										</span>
										<img src="{{ asset('cliente/images-architect/portfolio/5.jpg')}}" alt="" />
									</a>
								</div>
							</div>
							<!-- close gallery item -->

							<!-- gallery item -->
							<div class="item s2">
								<div class="picframe">
									<a class="image-popup-no-margins" href="{{ asset('cliente/images-architect/portfolio/6.jpg')}}">
										<span class="overlay-v">
											<span class="pf_text">
												<span class="project-name"><i class="icon_plus_alt2"></i></span>
											</span>
										</span>
										<img src="{{ asset('cliente/images-architect/portfolio/6.jpg')}}" alt="" />
									</a>
								</div>
							</div>
							<!-- close gallery item -->
						</div>
					</div>
				</div>
			</div>
			</section>

			<section>
				<div class="container">
					<div class="row">

						

						<div class="col-md-8 wow fadeInRight" data-wow-delay=".4s">
							<h3>Project Brief</h3>
							<p>
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
							</p>
							<div class="spacer10"></div>
							<h3>Our Solution</h3>
							<p>
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
							</p>
						</div>

						<div class="col-md-4 wow fadeInRight" data-wow-delay=".6s">
								<div class="project-details text-light" data-bgcolor="#18191B">

									<h3>Project Details</h3>

									<div class="info-text">
										<span class="title">Date</span>
										<span class="val">March 2019</span>
									</div>

									<div class="info-text">
										<span class="title">Timeline</span>
										<span class="val">2 years</span>
									</div>

									<div class="info-text">
										<span class="title">Client</span>
										<span class="val">Four Seasons</span>
									</div>

									<div class="info-text">
										<span class="title">Category</span>
										<span class="val">News Construction</span>
									</div>

									<div class="info-text">
										<a href="#" class="btn-custom btn-fullwidth text-light text-center">Project URL</a>
									</div>
							</div>
						</div>
					</div>
				</div>
			</section>




            <!-- footer begin -->
			<footer class="style-2 light">
				<div class="container">
					<div class="row align-items-middle">
						<div class="col-md-3">
							<img src="{{ asset('cliente/images/logo-dark.png')}}" class="logo-small" alt=""><br>
						</div>

						<div class="col-md-6">
							&copy; Copyright 2020 - Sofía Coná 2020 – Desarrollado por  <span class="id-color">Búho
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
