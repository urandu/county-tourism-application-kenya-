<?php include_once('header.php') ?>
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



                                        <!-- .comment-list -->
                                        <section class="comment-list block">
                                            <article id="comment-id-1" class="comment-item media arrow arrow-left"><a
                                                    class="pull-left thumb-small avatar"><img src="images/avatar.jpg" class="img-circle"></a>
                                                <section class="media-body panel">
                                                    <header class="panel-heading clearfix"><a href="widgets.html#">John smith</a> <span
                                                            class="text-muted m-l-small pull-right"><i class="fa fa-clock-o"></i> 24 minutes ago</span>
                                                    </header>
                                                    <div class="panel-body">
                                                        <div>Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh
                                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                        </div>
                                                        <div class="comment-action m-t-small"><a href="widgets.html#" data-toggle="class"
                                                                                                 class="btn btn-white btn-xs active"> <i
                                                                    class="fa fa-star-o text-muted text"></i><i
                                                                    class="fa fa-star text-danger text-active"></i> Like </a> <a
                                                                href="widgets.html#comment-form" class="btn btn-white btn-xs"><i
                                                                    class="fa fa-mail-reply text-muted"></i> Reply</a></div>
                                                    </div>
                                                </section>
                                            </article>


                                            <!-- comment form -->
                                            <article class="comment-item media" id="comment-form"><a class="pull-left thumb-small avatar"><img
                                                        src="images/avatar.jpg" class="img-circle"></a>
                                                <section class="media-body">
                                                    <form action="widgets.html" class="m-b-none">
                                                        <div class="input-group"><input type="text" placeholder="Input your comment here"
                                                                                        class="form-control"> <span class="input-group-btn"> <button
                                                                    class="btn btn-primary" type="button">POST
                                                                </button> </span></div>
                                                    </form>
                                                </section>
                                            </article>
                                        </section>
                                        <!-- / .comment-list -->







                                        <?php // print_r($destination); ?>
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