<?php ?>
<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Data</a></li>
                <li class="breadcrumb-item"><a href="?module=staff">Data Staff Perpus</a></li>
                <li class="breadcrumb-item active">Tambah Data Staff Perpus</li>
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
                <h4 class="mt-0 header-title">Form Tambah Data Staff</h4>
                <form action="?module=aksi_tambah_data_staff" method="post">
                    <div class="form-group row">
                        <label for="example-search-input" class="col-sm-2 col-form-label">ID Staff</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="id_staff" placeholder="Silahkan masukkan ID Staff" maxlength="100">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">Nama Staff</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="name" placeholder="Silahkan masukkan Nama Staff" maxlength="100">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-url-input" class="col-sm-2 col-form-label">Username Staff</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="username" placeholder="Silahkan masukkan Username Staff" maxlength="100">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-tel-input" class="col-sm-2 col-form-label">Password Staff</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="pass" placeholder="Silahkan masukkan Password Staff" maxlength="10">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-tel-input" class="col-sm-2 col-form-label">Jenis Kelamin Staff</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="jenkel" placeholder="Silahkan masukkan Jenis Kelamin Staff" maxlength="10">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-tel-input" class="col-sm-2 col-form-label">Foto Staff</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="foto" placeholder="Silahkan masukkan Stok Buku" maxlength="10">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-right">
                            <button class="btn btn-success btn-xs" type="submit">Simpan Staff</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<?php ?>