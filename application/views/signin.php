<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mobile first web app theme | first</title>
    <meta name="description" content="mobile first, app, web app, responsive, admin dashboard, flat, flat ui">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?php echo(base_url()); ?>public/css/font.css">
    <link rel="stylesheet" href="<?php echo(base_url()); ?>public/css/app.v2.css" type="text/css"/>
    <!--[if lt IE 9]>
    <script src="http://localhost/kilifi/public/js/ie/respond.min.js"></script>
    <script src="http://localhost/kilifi/public/js/ie/html5.js"></script> <![endif]--></head>
<body> <!-- header -->
<header id="header" class="navbar bg bg-black"><a href="#" class="btn btn-link pull-right m-t-mini"><i
        class="fa fa-question fa-lg text-default"></i></a> <a class="navbar-brand" href="#">Kifi County</a>
</header>
<!-- / header -->
<section id="content">
    <div class="main padder">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4 m-t-large">
                <section class="panel">
                    <header class="panel-heading text-center"> Sign in</header>
                    <form action="<?php echo(base_url()); ?>/users/validate" method="post" class="panel-body">
                        <p><?php if(isset($error_message)){

                                echo "Error";} ?></p>
                        <div class="block"><label class="control-label">Email</label> <input type="email"
                                                                                             name="email"
                                                                                             placeholder="test@example.com"
                                                                                             class="form-control"></div>
                        <div class="block"><label class="control-label">Password</label> <input type="password"
                                                                                                id="inputPassword"
                                                                                                name="password"
                                                                                                placeholder="Password"
                                                                                                class="form-control">
                        </div>
                       <!-- <div class="checkbox"><label> <input type="checkbox"> Keep me logged in </label></div>
                        <a href="signin.html#" class="pull-right m-t-mini">
                            <small>Forgot password?</small>
                        </a>-->
                        <button type="submit" class="btn btn-info">Sign in</button>


                        <div class="line line-dashed"></div>
                        <p class="text-muted text-center">
                            <small>Do not have an account?</small>
                        </p>
                        <a href="<?php echo(base_url()); ?>/users/signup" class="btn btn-white btn-block">Create an account</a></form>
                </section>
            </div>
        </div>
    </div>
</section>
<!-- footer -->
<footer id="footer">
    <div class="text-center padder clearfix">
        <p>
            <small>&copy; Kilifi County</small>

    </div>
</footer>
<!-- / footer --> <!-- Bootstrap --> <!-- app -->
<script src="<?php echo(base_url()); ?>public/js/app.v2.js"></script>
</body>
</html>