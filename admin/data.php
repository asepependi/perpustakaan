<?php
    // Route Buku
    if ($_GET['module']== "buku") {
        include "module/buku/buku.php";
    } elseif ($_GET['module']=="tambah_data_buku") {
        include "module/buku/tambah_data_buku.php";
    } elseif ($_GET['module']=="aksi_tambah_data_buku") {
        include "module/buku/aksi_tambah_data_buku.php";
    } elseif ($_GET['module']=="edit_data_buku") {
        include "module/buku/edit_data_buku.php";
    } elseif ($_GET['module']=="aksi_edit_data_buku") {
        include "module/buku/aksi_edit_data_buku.php";
    } elseif ($_GET['module']=="aksi_hapus_data_buku") {
        include "module/buku/aksi_hapus_data_buku.php";
    } 
    // Route Staff
    elseif ($_GET['module']=='staff') {
        include "module/staff/staff.php";
    } elseif ($_GET['module']=="tambah_data_staff") {
        include "module/staff/tambah_data_staff.php";
    } elseif ($_GET['module']=="aksi_tambah_data_staff") {
        include "module/staff/aksi_tambah_data_staff.php";
    } elseif ($_GET['module']=="edit_data_staff") {
        include "module/staff/edit_data_staff.php";
    } elseif ($_GET['module']=="aksi_edit_data_staff") {
        include "module/staff/aksi_edit_data_staff.php";
    } elseif ($_GET['module']=="aksi_hapus_data_staff") {
        include "module/staff/aksi_hapus_data_staff.php";
    } 
    // Route Anggota
    elseif ($_GET['module']=='anggota') {
        include "module/anggota/anggota.php";
    } elseif ($_GET['module']=="tambah_data_anggota") {
        include "module/anggota/tambah_data_anggota.php";
    } elseif ($_GET['module']=="aksi_tambah_data_anggota") {
        include "module/anggota/aksi_tambah_data_anggota.php";
    } elseif ($_GET['module']=="edit_data_anggota") {
        include "module/anggota/edit_data_anggota.php";
    } elseif ($_GET['module']=="aksi_edit_data_anggota") {
        include "module/anggota/aksi_edit_data_anggota.php";
    } elseif ($_GET['module']=="aksi_hapus_data_anggota") {
        include "module/anggota/aksi_hapus_data_anggota.php";
    } 
    // Route Peminjaman
    elseif ($_GET['module']=='peminjaman') {
        include "module/peminjaman/peminjaman.php";
    } 
    elseif ($_GET['module']=="tambah_data_peminjaman") {
        include "module/peminjaman/tambah_data_peminjaman.php";
    }
    elseif ($_GET['module']=="aksi_tambah_data_peminjaman") {
        include "module/peminjaman/aksi_tambah_data_peminjaman.php";
    }
    elseif ($_GET['module']=="edit_data_peminjaman") {
        include "module/peminjaman/edit_data_peminjaman.php";
    }
    elseif ($_GET['module']=="aksi_edit_data_peminjaman") {
        include "module/peminjaman/aksi_edit_data_peminjaman.php";
    }
    elseif ($_GET['module']=="aksi_hapus_data_peminjaman") {
        include "module/peminjaman/aksi_hapus_data_peminjaman.php";
    }
    elseif ($_GET['module']=="detail_peminjaman") {
        include "module/peminjaman/detail_data_peminjaman.php";
    }
    elseif ($_GET['module']=='tambah_peminjaman_buku') {
        include "module/peminjaman/tambah_peminjaman_buku.php";
    }
    elseif ($_GET['module']=='aksi_tambah_data_peminjaman_buku') {
        include "module/peminjaman/aksi_tambah_data_peminjaman_buku.php";
    }
    elseif ($_GET['module']=='edit_peminjaman_buku') {
        include "module/peminjaman/edit_peminjaman_buku.php";
    }
    elseif ($_GET['module']=='aksi_edit_data_peminjaman_buku') {
        include "module/peminjaman/aksi_edit_data_peminjaman_buku.php";
    }
    elseif ($_GET['module']=="aksi_hapus_peminjaman_buku") {
        include "module/peminjaman/aksi_hapus_peminjaman_buku.php";
    }
    // Route Pengembalian
    elseif ($_GET['module']=='pengembalian') {
        include "module/pengembalian/pengembalian.php";
    } 
    elseif ($_GET['module']=="tambah_data_pengembalian") {
        include "module/pengembalian/tambah_data_pengembalian.php";
    }
    elseif ($_GET['module']=="aksi_tambah_data_pengembalian") {
        include "module/pengembalian/aksi_tambah_data_pengembalian.php";
    }
    elseif ($_GET['module']=="edit_data_pengembalian") {
        include "module/pengembalian/edit_data_pengembalian.php";
    }
    elseif ($_GET['module']=="aksi_edit_data_pengembalian") {
        include "module/pengembalian/aksi_edit_data_pengembalian.php";
    }
    elseif ($_GET['module']=="aksi_hapus_data_pengembalian") {
        include "module/pengembalian/aksi_hapus_data_pengembalian.php";
    }
    elseif ($_GET['module']=="detail_pengembalian") {
        include "module/pengembalian/detail_pengembalian.php";
    }
    elseif ($_GET['module']=='tambah_pengembalian_buku') {
        include "module/pengembalian/tambah_pengembalian_buku.php";
    }
    elseif ($_GET['module']=='aksi_tambah_data_pengembalian_buku') {
        include "module/pengembalian/aksi_tambah_data_pengembalian_buku.php";
    }
?>