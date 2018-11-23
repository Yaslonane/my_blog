<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo self::$title; ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo TMPL; ?>css/styles.css" rel="stylesheet">
    
    <!-- lightbox -->
    <link href="<?php echo LIB; ?>lightbox/css/lightbox.css" rel="stylesheet">
        <script src="<?php echo LIB; ?>lightbox/js/lightbox-plus-jquery.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div id="page" class="hfeed site"><!-- start page wrapper -->

    	<header id="masthead" class="site-header navbar-fixed-top">
    		<div class="header-navigation">
    			<div class="container-fluid">

    				<div class="row">

    					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".site-navigation" aria-expanded="false">
				        	<span class="sr-only">Toggle navigation</span>
				        	<span class="icon-bar"></span>
				        	<span class="icon-bar"></span>
				        	<span class="icon-bar"></span>
				        </button>

				        <div class="logo navbar-brand">
                                            <a href="/"><img src="<?php echo DOMAIN; ?>/images/logo.png" height = "60" alt="" title="Bengkel"></a>
				        </div><!-- end logo -->

				        <nav id="primary-navigation" class="site-navigation navbar-collapse collapse" role="navigation">
                                            <div class="nav-menu">
                                                <ul class="menu">
                                                    <li><a href="/">Домой</a></li>
                                                    <li><a href="/about">О нас</a></li>
                                                    <li><a href="<?php echo DOMAIN; ?>/services">Услуги</a></li>

                                                    <li><a href="/gallery">Галерея</a></li>

                                                    <li><a href="<?php echo DOMAIN; ?>/blogs">Блог</a></li>
                                                </ul>
                                            </div><!-- end nav-menu -->
				        </nav><!-- end #primary-navigation -->

				        <div class="appoinment-header">
                                            <?php if(!empty($_SESSION['user'])): ?>
				        	<a href="<?php echo DOMAIN;?>/adminpanel/" class="btn btn-md btn-default">Админпанель</a>
                                            <?php else: ?>
				        	<a href="<?php echo DOMAIN;?>/login" class="btn btn-md btn-default">Войти</a>
                                            <?php endif; ?>    
				        </div>

    				</div><!-- end row -->
    				
    			</div><!-- end container-fluid -->
    		</div><!-- end header-navigation -->
    	</header><!-- end #masthead -->

