<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h3 style="text-align: center;">Form NIlai Mahasiswa</h3>
        <hr>
        <form method="POST" action="Nilai_siswa.php">
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Nama Mahasiswa</label> 
    <div class="col-8">
      <input id="name" name="name" placeholder="masukan nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Matkul Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">dasar dasar pemrograman</option>
        <option value="WEB">pemrograman web</option>
        <option value="BASDAT">basis data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="masukan nilai uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="masukan nilai uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="masukan nilai tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
     <input type="submit" value="simpan" name="proses" class="btn btn-primary"/>
    </div>
  </div>
</form>
<!-- ?php
$proses = $_GET['proses'];
$nama_siswa= $_GET['name'];
$mata_kuliah = $_GET['matkul'];
$uts = $_GET['nilai_uts'];
$uas = $_GET['n<ilai_uas'];
$tugas = $_GET['nilai_tugas'];

echo "<br>Nama : $nama_siswa";
echo "<br>Mata Kuliah: $mata_kuliah";
echo "<br>Nilai uts : $uts";
echo "<br>Nilai uas : $uas";
echo "<br>Nilai Tugas Praktikum : $tugas";
echo "<br>Data Telah di proses ";
?> -->
    </div>
</body>
</html>