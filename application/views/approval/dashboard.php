<!doctype html>
<html lang="en">

    <head>
        <?php $this->load->view("_partials/head.php") ?>
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <?php $this->load->view("_partials/topbar.php") ?>

            <?php $this->load->view("approval/sidebar.php") ?>

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">Dashboard</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <!-- start content here -->
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-layers float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase m-b-20">Pendaftar</h6>
                                    <h2 class="m-b-20" data-plugin="counterup"><?php echo $pendaftar;?></h2>
                                    <span class="badge badge-success"> +11% </span> <span class="text-muted">From previous period</span>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-clock float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase m-b-20">Waiting</h6>
                                    <h2 class="m-b-20"><span data-plugin="counterup"><?php echo $waiting;?></span></h2>
                                    <span class="badge badge-danger"> -29% </span> <span class="text-muted">From previous period</span>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-check float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase m-b-20">Accepted</h6>
                                    <h2 class="m-b-20"><span data-plugin="counterup"><?php echo $accepted;?></span></h2>
                                    <span class="badge badge-pink"> 0% </span> <span class="text-muted">From previous period</span>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-close float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase m-b-20">Rejected</h6>
                                    <h2 class="m-b-20" data-plugin="counterup"><?php echo $rejected;?></h2>
                                    <span class="badge badge-warning"> +89% </span> <span class="text-muted">Last year</span>
                                </div>
                            </div>
                        </div>
                        <!-- end content here -->

                    </div>
                    <!-- end row -->


                </div> <!-- container -->

            </div> <!-- content -->



        </div>
        <!-- End content-page -->


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


        <!-- Right Sidebar -->
        <?php $this->load->view("_partials/menu.php") ?>
        <!-- /Right-bar -->

        <?php $this->load->view("_partials/footer.php") ?>

    </div>
    <!-- END wrapper -->
    <?php $this->load->view("_partials/js.php") ?>
</body>
</html>