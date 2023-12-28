<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    include '../admin/config/koneksi.php';

    if (isset($_POST['id_peminjaman']) && isset($_POST['buku'])) {
        {
            $idPeminjaman = $_POST['id_peminjaman'];
            $buku = $_POST['buku'];
            $sql = "INSERT INTO detail_peminjaman set id_peminjaman='$idPeminjaman', id_buku='$buku'";
            echo mysqli_query($conn, $sql);
            // if (mysqli_query($conn, $sql)) {
            //     echo 'true';
            //     $_SESSION['message'] = "Peminjaman Buku berhasil disimpan !";
            //     header('Location: ?module=detail_peminjaman&id='.$idPeminjaman.'');
            // } else {
            //     echo 'else';
            //     if ($idPeminjaman == '') {
            //         $_SESSION['message'] = "Id Peminjaman tidak tersedia !";
            //     } elseif ($buku == '') {
            //         $_SESSION['message'] = "Buku tidak boleh kosong !";
            //     }
            //     header('Location: ?module=tambah_peminjaman_buku&id='.$idPeminjaman.'');
            // }
            // mysqli_close($conn);
        }
    }
?>