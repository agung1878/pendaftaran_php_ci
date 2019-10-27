<!doctype html>
<html lang="en">

    <head>
       <?php $this->load->view("_partials/head.php") ?>
       <link href="<?= base_url('assets/');?>assets/plugins/responsive-table/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">
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
                                <div class="col-lg-12">
                                    <div class="card-box">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nama</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>No. Telepon</th>
                                                    <th>Email</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Laki -laki</td>
                                                    <td>12/12/1990</td>
                                                    <td>0813125019XX</td>
                                                    <td>mar@outlock.com</td>
                                                    <td>
                                                        <button class="btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i> </button>
                                                        <button class="btn waves-effect waves-light btn-info"> <i class="fa fa-eye"></i> </button>
                                                        <button class="btn waves-effect waves-light btn-danger"> <i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
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
        <script src="<?= base_url('assets/');?>assets/plugins/responsive-table/js/rwd-table.min.js"></script>
        <script>
            $('.table-rep-plugin').responsiveTable('update');
        </script>
    </body>
</html>