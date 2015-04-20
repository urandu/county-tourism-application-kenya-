<?php include_once('header.php') ?>

<!-- / nav -->
<section id="content">
    <section class="main ">







        <form class="form-horizontal" method="post"  action="<?php echo(base_url()); ?>pins/plan_trip2" data-validate="parsley">


            <p>Enter start date</p>

            <div class="m-b row">
                <div class="col-lg-3"><input required name="start" class="input-sm form-control datepicker" size="8"
                                             type="text" value=""
                                             data-date-format="yyyy-mm-dd"></div>
            </div>


            <p>Enter end date</p>

            <div class="m-b row">
                <div class="col-lg-3"><input required name="end" class="input-sm form-control datepicker" size="8"
                                             type="text" value=""
                                             data-date-format="yyyy-mm-dd"></div>
            </div>


            <div class="form-group">
                <div class="col-lg-9 col-lg-offset-3">
                    <!--<button type="submit" class="btn btn-white">Cancel</button>-->
                    <button type="submit"  class="btn btn-primary">next</button>
                </div>
            </div>
        </form>


        <div class="row">
            <div class="col-lg-6"> <!-- .accordion -->
                <div class="panel-group m-b" id="accordion2">
                    <div class="panel">
                        <div class="panel-heading"><a class="accordion-toggle" data-toggle="collapse"
                                                      data-parent="#accordion2" href="components.html#collapseOne">
                                Collapsible Group Item #1 </a></div>
                        <div id="collapseOne" class="panel-collapse in">
                            <div class="panel-body text-small"> Anim pariatur cliche reprehenderit, enim eiusmod high
                                life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                                of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading"><a class="accordion-toggle" data-toggle="collapse"
                                                      data-parent="#accordion2" href="components.html#collapseTwo">
                                Collapsible Group Item #2 </a></div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body text-small"> Anim pariatur cliche reprehenderit, enim eiusmod high
                                life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                                of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading"><a class="accordion-toggle" data-toggle="collapse"
                                                      data-parent="#accordion2" href="components.html#collapseThree">
                                Collapsible Group Item #3 </a></div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body text-small"> Anim pariatur cliche reprehenderit, enim eiusmod high
                                life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                                of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
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
</body>
</html>