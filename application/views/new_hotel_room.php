<?php include_once('admin_header.php') ?>
<!-- / header --> <!-- nav -->

<!-- / nav -->
<section id="content">
    <section class="main padder">

        <div class="row">
            <div class="col-sm-6">
                <section class="panel">
                    <div class="panel-heading" >
                        Add hotel room
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo(base_url()); ?>welcome/do_upload_hotel_room" data-validate="parsley">




                                <input type="hidden" name="hotel_id" value="<?php echo($hotel_id); ?>" placeholder="Hotel name" data-required="true" class="form-control">


                            <div class="form-group"><label class="col-lg-3 control-label">Room image</label>

                                <div class="col-lg-8"><input type="file" name="userfile" placeholder="select image"
                                                             data-required="true" class="form-control"></div>
                            </div>

                            <div class="form-group"><label class="col-lg-3 control-label">Room type</label>

                                <div class="col-lg-8"><input type="text" name="room_type" placeholder="Room type"
                                                             data-required="true" class="form-control"></div>
                            </div>

                            <div class="form-group"><label class="col-lg-3 control-label">Number of people</label>

                                <div class="col-lg-4"><select name="number_of_people" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select></div>
                            </div>

                            <div class="form-group"><label class="col-lg-3 control-label">Price per night</label>

                                <div class="col-lg-8"><input type="text" name="price" placeholder="price per night"
                                                             data-required="true" class="form-control"></div>
                            </div>



                            <div class="form-group">
                                <div class="col-lg-9 col-lg-offset-3">
                                    <button type="submit" class="btn btn-white">Cancel</button>
                                    <button type="submit" value="upload" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
<script src="http://maps.google.com/maps/api/js"></script>
<script src="<?php echo(base_url()); ?>public/js/maps/gmaps_2.js"></script>
<script src="<?php echo(base_url()); ?>public/js/maps/demo_2.js"></script>

</body>
</html>