<?php
            if(isset($_GET['id'])){
    
    
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


<!-- Page Title -->
<title>BTS CHICHAOUA</title>
<link rel="stylesheet" href="css/colors/style.css">  
        <link rel="stylesheet" href="css/colors/responsive.css">
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

  <header id="header" class="header">
    <div class="header-top bg-white-f2 sm-text-center">
      <div class="container">
        <div class="row">
          <img src="images/logowisara.jpg" alt="" style="height:100px" height="100px" width="100%">
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
                <li class="active"><a href="index.php">Accueil</a> </li>
                
            </ul>
          </nav>
        </div>
      </div>
    </div>
    
  </header>
   
            <?php
            require('connexion.php');
            $r="select * from annonce where idAn='".$_GET['id']."'";
                $res=$conex->query($r);
                if($res)
                {
                    $d=$res->fetch_assoc();
                            $nom=explode(";",$d['editeur']);                                                                     
                                            ?>
                    <div class="blog-details-area mg-b-15">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="blog-details-inner">  
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="latest-blog-single blog-single-full-view">
                                                    
                                                    <div class="blog-image">
                                                        <?php
                                                        if(!empty($d['imgAnnonce'])){
                                                        ?>
                                                        <img src="images/annonce/<?=$d['imgAnnonce']?>" alt="" />
                                                        
                                                        <?php
                                                        }
                                                        else {
                                                        ?>
                                                        <img src="images/annonce/default.png" alt="" />
                                                        
                                                        <?php
                                                        }
                                                        ?>
                                                        <div class="blog-date" style="background-color: #B73448;">
                                                        <?php
                                                        $dat=explode("/",$d['date']);
                                                        $m=DateTime ::createFromFormat('!m',$dat[1]);
                                                        $month= $m->format('F');
                                                        ?>
                                                            <p><span class="blog-day"><?=$dat[0]?></span> <?= $month ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="blog-details blog-sig-details">
                                                        <div class="details-blog-dt blog-sig-details-dt courses-info mobile-sm-d-n">
                                                            <span><a href="#"><i class="fa fa-user"></i> <b>Editeur :</b> <?=$nom[0]." ".$nom[1]?></a></span>
                                                            
                                                        </div>
                                                        <h1><a class="blog-ht" href="#"><?=$d['titre']?></a></h1>
                                                        <p><?=$d['description']?> </p>
                                                    </div>
                                                    
                                                </div>

                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
                if (!empty($d['documents'])){
                ?> 
                    <div class="pdf-viewer-area mg-b-30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                    <div class="pdf-single-pro">
                                        <a class="media" href="images/pdf/<?=$d['documents']?>"></a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                </div>
                            </div>
                        </div>
                    </div>
        <?php        
                }                              
                }                            
         require('footer.php');?>
         <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
        <script src="js/pdf/jquery.media.js"></script>
        <script src="js/pdf/pdf-active.js"></script>
   
    <?php 
            
            }
            else{
                header("location:index.php");
            }
    ?>