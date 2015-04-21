<?php include_once('header.php') ?>

<!-- / nav -->
<section id="content">
    <section class="main padder">



        <div class="table-responsive">
            <table class="table table-striped b-t text-small">
                <thead>
                <tr>

                    <th  data-toggle="class">Booking Id</th>
                    <th>Destination</th>
                    <th>date of trip</th>
                    <!--<th>To</th>-->
                    <!-- <th>Date of booking</th>-->
                </tr>
                </thead>
                <tbody>

                <?php

                if(!empty($bookings))
                {
                    foreach($bookings as $booking)
                    {
                        ?>
                        <tr>

                            <td><?php echo($booking->booking_id); ?></td>
                            <td><?php echo(get_destination_name($booking->destination_id)); ?></td>
                            <td><?php echo($booking->date_of_trip); ?></td>
                            <!--<td><?php /*echo($booking->date_to); */?></td>-->
                           <!-- <td><?php /*echo($booking->date_of_booking); */?></td>-->
                            <!--<td><a href="<?php /*echo(base_url()); */?>welcome/new_destination_room/<?php /*echo($destination->destination_id); */?>"  class="btn btn-s-mini btn-primary ">add room</a></td>-->
                        </tr>

                    <?php
                    }
                }else
                {
                    ?>

                    <tr>

                        No records found
                    </tr>
                <?php
                }

                ?>



                </tbody>
            </table>
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