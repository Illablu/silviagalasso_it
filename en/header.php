<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/img/favicon.png">

  <title>Silvia Galasso - editorial design</title>

  <script src="https://use.typekit.net/ucj3pba.js"></script>
  <script>try{Typekit.load({ async: false });}catch(e){}</script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="/css/avenir.css" rel="stylesheet" type="text/css">
  <link rel='stylesheet' type='text/css' href="/css/owl.carousel.css" />
  <link rel='stylesheet' type='text/css' href="/css/owl.theme.css" />
  <link rel="stylesheet" type='text/css' href="/css/owl.transitions.css">
  <link rel="stylesheet" href="/css/swipebox.min.css">
</head>
<body class="page-<?php echo $page; ?>">
  <div class="container-bg-line-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 container-bg-line"></div>
      </div>
    </div>
  </div>
  <header class="header">
    <nav class="navbar navbar-dark bg-faded header__navbar">
      <div class="container header__content">
        <div class="col-xs-10">
          <div class="brand">
            <a class="navbar-brand brand__title" href="/en">Silvia Galasso</a>
            <a href="/"><span class="brand__sidetitle clearfix hidden-md-down">editorial design</span></a>
            <a href="/"><span class="brand__subtitle clearfix hidden-lg-up">editorial design</span></a>
          </div>
        </div>
        <div class="col-xs-2 text-xs-right">
          <button class="navbar-toggler" type="button" data-toggle="slide-collapse" data-target=".navbar-collapse" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <svg><use xlink:href="/img/social-icons.svg#menu_burger"></use></svg>
          </button>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="nav-item <?php if ($page == 'index'){ echo 'active'; } ?>">
                <a class="nav-link" href="chi">Homepage</a>
              </li>
              <li class="nav-item <?php if ($page == 'chi'){ echo 'active'; } ?>">
                <a class="nav-link" href="who">Who</a>
              </li>
              <li class="nav-item <?php if ($page == 'cosa'){ echo 'active'; } ?>">
                <a class="nav-link" href="what-i-do">What I do</a>
              </li>
              <li class="nav-item <?php if ($page == 'contatti'){ echo 'active'; } ?>">
                <a class="nav-link" href="contact-me">Contact me</a>
              </li>
              <li class="nav-item <?php if ($page == 'portfolio'){ echo 'active'; } ?>">
                <a class="nav-link" href="portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/files/sg_tariffario_2017.pdf" target="_blank"><svg><use xlink:href="/img/social-icons.svg#download"></use></svg>Price list</a>
              </li>
              <li class="nav-item">
                <a class="nav-link section_link language__selector" href="/en">
                  <svg x="0px" y="0px">
                    <clipPath id="clip-it"><circle id="XMLID_133_" cx="52.5" cy="52.5" r="50"/></clipPath>
                    <use xlink:href="/img/flags.svg#it"></use></svg>
                  <span>Italian version</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="container-white-bg line"></div>
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

  <div class="container-white-bg space"></div>

  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="container content">