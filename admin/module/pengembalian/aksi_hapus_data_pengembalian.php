<?php
    session_start();

    include '../admin/config/koneksi.php';

    $id = $_GET['id'];
    {
        $sql = "DELETE from pengembalian where id_pengembalian='$id'";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = "Pengembalian berhasil dihapus !";
            header('Location: ?module=pengembalian');
        } else {
            $_SESSION['message'] = $conn->error;
            header('Location: ?module=pengembalian');
        }
        mysqli_close($conn);
    }
?>