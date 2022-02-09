
<?php
if(isset($_GET['etout'])){ 
   session_name('etudiant');
   session_start();
   session_destroy();
}

if(isset($_GET['dir'])){
   session_name('general');
   session_start();
   session_destroy();
}

if(isset($_GET['diretud'])){
   session_name('etudes');
   session_start();
   session_destroy();
}

if(isset($_GET['profout'])){
   session_name('professeur');
   session_start();
   session_destroy();
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- index-mp-layout208:42-->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="BTS CHICHAOUA " />
<meta name="keywords" content="bts, chichaoua, bts chichaoua, inscription , #" />
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />


<!-- Page Title -->
<title>BTS CHICHAOUA</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

</head>
<body class="">
<div id="wrapper" class="clearfix">
  
   <div id="preloader">
    <div id="spinner">
      <img alt="" src="images/preloaders/8.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">.</div>
  </div>
  
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-white-f2 sm-text-center">
      <div class="container">
        <div class="row">
          <img src="images/logowisara.jpg" alt="" height="100px" width="100%">
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default">
            <a class="menuzord-brand pull-left flip" href="javascript:void(0)">
              <img src="images/logo.png" alt="">
            </a>
            <ul class="menuzord-menu">
                <li><a href="#Evenements">Événements</a> </li>
                <li><a href="#plus">À propos de nous</a> </li>
                <li><a href="login/login.php?login=1">Espace intranet</a> </li></li>
                <li><a href="Formulaire de l'inscription/Inscription.php">Inscription</a> </li></li>
                <li><a href="#Contact">Contactez nous</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>