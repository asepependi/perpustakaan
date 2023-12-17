<?php
    include "config/koneksi.php";
    
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * from staff_perpus where username_staff='$username' AND password_staff='$password'";
        $login = mysqli_query($conn, $query);
        $ketemu = mysqli_num_rows($login);
        $r = mysqli_fetch_array($login);

        if ($ketemu > 0) {
            session_start();
            $_SESSION['kd_staff'] = $r['id_staff'];
            $_SESSION['nama'] = $r['nama_staff'];
    
            header('Location: ?module=buku');
            exit;
        } else {
            include 'salah_password.php';
            exit;
        }
        
    }