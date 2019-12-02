<!doctype html>
<html lang="en">

    <head>
        <?php $this->load->view("_partials/head.php") ?>
        <link href="<?= base_url('assets/'); ?>assets/plugins/responsive-table/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">
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
                                    <h4 class="page-title float-left">List Entry</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">P M B</a></li>
                                        <li class="breadcrumb-item"><a href="#">List Entry</a></li>
                                        <li class="breadcrumb-item active">List</li>
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
                                    <a href="<?= site_url('newMhsController/tambah'); ?>">
                                        <button type="button" class="btn btn-primary waves-effect waves-light"><span class="btn-label"><i class="fa fa-plus-square"></i>
                                            </span>Add Account</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>No. Telepon</th>
                                                    <th>Email</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <?php
                                                if (!empty($t_new_mhs)) { // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
                                                    foreach ($t_new_mhs as $data) {
                                                        echo "<tr>
                                                            <td>" . $data->nama . "</td>
                                                            <td>" . $data->jenis_kelamin . "</td>
                                                            <td>" . $data->tgl_lahir . "</td>
                                                            <td>" . $data->no_tlp . "</td>
                                                            <td>" . $data->email . "</td>
                                                            <td>
                                                                <a href='" . base_url("newMhsController/ubah/" . $data->id_new_mhs) . "'>
                                                                    <button class='btn waves-effect waves-light btn-success'>Edit</button>
                                                                </a>
                                                                <a href='" . base_url("newMhsController/hapus/" . $data->id_new_mhs) . "'>
                                                                    <button class='btn waves-effect waves-light btn-danger'>Hapus</button>
                                                                </a>
                                                            </td>
                                                        </tr>";
                                                    }
                                                } else { // Jika data siswa kosong
                                                    echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
                                                }
                                                ?>
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
    <script src="<?= base_url('assets/'); ?>assets/plugins/responsive-table/js/rwd-table.min.js"></script>
    <script>
        $('.table-rep-plugin').responsiveTable('update');
    </script>
</body>
</html>