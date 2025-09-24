<?php
require_once "Form.php";

$form = new Form("simpan.php", "POST");

// Nama produk
$form->addText("nama_produk", "Nama Produk");

// Kategori produk (misalnya baju, celana, aksesoris)
$form->addDropdown("kategori", "Kategori", [
    "Baju", "Celana", "Aksesoris", "Outerwear", "Workshirt"
]);

// Deskripsi produk
$form->addTextarea("deskripsi", "Deskripsi Produk");

// Harga
$form->addText("harga", "Harga (Rp)");

// Stok
$form->addText("stok", "Jumlah Stok");

// Gender
$form->addRadio("gender", "Gender", ["Pria", "Wanita", "Unisex"]);

// ✅ Ukuran (Dropdown)
$form->addDropdown("ukuran", "Ukuran", ["S", "M", "L", "XL"]);

// ✅ Warna (Dropdown)
$form->addDropdown("warna", "Warna", ["Hitam", "Putih", "Navy", "Olive", "Abu-abu"]);

// Fitur tambahan (Checkbox)
$form->addCheckbox("fitur[]", "Fitur", [
    "Diskon", "Gratis Ongkir", "Limited"
]);

// Tombol submit
$form->addSubmit("simpan", "Simpan Data Produk");

$form->display();
?>
