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
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-30">Tambah Pendaftar</h4>
                                    <form>
                                        <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Nama</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" value="" id="example-text-input">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Jenis Kelamin</label>
                                            <div class="col-10">
                                                <select class="form-control" id="exampleSelect1">
                                                    <option>Laki - laki</option>
                                                    <option>Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-email-input" class="col-2 col-form-label">Tanggal Lahir</label>
                                            <div class="col-10">
                                                <input class="form-control" type="date" value="" id="example-email-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-email-input" class="col-2 col-form-label">No. Telepon</label>
                                            <div class="col-10">
                                                <input class="form-control" type="text" value="" id="example-email-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-email-input" class="col-2 col-form-label">Email</label>
                                            <div class="col-10">
                                                <input class="form-control" type="email" value="" id="example-email-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Nama Orang Tua / Wali</label>
                                            <div class="col-10">
                                                <input class="form-control" type="text" value="" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Asal Sekolah</label>
                                            <div class="col-10">
                                                <input class="form-control" type="text" value="" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Alamat</label>
                                            <div class="col-10">
                                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Ijazah</label>
                                            <div class="col-10">
                                                <input type="file" class="dropify" data-height="150" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label">SKHUN</label>
                                            <div class="col-10">
                                                <input type="file" class="dropify" data-height="150" />
                                            </div>
                                        </div>
                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">
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
        <script src="<?= base_url('assets/');?>assets/plugins/fileuploads/js/dropify.min.js"></script>
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