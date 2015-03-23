<?php include_once('header.php') ?>
<!-- / header --> <!-- nav -->

<!-- / nav -->
<section id="content">
    <section class="main">

        <?php if(isset($hotel) )
        {

            ?>
            <div class=" m-t">
                <div id="gallery" class="gallery hide">
                    <div class="item"><img
                            src="<?php echo(base_url()); ?>public/images/katoa.jpg">

                        <div class="desc"><h4><?php  echo($hotel->hotel_name); ?></h4>



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

                                            <?php print_r($hotel); ?>
                                        </div>
                                        <div class="tab-pane" id="profile-1">


                                            <h4>Description</h4>

                                            <p><?php  echo($hotel->hotel_description); ?></p>

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



    var latlng = new google.maps.LatLng(<?php  echo($hotel->latitude); ?>, <?php  echo($hotel->longitude); ?>);
    var map = new google.maps.Map(document.getElementById('map3'), {
        center: latlng,
        zoom: 9,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        title: '<?php  echo($hotel->hotel_name); ?>'
        /*draggable: true*/
    });



</script>
</body>
</html>