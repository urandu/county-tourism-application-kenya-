<?php include_once('header.php') ?>
<!-- / nav -->
<section id="content">
    <section class="main">



        <?php if(isset($hotels) && $hotels>0)
        {
            ?>

            <div class=" m-t">
                <div id="gallery" class="gallery hide">
                    <?php

                    foreach($hotels as $hotel)
                    {
                    ?>
                    <a href="<?php echo(base_url()); ?>pins/view_hotel/<?php echo($hotel->hotel_id); ?>"  class="item-media"><div class="item"><img
                                src="<?php echo(base_url()); ?>public/images/katoa.jpg">

                            <div class="desc"><h4><?php echo($hotel->hotel_name); ?></h4>



                                <p class="text-muted"><?php if(strlen($hotel->hotel_description)>100)
                                    {
                                        echo(substr($hotel->hotel_description,0,100));
                                    }else
                                    {
                                        echo($hotel->hotel_description);
                                    }
                                    ?></p></div>
                    </a>
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

            echo('<h1>No hotel added</h1>');
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
