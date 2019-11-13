<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--===========================-->
    <!--||  github.com/OkularID  ||-->
    <!--||      aby.js.org       ||-->
    <!--===========================-->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <title><?php bloginfo('title');?> | <?php the_title() ?></title>
    <link href="<?php bloginfo('stylesheet_directory');?>/style/css/style.css" rel='stylesheet' type='text/css'>
    <link href="<?php bloginfo('stylesheet_directory');?>/style/css/animation.css" rel='stylesheet' type='text/css'>
    <!--Plug in-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/node_modules/animatecss/animate.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
    <!--Icon-->
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory');?>/images/favicon.ico">
    <?php wp_head(); ?>
</head>
<body>

<section class="navSection">
    <style>
        #navbar_wahana{position: fixed;}
        .shownnav{display: block !important;}
        .hiddennav{display: inline !important;}
        ._navbar {
            z-index: 10;
            position: absolute;
            top: 5%;
        }
        .F {
            left: -40px;
        }
        ._nav_list {
            list-style-type: none;
            display: inline;
        }
        ._nav_list li {
            display: inline;
            margin: 10px !important;
        }
        ._nav_list li a {
            color: white;
        }
        ._call_row {
            top: 10px !important;
        }
    </style>
    <div class="container-fluid _navbar" id="navbar_wahana">
        <div class="row">
            <div class="col-lg-2 pl-lg-5p">
                <img class="img-fluid _logo" src="<?php bloginfo('stylesheet_directory');?>/images/home/logo.png"/>
            </div>
            <div class="col-lg-8 pt-lg-2p F">
                <ul class="_nav_list">
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">PRODUCTS</a></li>
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="#">QUALITY</a></li>
                    <li><a href="#">SUSTAINABILITY</a></li>
                    <li><a href="#">NEWS & UPDATES</a></li>
                    <li><a href="#">CONTACT US</a></li>
                </ul>
            </div>
            <div class="col-lg-2 _call_row">
                <style>
                    ._call{
                        position: absolute;
                        padding: 12% 19%;
                        background: url("<?php bloginfo('stylesheet_directory');?>/images/home/call.png");
                        background-size: 105% 64% !important;
                        background-repeat: no-repeat !important;
                        background-position: center !important;
                        left: -34%;
                    }
                    .num {
                        right: 10%;
                    }
                </style>
                <div class="_call font-white text-center">
                    <a class="num">(62-21) 5793 6700</a>
                </div>
            </div>
        </div>
    </div>
</section>