<?php include_once('header.php') ?>

<!-- / nav -->
<section id="content">
    <section class="main padder">
        <div class="row">

<div class="col-lg-6">
    <section class="panel">
        <header class="panel-heading">
            <form method="post" id="geocoding_form" class="m-b-none">
                <div class="input-group"><input type="text" id="address" name="address"
                                                class="input-sm form-control" placeholder="Search">
                                    <span class="input-group-btn"> <button class="btn btn-sm btn-white" type="submit">
                                            Go!
                                        </button> </span></div>
            </form>
        </header>
        <div class="panel-body">
            <div id="gmap_geocoding" style="height:600px"></div>
        </div>
    </section>







    <section hidden class="panel">
        <header class="panel-heading">Markers</header>
        <div class="panel-body">
            <div id="gmap_marker" style="height:362px"></div>
        </div>
    </section>




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
<script src="http://maps.google.com/maps/api/js"></script>
<script src="<?php echo(base_url()); ?>public/js/maps/gmaps_2.js"></script>
<script src="<?php echo(base_url()); ?>public/js/maps/demo_2.js"></script>
</body>
</html>