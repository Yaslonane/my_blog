<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title><?php echo self::$title; ?></title>
  
   <!--ckeditor-->
  <script type="text/javascript" src="<?php echo LIB; ?>/ckeditor/ckeditor.js"></script>
  <script type="text/javascript" src="<?php echo LIB; ?>/AjexFileManager/Ajex.js"></script>
  
      <!--multi-select-->
    <link rel="stylesheet" type="text/css" href="<?php echo ADM_TMPL; ?>js/jquery-multi-select/css/multi-select.css" />
  

  <link href="<?php echo ADM_TMPL; ?>css/style.css" rel="stylesheet">
  <link href="<?php echo ADM_TMPL; ?>css/style-responsive.css" rel="stylesheet">
    <!--icheck-->
  <link href="<?php echo ADM_TMPL; ?>js/iCheck/skins/minimal/minimal.css" rel="stylesheet">
  <link href="<?php echo ADM_TMPL; ?>js/iCheck/skins/square/square.css" rel="stylesheet">
  <link href="<?php echo ADM_TMPL; ?>js/iCheck/skins/square/red.css" rel="stylesheet">
  <link href="<?php echo ADM_TMPL; ?>js/iCheck/skins/square/blue.css" rel="stylesheet">

  <!--dashboard calendar-->
  <link href="<?php echo ADM_TMPL; ?>css/clndr.css" rel="stylesheet">
  
    <!--pickers css-->
  <link rel="stylesheet" type="text/css" href="<?php echo ADM_TMPL; ?>js/bootstrap-datepicker/css/datepicker-custom.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo ADM_TMPL; ?>js/bootstrap-timepicker/css/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo ADM_TMPL; ?>js/bootstrap-colorpicker/css/colorpicker.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo ADM_TMPL; ?>js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo ADM_TMPL; ?>js/bootstrap-datetimepicker/css/datetimepicker-custom.css" />


  <!--common-->
  <link href="<?php echo ADM_TMPL; ?>css/style.css" rel="stylesheet">
  <link href="<?php echo ADM_TMPL; ?>css/style-responsive.css" rel="stylesheet">
  
  <link href="<?php echo ADM_TMPL; ?>js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="<?php echo ADM_TMPL; ?>js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo ADM_TMPL; ?>js/data-tables/DT_bootstrap.css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
 <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>-->
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.js"></script>

<style>
        #my-drop-down-menu ul, ul#my-drop-down-menu{
            list-style:none;
    }

    #my-drop-down-menu{ 
            position:relative; /* (!) */
            z-index:3;
            width:300px;
            height:20px;
            margin:0 auto;
    }

    #my-drop-down-menu li.list{
            float:left; /* (!) */
            display:block; /* (!) */
            margin:0 5px;
    }

    #my-drop-down-menu a{
            color: #61ADB0;
            text-decoration:none;
    }

    #my-drop-down-menu ul.child{ 
            background: #463935;
            padding:5px;
            position:absolute; /* (!) */
            top:29px; /* (!) */
            left:-9999px; /* (!) */
            z-index:3;
            border-top: 1px solid #3A2E2B;
            -moz-box-shadow: 0px 3px 7px #251d1b;
            -webkit-box-shadow: 0px 3px 7px #251d1b;
            box-shadow: 0px 3px 7px #251d1b;
    }

    #my-drop-down-menu li:hover ul.child{
            left:auto; /* (!) */
    }

    #my-drop-down-menu li a.link{
            display:block;
            padding:5px;
    }

    #my-drop-down-menu li:hover a.link{
            background: #463935;
    }
</style>

  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="horizontal-menu-page">

<section>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo DOMAIN; ?>/adminpanel">
                    <img src="<?php echo ADM_TMPL; ?>images/logo.png" alt="">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li <?php if(self::$activ_page == 'main') echo " class=\"active\" "; ?>><a href="<?php echo DOMAIN; ?>/adminpanel">Главная</a></li>
                    <li <?php if(self::$activ_page == 'service') echo " class=\"active\" "; ?>> <!----><a href="<?php echo DOMAIN; ?>/adminpanel/services">Услуги</a></li>
                    <li <?php if(self::$activ_page == 'prices') echo " class=\"active\" "; ?>> <!----><a href="<?php echo DOMAIN; ?>/adminpanel/prices">Цены</a></li>
                    <li <?php if(self::$activ_page == 'blog') echo " class=\"active\" "; ?>><a href="<?php echo DOMAIN; ?>/adminpanel/posts">Блог(-)</a></li>
                    <li <?php if(self::$activ_page == 'category') echo " class=\"active\" "; ?>><a href="<?php echo DOMAIN; ?>/adminpanel/category">Категории(-)</a></li>
                    <li <?php if(self::$activ_page == 'portfolio') echo " class=\"active\" "; ?>><a href="<?php echo DOMAIN; ?>/adminpanel/portfolio">Портфолио</a></li>
                    <li <?php if(self::$activ_page == 'gallery') echo " class=\"active\" "; ?>><a href="<?php echo DOMAIN; ?>/adminpanel/gallery">(--Галерея--)</a></li>
     
                </ul>

                <ul class="nav navbar-nav navbar-right" id="my-drop-down-menu">
                    <li class="list">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <img alt="" src="<?php echo ADM_TMPL; ?>images/photos/user-avatar.png"> Админ <b class="caret"></b></a>
                        <ul class="child">
                            <li><a href="<?php echo DOMAIN; ?>" target="_blank" class="link">На сайт</a></li>
                            <li><a href="<?php echo DOMAIN; ?>/logout" class="link">Выйти</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>