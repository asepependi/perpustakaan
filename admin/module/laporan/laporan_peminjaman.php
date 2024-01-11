<?php ?> 
<div class="row">
    <div class="col-sm-12">
        <div class="float-right page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Laporan</a></li>
                <li class="breadcrumb-item"><a href="?module=laporan_peminjaman">Peminjaman Buku</a></li>
                <li class="breadcrumb-item active">Form Laporan Peminjaman Buku</li>
            </ol>
        </div>
        <h5 class="page-title">Pepustakaan</h5>
    </div>
</div>
<!-- <?php
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
?> -->
<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">Form Laporan Peminjaman</h4>
                <form action="?module=laporan_peminjaman_buku" method="post">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Tanggal Awal</label>
                        <div class="col-sm-10">
                            <select name='hari_awal'>
                                <option value=''>Silahkan Pilih Tanggal</option>
                                    <?php
                                        for($h=1; $h<=31; $h++) 
                                        { 
                                            echo"<option value=",$h,">",$h,"</option>";
                                        } 
                                    ?>
                            </select>
                            <select name='bulan_awal' >
                                <option value=''>Silahkan Pilih Bulan</option>
                                <option value='1'>Januari</option>
                                <option value='2'>Februari</option>
                                <option value='3'>Maret</option>
                                <option value='4'>April</option>
                                <option value='5'>Mei</option>
                                <option value='6'>Juni</option>
                                <option value='7'>Juli</option>
                                <option value='8'>Agustus</option>
                                <option value='9'>September</option>
                                <option value='10'>Oktober</option>
                                <option value='11'>November</option>
                                <option value='12'>Desember</option>
                            </select>
                            <select name='tahun_awal'>
                                <option value=''>Silahkan Pilih Tahun</option>
                                    <?php 
                                        $now =  date("Y");
                                        $year = 2020;
                                        for($l=$year; $l<=$now; $l++)
                                        {
                                            echo"<option value=",$l,">",$l,"</option>";
                                        }
                                    ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Tanggal Akhir</label>
                        <div class="col-sm-10">
                            <select name='hari_akhir'>
                                <option value=''>Silahkan Pilih Tanggal</option>
                                    <?php
                                        for($h=1; $h<=31; $h++) 
                                        { 
                                            echo"<option value=",$h,">",$h,"</option>";
                                        } 
                                    ?>
                            </select>
                            <select name='bulan_akhir' >
                                <option value=''>Silahkan Pilih Bulan</option>
                                <option value='1'>Januari</option>
                                <option value='2'>Februari</option>
                                <option value='3'>Maret</option>
                                <option value='4'>April</option>
                                <option value='5'>Mei</option>
                                <option value='6'>Juni</option>
                                <option value='7'>Juli</option>
                                <option value='8'>Agustus</option>
                                <option value='9'>September</option>
                                <option value='10'>Oktober</option>
                                <option value='11'>November</option>
                                <option value='12'>Desember</option>
                            </select>
                            <select name='tahun_akhir'>
                                <option value=''>Silahkan Pilih Tahun</option>
                                    <?php 
                                        $now =  date("Y");
                                        $year = 2020;
                                        for($l=$year; $l<=$now; $l++)
                                        {
                                            echo"<option value=",$l,">",$l,"</option>";
                                        }
                                    ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-right">
                            <button class="btn btn-success btn-xs" type="submit">Tampilkan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<?php ?>