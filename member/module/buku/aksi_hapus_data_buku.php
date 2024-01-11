<?php
    session_start();

    include '../admin/config/koneksi.php';

    $kode = $_GET['kd_buku'];
    {
        $sql = "DELETE from buku where kd_buku='$kode'";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = "Buku berhasil dihapus !";
            header('Location: ?module=buku');
        } else {
            $_SESSION['message'] = mysqli_error();
            header('Location: ?module=buku');
        }
        mysqli_close($conn);
    }
?>