<?php ?>
<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Data</a></li>
                <li class="breadcrumb-item"><a href="?module=pengembalian">Data Pengembalian Buku</a></li>
                <li class="breadcrumb-item active">List Data Pengembalian Buku</li>
            </ol>
        </div>
        <h5 class="page-title">Pepustakaan</h5>
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
<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <button onclick="location.href='?module=tambah_data_pengembalian'" class="btn btn-primary btn-xs">Tambah</button>
                <br>
                <br>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th>Nama Pengembalian</th>
                            <th>Nama Staff</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                            $i = 1;
                            $sql = "select id_pengembalian,nama_anggota, nama_staff, tanggal, waktu
                                    from pengembalian
                                    inner join anggota_perpus on anggota_perpus.id_anggota = pengembalian.id_anggota 
                                    inner join staff_perpus on staff_perpus.id_staff = pengembalian.id_staff";
                            $ress = mysqli_query($conn, $sql);
                            while ($data = mysqli_fetch_array($ress)) {
                                echo '
                                    <tr>
                                        <td class="text-center">'.$i.'</td>
                                        <td class="text-center">'.$data['nama_anggota'].'</td>
                                        <td class="text-center">'.$data['nama_staff'].'</td>
                                        <td class="text-center">'.date('j F Y', strtotime($data['tanggal'])).'</td>
                                        <td class="text-center">'.$data['waktu'].'</td>
                                        <td class="text-center">
                                            <a href="?module=edit_data_pengembalian&id='.$data['id_pengembalian'].'" class="btn btn-primary btn-xs">Edit</a>
                                            <a href="?module=detail_pengembalian&id='.$data['id_pengembalian'].'" class="btn btn-secondary btn-xs">Detail Pengembalian</a>
                                            <a href="?module=aksi_hapus_data_pengembalian&id='.$data['id_pengembalian'].'" onclick="return deleteData()" class="btn btn-danger btn-xs delete-item">Hapus</a>
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
    </div>
</div>
<?php ?>
<script type="text/javascript">
    function deleteData() {
        return confirm('Apakah anda yakin ingin menghapus Pengembalian ini ?')
    }
</script>