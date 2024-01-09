<?php
    session_start();

    include '../admin/config/koneksi.php';

    $id = $_POST['id'];
    $anggota = $_POST['anggota'];
    $staff = $_POST['staff'];
    $tanggal = date('Y-m-d', strtotime($_POST['tanggal']));
    $waktu = date('H:i:s', strtotime($_POST['waktu']));

    {
        $sql = "UPDATE pengembalian set id_anggota='$anggota', id_staff='$staff', tanggal='$tanggal', waktu='$waktu' WHERE id_pengembalian='$id'";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = "Pengembalian berhasil diupdate !";
            header('Location: ?module=pengembalian');
        } else {
            if ($anggota == '') {
                $_SESSION['message'] = "Silahkan pilih Anggota !";
            } elseif ($staff == '') {
                $_SESSION['message'] = "Silahkan pilih Staff !";
            } elseif ($tanggal == '') {
                $_SESSION['message'] = "Tanggal tidak boleh kosong !";
            } elseif ($waktu == '') {
                $_SESSION['message'] = "Waktu tidak boleh kosong !";
            } else {
                $_SESSION['message'] = mysqli_error();
            }
            header('Location: ?module=edit_data_pengembalian&id='.$id);
        }
        mysqli_close($conn);
    }
?>