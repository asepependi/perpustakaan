<?php ?>
<?php
    // Data Buku
    $dataBuku = "select * from buku";
    $ressBuku = mysqli_query($conn, $dataBuku);
    $buku = [];
    while ($data = mysqli_fetch_array($ressBuku)) {
        array_push($buku, $data);
    }

    // Data Peminjaman
    $id = $_GET['peminjaman'];
    $bukuId = $_GET['buku'];
    $sql = "select * from detail_peminjaman where id_detail_peminjaman='$id' and id_buku='$bukuId'";
    $ress = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($ress);
?>
<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Data</a></li>
                <li class="breadcrumb-item"><a href="?module=peminjaman">Data Peminjaman Buku</a></li>
                <li class="breadcrumb-item"><a href="?module=detail_peminjaman&id=<?php echo $id ?>">Detail Data Peminjaman</a></li>
                <li class="breadcrumb-item active">Edit Data Peminjaman Buku</li>
            </ol>
        </div>
        <h5 class="page-title">Perpustakaan</h5>
    </div>
</div>
<?php
    if (isset($_SESSION['message'])) {
        ?>
            <div class="">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
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
                <h4 class="mt-0 header-title">Form Tambah Data Peminjaman Buku</h4>
                <form action="?module=aksi_edit_data_peminjaman_buku" method="post">
                    <input type="hidden" name="id_peminjaman" value="<?php echo $id ?>">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Kode Buku</label>
                        <div class="col-sm-10">
                            <select name="buku" class="form-control">
                                <option value="">Silahkan pilih Buku !</option>
                                <?php
                                    foreach ($buku as $item) {
                                ?>
                                     <option value="<?php echo $item['id'] ?>" <?php if ($item['id'] == $bukuId) {
                                        echo 'selected';
                                    } ?> >
                                        <?php echo $item['judul_buku'] ?>
                                    </option>
                                <?php
                                    }
                                ?>
                            </select>
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