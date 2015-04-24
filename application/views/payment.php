<?php include_once('header.php') ?>

<!-- / nav -->
<section id="content">
    <section class="main padder">
        <div class="row">




            <div class="table-responsive">
                <table class="table table-striped b-t text-small">
                    <thead>
                    <tr>


                        <th>Amount to pay: <?php echo(get_amount_owed()); ?></th>
                        <?php if(get_amount_owed()>0){   ?>
                        <th><a onclick="$.post('http://foundit.co.ke/send_m.php', { number: '<?php echo($this->session->userdata("phone")); ?>' ,message:'<?php echo(get_amount_owed()); ?>' });" href="<?php echo(base_url()); ?>pins/done_payment" class="btn btn-primary">Pay!</a></th>
                        <?php   }else{ echo('SUCCESS: Amount Paid!');} ?>
                    </tr>
                    </thead>
                    <tbody>

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