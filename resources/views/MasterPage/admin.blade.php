<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="advanced search custom, agency, agent, business, clean, corporate, directory, google maps, homes, listing, membership packages, property, real estate, real estate agent, realestate agency, realtor">
	<meta name="description" content="FindHouse - Real Estate HTML Template">
	<meta name="CreativeLayers" content="ATFN">
	<!-- css file -->
	<link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('admin/css/style.css')}}">
	<link rel="stylesheet" href="{{ asset('admin/css/dashbord_navitaion.css')}}">
	<!-- Responsive stylesheet -->
	<link rel="stylesheet" href="{{ asset('admin/css/responsive.css')}}">

	<!-- Login -->
	<link rel="stylesheet" href="{{ asset('admin/login.css')}}">

	<!-- Title -->
	<title>Sofía Coná | Dashboard</title>
	<!-- Favicon -->
	<link href="{{ asset('admin/logos/favicon.svg')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
	<link href="{{ asset('admin/logos/favicon.svg')}}" sizes="128x128" rel="shortcut icon" />

	<!-- DataTables JS -->
	<link rel="stylesheet" href="{{ asset('admin/DataTables/datatables.min.css')}}">

	<!-- CKEditor 4 -->
	<script type="text/javascript" src="{{ asset('admin/ckeditor/ckeditor.js')}}"></script>


</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>

	@auth
	<!-- Main Header Nav -->
	<header class="header-nav menu_style_home_one style2 menu-fixed main-menu">
		<div class="container-fluid p0">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
		            <li class="last">
		                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        	<span class="flaticon-logout"></span> Cerrar Sesion
                		</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
		            </li>		        
		        </ul>
		    </nav>
		</div>
	</header>

	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2 text-center">
		            <img class="nav_logo_img img-responsive-nav mt20" src="{{ asset('admin/logos/logo_amarillo_con_negro_05.svg')}}" alt="header-logo2.png">
				</div>
				<ul class="menu_bar_home2">
	                <li class="list-inline-item list_s"><a href="#"></a></li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li>
					<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    	<span class="flaticon-logout"></span> Cerrar Sesion
            		</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
				</li>
			</ul>
		</nav>
	</div>

	
    <div class="dashboard_sidebar_menu dn-992">
	    <ul class="sidebar-menu">
	   		<li class="header">
	   			<img src="{{ asset('admin/logos/logo_amarillo_con_blanco_04.svg')}}" alt="Sofia Cona">
	   		</li>
	   		<li class="title"><span>Menu</span></li>
	    	<li class="treeview"><a href="{{ route('dashboard') }}"><i class="flaticon-layers"></i><span>Inicio</span></a></li>
	   		<li class="title"><span>Secciones</span></li>
	      	<li class="treeview">
		        <a href="#"><i class="flaticon-layers"></i> <span>Mis Obras</span><i class="fa fa-angle-down pull-right"></i></a>
		        <ul class="treeview-menu">
		        	<li><a href="{{ route('obras') }}"><i class="fa fa-circle"></i>Listado de Obras</a></li>
		        	<li><a href="{{ route('obra-create-view') }}"><i class="fa fa-circle"></i>Nueva Obra</a></li>
		        </ul>
	      	</li>
	     	<li class="treeview">
		        <a href="#"><i class="flaticon-layers"></i><span>Mis Publicaciones</span><i class="fa fa-angle-down pull-right"></i></a>
		        <ul class="treeview-menu">
		        	<li><a href="{{ route('posts') }}"><i class="fa fa-circle"></i>Listado de Publicaciones</a></li>
		        	<li><a href="{{ route('post-create-view') }}"><i class="fa fa-circle"></i>Nueva Publicacion</a></li>
		        </ul>
	      	</li>
	   		<li class="title"><span>Cuenta</span></li>
		    <li>
		    	<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                	<span class="flaticon-logout"></span> Cerrar Sesion
        		</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
		    </li>
	    </ul>
    </div>
    @endauth


	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord bgc-f7 pb50">
		<div class="container-fluid ovh">
			<div class="row">
				<div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
				<div class="@auth col-lg-9 col-xl-10 maxw100flex-992 @endauth @guest col-lg-12 col-xl-12 maxw100flex-992 @endguest">
					<div class="row">
						@auth
						<div class="col-lg-12">
							<div class="dashboard_navigationbar dn db-992">
								<div class="dropdown">
									<button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i>Menu</button>
									<ul id="myDropdown" class="dropdown-content">
										<li><a href="{{ route('obras') }}"><span class="flaticon-layers">Mis Obras</span></a></li>
										<li><a href="{{ route('posts') }}"><span class="flaticon-layers">Mis Publicaciones</span></a></li>										</li>
											<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
	                                        	<span class="flaticon-logout"></span>Cerrar Sesion
	                                		</a>

			                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			                                    @csrf
			                                </form>
									</ul>
								</div>
							</div>
						</div>
						@endauth
						<div class="col-lg-12">
							<div id="contenido">
	                            @yield('admin')
	                        </div>
						</div>
					</div>
					<div class="row mt50">
						<div class="col-lg-12">
							<div class="copyright-widget text-center">
								<span style="font-size: 17px; text-align: center; display: block; color: #000;">&copy; Sofía Coná 2020 – Desarrollado por  <a style="color: #000;" href="https://www.buho-solutions.com/">Búho Solutions</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
	</div>

	<!-- Wrapper End -->
	<script type="text/javascript" src="{{ asset('admin/js/jquery-3.3.1.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/jquery-migrate-3.0.0.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/jquery.mmenu.all.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/ace-responsive-menu.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/bootstrap-select.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/snackbar.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/simplebar.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/parallax.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/scrollto.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/jquery-scrolltofixed-min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/jquery.counterup.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/wow.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/progressbar.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/slider.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/timepicker.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/wow.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/smartuploader.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/dashboard-script.js')}}"></script>
	<!-- Custom script for all pages -->
	<script type="text/javascript" src="{{ asset('admin/js/script.js')}}"></script>

	<!-- DataTables JS -->
	<script type="text/javascript" src="{{ asset('admin/js/script.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/DataTables/datatables.min.js')}}"></script>

	<script type="text/javascript">
		$(document).ready(function() {
		  	$('#dataTable').DataTable({
		    	"language": {
		      		"url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
		    	}
		  	});
		});
	</script>

</body>
</html>
