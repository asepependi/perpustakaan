<?php ?>
<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Data</a></li>
                <li class="breadcrumb-item"><a href="?module=pengembalian">Data Pengembalian</a></li>
                <li class="breadcrumb-item active"> Detail Data Pengembalian</li>
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
                <h4 class="mt-0 header-title">Detail Data Pengembalian</h4>
                <?php
                    $id = $_GET['id'];
                    $sql = "select id_pengembalian,nama_anggota, nama_staff, tanggal, waktu, anggota_perpus.id_anggota
                            from pengembalian
                            inner join anggota_perpus on anggota_perpus.id_anggota = pengembalian.id_anggota 
                            inner join staff_perpus on staff_perpus.id_staff = pengembalian.id_staff where id_pengembalian='$id'";
                    $ress = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_array($ress);
                ?>
                <form action="?module=aksi_tambah_data_buku_pengembalian" method="post">
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
                    <!-- <div class="form-group row">
                        <div class="col-sm-12 text-right">
                            <a href="?module=peminjaman" class="btn btn-secondary btn-xs">Kembali</a>
                        </div>
                    </div> -->
                </form>
                <hr>
                <a href="?module=tambah_pengembalian_buku&id=<?php echo $data['id_pengembalian'] ?>" class="btn btn-primary btn-xs">Tambah Buku Pengembalian</a>
                <br>
                <br>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th>Kode Buku</th>
                            <th>Judul Buku</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th class="text-center">Stok</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                            $i = 1;
                            $id_peminjaman = $_GET['id'];
                            $sql = "select detail_peminjaman.id_detail_peminjaman, buku.kd_buku, buku.judul_buku, buku.penulis, buku.penerbit, buku.stok
                                    from detail_peminjaman 
                                    inner join buku on buku.id = detail_peminjaman.id_buku
                                    where id_peminjaman='$id_peminjaman'";
                            $ress = mysqli_query($conn, $sql);
                            while ($data = mysqli_fetch_array($ress)) {
                                echo '
                                    <tr>
                                        <td class="text-center">'.$i.'</td>
                                        <td class="text-center">'.$data['kd_buku'].'</td>
                                        <td class="text-center">'.$data['judul_buku'].'</td>
                                        <td class="text-center">'.$data['penulis'].'</td>
                                        <td class="text-center">'.$data['penerbit'].'</td>
                                        <td class="text-center">'.$data['stok'].'</td>
                                        <td class="text-center">
                                            <a href="?module=edit_peminjaman_buku&detail='.$data['id_detail_peminjaman'].'" class="btn btn-primary btn-xs">Edit</a>
                                            <a href="?module=aksi_hapus_peminjaman_buku&detail='.$data['id_detail_peminjaman'].'&pinjam='.$id_peminjaman.'" onclick="return deleteData()" class="btn btn-danger btn-xs delete-item">Hapus</a>
                                        </td>
                                    </tr>
                                ';
                                $i++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<?php ?>
<script type="text/javascript">
    function deleteData() {
        return confirm('Apakah anda yakin ingin menghapus Buku Pinjaman ini ?')
    }
</script>