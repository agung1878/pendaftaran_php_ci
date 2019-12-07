<!doctype html>
<html lang="en">

    <head>
        <?php $this->load->view("_partials/head.php") ?>
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <?php $this->load->view("_partials/topbar.php") ?>

            <?php $this->load->view("_partials/sidebar.php") ?>

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
                            <div class="col-lg-6 col-xl-8">
                                <div class="card-box">

                                    <h4 class="header-title m-t-0 m-b-20">Sales Statistics</h4>

                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list m-b-0">
                                            <li class="list-inline-item">
                                                <h6 style="color: #3db9dc;"><i class="zmdi zmdi-circle-o m-r-5"></i>Series A</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 style="color: #1bb99a;"><i class="zmdi zmdi-triangle-up m-r-5"></i>Series B</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 style="color: #818a91;"><i class="zmdi zmdi-square-o m-r-5"></i>Series C</h6>
                                            </li>
                                        </ul>
                                    </div>

                                    <div id="morris-bar-stacked" class="morris-chart" style="height: 320px;"></div>

                        		</div>
                            </div><!-- end col-->

                            <div class="col-lg-6 col-xl-4">
                                <div class="card-box">

                                    <h4 class="header-title m-t-0 m-b-30">Trends Monthly</h4>

                                    <div class="text-center m-b-20">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-sm btn-secondary">Today</button>
                                            <button type="button" class="btn btn-sm btn-secondary">This Week</button>
                                            <button type="button" class="btn btn-sm btn-secondary">Last Week</button>
                                        </div>
                                    </div>

                                    <div id="morris-donut-example" class="morris-chart" style="height: 265px;"></div>

                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list mb-0 m-t-10">
                                            <li class="list-inline-item">
                                                <h6 style="color: #3db9dc;"><i class="zmdi zmdi-circle-o m-r-5"></i>English</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 style="color: #1bb99a;"><i class="zmdi zmdi-triangle-up m-r-5"></i>Italian</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 style="color: #818a91;"><i class="zmdi zmdi-square-o m-r-5"></i>French</h6>
                                            </li>
                                        </ul>
                                    </div>

                        		</div>
                            </div><!-- end col-->


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