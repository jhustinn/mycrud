<?php 
require 'config.php';

$siswa = mysqli_query($conn, "SELECT * FROM daftar");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Daftar</title>
    <link rel="stylesheet" href="css/table.css">
</head>
<body>
    
    <h1>Daftar Isi</h1>
    <button id="mb"><a href="add.html">Tambah Data Baru</a></button>
    
    <div class="container">
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nu</th>
            <th>Action</th>
            <th>Image</th>
            <th>Nis</th>
            <th>Email</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
        </tr>
        
        <?php $i = 1; ?>
        <?php foreach($siswa as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <button id="myBtn"><a href=""><a href="delete.php?id=<?= $row['no']; ?> ">Delete</a></a></button>
                |
                <button id="myBtn"><a href="update.php">Edit</a></button>
            </td>
            <td><img src="asset/img/" . <?php $row['gambar'] ?> . width="50" alt=""></td>
            <td><?= $row["nisn"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
            <td><?= $row["tgl_lahir"]; ?></td>
            <td><?= $row["jenis_klmin"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </div>

</body>
</html>