<!DOCTYPE html>
<html lang="en">
<title>Halaman Ubah Tentang - HIMASISTIFO</title>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <link rel="shortcut icon" href="<?php echo base_url('assetshz/images/si.png')?>">

    <?php
    $this->load->view('etcdashboard/css');
    ?>
    <!-- Summernote css -->
    <link href="<?php echo base_url('assetsvt/plugins/summernote/summernote-bs4.css')?>" rel="stylesheet" />
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assetsvt/plugins/morris/morris.css')?>">    
</head>

<body>
<div class="wrapper">
        <?php
        $this->load->view('etcdashboard/header');
        ?>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-sm-12">
                                    <h4 class="page-title text-center">Formulir Ubah Tentang HIMASISTIFO</h4>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <?php 
                                            if($this->session->flashdata('msg')){
                                            echo $this->session->flashdata('msg');
                                            } 
                                        ?>
                                        <br>
                                        <?php echo form_open_multipart('TentangHima/ubahtentang');?>
                                        <input type="hidden" name="id" class="form-control form-control-user" 
                                        value="<?php if(isset($tentanghima->id)){echo $tentanghima->id;}?>">
                                        <label>Visi Sebelumnya : </label> <?php echo $tentanghima->visi?><br>
                                        <div class="form-group">
                                            <label>Visi baru :</label>
                                            <div>
                                                <textarea class="summernote" name="visi" rows="5" placeholder="Berupa visi yang akan direvisi" autofocus required></textarea>
                                            </div>
                                        </div>

                                        <label>Misi Sebelumnya : </label> <?php echo $tentanghima->misi?><br>
                                        <div class="form-group">
                                            <label>Misi baru : </label>
                                            <div>
                                                <textarea class="summernote" name="misi" rows="5" placeholder="Berupa makna logo yang akan direvisi" required></textarea>
                                            </div>
                                        </div>

                                        <label>Makna Logo Sebelumnya : </label> <?php echo $tentanghima->maknalogo?> <br>
                                        <div class="form-group">
                                            <label>Makna Logo Baru : </label>
                                            <div>
                                                <textarea class="summernote" name="maknalogo" rows="5" placeholder="Berupa makna logo yang akan direvisi" required></textarea>
                                            </div>
                                        </div>
                                        <div class="text-center m-t-15">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Kirim</button>
                                            <a href="<?php echo site_url('TentangHima/index')?>" class="btn btn-warning waves-effect waves-light">Kembali</a>
                                        </div>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div>
                    <!-- container-fluid -->

                </div>
                <!-- content -->
        <?php
        $this->load->view('etc/footer');
        ?>
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <?php
    $this->load->view('etcdashboard/js');
    ?>

    <!--Summernote js-->
    <script src="<?php echo base_url('assetsvt/plugins/summernote/summernote-bs4.min.js')?>"></script>
    <script>
        jQuery(document).ready(function(){
            $('.summernote').summernote({
                height: 300,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: true                 // set focus to editable area after initializing summernote
            });
        });
    </script>
</body>
</html>