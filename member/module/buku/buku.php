<?php ?>
<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Data</a></li>
                <li class="breadcrumb-item"><a href="?module=buku">Data Buku Perpus</a></li>
                <li class="breadcrumb-item active">List Data Buku Perpus</li>
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
                <button onclick="location.href='?module=tambah_data_buku'" class="btn btn-primary btn-xs">Tambah</button>
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
                            $sql = "select * from buku";
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
                                            <a href="?module=edit_data_buku&kd_buku='.$data['kd_buku'].'" class="btn btn-primary btn-xs">Edit</a>
                                            <a href="?module=aksi_hapus_data_buku&kd_buku='.$data['kd_buku'].'" onclick="return deleteData()" class="btn btn-danger btn-xs delete-item">Hapus</a>
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
        return confirm('Apakah anda yakin ingin menghapus Buku ini ?')
    }
</script>