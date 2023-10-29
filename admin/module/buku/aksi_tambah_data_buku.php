<?php
    session_start();

    include '../admin/config/koneksi.php';

    $kode = $_POST['kode_buku'];
    $judul = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $stok = $_POST['stok'];
    
    {
        $sql = "INSERT INTO buku set kd_buku='$kode', judul_buku='$judul', penulis='$penulis', penerbit='$penerbit', stok='$stok'";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = "Buku berhasil disimpan !";
            header('Location: ?module=buku');
        } else {
            if ($kode == '') {
                $_SESSION['message'] = "Kode Buku tidak boleh kosong !";
            } elseif ($judul == '') {
                $_SESSION['message'] = "Judul Buku tidak boleh kosong !";
            } elseif ($penulis == '') {
                $_SESSION['message'] = "Penulis Buku tidak boleh kosong !";
            } elseif ($penerbit == '') {
                $_SESSION['message'] = "Penerbit Buku tidak boleh kosong !";
            } elseif ($stok == '') {
                $_SESSION['message'] = "Stok Buku tidak boleh kosong !";
            }
            header('Location: ?module=tambah_data_buku');
        }
        mysqli_close($conn);
    }
?>