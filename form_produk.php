<?php
require_once "Form.php";

echo "<h2>Form Input Produk Online Shop</h2>";

$form = new Form("simpan.php", "POST");

$form->inputText("nama_produk", "Nama Produk");
$form->select("kategori", "Kategori", [
    "elektronik" => "Elektronik",
    "fashion" => "Fashion",
    "kosmetik" => "Kosmetik",
    "makanan" => "Makanan & Minuman",
    "lainnya" => "Lainnya"
]);
$form->textarea("deskripsi", "Deskripsi Produk");
$form->inputText("harga", "Harga");
$form->inputText("stok", "Stok Produk");
$form->inputRadio("tipe", "Tipe Produk", [
    "barang" => "Barang",
    "jasa" => "Jasa"
]);
$form->inputCheckbox("fitur", "Fitur Tambahan", [
    "garansi" => "Garansi",
    "cod" => "COD",
    "diskon" => "Diskon",
    "gratis_ongkir" => "Gratis Ongkir"
]);
$form->submit("Simpan Data Produk");
$form->close();
?>
