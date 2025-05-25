<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
        <meta name="author" content="GeeksLabs">
        <meta name="keyword"
            content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
        <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/backend/img/favicon.png">

        <title>Eye Touch</title>

        <!-- Bootstrap CSS -->
        <link href="<?php echo base_url() ?>assets/backend/css/bootstrap.min.css" rel="stylesheet">
        <!-- bootstrap theme -->
        <link href="<?php echo base_url() ?>assets/backend/css/bootstrap-theme.css" rel="stylesheet">
        <!--external css-->
        <!-- font icon -->
        <link href="<?php echo base_url() ?>assets/backend/css/elegant-icons-style.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>assets/backend/css/font-awesome.min.css" rel="stylesheet" />
        <!-- full calendar css-->
        <link href="<?php echo base_url() ?>assets/backend/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css"
            rel="stylesheet" />
        <link href="<?php echo base_url() ?>assets/backend/assets/fullcalendar/fullcalendar/fullcalendar.css"
            rel="stylesheet" />
        <!-- easy pie chart-->
        <link href="<?php echo base_url() ?>assets/backend/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css"
            rel="stylesheet" type="text/css" media="screen" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/owl.carousel.css" type="text/css">
        <link href="<?php echo base_url() ?>/assets/backend/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
        <!-- Custom styles -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/fullcalendar.css">
        <link href="<?php echo base_url() ?>assets/backend/css/widgets.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/backend/css/style-responsive.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>assets/backend/css/xcharts.min.css" rel=" stylesheet">
        <link href="<?php echo base_url() ?>assets/backend/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/backend/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- container section start -->
        <section id="container" class="">


            <header class="header dark-bg">
                <div class="toggle-nav">
                    <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom">
                        <i class="icon_menu"></i>
                    </div>
                </div>

                <!--logo start-->
                <a href="<?php base_url('dashboard'); ?>" class="logo">Eye Touch<span class="lite">Admin</span></a>
                <!--logo end-->

                <div class="nav search-row" id="top_menu">
                    <!--  search form start -->
                    <ul class="nav top-menu">
                        <li>
                            <form class="navbar-form">
                                <input class="form-control" placeholder="Search" type="text">
                            </form>
                        </li>
                    </ul>
                    <!--  search form end -->
                </div>

                <div class="top-nav notification-row">
                    <!-- notificatoin dropdown start-->
                    <ul class="nav pull-right top-menu">


                        <!-- user login dropdown start-->
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="profile-ava">
                                    <img alt="" src="<?php echo base_url() ?>assets/backend/img/avatar1_small.jpg">
                                </span>
                                <span class="username">Ashikur Rahman Peters </span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu extended logout">

                                <li>
                                    <a href="login"><i class="icon_key_alt"></i> Log Out</a>
                                </li>

                            </ul>
                        </li>
                        <!-- user login dropdown end -->
                    </ul>
                    <!-- notificatoin dropdown end-->
                </div>
            </header>