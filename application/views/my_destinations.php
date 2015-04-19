<?php include_once('admin_header.php') ?>
<!-- / header --> <!-- nav -->

<!-- / nav -->
<section id="content">
    <section class="main padder">

        <section class="panel">

            <div class="table-responsive">
                <table class="table table-striped b-t text-small">
                    <thead>
                    <tr>

                        <th  data-toggle="class">Destination Name </th>
                        <th>Destination Category</th>
                        <th>Destination Description</th>
                        <th width="30"></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php

                    if(!empty($destinations))
                    {
                        foreach($destinations as $destination)
                        {
                            ?>
                            <tr>

                                <td><?php echo($destination->destination_name); ?></td>
                                <td><?php echo($destination->destination_type); ?></td>
                                <td><?php if(strlen($destination->destination_description)>100)
                                    {
                                        echo(substr($destination->destination_description,0,100));
                                    }else
                                    {
                                        echo($destination->destination_description);
                                    }
                                    ?></td>
                                <!--<td><a href="<?php /*echo(base_url()); */?>welcome/new_destination_room/<?php /*echo($destination->destination_id); */?>"  class="btn btn-s-mini btn-primary ">add room</a></td>-->
                            </tr>

                        <?php
                        }
                    }else
                    {
                        ?>

                        <tr>

                            No hotel found
                        </tr>
                    <?php
                    }

                    ?>



                    </tbody>
                </table>
            </div>

        </section>
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