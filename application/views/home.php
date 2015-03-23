<?php include_once('header.php') ?>

<!-- / nav -->
<section id="content">
    <section class="main padder">
        <div class="row">

            <div class="col-lg-6"> <!-- .crousel slide -->
                <section class="panel">
                    <div class="carousel slide auto panel-body" id="c-slide">
                        <ol class="carousel-indicators hide out">
                            <li data-target="#c-slide" data-slide-to="0" class=""></li>
                            <li data-target="#c-slide" data-slide-to="1" class="active"></li>
                            <li data-target="#c-slide" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item">
                                <img class="img-responsive" src="<?php echo(base_url()); ?>public/images/fall.jpg">
                                <p class="text-center"><em class="h4 text-mute">Welcome to Kilifi.</em><br>
                                    <small class="text-muted">Experience hospitality</small>
                                </p>
                            </div>
                            <div class="item active">
                                <img class="img-responsive" src="<?php echo(base_url()); ?>public/images/hotel.jpg">
                                <p class="text-center"><em class="h4 text-mute">World class hotels </em><br>
                                    <small class="text-muted">Accommodations</small>
                                </p>
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="<?php echo(base_url()); ?>public/images/amboseli.jpg">
                                <p class="text-center"><em class="h4 text-mute">Top Tour Destinations</em><br>
                                    <small class="text-muted">Museums/Old ruins/Game parks</small>
                                </p>
                            </div>
                        </div>
                        <a class="left carousel-control" href="components.html#c-slide" data-slide="prev"> <i class="fa fa-chevron-left"></i> </a> <a class="right carousel-control" href="components.html#c-slide" data-slide="next"> <i class="fa fa-chevron-right"></i> </a>


                    </div>


                </section>
                <!-- / .carousel slide -->

            </div>

        </div>
        <div class="row">
            <div  class="col-lg-6" >
            <p>
                <a href="<?php echo(base_url()); ?>pins/plan_trip" class="btn btn-info btn-block"><i class="fa fa-calendar pull-left"></i>
                    Plan for a trip</a>
            </p>

                <p>
                    <a href="<?php echo(base_url()); ?>pins/destinations" class="btn btn-s-large btn-info btn-block"><i class="fa fa-globe pull-left"></i>
                        View tour destinations</a>
                </p>

                <p>
                    <a href="<?php echo(base_url()); ?>pins/hotels" class="btn btn-info btn-block"><i class="fa fa-credit-card pull-left"></i>
                        View hotels & accommodations</a>
                </p>
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
</body>
</html>