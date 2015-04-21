<?php include_once('header.php') ?>
<!-- / nav -->
<section id="content">
<section class="main">





<?php if(isset($hotels) && $hotels>0)
{
    ?>
    <div class="row">
    <div class=" m-t">
    <div id="gallery" class="gallery hide">




    <div class="col-lg-6"> <!-- .accordion -->
    <div class="panel-group m-b" id="accordion2">
    <div class="panel">
        <div class="panel-heading"><a class="accordion-toggle" data-toggle="collapse"
                                      data-parent="#accordion2" href="components.html#collapseOne">
                Apartments </a></div>
        <div id="collapseOne" class="panel-collapse collapse">
            <div class="panel-body text-small">

                <?php
                foreach($hotels as $hotel)
                {
                    ?>


                    <?php

                    if($hotel->hotel_type=='apartments')
                    {
                        ?>

                        <a href="<?php echo(base_url()); ?>pins/view_hotel/<?php echo($hotel->hotel_id); ?>"  class="item-media "><div class=""><img
                                    src="<?php echo(base_url()); ?>files/<?php echo($hotel->image); ?>">

                                <div class="desc"><h4><?php echo($hotel->hotel_name); ?> &nbsp;&nbsp;(<i class="fa fa-star"></i> <?php  echo(get_hotel_rating($hotel->hotel_id)); ?> ) </h4>




                                    <p class="text-muted"><?php if(strlen($hotel->hotel_description)>100)
                                        {
                                            echo(substr($hotel->hotel_description,0,100));
                                        }else
                                        {
                                            echo($hotel->hotel_description);
                                        }
                                        ?></p>
                                </div></a>

                    <?php
                    }
                    ?>


                <?php
                }
                ?>


            </div>
        </div>
    </div>
    <div class="panel">
        <div class="panel-heading"><a class="accordion-toggle" data-toggle="collapse"
                                      data-parent="#accordion2" href="components.html#collapseTwo">
                Resort </a></div>
        <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body text-small">

                <?php
                foreach($hotels as $hotel)
                {
                    ?>


                    <?php

                    if($hotel->hotel_type=='resort')
                    {
                        ?>

                        <a href="<?php echo(base_url()); ?>pins/view_hotel/<?php echo($hotel->hotel_id); ?>"  class="item-media "><div class=""><img
                                    src="<?php echo(base_url()); ?>files/<?php echo($hotel->image); ?>">

                                <div class="desc"><h4><?php echo($hotel->hotel_name); ?> &nbsp;&nbsp;(<i class="fa fa-star"></i> <?php  echo(get_hotel_rating($hotel->hotel_id)); ?> ) </h4>



                                    <p class="text-muted"><?php if(strlen($hotel->hotel_description)>100)
                                        {
                                            echo(substr($hotel->hotel_description,0,100));
                                        }else
                                        {
                                            echo($hotel->hotel_description);
                                        }
                                        ?></p>
                                </div></a>

                    <?php
                    }
                    ?>


                <?php
                }
                ?>


            </div>
        </div>
    </div>
    <div class="panel">
        <div class="panel-heading"><a class="accordion-toggle" data-toggle="collapse"
                                      data-parent="#accordion2" href="components.html#collapseThree">
                Lodges </a></div>
        <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body text-small">


                <?php
                foreach($hotels as $hotel)
                {
                    ?>


                    <?php

                    if($hotel->hotel_type=='lodge')
                    {
                        ?>

                        <a href="<?php echo(base_url()); ?>pins/view_hotel/<?php echo($hotel->hotel_id); ?>"  class="item-media "><div class=""><img
                                    src="<?php echo(base_url()); ?>files/<?php echo($hotel->image); ?>">

                                <div class="desc"><h4><?php echo($hotel->hotel_name); ?> &nbsp;&nbsp;(<i class="fa fa-star"></i> <?php  echo(get_hotel_rating($hotel->hotel_id)); ?> ) </h4>




                                    <p class="text-muted"><?php if(strlen($hotel->hotel_description)>100)
                                        {
                                            echo(substr($hotel->hotel_description,0,100));
                                        }else
                                        {
                                            echo($hotel->hotel_description);
                                        }
                                        ?></p>
                                </div></a>

                    <?php
                    }
                    ?>


                <?php
                }
                ?>



            </div>
        </div>
    </div>
    <div class="panel">
        <div class="panel-heading"><a class="accordion-toggle" data-toggle="collapse"
                                      data-parent="#accordion2" href="components.html#collapseFour">
                Villas </a></div>
        <div id="collapseFour" class="panel-collapse collapse">
            <div class="panel-body text-small">

                <?php
                foreach($hotels as $hotel)
                {
                    ?>


                    <?php

                    if($hotel->hotel_type=='villa')
                    {
                        ?>

                        <a href="<?php echo(base_url()); ?>pins/view_hotel/<?php echo($hotel->hotel_id); ?>"  class="item-media "><div class=""><img
                                    src="<?php echo(base_url()); ?>files/<?php echo($hotel->image); ?>">

                                <div class="desc"><h4><?php echo($hotel->hotel_name); ?> &nbsp;&nbsp;(<i class="fa fa-star"></i> <?php  echo(get_hotel_rating($hotel->hotel_id)); ?> ) </h4>




                                    <p class="text-muted"><?php if(strlen($hotel->hotel_description)>100)
                                        {
                                            echo(substr($hotel->hotel_description,0,100));
                                        }else
                                        {
                                            echo($hotel->hotel_description);
                                        }
                                        ?></p>
                                </div></a>

                    <?php
                    }
                    ?>


                <?php
                }
                ?>


            </div>
        </div>
    </div>
    <div class="panel">
        <div class="panel-heading"><a class="accordion-toggle" data-toggle="collapse"
                                      data-parent="#accordion2" href="components.html#collapseFive">
                Hotels </a></div>
        <div id="collapseFive" class="panel-collapse collapse">
            <div class="panel-body text-small">

                <?php
                foreach($hotels as $hotel)
                {
                    ?>


                    <?php

                    if($hotel->hotel_type=='motel')
                    {
                        ?>

                        <a href="<?php echo(base_url()); ?>pins/view_hotel/<?php echo($hotel->hotel_id); ?>"  class="item-media "><div class=""><img
                                    src="<?php echo(base_url()); ?>files/<?php echo($hotel->image); ?>">

                                <div class="desc"><h4><?php echo($hotel->hotel_name); ?> &nbsp;&nbsp;(<i class="fa fa-star"></i> <?php  echo(get_hotel_rating($hotel->hotel_id)); ?> ) </h4>




                                    <p class="text-muted"><?php if(strlen($hotel->hotel_description)>100)
                                        {
                                            echo(substr($hotel->hotel_description,0,100));
                                        }else
                                        {
                                            echo($hotel->hotel_description);
                                        }
                                        ?></p>
                                </div></a>

                    <?php
                    }
                    ?>


                <?php
                }
                ?>



            </div>
        </div>
    </div>
    </div>





    </div>




    </div>
    </div>
    </div>

<?php
}
else
{

    echo('<h1>No hotel added</h1>');
}

?>



















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
<script src="<?php echo(base_url()); ?>public/js/app.v2.js"></script>
<script src="<?php echo(base_url()); ?>public/js/prettyphoto/jquery.prettyPhoto_2.js"></script>
<script src="<?php echo(base_url()); ?>public/js/grid/jquery.grid-a-licious.min_2.js"></script>
<script src="<?php echo(base_url()); ?>public/js/grid/gallery_2.js"></script>
</body>
</html>
