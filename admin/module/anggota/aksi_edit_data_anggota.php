<?php
    session_start();

    include '../admin/config/koneksi.php';

    $id = $_POST['id_anggota'];
    $name = $_POST['name'];
    $user = $_POST['username'];
    $pass = $_POST['pass'];
    $jenkel = $_POST['jenkel'];
    $foto = $_POST['foto'];

    {
        $sql = "UPDATE anggota_perpus set id_anggota='$id',nama_anggota='$name', username_anggota='$user',pass_anggota='$pass', jenis_kelamin_anggota='$jenkel',foto_anggota='$foto' WHERE id_anggota='$id'";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = "Anggota Perpus berhasil diupdate !";
            header('Location: ?module=anggota');
        } else {
            if ($id == '') {
                $_SESSION['message'] = "ID Anggota tidak boleh kosong !";
            } elseif ($name == '') {
                $_SESSION['message'] = "Nama Anggota tidak boleh kosong !";
            } elseif ($user == '') {
                $_SESSION['message'] = "Username Anggota tidak boleh kosong !";
            } elseif ($pass == '') {
                $_SESSION['message'] = "Password Anggota tidak boleh kosong !";
            } elseif ($jenkel == '') {
                $_SESSION['message'] = "Jenis Kelamin Anggota tidak boleh kosong !";
            }
            header('Location: ?module=edit_data_anggota&id='.$id);
        }
        mysqli_close($conn);
    }
?>