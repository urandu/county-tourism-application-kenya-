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
<header id="header" class="navbar">
    <ul class="nav navbar-nav navbar-avatar pull-right">
        <li class="dropdown">


                <span class="thumb-small avatar inline">
                    <img src="<?php echo(base_url()); ?>public/images/avatar.jpg" alt="image" class="img-circle">
                </span>
        </li>
    </ul>
    <a class="navbar-brand" href="#"><?echo($page_title);?></a>


    <!--<form class="navbar-form pull-left shift" action="index.html" data-toggle="shift:appendTo"
          data-target=".nav-primary"><i class="fa fa-search text-muted"></i> <input type="text"
                                                                                    class="input-sm form-control"
                                                                                    placeholder="Search"></form>-->
</header>
<!-- / header --> <!-- nav -->
<nav id="nav" class="nav-primary hidden-xs nav-vertical">
    <ul class="nav" data-spy="affix" data-offset-top="50">
        <li class="active"><a href="home.php"><i class="fa fa-home fa-lg"></i><span>Home</span></a></li>



        <li><a href="<?php echo(base_url()); ?>destinations"><i class="fa fa-globe fa-lg"></i><span>Destinations</span></a></li>
        <li><a href="<?php echo(base_url()); ?>hotels"><i class="fa fa-credit-card fa-lg"></i><span>Hotels</span></a></li>
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
    <section class="main">
<?php if(isset($destination) )
        {

            ?>
            <div class=" m-t">
            <div id="gallery" class="gallery hide">
                <div class="item"><img
                            src="<?php echo(base_url()); ?>public/images/arabuko.jpg">

                    <div class="desc"><h4><?php  echo($destination->destination_name); ?></h4>



                        <!-- left tab -->
                        <section class="panel">
                            <header class="panel-heading">
                                <ul class="nav nav-tabs ">
                                    <li ><a href="components.html#messages-1" data-toggle="tab"><i
                                                class="fa fa-star fa-lg text-default"></i>ratings</a></li>
                                    <li><a href="components.html#profile-1" data-toggle="tab"><i
                                                class="fa fa-book fa-lg text-default"></i>details</a></li>
                                    <li><a href="components.html#settings-1" data-toggle="tab"><i
                                                class="fa fa-map-marker fa-lg text-default"></i> map</a></li>
                                </ul>
                                </header>
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane " id="messages-1">


            ratings

                                        <?php print_r($destination); ?>
                                    </div>
                                    <div class="tab-pane" id="profile-1">


                                        <h4>Description</h4>

                                        <p><?php  echo($destination->destination_description); ?></p>

                                    </div>
                                    <div class="tab-pane" id="settings-1">
                                        <h4>Map</h4>



                                                <div id="map3" style="height:362px"></div>




                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- / left tab -->



                     </div>
                </div>

            </div>
        </div>
            <?php

        } else
        {
            echo("No Destination found");
        }
?>

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
<script src="<?php echo(base_url()); ?>public/js/app.v2.js"></script>
<script src="<?php echo(base_url()); ?>public/js/prettyphoto/jquery.prettyPhoto_2.js"></script>
<script src="<?php echo(base_url()); ?>public/js/grid/jquery.grid-a-licious.min_2.js"></script>
<script src="<?php echo(base_url()); ?>public/js/grid/gallery_2.js"></script>
<script src="http://maps.google.com/maps/api/js"></script>
<script src="<?php echo(base_url()); ?>public/js/maps/gmaps_2.js"></script>
<script src="<?php echo(base_url()); ?>public/js/maps/demo_2.js"></script>
<script >



    var latlng = new google.maps.LatLng(<?php  echo($destination->latitude); ?>, <?php  echo($destination->longitude); ?>);
    var map = new google.maps.Map(document.getElementById('map3'), {
        center: latlng,
        zoom: 9,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        title: '<?php  echo($destination->destination_name); ?>'
        /*draggable: true*/
    });



</script>
</body>
</html>