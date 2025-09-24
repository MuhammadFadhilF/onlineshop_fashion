<?php
// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "onlineshop_fashion");

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Ambil data dari form
$nama_produk = $_POST['nama_produk'];
$kategori    = $_POST['kategori'];
$deskripsi   = $_POST['deskripsi'];
$harga       = $_POST['harga'];
$stok        = $_POST['stok'];
$gender      = $_POST['gender'];
$ukuran      = $_POST['ukuran'];
$warna       = $_POST['warna'];

// Checkbox (fitur bisa lebih dari 1)
$fitur = "";
if (isset($_POST['fitur'])) {
    $fitur = implode(", ", $_POST['fitur']); 
}

// Query simpan data
$sql = "INSERT INTO produk (nama_produk, kategori, deskripsi, harga, stok, gender, ukuran, warna, fitur)
        VALUES ('$nama_produk', '$kategori', '$deskripsi', '$harga', '$stok', '$gender', '$ukuran', '$warna', '$fitur')";

if ($koneksi->query($sql) === TRUE) {
    echo "✅ Data produk berhasil disimpan.<br>";
    echo "<a href='form_produk.php'>Kembali ke Form</a>";
} else {
    echo "❌ Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
