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
                            src="<?php echo(base_url()); ?>files/<?php  echo($hotel->image); ?>">

                        <div class="desc"><h4><?php  echo($hotel->hotel_name."    "); ?>&nbsp;&nbsp;(<i class="fa fa-star"></i> <?php  echo(get_hotel_rating($hotel->hotel_id)); ?> )</h4>




                            <form class="form-horizontal" method="post"  action="<?php echo(base_url()); ?>pins/add_hotel_booking" data-validate="parsley">


                                <input type="hidden" value="<?php echo($hotel->hotel_id); ?>" name="hotel_id" placeholder="Hotel name"
                                       data-required="true" class="form-control">


                                <div class="form-group"><label class="col-lg-3 control-label">Number of people</label>

                                    <div class="col-lg-4"><select name="no_of_people" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select></div>
                                </div>



                                <div class="form-group"><label class="col-lg-3 control-label">Room type</label>

                                    <div class="col-lg-4"><select name="room_id" class="form-control">
                                            <?php $rooms=get_rooms($hotel->hotel_id);

                                            if(!empty($rooms))
                                            {
                                                foreach($rooms as $room)
                                                {
                                                    ?>

                                                    <option value="<?php echo($room->room_id); ?>"><?php echo($room->room_type); ?></option>

                                                <?php
                                                }
                                            }

                                            ?>


                                        </select></div>
                                </div>



                                <div class="form-group"><label class="col-lg-3 control-label">Number of rooms</label>

                                    <div class="col-lg-4"><select name="no_of_rooms" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select></div>
                                </div>



                                <div class="form-group"><label class="col-lg-3 control-label">From (yyyy-mm-dd)</label>

                                    <input required name="date_from" class=" form-control datepicker"
                                           type="text" value=""
                                           data-date-format="yyyy-mm-dd">
                                </div>


                                <div class="form-group"><label class="col-lg-3 control-label">To (yyyy-mm-dd)</label>

                                    <input required name="date_to" class=" form-control datepicker"
                                           type="text" value=""
                                           data-date-format="yyyy-mm-dd">
                                </div>






                                <div class="form-group">
                                    <div class="col-lg-9 col-lg-offset-3">
                                        <a href="<?php echo(base_url()); ?>pins"><button class="btn btn-white">Cancel</button></a>
                                        <button type="submit" value="submit" class="btn btn-primary">Book</button>
                                    </div>
                                </div>
                            </form>



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
</body>
</html>