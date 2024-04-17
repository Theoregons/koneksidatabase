<?php 

require "function.php";

$id = $_GET["id"];
$mhs = query("select * from data_mhs where id = $id ")[0];

if(isset($_POST["submit"])){  
    if(ubah($_POST) > 0 ){
        echo "berhasil diubah";
    } else {
        echo "Gagal diubah"; 
    }
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
    <form action="" method="post">
        <ul>
 
            <input type="hidden" name="id" id="id" required value="<?= $mhs["id"] ?>"> 
            <li>
                <label for="">NIM : </label>
                <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"] ?>">
            </li>
            <li>
                <label for="">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"] ?>">
            </li>
            <li>
                <label for="">Email : </label>
                <input type="text" name="email" id="email" required value="<?= $mhs["email"] ?>">
            </li>
            <li>
                <label for="">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"] ?>">
            </li>
            <li>
                <label for="">Gambar : </label>
                <input type="text" name="gambar" id="gambar" required value="<?= $mhs["gambar"] ?>">
            </li>
        </ul>
        <button type="submit" name="submit">Ubah Data</button>
    </form>
</body>
</html>