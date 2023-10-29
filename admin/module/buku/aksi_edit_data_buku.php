<?php
    include '../admin/config/koneksi.php';
    $kode = $_POST['kode_buku'];
    $judul = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $stok = $_POST['stok'];

    {
        $sql = "UPDATE buku set kd_buku='$kode', judul_buku='$judul', penulis='$penulis', penerbit='$penerbit', stok='$stok' WHERE kd_buku='$kode'";
        if (mysqli_query($conn, $sql)) {
            header('Location: ?module=buku');
        } else {
            echo "Error: $sql.". mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>