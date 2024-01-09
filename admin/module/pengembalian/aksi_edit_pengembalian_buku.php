<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    include '../admin/config/koneksi.php';
    $idPengembalian = $_POST['id_pengembalian'];
    $idDetail = $_POST['id_detail'];
    $buku = $_POST['buku'];
    
    {
        $sql = "UPDATE detail_pengembalian SET id_buku='$buku' WHERE id_detail_pengembalian='$idDetail'";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = "Pengembalian Buku berhasil disimpan !";
            header('Location: ?module=detail_pengembalian&id='.$idPengembalian.'');
        } else {
            if ($idDetail == '') {
                $_SESSION['message'] = "Id Pengembalian tidak tersedia !";
            } elseif ($buku == '') {
                $_SESSION['message'] = "Buku tidak boleh kosong !";
            } else {
                $_SESSION['message'] = $conn->error;
            }
            header('Location: ?module=edit_pengembalian_buku&id='.$idPengembalian.'');
        }
        mysqli_close($conn);
    }
?>