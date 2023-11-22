<?php
    session_start();

    include '../admin/config/koneksi.php';

    $anggota = $_POST['anggota'];
    $staff = $_POST['staff'];
    $tanggal = date('Y-m-d', strtotime($_POST['tanggal']));
    $waktu = date('H:i:s', strtotime($_POST['waktu']));
    
    {
        $sql = "INSERT INTO peminjaman set id_anggota='$anggota', id_staff='$staff', tanggal='$tanggal', waktu='$waktu'";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = "Peminjaman berhasil disimpan !";
            header('Location: ?module=peminjaman');
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
            header('Location: ?module=tambah_data_peminjaman');
        }
        mysqli_close($conn);
    }
?>