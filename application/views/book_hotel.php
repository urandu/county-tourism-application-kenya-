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
        Motels </a></div>
<div id="collapseOne" class="panel-collapse collapse">
    <div class="panel-body text-small">




        <?php
        foreach($hotels as $hotel)
        {

        ?>




        <?php

        if($hotel->hotel_type=='motel')
        {
        ?>

            <img
                src="<?php echo(base_url()); ?>files/<?php echo($hotel->image); ?>">

            <div class="desc"><h4><?php echo($hotel->hotel_name); ?> &nbsp;&nbsp;(<i class="fa fa-star"></i> <?php  echo(get_hotel_rating($hotel->hotel_id)); ?> ) </h4>


                <p class="text-muted">




                    <a href="<?php echo(base_url()); ?>pins/hotel_b/<?php echo($hotel->hotel_id); ?>" ><button class="btn btn-primary" id="btn_<?php echo($hotel->hotel_id); ?>" >Book </button></a>


                    <a href="<?php echo(base_url()); ?>pins/view_hotel/<?php echo($hotel->hotel_id); ?>"  class="item-media "><div class="">
                            <p class="text-muted"><?php if(strlen($hotel->hotel_description)>100)
                                {
                                    echo(substr($hotel->hotel_description,0,100));
                                }else
                                {
                                    echo($hotel->hotel_description);
                                }
                                ?></p></div></a>
            </div>

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
        Villas </a></div>
<div id="collapseTwo" class="panel-collapse collapse">
    <div class="panel-body text-small">

        <?php
        foreach($hotels as $hotel)
        {

        ?>




        <?php

        if($hotel->hotel_type=='villa')
        {
        ?>

            <img
                src="<?php echo(base_url()); ?>files/<?php echo($hotel->image); ?>">

            <div class="desc"><h4><?php echo($hotel->hotel_name); ?> &nbsp;&nbsp;(<i class="fa fa-star"></i> <?php  echo(get_hotel_rating($hotel->hotel_id)); ?> ) </h4>


                <p class="text-muted">




                    <a href="<?php echo(base_url()); ?>pins/hotel_b/<?php echo($hotel->hotel_id); ?>" ><button class="btn btn-primary" id="btn_<?php echo($hotel->hotel_id); ?>" >Book </button></a>


                    <a href="<?php echo(base_url()); ?>pins/view_hotel/<?php echo($hotel->hotel_id); ?>"  class="item-media "><div class="">
                            <p class="text-muted"><?php if(strlen($hotel->hotel_description)>100)
                                {
                                    echo(substr($hotel->hotel_description,0,100));
                                }else
                                {
                                    echo($hotel->hotel_description);
                                }
                                ?></p></div></a>
            </div>

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

            <img
                src="<?php echo(base_url()); ?>files/<?php echo($hotel->image); ?>">

            <div class="desc"><h4><?php echo($hotel->hotel_name); ?> &nbsp;&nbsp;(<i class="fa fa-star"></i> <?php  echo(get_hotel_rating($hotel->hotel_id)); ?> ) </h4>


                <p class="text-muted">




                    <a href="<?php echo(base_url()); ?>pins/hotel_b/<?php echo($hotel->hotel_id); ?>" ><button class="btn btn-primary" id="btn_<?php echo($hotel->hotel_id); ?>" >Book </button></a>


                    <a href="<?php echo(base_url()); ?>pins/view_hotel/<?php echo($hotel->hotel_id); ?>"  class="item-media "><div class="">
                            <p class="text-muted"><?php if(strlen($hotel->hotel_description)>100)
                                {
                                    echo(substr($hotel->hotel_description,0,100));
                                }else
                                {
                                    echo($hotel->hotel_description);
                                }
                                ?></p></div></a>
            </div>

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
            Resorts </a></div>
    <div id="collapseFour" class="panel-collapse collapse">
        <div class="panel-body text-small">

            <?php
            foreach($hotels as $hotel)
            {

            ?>




            <?php

            if($hotel->hotel_type=='resort')
            {
            ?>

                <img
                    src="<?php echo(base_url()); ?>files/<?php echo($hotel->image); ?>">

                <div class="desc"><h4><?php echo($hotel->hotel_name); ?> &nbsp;&nbsp;(<i class="fa fa-star"></i> <?php  echo(get_hotel_rating($hotel->hotel_id)); ?> ) </h4>


                    <p class="text-muted">




                        <a href="<?php echo(base_url()); ?>pins/hotel_b/<?php echo($hotel->hotel_id); ?>" ><button class="btn btn-primary" id="btn_<?php echo($hotel->hotel_id); ?>" >Book </button></a>


                        <a href="<?php echo(base_url()); ?>pins/view_hotel/<?php echo($hotel->hotel_id); ?>"  class="item-media "><div class="">
                                <p class="text-muted"><?php if(strlen($hotel->hotel_description)>100)
                                    {
                                        echo(substr($hotel->hotel_description,0,100));
                                    }else
                                    {
                                        echo($hotel->hotel_description);
                                    }
                                    ?></p></div></a>
                </div>

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
                Apartments </a></div>
        <div id="collapseFive" class="panel-collapse collapse">
            <div class="panel-body text-small">


                <?php
                foreach($hotels as $hotel)
                {

                ?>




                <?php

                if($hotel->hotel_type=='apartments')
                {
                ?>

                <img
                    src="<?php echo(base_url()); ?>files/<?php echo($hotel->image); ?>">

                <div class="desc"><h4><?php echo($hotel->hotel_name); ?> &nbsp;&nbsp;(<i class="fa fa-star"></i> <?php  echo(get_hotel_rating($hotel->hotel_id)); ?> ) </h4>


                    <p class="text-muted">




                        <a href="<?php echo(base_url()); ?>pins/hotel_b/<?php echo($hotel->hotel_id); ?>" ><button class="btn btn-primary" id="btn_<?php echo($hotel->hotel_id); ?>" >Book </button></a>


                        <a href="<?php echo(base_url()); ?>pins/view_hotel/<?php echo($hotel->hotel_id); ?>"  class="item-media "><div class="">
                                <p class="text-muted"><?php if(strlen($hotel->hotel_description)>100)
                                    {
                                        echo(substr($hotel->hotel_description,0,100));
                                    }else
                                    {
                                        echo($hotel->hotel_description);
                                    }
                                    ?></p></div></a>
                            </div>

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
<!-- fuelux -->
<script src="<?php echo(base_url()); ?>public/js/fuelux/fuelux_2.js"></script>
<!-- datepicker -->
<script src="<?php echo(base_url()); ?>public/js/datepicker/bootstrap-datepicker.js"></script>
<!-- slider -->
<script src="<?php echo(base_url()); ?>public/js/slider/bootstrap-slider.js"></script>
<!-- file input -->
<script src="<?php echo(base_url()); ?>public/js/file-input/bootstrap.file-input.js"></script>
<!-- combodate -->
<script src="<?php echo(base_url()); ?>public/js/combodate/moment.min.js"></script>
<script src="<?php echo(base_url()); ?>public/js/combodate/combodate.js"></script>
<!-- parsley -->
<script src="<?php echo(base_url()); ?>public/js/parsley/parsley.min_2.js"></script>
<!-- select2 -->
<script src="<?php echo(base_url()); ?>public/js/select2/select2.min_2.js"></script>

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
<script>

    function book_hotel(hotel_id)
    {
        number_of_people='#num_'+hotel_id+'';
        date='#date_'+hotel_id+'';
        button='#btn_'+hotel_id+'';

        my_num=$(number_of_people).val();
        // alert(tipper_id);


        baseUrl=$('#base_url').val();
        if ($(number_of_people).val().length > 0) {

            // Stop form from submitting normally
            //event.preventDefault();

            var btn = $(button);
            btn.val("booking");
            num_p=$(number_of_people).val();
            my_date=$(date).val();

            url = baseUrl+"pins/add_hotel_booking";

            var posting = $.post(url, { date_of_trip: my_date ,number_of_people:num_p ,hotel_id:hotel_id});


            posting.error(function () {
                $("#error_"+hotel_id).show();
                window.setTimeout(function () { $("#error_"+hotel_id).hide(); }, 5000);
                // alert("error occurred, could not post tipper");
                btn.val('book');
            });
            posting.success(function(data){

                if (data == 1) {

                    $("#success_"+hotel_id).show();
                    window.setTimeout(function () { $("#success_"+hotel_id).hide(); }, 5000);
                    $(number_of_people).hide();
                    $(date).hide();
                    //alert(data);
                }
                else if (data == 2) {
                    //
                } else if (data == 3) {
                    //
                }

                btn.val('book');
            });
            // Put the results in a div
            posting.done(function (data) {
                /* var content = $( data ).find( "#content" );
                 $( "#result" ).empty().append( content );*/

                if (data == 1) {

                    $("#success_"+hotel_id).show();
                    window.setTimeout(function () { $("#success_"+hotel_id).hide(); }, 5000);
                    $(number_of_people).hide();
                    $(date).hide();
                    //alert(data);
                }
                else if (data == 2) {
                    //
                } else if (data == 3) {
                    //
                }

                btn.val('book');
            });
            $(number_of_people).hide();
            $('#pp_'+hotel_id).hide();
            $('#pp1_'+hotel_id).hide();
            $(date).hide();
            btn.hide();
            $("#btn1_"+hotel_id).show();
            $('#pp1_'+hotel_id).text('Booked');
            $('#pp1_'+hotel_id).show();

        }




    }


</script>

</body>
</html>
