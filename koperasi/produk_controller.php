<?php 
include_once 'db.koneksi.php';
include_once 'models/produk.php';

$_kode = $_POST['kode'];
$_nama = $_POST['nama'];
$_harga_beli = $_POST['harga_beli'];
$_stok = $_POST['stok'];
$_minstok = $_POST['min_stok'];
$_jenis = $_POST['jenis_produk_id'];
//step 2 simpan data yg ditangkap kedalam array
$data = [
    $_Kode,
    $_nama,
    $_harga_beli,
    $_harga_jual = 1.2 * $_harga_beli,
    $_stok,
    $_jenis,
];
//step 3 ekseskusi data array melalui tombol tambah,ubah, dan hapus
$model = new produk();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $model->simpan($data);
        break;
    
    default:
        header('location:index.php?hal=produk');
        break;
}
//step 4 arahkan ke halaman produk
// jika proses simpan ubah hapus telah selesai
header('location:index.php?hal=produk');
?>