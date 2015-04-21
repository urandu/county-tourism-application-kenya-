<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tour destinations</title>
    <meta name="description" content="mobile first, app, web app, responsive, admin dashboard, flat, flat ui">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?php echo(base_url()); ?>public/css/font.css">
    <link rel="stylesheet" href="<?php echo(base_url()); ?>public/css/app.v2.css" type="text/css"/>
    <!--[if lt IE 9]>
    <script src="http://localhost/kilifi/public/js/ie/respond.min.js"></script>
    <script src="http://localhost/kilifi/public/js/ie/html5.js"></script>
    <script src="http://localhost/kilifi/public/js/ie/excanvas.js"></script>
    <![endif]-->
</head>
<body class="navbar-fixed" >
<!-- header -->
<input type="hidden" id="base_url" value="<?php echo(base_url()); ?>">
<header id="header" class="navbar">
    <ul class="nav navbar-nav navbar-avatar pull-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="hidden-xs-only"><?php echo(get_user_name()); ?></span>
                <span class="thumb-small avatar inline">
                    <img src="<?php echo(base_url());?>public/images/avatar.jpg" alt="Mika Sokeil" class="img-circle">
                </span>
                <b class="caret hidden-xs-only"></b>
            </a>
            <ul class="dropdown-menu pull-right">
                <li><a href="<?php echo(base_url()); ?>user/logout">Logout</a></li>

            </ul>
        </li>
    </ul>
    <a class="navbar-brand" href="#"><?php echo($page_title);?></a>
    <button type="button" class="btn btn-link pull-left nav-toggle visible-xs"
            data-toggle="class:slide-nav slide-nav-left" data-target="body">
        <i class="fa fa-bars fa-lg text-default"></i>
    </button>
    <ul class="nav navbar-nav hidden-xs">
        <li>

        </li>


    </ul>
    <!--<form class="navbar-form pull-left shift" action="index.html" data-toggle="shift:appendTo"
          data-target=".nav-primary"><i class="fa fa-search text-muted"></i> <input type="text"
                                                                                    class="input-sm form-control"
                                                                                    placeholder="Search"></form>-->
</header>
<!-- / header --> <!-- nav -->
<nav id="nav" class="nav-primary hidden-xs nav-vertical">
    <ul class="nav" data-spy="affix" data-offset-top="50">
        <li class="active"><a href="<?php echo(base_url()); ?>pins"><i class="fa fa-home fa-lg"></i><span>Home</span></a></li>



        <li><a href="<?php echo(base_url()); ?>pins/destinations"><i class="fa fa-globe fa-lg"></i><span>Destinations</span></a></li>
        <li><a href="<?php echo(base_url()); ?>pins/hotels"><i class="fa fa-credit-card fa-lg"></i><span>Hotels</span></a></li>
        <li><a href="<?php echo(base_url()); ?>pins/plan_trip"><i class="fa fa-calendar-o fa-lg"></i><span>Plan Trip</span></a></li>
        <li><a href="<?php echo(base_url()); ?>pins/book_hotel"><i class="fa fa-credit-card fa-lg"></i><span>Book Accommodation</span></a></li>
        <li><a href="<?php echo(base_url()); ?>pins/trips"><i class="fa fa-calendar fa-lg"></i><span>Planned Trips</span></a></li>
        <li><a href="<?php echo(base_url()); ?>pins/bookings"><i class="fa fa-suitcase fa-lg"></i><span>Hotel Bookings</span></a></li>
        <li><a href="<?php echo(base_url()); ?>pins/map"><i class="fa fa-map-marker fa-lg"></i><span>Map</span></a></li>
        <li><a href="<?php echo(base_url()); ?>pins/payments"><i class="fa fa-money fa-lg"></i><span>My Payments</span></a></li>
        <li><a href="<?php echo(base_url()); ?>pins/settings"><i class="fa fa-gear fa-lg"></i><span>settings</span></a></li>


    </ul>
</nav>
