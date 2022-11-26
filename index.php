<!DOCTYPE html>
<html>
<head>
 <title>Pendaftaran Siswa Baru | SMK Coding</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <title>Pendaftaran Siswa Baru | SMK Coding</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>
<body>
 <header>
 <h3>Pendaftaran Siswa Baru</h3>
 <h1>SMK Coding</h1>
 </header>
 <h4>Menu</h4>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form-daftar.php">Pendaftaran</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="list-siswa.php">List Siswa</a>
      </li>
    </ul>
  </div>
</nav>
 <!-- <nav>
 <ul>
 <li><a href="form-daftar.php">Daftar Baru</a></li>
 <li><a href="list-siswa.php">Pendaftar</a></li>
 </ul>
 </nav> -->
 <?php if(isset($_GET['status'])): ?>
 <p>
 <?php
 if($_GET['status'] == 'sukses'){
 echo "Pendaftaran siswa baru berhasil!";
 } else {
 echo "Pendaftaran gagal!";
 }
 ?>
 </p>
<?php endif; ?>
 </body>
</html>