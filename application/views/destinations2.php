<?php include_once('header.php') ?>
<!-- / nav -->
<section id="content">
    <section class="main">





        <?php if(isset($destinations) && $destinations>0)
        {


            $destinations1=$destinations;
            $destinations2=$destinations;
            $destinations3=$destinations;
            $destinations4=$destinations;
            $destinations5=$destinations;
            ?>
        <div class="row">
            <div class=" m-t">
                <div id="gallery" class="gallery hide">




                        <div class="col-lg-6"> <!-- .accordion -->
                            <div class="panel-group m-b" id="accordion2">
                                <div class="panel">
                                    <div class="panel-heading"><a class="accordion-toggle" data-toggle="collapse"
                                                                  data-parent="#accordion2" href="components.html#collapseOne">
                                            Historic Sites </a></div>
                                    <div id="collapseOne" class="panel-collapse collapse">
                                        <div class="panel-body text-small">

                                            <?php
                                            foreach($destinations as $destination)
                                            {
                                                ?>


                                                <?php

                                                if($destination->destination_type=='historic site')
                                                {
                                                    ?>

                                                    <a href="<?php echo(base_url()); ?>pins/view_destination/<?php echo($destination->destination_id); ?>"  class="item-media "><div class=""><img
                                                                src="<?php echo(base_url()); ?>files/<?php echo($destination->image); ?>">

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
                                                                    ?></p>
                                                            </div>
                                                            </div>
                                                    </a>

                                                <?php
                                                }
                                                ?>


                                            <?php
                                            }
                                            ?>



                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-heading"><a class="accordion-toggle" data-toggle="collapse"
                                                                  data-parent="#accordion2" href="components.html#collapseTwo">
                                            Game Parks </a></div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body text-small">

                                            <?php
                                            foreach($destinations1 as $destination)
                                            {
                                                ?>


                                                <?php

                                                if($destination->destination_type=='game park')
                                                {
                                                    ?>

                                                    <a href="<?php echo(base_url()); ?>pins/view_destination/<?php echo($destination->destination_id); ?>"  class="item-media "><div class=""><img
                                                                src="<?php echo(base_url()); ?>files/<?php echo($destination->image); ?>">

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
                                                                    ?></p>
                                                            </div>
                                                    </div>
                                                    </a>

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
                                            Sporting Activities </a></div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body text-small">


                                            <?php
                                            foreach($destinations2 as $destination)
                                            {
                                                ?>


                                                <?php

                                                if($destination->destination_type=='sporting activities')
                                                {
                                                    ?>

                                                    <a href="<?php echo(base_url()); ?>pins/view_destination/<?php echo($destination->destination_id); ?>"  class="item-media "><div class=""><img
                                                                src="<?php echo(base_url()); ?>files/<?php echo($destination->image); ?>">

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
                                                                    ?></p>
                                                            </div>
                                                    </div>
                                                    </a>

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
                                            Cultural Sites </a></div>
                                    <div id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body text-small">

                                            <?php
                                            foreach($destinations3 as $destination)
                                            {
                                                ?>


                                                <?php

                                                if($destination->destination_type=='cultural site')
                                                {
                                                    ?>

                                                    <a href="<?php echo(base_url()); ?>pins/view_destination/<?php echo($destination->destination_id); ?>"  class="item-media "><div class=""><img
                                                                src="<?php echo(base_url()); ?>files/<?php echo($destination->image); ?>">

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
                                                                    ?></p>
                                                            </div>
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
                                            Museums </a></div>
                                    <div id="collapseFive" class="panel-collapse collapse">
                                        <div class="panel-body text-small">

                                            <?php
                                            foreach($destinations4 as $destination)
                                            {
                                                ?>


                                                <?php

                                                if($destination->destination_type=='museum')
                                                {
                                                    ?>

                                                    <a href="<?php echo(base_url()); ?>pins/view_destination/<?php echo($destination->destination_id); ?>"  class="item-media "><div class=""><img
                                                                src="<?php echo(base_url()); ?>files/<?php echo($destination->image); ?>">

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
                                                                    ?></p>
                                                            </div>
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

            echo('<h1>No destination added</h1>');
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
