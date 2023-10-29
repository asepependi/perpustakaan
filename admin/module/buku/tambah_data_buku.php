<?php ?>
<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Data</a></li>
                <li class="breadcrumb-item"><a href="?module=buku">Data Buku Perpus</a></li>
                <li class="breadcrumb-item active">Tambah Data Buku Perpus</li>
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
                <h4 class="mt-0 header-title">Form Tambah Data Buku</h4>
                <form action="?module=aksi_tambah_data_buku" method="post">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Kode Buku</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="kode_buku" placeholder="Silahkan masukkan Kode Buku" maxlength="5">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-search-input" class="col-sm-2 col-form-label">Judul Buku</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="judul_buku" placeholder="Silahkan masukkan Judul Buku" maxlength="100">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">Penulis</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="penulis" placeholder="Silahkan masukkan Penulis Buku" maxlength="100">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-url-input" class="col-sm-2 col-form-label">Penerbit</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="penerbit" placeholder="Silahkan masukkan Penerbit Buku" maxlength="100">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-tel-input" class="col-sm-2 col-form-label">Stok</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" name="stok" placeholder="Silahkan masukkan Stok Buku" maxlength="10">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-right">
                            <button class="btn btn-success btn-xs" type="submit">Simpan Buku</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<?php ?>