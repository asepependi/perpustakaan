<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    include '../admin/config/koneksi.php';

    $idPengembalian = $_GET['pengembalian'];
    $idDetail = $_GET['detail'];
    {
        $sql = "DELETE from detail_pengembalian where id_detail_pengembalian='$idDetail'";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = "Buku Pengembalian berhasil dihapus !";
            header('Location: ?module=detail_pengembalian&id='.$idPengembalian.'');
        } else {
            $_SESSION['message'] = $conn->error;
            header('Location: ?module=detail_pengembalian&id='.$idPengembalian.'');
        }
        mysqli_close($conn);
    }
?>