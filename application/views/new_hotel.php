<?php include_once('admin_header.php') ?>
<!-- / header --> <!-- nav -->

<!-- / nav -->
<section id="content">
    <section class="main padder">

        <div class="row">
            <div class="col-sm-6">
                <section class="panel">
                    <div class="panel-body">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo(base_url()); ?>pins/do_upload_hotel" data-validate="parsley">


                            <div class="form-group"><label class="col-lg-3 control-label">Hotel name</label>

                                <div class="col-lg-8"><input type="text" name="hotel_name" placeholder="Hotel name"
                                                             data-required="true" class="form-control"></div>
                            </div>

                            <div class="form-group"><label class="col-lg-3 control-label">Hotel image</label>

                                <div class="col-lg-8"><input type="file" name="userfile" placeholder="select image"
                                                             data-required="true" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-lg-3 control-label">Hotel description</label>

                                <div class="col-lg-8"><textarea name="hotel_description" placeholder="Hotel description" rows="5" class="form-control"
                                                                data-trigger="keyup"
                                                                data-rangelength="[20,200]"></textarea>


                                </div>
                            </div>

                            <div class="form-group"><label class="col-lg-3 control-label">Hotel type</label>

                                <div class="col-lg-4"><select name="hotel_type" class="form-control">
                                        <option value="motel">motel</option>
                                        <option value="villa">villa</option>
                                        <option value="lodge">lodge</option>
                                        <option value="resort">resort</option>
                                        <option value="apartments">apartments</option>
                                    </select></div>
                            </div>

                            <div>
                                <input type="hidden" name="longitude" id="long" value="">
                                <input type="hidden" name="latitude" id="lat" value="">

                                <section class="panel">
                                    <header class="panel-heading">Please drag the marker to the location of the hotel on the map</header>
                                    <div class="panel-body">
                                        <div id="map2" style="height:362px"></div>
                                    </div>
                                </section>
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
<script >



    var latlng = new google.maps.LatLng(-3.5078238, 39.9078863);
    var map = new google.maps.Map(document.getElementById('map2'), {
        center: latlng,
        zoom: 11,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        title: 'Set lat/lon values for this property',
        draggable: true
    });

    google.maps.event.addListener(marker, 'dragend', function (event) {
        document.getElementById("lat").value = this.getPosition().lat();
        document.getElementById("long").value = this.getPosition().lng();
    });

</script>
</body>
</html>