<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Estudio Contable - Marcia Cussati & Asociados</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.ico">
</head><!--/head-->

<body>

<!--.preloader-->
<div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
<!--/.preloader-->

<header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(images/slider/1.jpg)">
                <div class="caption">
                    <h1 class="animated fadeInLeftBig">Estudio Contable <span>Marcia Cussatti </span> & Asociados</h1>
                    <p class="animated fadeInRightBig">Subtitulo</p>
                    <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">A sus servicios!</a>
                </div>
            </div>
            <div class="item" style="background-image: url(images/slider/2.png)">
                <div class="caption">
                    <h1 class="animated fadeInLeftBig">Titulo <span>2</span></h1>
                    <p class="animated fadeInRightBig">SubTitulo 2</p>
                    <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Servicios</a>
                </div>
            </div>
            <div class="item" style="background-image: url(images/slider/4.jpg)">
                <div class="caption">
                    <h1 class="animated fadeInLeftBig">Titulo <span>3</span></h1>
                    <p class="animated fadeInRightBig">Subtitulo 3</p>
                    <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Contacto</a>
                </div>
            </div>
        </div>
        <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
        <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

        <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h1><!--img class="img-responsive" src="images/logo.png" alt="logo"--></h1>
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="scroll active"><a href="#home">Inicio</a></li>
                    <li class="scroll"><a href="#services">Servicios</a></li>
                    <li class="scroll"><a href="#about-us">Quienes Somos</a></li>
                    <li class="scroll"><a href="#portfolio">Portfolio</a></li>
                    <li class="scroll"><a href="#team">Equipo</a></li>
                    <li class="scroll"><a href="#blog">Blog</a></li>
                    <li class="scroll"><a href="#contact">Contacto</a></li>
                </ul>
            </div>
        </div>
    </div><!--/#main-nav-->
</header><!--/#home-->



@include('front.servicios')

@include('front.aboutus')

@include('front.team')

@include('front.portfolio')

@include('front.features')

@include('front.websutiles')

@include('front.map')

<div id="map"></div>

@include('front.contacto')

@include('front.pie')


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/jquery.inview.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/mousescroll.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript" src="js/lightbox.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>
