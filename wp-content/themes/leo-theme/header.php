<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

   <!--  <meta name="author" content=""> -->
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico">

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="../../dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <!-- <link href="jumbotron.css" rel="stylesheet"> -->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- <script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand" href="#"><img src="img/logo.jpg" alt="logo"></a> -->
          <a class="navbar-brand hidden-xs" href="<?php bloginfo( 'url'); ?>"><img class="navlogo" src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="<?php bloginfo( 'name'); ?>" /></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <?php
            $args = array(
             'menu'    => 'header-menu',
             'menu_class' => 'nav navbar-nav',
             'container' => 'false'
            );

            wp_nav_menu( $args );
           ?>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
