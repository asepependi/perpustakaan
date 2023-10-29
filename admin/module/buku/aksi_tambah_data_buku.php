<?php
    include '../admin/config/koneksi.php';
    $kode = $_POST['kode_buku'];
    $judul = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $stok = $_POST['stok'];
{
    $sql = "INSERT INTO buku set kd_buku='$kode', judul_buku='$judul', penulis='$penulis', penerbit='$penerbit', stok='$stok'";
    if (mysqli_query($conn, $sql)) {
        header('Location: ?module=buku');
    } else {
        // header('Location: ?module=tambah_data_buku');
    }
    mysqli_close($conn);
}
?>