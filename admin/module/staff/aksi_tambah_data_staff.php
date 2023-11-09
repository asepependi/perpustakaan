<?php
    session_start();

    include '../admin/config/koneksi.php';

    $id = $_POST['id_staff'];
    $name = $_POST['name'];
    $user = $_POST['username'];
    $pass = $_POST['pass'];
    $jenkel = $_POST['jenkel'];
    $foto = $_POST['foto'];
    
    {
        $sql = "INSERT INTO staff_perpus set id_staff='$id',nama_staff='$name', username_staff='$user',password_staff='$pass', jenis_kelamin_staff='$jenkel',foto_staff='$foto'";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = "Staff Perpus berhasil disimpan !";
            header('Location: ?module=staff');
        } else {
            if ($id == '') {
                $_SESSION['message'] = "ID Staff tidak boleh kosong !";
            } elseif ($name == '') {
                $_SESSION['message'] = "Nama Staff tidak boleh kosong !";
            } elseif ($user == '') {
                $_SESSION['message'] = "Username Staff tidak boleh kosong !";
            } elseif ($pass == '') {
                $_SESSION['message'] = "Password Staff tidak boleh kosong !";
            } elseif ($jenkel == '') {
                $_SESSION['message'] = "Jenis Kelamin Staff tidak boleh kosong !";
            }
            header('Location: ?module=tambah_data_staff');
        }
        mysqli_close($conn);
    }
?>