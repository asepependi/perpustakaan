<?php
    include "config/koneksi.php";
    
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Data Staff
        $dataStaff = "SELECT * from staff_perpus where username_staff='$username' AND password_staff='$password'";
        $queryStaff = mysqli_query($conn, $dataStaff);
        $ketemuStaff = mysqli_num_rows($queryStaff);
        // Data Anggota
        $dataAnggota = "SELECT * from anggota_perpus where username_anggota='$username' AND pass_anggota='$password'";
        $queryAnggota = mysqli_query($conn, $dataAnggota);
        $ketemuAnggota = mysqli_num_rows($queryAnggota);

        if ($ketemuStaff > 0) {
            $r = mysqli_fetch_array($queryStaff);
            
            session_start();
            $_SESSION['kd_staff'] = $r['id_staff'];
            $_SESSION['kd_anggota'] = null;
    
            header('Location: admin/?module=dashboard');
        } elseif ($ketemuAnggota > 0) {
            $r = mysqli_fetch_array($queryAnggota);
    
            session_start();
            $_SESSION['kd_staff'] = null;
            $_SESSION['kd_anggota'] = $r['id_anggota'];
        
            header('Location: member/?module=dashboard');
        } else {
            include 'salah_password.php';
        }
    }