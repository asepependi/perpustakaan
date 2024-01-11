<?php
    $tgl_awal = $_POST['hari_awal'];
    $bulan_awal = $_POST['bulan_awal'];
    $tahun_awal = $_POST['tahun_awal'];
    $tgl_akhir = $_POST['hari_akhir'];
    $bulan_akhir = $_POST['bulan_akhir'];
    $tahun_akhir = $_POST['tahun_akhir'];
    $awal="$_POST[tahun_awal]-$_POST[bulan_awal]-$_POST[hari_awal]";
    $akhir="$_POST[tahun_akhir]-$_POST[bulan_akhir]-$_POST[hari_akhir]";
?>
<?php ?>
<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Laporan</a></li>
                <li class="breadcrumb-item"><a href="?module=laporan_peminjaman">Laporan Peminjaman Buku</a></li>
                <li class="breadcrumb-item active">List Laporan Peminjaman Buku</li>
            </ol>
        </div>
        <h5 class="page-title">Pepustakaan</h5>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h3>Laporan Peminjaman Buku</h3>
                <h4>Tanggal <?php echo $tgl_awal."-".$bulan_awal."-".$tahun_awal ?> sampai <?php echo $tgl_akhir."-".$bulan_akhir."-".$tahun_akhir ?></h4>
                <button type="button" class="btn btn-danger btn-xs" onclick="window.print()">Cetak Halaman</button>
                <br>
                <br>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th>Nama Peminjam</th>
                            <th>Nama Staff</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                            $i = 1;
                            $dataLaporan = mysqli_query($conn, "SELECT id_peminjaman
                                            FROM peminjaman 
                                            -- INNER JOIN anggota_perpus ON peminjaman.id_anggota = anggota_perpus.id_anggota 
                                            -- INNER JOIN staff_perpus ON peminjaman.id_staff = staff_perpus.id_staff
                                            WHERE (tanggal BETWEEN '$awal' AND '$akhir')
                                            ");
                            // $ress = mysqli_query($conn, $dataLaporan);
                            var_dump($dataLaporan);
                            // if ($data = mysqli_fetch_row($ress) > 0) {
                            //     while ($data = mysqli_fetch_array($ress)) {
                            //         echo '
                            //             <tr>
                            //                 <td class="text-center">'.$i++.'</td>
                            //                 <td class="text-center">'.$data['nama_anggota'].'</td>
                            //                 <td class="text-center">'.$data['nama_staff'].'</td>
                            //                 <td class="text-center">'.$data['tanggal'].'</td>
                            //                 <td class="text-center">'.$data['waktu'].'</td>
                            //                 <td class="text-center">
                            //                     <a href="?module=detail_laporan_peminjaman&id='.$data['id_peminjaman'].'" class="btn btn-secondary btn-xs">Detail</a>
                            //                 </td>
                            //             </tr>
                            //         ';
                            //     }
                            // } else {
                            //     echo '
                            //         <tr bgcolor="#fff">
                            //             <td colspan=6><center>Tidak ada data !</center></td>
                            //         </tr>
                            //     ';
                            // }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php ?>
