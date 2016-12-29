<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/favicon.ico">

  <title>Silvia Galasso - grafica editoriale</title>

  <script src="https://use.typekit.net/ucj3pba.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="/css/avenir.css" rel="stylesheet" type="text/css">
   
</head>
<body class="homepage">
  <header class="header">
    <nav class="navbar navbar-dark bg-faded header__navbar">
      <div class="container header__content">
        <div class="col-xs-10 col-lg-7">
          <div class="brand">
            <a class="navbar-brand brand__title" href="#">Silvia Galasso</a>
            <span class="brand__sidetitle clearfix hidden-md-down">grafica editoriale</span>
            <span class="brand__subtitle clearfix hidden-lg-up">grafica editoriale</span>
          </div>
        </div>
        <div class="col-xs-2 col-lg-5 text-xs-right">
          <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="slide-collapse" data-target=".navbar-collapse" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <svg><use xlink:href="/img/icons.svg#menu_burger"></use></svg>
          </button>
          <div class="collapse navbar-toggleable-md navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="nav-item <?php if ($page == 'chi'){ echo 'active'; } ?>">
                <a class="nav-link" href="chi">Chi <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item <?php if ($page == 'cosa'){ echo 'active'; } ?>">
                <a class="nav-link" href="cosa">Cosa</a>
              </li>
              <li class="nav-item <?php if ($page == 'contatti'){ echo 'active'; } ?>">
                <a class="nav-link" href="contatti">Contatti</a>
              </li>
              <li class="nav-item <?php if ($page == 'portfolio'){ echo 'active'; } ?>">
                <a class="nav-link" href="portfolio">Portfolio</a>
              </li>
              <li class="nav-item hidden-lg-up">
                <a class="nav-link" href="#">Tariffario</a>
              </li>
              <li class="nav-item hidden-lg-up">
                <ul class="social_links menu__social_links list-inline">
                  <?php include('social_links.php'); ?>
                </ul>
              </li>
              <li class="nav-item hidden-lg-up">
                <a class="nav-link section_link" href="#">English version</a>
              </li>
              <li class="nav-item hidden-md-down language__selector">
                <a class="nav-link language__selector__flag"><img src="/img/flag_italy.png" alt=""></a>
                <a class="nav-link language__selector__flag" href="#"><img src="/img/flag_uk.png" alt=""></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    
      <?php
        switch ($page) {
            case 'chi':
                $header_url = 'banner_header_typography.jpg';
                $mobile_header_url = 'banner_header_typography_mobile.jpg';
                break;
            case 'cosa':
                $header_url = 'banner_header_brand.jpg';
                break;
            case 'contatti':
                $header_url = 'banner_header_contact_me.jpg';
                break;
            case 'portfolio':
                break;
            default:
                $header_url = 'banner_header_homepage.jpg';
        }
        if ($header_url){ ?>
          <div class="banner homepage__header_banner banner--header">
            <img src="/img/<?php echo $header_url ?>" class="img-fluid banner__image <?php if ($mobile_header_url){ echo 'hidden-sm-down'; } ?>" alt="Silvia Galasso Typography">
            <?php if ($mobile_header_url){ ?>
              <img src="/img/<?php echo $mobile_header_url ?>" class="img-fluid banner__image banner__image_mobile hidden-md-up" alt="Silvia Galasso Typography">
            <?php } ?>
          </div>
        <?php }
      ?>
    
  </header>

  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="container content">