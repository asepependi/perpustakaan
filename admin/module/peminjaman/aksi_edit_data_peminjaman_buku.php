<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    include '../admin/config/koneksi.php';
    $idPeminjaman = $_POST['id_peminjaman'];
    $idDetail = $_POST['id_detail'];
    $buku = $_POST['buku'];

    {
        $sql = "UPDATE detail_peminjaman SET id_buku='$buku' WHERE id_detail_peminjaman='$idDetail'";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = "Peminjaman Buku berhasil disimpan !";
            header('Location: ?module=detail_peminjaman&id='.$idPeminjaman.'');
        } else {
            if ($idPeminjaman == '') {
                $_SESSION['message'] = "Id Peminjaman tidak tersedia !";
            } elseif ($buku == '') {
                $_SESSION['message'] = "Buku tidak boleh kosong !";
            }
            header('Location: ?module=edit_peminjaman_buku&detail='.$idDetail.'&buku='.$buku.'');
        }
        mysqli_close($conn);
    }
?>