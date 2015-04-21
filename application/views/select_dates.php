<?php include_once('header.php') ?>
<!-- / nav -->
<section id="content">
<section class="main">





<?php if(isset($destinations) && $destinations>0)
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

                    <img
                        src="<?php echo(base_url()); ?>files/<?php echo($destination->image); ?>">

                    <div class="desc"><h4><?php echo($destination->destination_name); ?> &nbsp;&nbsp;(<i class="fa fa-star"></i> <?php  echo(get_destination_rating($destination->destination_id)); ?> ) </h4>


                        <p class="text-muted">
                            <?php
                            if($destination->price > 0)
                            {
                                echo("<strong>Entrance fee: </strong>".$destination->price."  (per person)");
                            }
                            ?>
                        <p id="success_<?php echo($destination->destination_id); ?>"  class="hide" > Successfully booked</p>
                        <p id="error_<?php echo($destination->destination_id); ?>"  class="hide" > Error in booking</p>
                        <P id="pp1_<?php echo($destination->destination_id); ?>" >Number of persons</P>
                        <select id="num_<?php echo($destination->destination_id); ?>" name="number_of_people" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>

                        <p id="pp_<?php echo($destination->destination_id); ?>" >select date</p>
                        <input id="date_<?php echo($destination->destination_id); ?>" class="input-sm form-control datepicker" size="16"
                               type="text" value=""
                               data-date-format="yyyy-mm-dd">
                        </p>
                        <button class="btn btn-primary" id="btn_<?php echo($destination->destination_id); ?>" onclick="book_destination(<?php echo($destination->destination_id); ?>)" >Book</button>
                        <button class="btn hide btn-primary" id="btn1_<?php echo($destination->destination_id); ?>"  >Booked</button>

                        <a href="<?php echo(base_url()); ?>pins/view_destination/<?php echo($destination->destination_id); ?>"  class="item-media "><div class="">
                                <p class="text-muted"><?php if(strlen($destination->destination_description)>100)
                                    {
                                        echo(substr($destination->destination_description,0,100)."...</a>");
                                    }else
                                    {
                                        echo($destination->destination_description."</a>");
                                    }
                                    ?></p>
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
                    Game Parks </a></div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body text-small">

                    <?php
                    foreach($destinations as $destination)
                    {

                    ?>




                    <?php

                    if($destination->destination_type=='game park')
                    {
                    ?>

                    <img
                        src="<?php echo(base_url()); ?>files/<?php echo($destination->image); ?>">

                    <div class="desc"><h4><?php echo($destination->destination_name); ?> &nbsp;&nbsp;(<i class="fa fa-star"></i> <?php  echo(get_destination_rating($destination->destination_id)); ?> ) </h4>


                        <p class="text-muted">
                            <?php
                            if($destination->price > 0)
                            {
                                echo("<strong>Entrance fee: </strong>".$destination->price."  (per person)");
                            }
                            ?>
                        <p id="success_<?php echo($destination->destination_id); ?>"  class="hide" > Successfully booked</p>
                        <p id="error_<?php echo($destination->destination_id); ?>"  class="hide" > Error in booking</p>
                        <P id="pp1_<?php echo($destination->destination_id); ?>" >Number of persons</P>
                        <select id="num_<?php echo($destination->destination_id); ?>" name="number_of_people" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>

                        <p id="pp_<?php echo($destination->destination_id); ?>" >select date</p>
                        <input id="date_<?php echo($destination->destination_id); ?>" class="input-sm form-control datepicker" size="16"
                               type="text" value=""
                               data-date-format="yyyy-mm-dd">
                        </p>
                        <button class="btn btn-primary" id="btn_<?php echo($destination->destination_id); ?>" onclick="book_destination(<?php echo($destination->destination_id); ?>)" >Book</button>
                        <button class="btn hide btn-primary" id="btn1_<?php echo($destination->destination_id); ?>"  >Booked</button>

                        <a href="<?php echo(base_url()); ?>pins/view_destination/<?php echo($destination->destination_id); ?>"  class="item-media "><div class="">
                                <p class="text-muted"><?php if(strlen($destination->destination_description)>100)
                                    {
                                        echo(substr($destination->destination_description,0,100)."...</a>");
                                    }else
                                    {
                                        echo($destination->destination_description."</a>");
                                    }
                                    ?></p>
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
                    Sporting Activities </a></div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body text-small">


                    <?php
                    foreach($destinations as $destination)
                    {

                    ?>




                    <?php

                    if($destination->destination_type=='sporting activities')
                    {
                    ?>

                    <img
                        src="<?php echo(base_url()); ?>files/<?php echo($destination->image); ?>">

                    <div class="desc"><h4><?php echo($destination->destination_name); ?> &nbsp;&nbsp;(<i class="fa fa-star"></i> <?php  echo(get_destination_rating($destination->destination_id)); ?> ) </h4>


                        <p class="text-muted">
                            <?php
                            if($destination->price > 0)
                            {
                                echo("<strong>Entrance fee: </strong>".$destination->price."  (per person)");
                            }
                            ?>
                        <p id="success_<?php echo($destination->destination_id); ?>"  class="hide" > Successfully booked</p>
                        <p id="error_<?php echo($destination->destination_id); ?>"  class="hide" > Error in booking</p>
                        <P id="pp1_<?php echo($destination->destination_id); ?>" >Number of persons</P>
                        <select id="num_<?php echo($destination->destination_id); ?>" name="number_of_people" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>

                        <p id="pp_<?php echo($destination->destination_id); ?>" >select date</p>
                        <input id="date_<?php echo($destination->destination_id); ?>" class="input-sm form-control datepicker" size="16"
                               type="text" value=""
                               data-date-format="yyyy-mm-dd">
                        </p>
                        <button class="btn btn-primary" id="btn_<?php echo($destination->destination_id); ?>" onclick="book_destination(<?php echo($destination->destination_id); ?>)" >Book</button>
                        <button class="btn hide btn-primary" id="btn1_<?php echo($destination->destination_id); ?>"  >Booked</button>

                        <a href="<?php echo(base_url()); ?>pins/view_destination/<?php echo($destination->destination_id); ?>"  class="item-media "><div class="">
                                <p class="text-muted"><?php if(strlen($destination->destination_description)>100)
                                    {
                                        echo(substr($destination->destination_description,0,100)."...</a>");
                                    }else
                                    {
                                        echo($destination->destination_description."</a>");
                                    }
                                    ?></p>
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
                    Cultural Sites </a></div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body text-small">

                    <?php
                    foreach($destinations as $destination)
                    {

                    ?>




                    <?php

                    if($destination->destination_type=='cultural site')
                    {
                    ?>

                    <img
                        src="<?php echo(base_url()); ?>files/<?php echo($destination->image); ?>">

                    <div class="desc"><h4><?php echo($destination->destination_name); ?> &nbsp;&nbsp;(<i class="fa fa-star"></i> <?php  echo(get_destination_rating($destination->destination_id)); ?> ) </h4>


                        <p class="text-muted">
                            <?php
                            if($destination->price > 0)
                            {
                                echo("<strong>Entrance fee: </strong>".$destination->price."  (per person)");
                            }
                            ?>
                        <p id="success_<?php echo($destination->destination_id); ?>"  class="hide" > Successfully booked</p>
                        <p id="error_<?php echo($destination->destination_id); ?>"  class="hide" > Error in booking</p>
                        <P id="pp1_<?php echo($destination->destination_id); ?>" >Number of persons</P>
                        <select id="num_<?php echo($destination->destination_id); ?>" name="number_of_people" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>

                        <p id="pp_<?php echo($destination->destination_id); ?>" >select date</p>
                        <input id="date_<?php echo($destination->destination_id); ?>" class="input-sm form-control datepicker" size="16"
                               type="text" value=""
                               data-date-format="yyyy-mm-dd">
                        </p>
                        <button class="btn btn-primary" id="btn_<?php echo($destination->destination_id); ?>" onclick="book_destination(<?php echo($destination->destination_id); ?>)" >Book</button>
                        <button class="btn hide btn-primary" id="btn1_<?php echo($destination->destination_id); ?>"  >Booked</button>

                        <a href="<?php echo(base_url()); ?>pins/view_destination/<?php echo($destination->destination_id); ?>"  class="item-media "><div class="">
                                <p class="text-muted"><?php if(strlen($destination->destination_description)>100)
                                    {
                                        echo(substr($destination->destination_description,0,100)."...</a>");
                                    }else
                                    {
                                        echo($destination->destination_description."</a>");
                                    }
                                    ?></p>
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
                    Museums </a></div>
            <div id="collapseFive" class="panel-collapse collapse">
                <div class="panel-body text-small">


                    <?php
                    foreach($destinations as $destination)
                    {

                        ?>




                    <?php

                    if($destination->destination_type=='museum')
                    {
                    ?>

                    <img
                        src="<?php echo(base_url()); ?>files/<?php echo($destination->image); ?>">

                    <div class="desc"><h4><?php echo($destination->destination_name); ?> &nbsp;&nbsp;(<i class="fa fa-star"></i> <?php  echo(get_destination_rating($destination->destination_id)); ?> ) </h4>


                        <p class="text-muted">
                            <?php
                            if($destination->price > 0)
                            {
                                echo("<strong>Entrance fee: </strong>".$destination->price."  (per person)");
                            }
                            ?>
                        <p id="success_<?php echo($destination->destination_id); ?>"  class="hide" > Successfully booked</p>
                        <p id="error_<?php echo($destination->destination_id); ?>"  class="hide" > Error in booking</p>
                        <P id="pp1_<?php echo($destination->destination_id); ?>" >Number of persons</P>
                        <select id="num_<?php echo($destination->destination_id); ?>" name="number_of_people" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>

                        <p id="pp_<?php echo($destination->destination_id); ?>" >select date</p>
                        <input id="date_<?php echo($destination->destination_id); ?>" class="input-sm form-control datepicker" size="16"
                               type="text" value=""
                               data-date-format="yyyy-mm-dd">
                        </p>
                        <button class="btn btn-primary" id="btn_<?php echo($destination->destination_id); ?>" onclick="book_destination(<?php echo($destination->destination_id); ?>)" >Book</button>
                        <button class="btn hide btn-primary" id="btn1_<?php echo($destination->destination_id); ?>"  >Booked</button>

                        <a href="<?php echo(base_url()); ?>pins/view_destination/<?php echo($destination->destination_id); ?>"  class="item-media "><div class="">
                                <p class="text-muted"><?php if(strlen($destination->destination_description)>100)
                                    {
                                        echo(substr($destination->destination_description,0,100)."...</a>");
                                    }else
                                    {
                                        echo($destination->destination_description."</a>");
                                    }
                                    ?></p>
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

    function book_destination(destination_id)
    {
        number_of_people='#num_'+destination_id+'';
        date='#date_'+destination_id+'';
        button='#btn_'+destination_id+'';

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

            url = baseUrl+"pins/add_destination_booking";

            var posting = $.post(url, { date_of_trip: my_date ,number_of_people:num_p ,destination_id:destination_id});


            posting.error(function () {
                $("#error_"+destination_id).show();
                window.setTimeout(function () { $("#error_"+destination_id).hide(); }, 5000);
                // alert("error occurred, could not post tipper");
                btn.val('book');
            });
            posting.success(function(data){

                if (data == 1) {

                    $("#success_"+destination_id).show();
                    window.setTimeout(function () { $("#success_"+destination_id).hide(); }, 5000);
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

                    $("#success_"+destination_id).show();
                    window.setTimeout(function () { $("#success_"+destination_id).hide(); }, 5000);
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
            $('#pp_'+destination_id).hide();
            $('#pp1_'+destination_id).hide();
            $(date).hide();
            btn.hide();
            $("#btn1_"+destination_id).show();
            $('#pp1_'+destination_id).text('Booked');
            $('#pp1_'+destination_id).show();

        }




    }


</script>

</body>
</html>
