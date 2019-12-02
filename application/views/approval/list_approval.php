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
                                    <?php if(isset($_SESSION['msg'])) {?> <div class="alert alert-warning" role="alert"><?php echo $this->session->flashdata('msg'); ?></div> <?php } ?> 
                                    <div class="table-responsive">
                                        <table class="table mb-0" id="datatable">
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
                                                            <td class="process">
                                                                <a href="<?= base_url('approvalController/detail/' . $t->id_approval) ?>">
                                                                    <button class="btn waves-effect waves-light btn-info" data-toggle="tooltip" data-placement="top" title="Detail">
                                                                        <i class="fa fa-eye">
                                                                        </i></button>
                                                                </a>
                                                                <button class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#myModal" data-animation="slide" data-overlaySpeed="200" 
                                                                        data-overlayColor="#36404a" data-toggle="tooltip" 
                                                                        data-placement="top" title="Accept" type="button" id="btn" onclick="modal_approval('<?= $t->id_approval ?>')">
                                                                    <i class="fa fa-check"></i>
                                                                </button>
                                                                <button class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#myModal" data-animation="slide" data-overlaySpeed="200" 
                                                                        data-overlayColor="#36404a" data-toggle="tooltip" 
                                                                        data-placement="top" title="Accept" type="button" id="btn" onclick="modal_approval2('<?= $t->id_approval ?>')">
                                                                    <i class="fa fa-ban"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>
                                                <?php } ?>
                                            </tbody>
                                        </table> 
                                        <div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel aria-hidden='true'>
                                            <div class='modal-dialog' role='document'>
                                                <div class='modal-content'>
                                                    <div class='modal-header'>
                                                        <h5 class='modal-title' id='exampleModalLabel'>Apprpoval</h5>
                                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                            <span aria-hidden='true'>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class='modal-body'>
                                                        <h5 class="question">Setujui calon mahasiswa ini ?</h5>
                                                        <br>
                                                        <h6>Nama : </h6>
                                                        <p class="nama">nama</p>
                                                        <h6>Email : </h6>
                                                        <p class="email">email</p>
                                                        <h6>Alamat : </h6>
                                                        <p class="alamat">alamat</p>
                                                    </div>
                                                    <div class='modal-footer'>
                                                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                                            <a id="id_approval" >
                                                                <button type='submit' class='btn btn-primary'>Ya</button>
                                                            </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

        <script type="text/javascript">
            
            var modal_approval;
            var modal_approval2;
            
            $(document).ready(function () {
                modal_approval = function(id){
                    console.log(id);
                    $.ajax({
                    url: "<?php echo site_url('approvalController/modalDetail/') ?>/" + id,
                    type: "GET",
                    dataType: "JSON",           
                    success: function (data)
                    {
                        console.log(data);
                        console.log(data.t_approval[0].nama);
                        
                        $('[name="id"]').val(data.id_approval);
                        $('[name="nama"]').val(data.nama);
                        $('[name="email"]').val(data.email);
                        
//                        $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
//                        $('.modal-title').text('Edit Data Pengguna'); // Set title to Bootstrap modal title
                        $('.nama').text(data.t_approval[0].nama);
                        $('.email').text(data.t_approval[0].email);
                        $('.alamat').text(data.t_approval[0].alamat);
                        $('#id_approval').prop('href', "<?php echo site_url('approvalController/accept/') ?>" + id);

                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error get data from ajax');
                    }
                });
                }
            });
            
            $(document).ready(function () {
                modal_approval2 = function(id){
                    console.log(id);
                    $.ajax({
                    url: "<?php echo site_url('approvalController/modalDetail/') ?>/" + id,
                    type: "GET",
                    dataType: "JSON",           
                    success: function (data)
                    {
                        console.log(data);
                        console.log(data.t_approval[0].nama);
                        
                        $('[name="id"]').val(data.id_approval);
                        $('[name="nama"]').val(data.nama);
                        $('[name="email"]').val(data.email);
                        
//                        $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
//                        $('.modal-title').text('Edit Data Pengguna'); // Set title to Bootstrap modal title
                        $('.question').text('Reject calon mahasiswa ini ? ');
                        $('.nama').text(data.t_approval[0].nama);
                        $('.email').text(data.t_approval[0].email);
                        $('.alamat').text(data.t_approval[0].alamat);
                        $('#id_approval').prop('href', "<?php echo site_url('approvalController/reject/') ?>" + id);

                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error get data from ajax');
                    }
                });
                }
            });

        </script>
    </body>
</html>