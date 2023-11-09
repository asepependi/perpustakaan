<?php
    session_start();

    include '../admin/config/koneksi.php';

    $id = $_GET['id'];
    {
        $sql = "DELETE from staff_perpus where id_staff='$id'";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = "Staff Perpus berhasil dihapus !";
            header('Location: ?module=staff');
        } else {
            $_SESSION['message'] = mysqli_error();
            header('Location: ?module=staff');
        }
        mysqli_close($conn);
    }
?>