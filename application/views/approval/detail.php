<!doctype html>
<html lang="en">

    <head>
        <?php $this->load->view("_partials/head.php") ?>
        <link href="<?= base_url('assets/'); ?>assets/plugins/responsive-table/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/plugins/magnific-popup/css/magnific-popup.css"/>
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
                                    <div layout:fragment="content">
                                        <section class="content">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-8" style="margin-left: 175px;">
                                                        <div class="card card-primary card-outline">
                                                            <div class="card-body box-profile">
                                                                <?php
                                                                foreach ($t_approval as $t) {
                                                                    // mencari total
                                                                    ?>
                                                                    <div class="port text-center m-b-20">
                                                                        <div class="portfolioContainer" style="position: relative; height: 536.494px;width: 100%">
                                                                            <div class="gallery-box natural personal" style="position: relative; left: 0px; top: 0px;visibility: hidden">
                                                                                <div class="thumb">
                                                                                    <a href="<?php echo base_url() . '/images/ijazah/' . $t->foto; ?>" class="image-popup" title="<?php echo $t->foto; ?>">
                                                                                        <img src="<?php echo base_url() . '/images/ijazah/' . $t->foto; ?>" class="thumb-img" alt="work-thumbnail">
                                                                                    </a>
                                                                                    <div class="gal-detail">
                                                                                        <h4 class="m-t-10"><?php echo $t->nama; ?></h4>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="gallery-box natural personal" style="position: relative; left: 0px; top: 0px;">
                                                                                <div class="thumb">
                                                                                    <a href="<?php echo base_url() . '/images/foto/' . $t->foto; ?>" class="image-popup" title="<?php echo $t->foto; ?>">
                                                                                        <img src="<?php echo base_url() . '/images/foto/' . $t->foto; ?>" class="thumb-img" alt="work-thumbnail">
                                                                                    </a>
                                                                                    <div class="gal-detail">
                                                                                        <h4 class="m-t-10"><?php echo $t->nama; ?></h4>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="gallery-box natural personal" style="position: relative; left: 0px; top: 0px;visibility: hidden">
                                                                                <div class="thumb">
                                                                                    <a href="<?php echo base_url() . '/images/skhun/' . $t->foto; ?>" class="image-popup" title="<?php echo $t->foto; ?>">
                                                                                        <img src="<?php echo base_url() . '/images/skhun/' . $t->foto; ?>" class="thumb-img" alt="work-thumbnail">
                                                                                    </a>
                                                                                    <div class="gal-detail">
                                                                                        <h4 class="m-t-10"><?php echo $t->nama; ?></h4>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--<h3 class="profile-username text-center"><?php echo $t->nama; ?></h3>-->
                                                                    <ul class="list-group list-group-unbordered mb-3">
                                                                        <li class="list-group-item">
                                                                            <b>Email : </b>
                                                                            <p class="float-right"><?php echo $t->email; ?></p>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>No. Telepon : </b>
                                                                            <p class="float-right"><?php echo $t->no_tlp; ?></p>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Jenis Kelamin : </b>
                                                                            <p class="float-right"><?php echo $t->jenis_kelamin; ?></p>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Tanggal Lahir : </b>
                                                                            <p class="float-right"><?php echo $t->tgl_lahir; ?></p>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Nama Orang Tua : </b>
                                                                            <p class="float-right"><?php echo $t->nama_org_tua; ?></p>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Asal Sekolah : </b>
                                                                            <p class="float-right"><?php echo $t->asal_sekolah; ?></p>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Alamat : </b>
                                                                            <p class="float-right"><?php echo $t->alamat; ?></p>
                                                                        </li>
                                                                        <div class="port text-center m-b-20">
                                                                            <div class="portfolioContainer" style="position: relative; height: 536.494px;">
                                                                                <div class="gallery-box natural personal" style="position: absolute; left: 0px; top: 0px;">
                                                                                    <div class="thumb">
                                                                                        <a href="<?php echo base_url() . '/images/ijazah/' . $t->ijazah; ?>" class="image-popup" title="<?php echo $t->ijazah; ?>">
                                                                                            <img src="<?php echo base_url() . '/images/ijazah/' . $t->ijazah; ?>" class="thumb-img" alt="work-thumbnail">
                                                                                        </a>
                                                                                        <div class="gal-detail">
                                                                                            <h4 class="m-t-10">IJAZAH</h4>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="gallery-box natural personal" style="position: absolute; left: 0px; top: 0px;">
                                                                                    <div class="thumb">
                                                                                        <a href="<?php echo base_url() . '/images/skhun/' . $t->skhun; ?>" class="image-popup" title="<?php echo $t->skhun; ?>">
                                                                                            <img src="<?php echo base_url() . '/images/skhun/' . $t->skhun; ?>" class="thumb-img" alt="work-thumbnail">
                                                                                        </a>
                                                                                        <div class="gal-detail">
                                                                                            <h4 class="m-t-10">SKHUN</h4>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="gallery-box natural personal" style="position: absolute; left: 0px; top: 0px;">
                                                                                    <div class=" thumb">
                                                                                        <a href="<?php echo base_url() . '/images/ktp/' . $t->ktp; ?>" class="image-popup" title="<?php echo $t->ktp; ?>">
                                                                                            <img src="<?php echo base_url() . '/images/ktp/' . $t->ktp; ?>" class="thumb-img" alt="work-thumbnail">
                                                                                        </a>
                                                                                        <div class="gal-detail">
                                                                                            <h4 class="m-t-10">KTP</h4>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <?php } ?>
                                                                </ul>
                                                                <div class="pull-right">
                                                                    <a href="#">
                                                                        <button type="button" class="btn btn-primary waves-effect waves-light">Back</button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!-- /.card-body -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
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
    <script>
        $('.table-rep-plugin').responsiveTable('update');
    </script>
</body>
</html>