<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    include '../admin/config/koneksi.php';

    $idPeminjaman = $_GET['pinjam'];
    $idDetail = $_GET['detail'];
    {
        $sql = "DELETE from detail_peminjaman where id_detail_peminjaman='$idDetail'";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = "Buku Peminjaman berhasil dihapus !";
            header('Location: ?module=detail_peminjaman&id='.$idPeminjaman.'');
        } else {
            $_SESSION['message'] = mysqli_error();
            header('Location: ?module=detail_peminjaman&id='.$idPeminjaman.'');
        }
        mysqli_close($conn);
    }
?>