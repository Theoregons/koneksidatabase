<?php 
    require 'function.php';
    $mahasiswa = query("SELECT * FROM data_mhs");
    
    if(isset($_POST["cari"])){  
        $mahasiswa = cari($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>

    <form action="" method="POST">
        <input type="text" name="keyword" placeholder="Masukan kata kunci pencarian">
        <button type="submit" name="cari">Cari</button>
    </form>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>#</td>
            <td>Aksi</td>
            <td>Gambar</td>
            <td>NIM</td>
            <td>Nama</td>
            <td>Jurusan</td>
            <td>Email</td>
        </tr>
        <?php $i = 1; ?>
         <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td><img src="img/<?=$mhs['gambar']?>" width="100px" alt=""></td>
                <td><?= $mhs['nim']; ?></td>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['jurusan']; ?></td>
                <td><?= $mhs['email']; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
     </table>
</body>
</html>