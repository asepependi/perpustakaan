<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    include '../admin/config/koneksi.php';
    $idPeminjaman = $_POST['id_peminjaman'];
    $buku = $_POST['buku'];

    {
        $sql = "UPDATE detail_peminjaman SET WHERE id_peminjaman='$idPeminjaman', id_buku='$buku'";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = "Peminjaman Buku berhasil disimpan !";
            header('Location: ?module=detail_peminjaman&id='.$idPeminjaman.'');
        } else {
            if ($idPeminjaman == '') {
                $_SESSION['message'] = "Id Peminjaman tidak tersedia !";
            } elseif ($buku == '') {
                $_SESSION['message'] = "Buku tidak boleh kosong !";
            }
            header('Location: ?module=tambah_peminjaman_buku&id='.$idPeminjaman.'');
        }
        mysqli_close($conn);
    }
?>