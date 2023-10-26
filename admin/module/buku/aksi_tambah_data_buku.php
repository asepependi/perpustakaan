<?php
    include '../admin/config/koneksi.php';
{
    // $sql = "INSERT INTO buku (kd_buku, judul_buku, penulis, penerbit, stok) 
    //         VALUES (
    //             '$_POST[kode_buku]', '$_POST[judul_buku]', 
    //             '$_POST[penulis]', '$_POST[penerbit]', '$_POST[stok]'
    //         )";
    // if (mysqli_query($conn, $sql)) {
    //     echo "Berhasil disimpan !";
    // } else {
    //     echo "Error: $sql.". mysqli_error($conn);
    // }
    // mysqli_close($conn);
    header('Location: ../admin/module/buku/buku.php');
}
?>