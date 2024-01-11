<?php ?>
<?php 
$idLogin = $_SESSION['kd_anggota'];
$query = "SELECT * from anggota_perpus where id_anggota='$idLogin'";
$ress = mysqli_query($conn, $query);
$ketemu = mysqli_num_rows($ress);
$data = mysqli_fetch_array($ress);
?>
<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?module=dashboard">Perpustakaan</a></li>
                <li class="breadcrumb-item"><a href="#">Profile</a></li>
                <li class="breadcrumb-item active">Data Profile</li>
            </ol>
        </div>
        <h5 class="page-title">Profile</h5>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-xl-5">
                        <div class="text-center mb-5">
                            <h4>Profile</h4>
                            <p class="text-muted">Berikut beberapa data sesuai akun login !</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="faq-box mb-5">
                                    <div class="faq-ques rounded">
                                        <h6 class="pb-2"><i class="mdi mdi-help-circle text-primary mr-4 faq-icon"></i> Nama Anggota</h6>
                                    </div>
                                    <p class="text-muted pt-2"><?php echo $data['nama_anggota'] ?></p>
                                </div>

                                <div class="faq-box mb-5">
                                    <div class="faq-ques rounded">
                                        <h6 class="pb-2"><i class="mdi mdi-help-circle text-primary mr-4 faq-icon"></i> Username Anggota</h6>
                                    </div>
                                    <p class="text-muted pt-2"><?php echo $data['username_anggota'] ?></p>
                                </div>
                                
                                <div class="faq-box mb-5">
                                    <div class="faq-ques rounded">
                                        <h6 class="pb-2"><i class="mdi mdi-help-circle text-primary mr-4 faq-icon"></i> Jenis Kelamin</h6>
                                    </div>
                                    <p class="text-muted pt-2"><?php echo $data['jenis_kelamin_anggota'] ?></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="<?php echo $data['foto_anggota'] ?>" alt="img-profile">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php ?>