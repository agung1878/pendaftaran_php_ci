<!doctype html>
<html lang="en">

    <head>
        <?php $this->load->view("_partials/head.php") ?>
        <link href="<?= base_url('assets/'); ?>assets/plugins/responsive-table/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">
        <!-- Custom box css -->
        <link href="<?= base_url('assets/'); ?>assets/plugins/custombox/css/custombox.min.css" rel="stylesheet">
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
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="table-responsive">
                                        <table class="table mb-0" id="datatable">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>No. Telepon</th>
                                                    <th>Email</th>
                                                    <th>Asal Sekolah</th>
                                                    <th>Alamat</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!empty($t_approval)) { ?>
                                                    <?php
                                                    foreach ($t_approval as $t) {
                                                        ?>
                                                        <tr>
                                                            <td><?= $t->nama ?></td>
                                                            <td><?= $t->jenis_kelamin ?></td>
                                                            <td><?= $t->tgl_lahir ?></td>
                                                            <td><?= $t->no_tlp ?></td>
                                                            <td><?= $t->email ?></td>
                                                            <td><?= $t->asal_sekolah ?></td>
                                                            <td><?= $t->alamat ?></td>
                                                            <td class="process">
                                                                <a href="<?= base_url('approvalController/detail/' . $t->id_approval) ?>">
                                                                    <button class="btn waves-effect waves-light btn-info" data-toggle="tooltip" data-placement="top" title="Detail">
                                                                        <i class="fa fa-eye">
                                                                        </i></button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>
                                                <?php } ?>
                                            </tbody>
                                        </table> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <?php $this->load->view("_partials/menu.php") ?>
           

            <?php $this->load->view("_partials/footer.php") ?>

        </div>

        <?php $this->load->view("_partials/js.php") ?>
        <script src="<?= base_url('assets/'); ?>assets/plugins/responsive-table/js/rwd-table.min.js"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/custombox/js/custombox.min.js"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/custombox/js/custombox.legacy.min.js"></script>
        <script>
           $('.table-rep-plugin').responsiveTable('update');
        </script>
    </body>
</html>