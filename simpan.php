<?php
$koneksi = new mysqli("localhost", "root", "", "onlineshop_db");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama_produk'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $tipe = $_POST['tipe'];
    $fitur = isset($_POST['fitur']) ? implode(",", $_POST['fitur']) : "";

    $sql = "INSERT INTO produk (nama_produk, kategori, deskripsi, harga, stok, tipe, fitur)
            VALUES ('$nama', '$kategori', '$deskripsi', '$harga', '$stok', '$tipe', '$fitur')";

    if ($koneksi->query($sql)) {
        echo "✅ Data produk berhasil disimpan! <br>";
        echo "<a href='form_produk.php'>Input lagi</a>";
    } else {
        echo "❌ Error: " . $koneksi->error;
    }
}
?>
