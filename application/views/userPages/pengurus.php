<!DOCTYPE html>
<html lang="en">
<title>Halaman Struktur Kepengurusan - HIMASISTIFO</title>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    $this->load->view('etc/css');
    ?>
</head>

<body>
    <?php
    $this->load->view('etc/header');
    ?>
    
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title text-center">Struktur Kepengurusan HIMASISTIFO</h4>
                            <?php
                                $query = $this->db->get('kepengurusan'); 
                                foreach ($query->result_array() as $row =>$key){
                            ?>
                            <img src="<?php echo base_url('upload/strukturkepengurusan/'); echo $key['nama_foto'];?>" class="d-block img-fluid mx-auto">
                            <?php } ?>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->   
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end wrapper -->
    
<?php
$this->load->view('etc/footer');
?>

<?php
$this->load->view('etc/js');
?>


</body>

</html> 