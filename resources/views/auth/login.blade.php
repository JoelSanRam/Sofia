
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

	<!-- Favicon -->
	<link href="{{ asset('admin/logos/favicon.svg')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset('admin/logos/favicon.svg')}}" sizes="128x128" rel="shortcut icon" />

    <title>Sofía Coná | Dashboard</title>
    <style>
        body {
            background: linear-gradient(132deg, #f44336, #E91E63, #9C27B0, #673AB7, #3F51B5, #2196F3,#03A9F4, #00BCD4, #009688, #4CAF50, #FFC107, #FF9800, #f44336, #E91E63, #9C27B0, #673AB7, #3F51B5, #2196F3,#03A9F4, #00BCD4, #009688, #4CAF50, #FFC107, #FF9800);
            background-size: 400% 400%;
            animation: BackgroundGradient 30s ease infinite;
        }

        @keyframes BackgroundGradient {
            0% {background-position: 0% 50%;}
            50% {background-position: 100% 50%;}
            100% {background-position: 0% 50%;}
        }
        .baslik
        {
            color: #fff;
            text-align: center;
            font-family: 'Fira Sans', sans-serif;
        }
        .arkalogin
        {
            width: 320px;
            text-align: center;
            background: #fff;
            height: 350px;
            padding: 10px;
            margin: 50px auto;
            border-radius: 1rem;
        }
        .loginbaslik
        {
            color: #888888;
            text-align: center;
            font-size: 19px;
            margin-top: 15px;
        }
        .giris
        {
            width: 100%;
            height: 40px;
            margin-top: 10px;
            border: none;
            background: #E5E5E5;
            outline: none;
            padding: 0 10px;
            margin-bottom: 10px;
            border-radius: 10rem;
        }
        .butonlogin
        {
            width: 100%;
            margin-top: 10px;
            height: 40px;
            font-weight: bold;
            background: #2196F3;
            border: none;
            color: #fff;
            border-radius: 10rem;
            transition: all 250ms;
        }
        .butonlogin:hover
        {
            background: #1E88E5;
        }
        body
        {
            margin: 0;
        }
    </style>
</head>

<section style="height: 100vh;">
    <div style="background-image: url(images/arka.jpg); background-attachment: fixed; background-size: cover; width: 100%; height: 100vh; position: relative;"  >
        <div class="baslik">


        </div>
    <section>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="arkalogin">

                <img class="nav_logo_img img-fluid mt20" width="230" height="230" src="{{ asset('admin/logos/logo_amarillo_con_negro_05.svg')}}" alt="header-logo2.png">
                <div class="loginbaslik">Panel de administrador</div>

                <hr style="border: 1px solid #ccc;">

                <input class="giris" type="text" name="email" placeholder="Correo Electronico">

                <input class="giris" type="password" name="password" placeholder="•••••">

                <a href="#" target="blank"><input class="butonlogin" type="submit" value="Ingresar"></a>
            </div>

        </form>
    </section><br>

    <span style="font-size: 17px; text-align: center; display: block; color: #fff;">&copy; Sofía Coná 2020 – Desarrollado por  <a style="color: #000;" href="https://www.buho-solutions.com/">Búho Solutions</a></span>
    </div>
</section>

