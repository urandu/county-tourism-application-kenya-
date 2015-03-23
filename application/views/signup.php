<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sign up</title>
    <meta name="description" content="mobile first, app, web app, responsive, admin dashboard, flat, flat ui">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?php echo(base_url()); ?>public/css/font.css">
    <link rel="stylesheet" href="<?php echo(base_url()); ?>public/css/app.v2.css" type="text/css"/>
    <!--[if lt IE 9]>
    <script src="http://localhost/kilifi/public/js/ie/respond.min.js"></script>
    <script src="http://localhost/kilifi/public/js/ie/html5.js"></script> <![endif]--></head>
<body> <!-- header -->
<header id="header" class="navbar bg bg-black"><a href="docs.html" class="btn btn-link pull-right m-t-mini"><i
        class="fa fa-question fa-lg text-default"></i></a> <a class="navbar-brand" href="signup.html#">first</a>
</header>
<!-- / header -->
<section id="content">
    <div class="main padder">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4 m-t-large">
                <section class="panel">
                    <header class="panel-heading text-center"> Sign up</header>
                    <form action="<?php echo(base_url()); ?>/users/create_user" method="post" class="panel-body">
                        <div class="block"><label class="control-label">Names</label> <input name="names" type="text"
                                                                                                    placeholder="eg. John kamau"
                                                                                                    class="form-control">
                        </div>

                        <div class="block"><label class="control-label">Phone</label> <input name="phone" type="text"
                                                                                             placeholder="eg. +254726585555"
                                                                                             class="form-control">
                        </div>

                        <div class="block"><label class="control-label">Your email address</label> <input name="email" type="email"
                                                                                                          placeholder="test@example.com"
                                                                                                          class="form-control">
                        </div>
                        <div class="block">

                            <div class="form-group"><label class="control-label">Sex</label>

                                <select name="sex" class="form-control">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                            </div>
                        </div>

                        <div class="block"><label class="control-label">Type a password</label> <input name="password" type="password"
                                                                                                       id="inputPassword"
                                                                                                       placeholder="Password"
                                                                                                       class="form-control">
                        </div>
                        <div class="checkbox"><label> <input type="checkbox"> Agree the <a href="#">terms and
                            policy</a> </label></div>
                        <button type="submit" class="btn btn-info">Sign up</button>
                        <div class="line line-dashed"></div>

                        <div class="line line-dashed"></div>
                        <p class="text-muted text-center">
                            <small>Already have an account?</small>
                        </p>
                        <a href="<?php echo(base_url()); ?>/users/signin" class="btn btn-white btn-block">Sign in</a></form>
                </section>
            </div>
        </div>
    </div>
</section>
<!-- footer -->
<footer id="footer">
    <div class="text-center padder clearfix">
        <p>
            <small>&copy; first 2013, Mobile first web app framework base on Bootstrap</small>
            <br><br> <a href="signup.html#" class="btn btn-xs btn-circle btn-twitter"><i class="fa fa-twitter"></i></a>
            <a href="signup.html#" class="btn btn-xs btn-circle btn-facebook"><i class="fa fa-facebook"></i></a> <a
                href="signup.html#" class="btn btn-xs btn-circle btn-gplus"><i class="fa fa-google-plus"></i></a></p>
    </div>
</footer>
<!-- / footer --> <!-- Bootstrap --> <!-- app -->
<script src="js/app.v2.js"></script>
</body>
</html>