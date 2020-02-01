<!DOCTYPE html>
  <html>
    <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?= base_url('assets');?>/css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title><?= $title;?></title>
    </head>

    <body>
      <div class="navbar-fixed ">
        <nav class="purple lighten-1">
          <div class="container">
            <div class="nav-wrapper ">
              <a href="#home" class="brand-logo.left">Aganstas</a>
              <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="#about">About Us</a></li>
                <li><a href="#galeri">Galery</a></li>
                <li><a href="#contact-us">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <!-- Sidebar navbar -->
      <ul class="sidenav" id="mobile-nav">
        <div class="card-panel center darken-3 center teal-text">
          <i class="material-icons large center">spa</i>
        </div>
        
        <li><a href="#about">About Us</a></li>
        <li><a href="#galeri">Galery</a></li>
        <li><a href="#contact-us">Contact Us</a></li>
      </ul>