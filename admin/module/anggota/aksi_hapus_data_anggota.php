<?php
    session_start();

    include '../admin/config/koneksi.php';

    $kode = $_GET['id'];
    {
        $sql = "DELETE from anggota_perpus where id_anggota='$kode'";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = "Anggota Perpus berhasil dihapus !";
            header('Location: ?module=anggota');
        } else {
            $_SESSION['message'] = mysqli_error();
            header('Location: ?module=anggota');
        }
        mysqli_close($conn);
    }
?>