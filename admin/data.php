<?php
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
?>