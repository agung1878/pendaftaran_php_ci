<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="<?= base_url('assets/'); ?>assets/images/favicon.ico">

        <!-- App title -->
        <title>P M B</title>

        <!-- Bootstrap CSS -->
        <link href="<?= base_url('assets/'); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="<?= base_url('assets/'); ?>assets/css/style.css" rel="stylesheet" type="text/css" />

        <!-- Modernizr js -->
        <script src="<?= base_url('assets/'); ?>assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">

            <div class="account-bg">
                <div class="card-box mb-0">
                    <div class="text-center m-t-20">
                        <a href="index.html" class="logo">
                            <i class="zmdi zmdi-group-work icon-c-logo"></i>
                            <span>p M B</span>
                        </a>
                    </div>
                    <div class="m-t-10 p-20">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h6 class="text-muted text-uppercase m-b-0 m-t-0">Sign In</h6>
                            </div>
                        </div>
                        <?php if(isset($_SESSION['msg'])) {?> <div class="alert alert-danger" role="alert"><?php echo $this->session->flashdata('msg'); ?></div> <?php } ?> 
                        <form class="m-t-20" action="<?php echo base_url('login/auth'); ?>" method="post">

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" required="" name="username" placeholder="Username">
                                    <?php echo form_error('username'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="password" name="password" required="" placeholder="Password">
                                    <?php echo form_error('password'); ?>
                                </div>
                            </div>



                            <div class="form-group text-center row m-t-10">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-rounded waves-effect waves-light" type="submit" value="Login">Login</button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end card-box-->
        </div>
        <!-- end wrapper page -->


        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?= base_url('assets/'); ?>assets/js/jquery.min.js"></script>
        <script src="<?= base_url('assets/'); ?>assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('assets/'); ?>assets/js/detect.js"></script>
        <script src="<?= base_url('assets/'); ?>assets/js/fastclick.js"></script>
        <script src="<?= base_url('assets/'); ?>assets/js/jquery.blockUI.js"></script>
        <script src="<?= base_url('assets/'); ?>assets/js/waves.js"></script>
        <script src="<?= base_url('assets/'); ?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?= base_url('assets/'); ?>assets/js/jquery.scrollTo.min.js"></script>
        <script src="<?= base_url('assets/'); ?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?= base_url('assets/'); ?>../plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="<?= base_url('assets/'); ?>assets/js/jquery.core.js"></script>
        <script src="<?= base_url('assets/'); ?>assets/js/jquery.app.js"></script>

    </body>
</html>