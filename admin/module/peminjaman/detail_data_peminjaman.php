<?php ?>
<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Data</a></li>
                <li class="breadcrumb-item"><a href="?module=buku">Data Detail Peminjaman</a></li>
                <li class="breadcrumb-item active"> Detail Data Peminjaman</li>
            </ol>
        </div>
        <h5 class="page-title">Perpustakaan</h5>
    </div>
</div>
<?php
    if (isset($_SESSION['message'])) {
        ?>
            <div class="">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong><?php echo $_SESSION['message']; ?></strong>
                </div>
            </div>
        <?php 
        unset($_SESSION['message']);
    }
?>
<!-- end row -->
<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">Detail Data Peminjaman</h4>
                <?php
                    $id = $_GET['id'];
                    $sql = "select id_peminjaman,nama_anggota, nama_staff, tanggal, waktu, anggota_perpus.id_anggota
                            from peminjaman
                            inner join anggota_perpus on anggota_perpus.id_anggota = peminjaman.id_anggota 
                            inner join staff_perpus on staff_perpus.id_staff = peminjaman.id_staff where id_peminjaman='$id'";
                    $ress = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_array($ress);
                ?>
                <form action="?module=aksi_tambah_data_buku" method="post">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Id Anggota</label>
                        <div class="col-sm-10">
                            <p><?php echo $data['id_anggota'] ?></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-search-input" class="col-sm-2 col-form-label">Nama Anggota</label>
                        <div class="col-sm-10">
                            <p><?php echo $data['nama_anggota'] ?></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <p><?php echo $data['tanggal'] ?></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-url-input" class="col-sm-2 col-form-label">Waktu</label>
                        <div class="col-sm-10">
                            <p><?php echo $data['waktu'] ?></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-right">
                            <button class="btn btn-success btn-xs" type="submit">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<?php ?>