<?php ?>
<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Laporan</a></li>
                <li class="breadcrumb-item"><a href="?module=laporan_peminjaman">Peminjaman Buku</a></li>
                <li class="breadcrumb-item active"> Detail Laporan Peminjaman</li>
            </ol>
        </div>
        <h5 class="page-title">Perpustakaan</h5>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">Detail Laporan Peminjaman</h4>
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
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                            $i = 1;
                            $id_peminjaman = $_GET['id'];
                            $sql = "select detail_peminjaman.id_detail_peminjaman,buku.kd_buku,buku.judul_buku,buku.penulis,buku.penerbit
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