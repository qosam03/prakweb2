<?php
// konfigurasi database
$host = "localhost";
$dbname = "dbkoperasi";
$username = "root";
$password = "";

// buat koneksi PDO
// menggunakan try catch

try {
// buat object koneksi pdo yang di dalamnya ada parameter host dll
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// set atribut mengatur mode kesalan

// echo "<h1>database berhasil terhubung</h1>";

} catch (PDOException $e) {
    echo "database tidak terhubung : " .$e->getMessage();
}
?>