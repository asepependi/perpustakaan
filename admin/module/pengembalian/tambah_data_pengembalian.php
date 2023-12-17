<?php ?>
<?php
    $dataAnggota = "select * from anggota_perpus";
    $dataStaff = "select * from staff_perpus";
    $ress = mysqli_query($conn, $dataAnggota);
    $ressStaff = mysqli_query($conn, $dataStaff);
    $anggota = [];
    $staff = [];
    while ($data = mysqli_fetch_array($ress)) {
        array_push($anggota, $data);
    }
    while ($data = mysqli_fetch_array($ressStaff)) {
        array_push($staff, $data);
    }
?>
<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Data</a></li>
                <li class="breadcrumb-item"><a href="?module=pengembalian">Data Pengembalian Buku</a></li>
                <li class="breadcrumb-item active">Tambah Data Pengembalian Buku</li>
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
                <h4 class="mt-0 header-title">Form Tambah Data Pengembalian</h4>
                <form action="?module=aksi_tambah_data_pengembalian" method="post">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Anggota</label>
                        <div class="col-sm-10">
                            <select name="anggota" class="form-control">
                                <option value="">Silahkan pilih Anggota</option>
                                <?php
                                    foreach ($anggota as $item) {
                                ?>
                                    <option value="<?php echo $item['id_anggota'] ?>">
                                        <?php echo $item['nama_anggota'] ?>
                                    </option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-search-input" class="col-sm-2 col-form-label">Staff</label>
                        <div class="col-sm-10">
                            <select name="staff" class="form-control">
                                <option value="">Silahkan pilih Staff</option>
                                <?php
                                    foreach ($staff as $item) {
                                ?>
                                    <option value="<?php echo $item['id_staff'] ?>">
                                        <?php echo $item['nama_staff'] ?>
                                    </option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" name="tanggal" placeholder="Silahkan masukkan Tanggal" maxlength="100">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-url-input" class="col-sm-2 col-form-label">Waktu</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="time" name="waktu" placeholder="Silahkan masukkan Waktu Pengembalian" maxlength="100">
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