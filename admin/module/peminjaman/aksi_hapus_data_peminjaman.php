<?php
    session_start();

    include '../admin/config/koneksi.php';

    $id = $_GET['id'];
    {
        $sql = "DELETE from peminjaman where id_peminjaman='$id'";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = "Peminjaman berhasil dihapus !";
            header('Location: ?module=peminjaman');
        } else {
            $_SESSION['message'] = mysqli_error();
            header('Location: ?module=peminjaman');
        }
        mysqli_close($conn);
    }
?>