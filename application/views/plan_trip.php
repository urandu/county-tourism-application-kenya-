<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Plan new trip</title>
    <meta name="description" content="mobile first, app, web app, responsive, admin dashboard, flat, flat ui">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/app.v2.css" type="text/css"/>
    <!--[if lt IE 9]>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/html5.js"></script>
    <script src="js/ie/excanvas.js"></script>
    <![endif]-->
</head>
<body class="navbar-fixed" >
<!-- header -->
<header id="header" class="navbar">
    <ul class="nav navbar-nav navbar-avatar pull-right">
        <li class="dropdown">
            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="hidden-xs-only">Martin Otieno</span>
                <span class="thumb-small avatar inline">
                    <img src="images/avatar.jpg" alt="Mika Sokeil" class="img-circle">
                </span>
                <b class="caret hidden-xs-only"></b>
            </a>
            <ul class="dropdown-menu pull-right">
                <li><a href="index.html#">Settings</a></li>
                <li><a href="index.html#">Profile</a></li>
                <li><a href="index.html#"><span class="badge bg-danger pull-right">3</span>Notifications</a></li>
                <li class="divider"></li>
                <li><a href="docs.html">Help</a></li>
                <li><a href="signin.html">Logout</a></li>
            </ul>
        </li>
    </ul>
    <a class="navbar-brand" href="index.html#">Plan new trip</a>
    <button type="button" class="btn btn-link pull-left nav-toggle visible-xs"
            data-toggle="class:slide-nav slide-nav-left" data-target="body">
        <i class="fa fa-bars fa-lg text-default"></i>
    </button>
    <ul class="nav navbar-nav hidden-xs">
        <li>
            <div class="m-t m-b-small" id="panel-notifications">
                <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-comment-o fa-fw fa-lg text-default"></i>
                    <b class="badge badge-notes bg-danger count-n">2</b>
                </a>
                <section class="dropdown-menu m-l-small m-t-mini">
                    <section class="panel panel-large arrow arrow-top">
                        <header class="panel-heading bg-white"><span class="h5"><strong>You have <span
                                        class="count-n">2</span> notifications</strong></span></header>
                        <div class="list-group"><a href="index.html#" class="media list-group-item"> <span
                                    class="pull-left thumb-small"><img src="images/kilifi1.jpg" alt="John said"
                                                                       class="img-circle"></span> <span
                                    class="media-body block m-b-none"> Moved to Bootstrap 3.0<br> <small
                                        class="text-muted">23 June 13
                                    </small> </span> </a> <a href="index.html#" class="media list-group-item"> <span
                                    class="media-body block m-b-none"> first v.1 (Bootstrap 2.3 based) released<br> <small
                                        class="text-muted">19 June 13
                                    </small> </span> </a></div>
                        <footer class="panel-footer text-small"><a href="index.html#" class="pull-right"><i
                                    class="fa fa-cog"></i></a> <a href="index.html#">See all the notifications</a>
                        </footer>
                    </section>
                </section>
            </div>
        </li>
        <li>
            <div class="m-t-small"><a class="btn btn-sm btn-info" data-toggle="modal" href="index.html#modal"><i
                        class="fa fa-fw fa-plus"></i> POST</a></div>
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
        <li class="active"><a href="home.php"><i class="fa fa-home fa-lg"></i><span>Home</span></a></li>



        <li><a href="destinations.php"><i class="fa fa-globe fa-lg"></i><span>Destinations</span></a></li>
        <li><a href="hotels.php"><i class="fa fa-credit-card fa-lg"></i><span>Hotels</span></a></li>
        <li><a href="plan_trip.php"><i class="fa fa-calendar-o fa-lg"></i><span>Plan Trip</span></a></li>
        <li><a href="trips.php"><i class="fa fa-calendar fa-lg"></i><span>Planned Trips</span></a></li>
        <li><a href="bookings.php"><i class="fa fa-suitcase fa-lg"></i><span>Hotel Bookings</span></a></li>
        <li><a href="map.php"><i class="fa fa-map-marker fa-lg"></i><span>Map</span></a></li>
        <li><a href="payments.php"><i class="fa fa-money fa-lg"></i><span>My Payments</span></a></li>
        <li><a href="settings.php"><i class="fa fa-gear fa-lg"></i><span>settings</span></a></li>

    </ul>
</nav>
<!-- / nav -->
<section id="content">
    <section class="main padder">
        <div class="row">


        </div>
    </section>
</section>

<footer id="footer">
    <div class="text-center padder clearfix">
        <p>
            <small>&copy; Kilifi County</small>
            <br><br> </p>
    </div>
</footer>
<a href="index.html#" class="hide slide-nav-block" data-toggle="class:slide-nav slide-nav-left" data-target="body"></a>
<!-- / footer --> <!-- Bootstrap --> <!-- app --> <!-- Sparkline Chart --> <!-- Easy Pie Chart -->
<script src="js/app.v2.js"></script>
</body>
</html>