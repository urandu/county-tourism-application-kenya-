<?php include_once('header.php') ?>
<section id="content">
    <section class="main">
<?php if(isset($destination) )
        {

            ?>
            <div class=" m-t">
            <div id="gallery" class="gallery hide">
                <div class="item"><img
                            src="<?php echo(base_url()); ?>files/<?php echo($destination->image); ?>">

                    <div class="desc"><h4><?php  echo($destination->destination_name."    "); ?>&nbsp;&nbsp;(<i class="fa fa-star"></i> <?php  echo(get_destination_rating($destination->destination_id)); ?> )</h4>
                        <p class="text-muted">
                            <?php
                            if($destination->price > 0)
                            {
                                echo("<strong>Entrance fee: </strong>".$destination->price."  (per person)");
                            }
                            ?>
                        </p>



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


                                        <article id="comment-id-1" class="comment-item media arrow arrow-left"><!--<a
                                                    class="pull-left thumb-small avatar"><img src="<?php /*echo(base_url()); */?>public/images/avatar.jpg" class="img-circle"></a>-->
                                            <section class="media-body panel">
                                                <header class="panel-heading clearfix">New rating
                                                </header>
                                                <div class="panel-body">
                                                    <div>
                                                        <form method="post" action="<?php echo base_url(); ?>pins/add_destination_rating/<?php echo($destination->destination_id); ?>" >

                                                            <div class="form-group"><label class="control-label">Rate</label>

                                                                <div ><select data-required="true" id="rating" name="rating" class="">
                                                                        <option value="5">5</option>
                                                                        <option value="4">4</option>
                                                                        <option value="3">3</option>
                                                                        <option value="2">2</option>
                                                                        <option value="1">1</option>
                                                                    </select></div>
                                                            </div>

                                                            <div class="form-group"><label class=" control-label">comment</label>

                                                                <div ><input type="text" name="comment" placeholder="comment (not required)"
                                                                                              class=""></div>
                                                            </div>
                                                            <input type="submit" class="btn-small btn  " value="submit">

                                                        </form>
                                                    </div>

                                            </section>
                                        </article>



                                        <?php

                                        if(!empty($ratings) )
                                        {


                                            foreach($ratings as $rating)
                                            {
                                                ?>
                                                <article id="comment-id-1" class="comment-item media arrow arrow-left"><!--<a
                                                    class="pull-left thumb-small avatar"><img src="<?php /*echo(base_url()); */?>public/images/avatar.jpg" class="img-circle"></a>-->
                                                    <section class="media-body panel">
                                                        <header class="panel-heading clearfix"><?php echo(get_user_name($rating->user_id)); ?> <span
                                                                class="text-muted m-l-small pull-right"><i class="fa fa-star"></i> Rating: <?php echo($rating->rating); ?>/5</span>
                                                        </header>
                                                        <div class="panel-body">
                                                            <div><?php
                                                                if(isset($rating->user_id))
                                                                {echo($rating->comment);}  ?>
                                                            </div>

                                                    </section>
                                                </article>
                                            <?php
                                            }

                                        }else
                                        {
                                            echo("No ratings found");
                                        }
                                        ?>



                                        <!-- .comment-list -->
                                        <section class="comment-list block">


                                            <!-- comment form -->
                                            <!--<article class="comment-item media" id="comment-form"><a class="pull-left thumb-small avatar"><img
                                                        src="images/avatar.jpg" class="img-circle"></a>
                                                <section class="media-body">
                                                    <form action="widgets.html" class="m-b-none">
                                                        <div class="input-group"><input type="text" placeholder="Input your comment here"
                                                                                        class="form-control"> <span class="input-group-btn"> <button
                                                                    class="btn btn-primary" type="button">POST
                                                                </button> </span></div>
                                                    </form>
                                                </section>
                                            </article>-->
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