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
	<!-- Title -->
	<title>FindHouse - Real Estate HTML Template</title>
	<!-- Favicon -->
	<link href="{{ asset('admin/images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
	<link href="{{ asset('admin/images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" />

	<!-- DataTables JS -->
	<link rel="stylesheet" href="{{ asset('admin/DataTables/datatables.min.css')}}">

</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>

	<!-- Main Header Nav -->
	<header class="header-nav menu_style_home_one style2 menu-fixed main-menu">
		<div class="container-fluid p0">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid" src="{{ asset('admin/images/header-logo.png')}}" alt="header-logo.png">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="#" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid" src="{{ asset('admin/images/header-logo2.png')}}" alt="header-logo.png">
		            <img class="logo2 img-fluid" src="{{ asset('admin/images/header-logo2.png')}}" alt="header-logo2.png">
		            <span>FindHouse</span>
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
		        <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
		            <li class="last">
		                <a href="page-contact.html"><span class="title">Contact</span></a>
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
		            <img class="nav_logo_img img-fluid mt20" src="{{ asset('admin/images/header-logo2.png')}}" alt="header-logo2.png">
		            <span class="mt20">FindHouse</span>
				</div>
				<ul class="menu_bar_home2">
	                <li class="list-inline-item list_s"><a href="page-register.html"><span class="flaticon-user"></span></a></li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li><a href="page-contact.html">Contact</a></li>
				<li><a href="page-login.html"><span class="flaticon-user"></span> Login</a></li>
				<li><a href="page-register.html"><span class="flaticon-edit"></span> Register</a></li>
				<li class="cl_btn"><a class="btn btn-block btn-lg btn-thm circle" href="#"><span class="flaticon-plus"></span> Create Listing</a></li>
			</ul>
		</nav>
	</div>

    <div class="dashboard_sidebar_menu dn-992">
	    <ul class="sidebar-menu">
	   		<li class="header"><img src="{{ asset('admin/images/header-logo2.png')}}" alt="header-logo2.png">FindHouse</li>
	   		<li class="title"><span>Main</span></li>
	    	<li class="treeview"><a href="page-dashboard.html"><i class="flaticon-layers"></i><span> Dashboard</span></a></li>
	      	<li class="treeview"><a href="page-message.html"><i class="flaticon-envelope"></i><span> Message</span></a></li>
	   		<li class="title"><span>Manage Listings</span></li>
	      	<li class="treeview">
		        <a href="page-my-properties.html"><i class="flaticon-home"></i> <span>My Properties</span><i class="fa fa-angle-down pull-right"></i></a>
		        <ul class="treeview-menu">
		        	<li><a href="#"><i class="fa fa-circle"></i> General Elements</a></li>
		        	<li><a href="#"><i class="fa fa-circle"></i> Advanced Elements</a></li>
		        	<li><a href="#"><i class="fa fa-circle"></i> Editors</a></li>
		        </ul>
	      	</li>
	      	<li><a href="page-my-favorites.html"><i class="flaticon-heart"></i> <span> My Favorites</span></a></li>
	      	<li><a href="page-my-savesearch.html"><i class="flaticon-magnifying-glass"></i> <span>Saved Search</span></a></li>
	     	<li class="treeview">
		        <a href="page-my-review.html"><i class="flaticon-chat"></i><span> Reviews</span><i class="fa fa-angle-down pull-right"></i></a>
		        <ul class="treeview-menu">
		        	<li><a href="#"><i class="fa fa-circle"></i> My Reviews</a></li>
		        	<li><a href="#"><i class="fa fa-circle"></i> Visitor Reviews</a></li>
		        </ul>
	      	</li>
	   		<li class="title"><span>Manage Account</span></li>
		    <li><a href="page-my-packages.html"><i class="flaticon-box"></i> <span>My Package</span></a></li>
		    <li><a href="page-my-profile.html"><i class="flaticon-user"></i> <span>My Profile</span></a></li>
		    <li><a href="page-login.html"><i class="flaticon-logout"></i> <span>Logout</span></a></li>
	    </ul>
    </div>

	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord bgc-f7 pb50">
		<div class="container-fluid ovh">
			<div class="row">
				<div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
				<div class="col-lg-9 col-xl-10 maxw100flex-992">
					<div class="row">
						<div class="col-lg-12">
							<div class="dashboard_navigationbar dn db-992">
								<div class="dropdown">
									<button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
									<ul id="myDropdown" class="dropdown-content">
										<li><a href="page-dashboard.html"><span class="flaticon-layers"></span> Dashboard</a></li>
										<li><a href="page-message.html"><span class="flaticon-envelope"></span> Message</a></li>
										<li><a href="page-my-properties.html"><span class="flaticon-home"></span> My Properties</a></li>
										<li><a href="page-my-favorites.html"><span class="flaticon-heart"></span> My Favorites</a></li>
										<li><a href="page-my-savesearch.html"><span class="flaticon-magnifying-glass"></span> Saved Search</a></li>
										<li><a href="page-my-review.html"><span class="flaticon-chat"></span> My Reviews</a></li>
										<li><a href="page-my-packages.html"><span class="flaticon-box"></span> My Package</a></li>
										<li><a href="page-my-profile.html"><span class="flaticon-user"></span> My Profile</a></li>
										<li class="active"><a href="page-add-new-property.html"><span class="flaticon-filter-results-button"></span> Add New Listing</a></li>
										<li><a href="page-login.html"><span class="flaticon-logout"></span> Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div id="contenido">
	                            @yield('admin')
	                        </div>
						</div>
					</div>
					<div class="row mt50">
						<div class="col-lg-12">
							<div class="copyright-widget text-center">
								<p>© 2020 Find House. Made with love.</p>
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
