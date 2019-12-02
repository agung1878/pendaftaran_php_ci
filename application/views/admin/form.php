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
                                    <h4 class="page-title float-left">Form Entry</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">P M B</a></li>
                                        <li class="breadcrumb-item"><a href="#">Form Entry</a></li>
                                        <li class="breadcrumb-item active">Form</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- start content here -->
                         <div style="color: red;"><?php echo validation_errors(); ?></div>
                         <div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-30">Tambah Pendaftar</h4>
                                    <form action="<?php base_url('newMhsController/tambah') ?>" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="input_id" value="<?php echo uniqid(); ?>" required="">
                                        <input type="hidden" name="input_id_approval" value="<?php echo uniqid(); ?>" required="">
                                        <div class="form-group row">
                                            <label for="nama" class="col-2 col-form-label">Nama</label>
                                            <div class="col-10">
                                                <input class="form-control" type="text" name="input_nama" value="<?php echo set_value('input_nama'); ?>" id="nama">
                                            </div>
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('input_nama') ?>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Jenis Kelamin</label>
                                            <div class="col-10">
                                                <select class="form-control" id="jenisKelamin" name="input_jeniskelamin">
                                                    <option value="" selected>--Pilih Jenis Kelamin--</option>
                                                    <option value="Laki-laki" <?php echo set_select('jenis_kelamin', 'Laki - laki'); ?>>Laki - laki</option>
                                                    <option value="Perempuan" <?php echo set_select('jenis_kelamin', 'Perempuan'); ?>>Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-email-input" class="col-2 col-form-label">Tanggal Lahir</label>
                                            <div class="col-10">
                                                <input class="form-control" type="date" name="input_tgl_lahir" required="" value="<?php echo set_value('input_tgl_lahir'); ?>" id="tglLahir">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-email-input" class="col-2 col-form-label">No. Telepon</label>
                                            <div class="col-10">
                                                <input class="form-control" type="text" name="input_telp" required="" value="<?php echo set_value('input_telp'); ?>" id="noTlp">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-email-input" class="col-2 col-form-label">Email</label>
                                            <div class="col-10">
                                                <input class="form-control"  type="email" name="input_email" required="" value="<?php echo set_value('input_email'); ?>" id="email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Nama Orang Tua / Wali</label>
                                            <div class="col-10">
                                                <input class="form-control"  type="text" name="input_nama_org_tua" required="" value="<?php echo set_value('input_nama_org_tua'); ?>" id="namaOrgTua">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Asal Sekolah</label>
                                            <div class="col-10">
                                                <input class="form-control" type="text" name="input_asal_sekolah" required="" value="<?php echo set_value('input_asal_sekolah'); ?>" id="asalSekolah">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Alamat</label>
                                            <div class="col-10">
                                                <textarea class="form-control" id="alamat" name="input_alamat" rows="3"><?php echo set_value('input_alamat'); ?></textarea>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Foto 3x4</label>
                                            <div class="col-10">
                                                <input type="file" class="dropify" name="input_foto" 
                                                       data-height="150" id="ijazah" name="input_foto" value="<?php echo set_value('input_foto'); ?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Ijazah</label>
                                            <div class="col-10">
                                                <input type="file" class="dropify" name="input_ijazah" 
                                                       data-height="150" id="ijazah" name="input_ijazah" value="<?php echo set_value('input_ijazah'); ?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label">SKHUN</label>
                                            <div class="col-10">
                                                <input type="file" class="dropify" name="input_skhun" data-height="150"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label">KTP</label>
                                            <div class="col-10">
                                                <input type="file" class="dropify" name="input_ktp" data-height="150" value="<?php echo set_value('input_ktp'); ?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" name="submit" type="submit" value="Simpan">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                Cancel
                                            </button>
                                        </div>
                                    </form>
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
    <script src="<?= base_url('assets/'); ?>assets/plugins/fileuploads/js/dropify.min.js"></script>
    <script>
        $('.dropify').dropify({
            messages: {
                'default': 'Drag and drop a file here or click',
                'replace': 'Drag and drop or click to replace',
                'remove': 'Remove',
                'error': 'Ooops, something wrong appended.'
            },
            error: {
                'fileSize': 'The file size is too big (1M max).'
            }
        });
    </script>
</body>
</html>