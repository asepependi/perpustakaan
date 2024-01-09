<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    include '../admin/config/koneksi.php';
    $idPengembalian = $_POST['id_pengembalian'];
    $buku = $_POST['buku'];
    
    {
        $sql = "INSERT INTO detail_pengembalian SET id_pengembalian='$idPengembalian', id_buku='$buku'";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = "Pengembalian Buku berhasil disimpan !";
            header('Location: ?module=detail_pengembalian&id='.$idPengembalian.'');
        } else {
            if ($idPengembalian == '') {
                $_SESSION['message'] = "Id Pengembalian tidak tersedia !";
            } elseif ($buku == '') {
                $_SESSION['message'] = "Buku tidak boleh kosong !";
            } else {
                $_SESSION['message'] = $conn->error;
            }
            header('Location: ?module=tambah_pengembalian_buku&id='.$idPengembalian.'');
        }
        mysqli_close($conn);
    }
?>