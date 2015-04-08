<?php include_once('header.php') ?>
<!-- / nav -->
<section id="content">
    <section class="main">




                <?php if(isset($destinations) && $destinations>0)
                {
                    ?>

        <div class=" m-t">
            <div id="gallery" class="gallery hide">
                    <?php

                    foreach($destinations as $destination)
                    {
                        ?>
                <a href="<?php echo(base_url()); ?>pins/view_destination/<?php echo($destination->destination_id); ?>"  class="item-media"><div class="item"><img
                                    src="<?php echo(base_url()); ?>public/images/arabuko.jpg">

                            <div class="desc"><h4><?php echo($destination->destination_name); ?> &nbsp;&nbsp;(<i class="fa fa-star"></i> <?php  echo(get_destination_rating($destination->destination_id)); ?> ) </h4>


                                <p class="text-muted">
                                    <?php
                                    if($destination->price > 0)
                                    {
                                        echo("<strong>Entrance fee: </strong>".$destination->price."  (per person)");
                                    }
                                    ?>
                                </p>

                                <p class="text-muted"><?php if(strlen($destination->destination_description)>100)
                                    {
                                        echo(substr($destination->destination_description,0,100));
                                    }else
                                    {
                                        echo($destination->destination_description);
                                    }
                                    ?></p></div></a>
                        </div>


                    <?php
                    }

                    ?>

            </div>
        </div>

                <?php
                }
                else
                {

                    echo('<h1>No destination added</h1>');
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
</body>
</html>
