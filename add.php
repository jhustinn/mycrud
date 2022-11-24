<?php 
  require 'config.php';
  if ( isset ($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nisn = $_POST['nisn'];
    $tgl_lhr = $_POST['tgl_lahir'];
    $jrsn = $_POST['jurusan'];
    $jk = $_POST['jenis_klmin'];
    $gambar = $_POST['gambar'];
    $file_name = $_FILES['gambar']['name'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    $path = "asset/img/" . $file_name;
    
    move_uploaded_file ($tmp_file, $path);

    $query = mysqli_query($conn, "INSERT INTO daftar(nama, nisn, email, tgl_lahir, jurusan, jenis_klmin, gambar) VALUES ('$nama', '$nisn','$email','$tgl_lhr','$jrsn', '$jk', '$gambar')");
  
  // Cek apakah data berhasil ditambahkan atau tidak 
    
    header ('Location: berhasil.php');
  };

?>

