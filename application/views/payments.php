<?php include_once('header.php') ?>

<!-- / nav -->
<section id="content">
    <section class="main padder">
        <div class="row">

<?php $payments=get_amount_paid(); ?>




            <div class="table-responsive">
                <table class="table table-striped b-t text-small">
                    <thead>
                    <tr>

                        <th  data-toggle="class">Date </th>
                        <th>Amount</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php

                    if(!empty($payments))
                    {
                        foreach($payments as $payment)
                        {
                            ?>
                            <tr>

                                <td><?php echo($payment->date_of_booking); ?></td>
                                <td><?php echo($payment->amount_to_be_paid); ?></td>

                            </tr>

                        <?php
                        }
                    }else
                    {
                        ?>

                        <tr>

                            No payments found
                        </tr>
                    <?php
                    }

                    ?>



                    </tbody>
                </table>
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