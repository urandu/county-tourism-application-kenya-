<?php include_once('admin_header.php') ?>
<!-- / nav -->
<section id="content">
    <section class="main">



        <section class="panel">
            <header class="panel-heading font-bold">Prices/ Time plot </header>
            <div class="panel-body">
                <div id="flot-color" style="height:250px"></div>
            </div>
            <footer class="panel-footer">
                <div class="row text-center">
                    <div class="col-xs-3 b-r"><p class="h3 font-bold m-t">60</p>

                        <p class="text-muted">Bookings</p></div>
                    <div class="col-xs-3 b-r"><p class="h3 font-bold m-t">11,450</p>

                        <p class="text-muted">views</p></div>

                </div>
            </footer>
        </section>




        <div class="col-lg-8">
            <section class="panel">
                <header class="panel-heading"> Stats</header>
                <div class="panel-body">
                    <div class="btn-group" data-toggle="buttons"><label class="btn btn-sm btn-white active"> <input
                                type="radio" name="options" id="option1"> Day </label> </div>
                    <div class="line line-large pull-in"></div>
                    <div class="sparkline" data-type="line" data-resize="true" data-height="205" data-width="100%"
                         data-line-color="#bfea5f" data-fill-color="#f3fce3" data-highlight-line-color="#e1e5e9"
                         data-spot-radius="5"
                         data-composite-data="[160,230,250,300,320,330,280,260,250,280,250,260,250,255,330,345,300,210,200,200,170,180,250,250,200,200,280,270,310,250,280,175]"
                         data-composite-line-color="#a3e2fe" data-composite-fill-color="#e3f6ff"
                         data-data="[120,250,200,325,400,380,250,320,345,250,250,250,200,325,300,365,250,210,200,180,150,160,250,250,250,200,300,310,330,250,320,205]"></div>
                    <ul class="list-inline text-muted axis">
                        <li>12:00<br>am</li>
                        <li>2:00</li>
                        <li>4:00</li>
                        <li>6:00</li>
                        <li>8:00</li>
                        <li>10:00</li>
                        <li>12:00<br>pm</li>
                        <li>2:00</li>
                        <li>4:00</li>
                        <li>6:00</li>
                        <li>8:00</li>
                        <li>10:00</li>
                    </ul>
                </div>
            </section>
        </div>

        <div class="col-lg-4">
            <section class="panel">
                <header class="panel-heading">Hotel revenues according to  categories</header>
                <div class="panel-body text-center">
                    <div class="sparkline inline" data-type="pie" data-height="175"
                         data-slice-colors="['#233445','#3fcf7f','#ff5f5f','#f4c414','#13c4a5']">20,15,5,40,20
                    </div>
                    <div class="line pull-in"></div>
                    <div class="text-mini"><i class="fa fa-circle text-info"></i> motels <i
                            class="fa fa-circle text-success"></i> apartments <i class="fa fa-circle text-danger"></i> resorts
                        <i class="fa fa-circle text-primary"></i> villas <i class="fa fa-circle text-warning"></i> lodges
                    </div>
                </div>
            </section>
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

<!-- Flot -->
<script src="<?php echo(base_url()); ?>public/js/charts/flot/jquery.flot.min_2.js"></script>
<script src="<?php echo(base_url()); ?>public/js/charts/flot/jquery.flot.tooltip.min_2.js"></script>
<script src="<?php echo(base_url()); ?>public/js/charts/flot/jquery.flot.resize_2.js"></script>
<script src="<?php echo(base_url()); ?>public/js/charts/flot/jquery.flot.orderBars_2.js"></script>
<script src="<?php echo(base_url()); ?>public/js/charts/flot/jquery.flot.pie.min_2.js"></script>
<script src="<?php echo(base_url()); ?>public/js/charts/flot/demo_2.js"></script>
</body>
</html>
