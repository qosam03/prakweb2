<?php
require_once 'fungsi1.php';
$_customer = $_POST ["nama"];
$_produk = $_POST   ['produk'];
$_jumlah = $_POST   ['jumlah'];
$harga = harga  ($_produk);
$total = $harga * $_jumlah;

echo "<br>nama customer : $_customer";
echo "<br>produk : $_produk";
echo "<br>jumlah : $_jumlah";
echo "<br>harga satuan : $harga";
echo "<br>total harga :";
echo number_format($total,6);

?>