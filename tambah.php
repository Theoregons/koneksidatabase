<?php 

require "function.php";
  
if(isset($_POST["submit"])){  
    if(tambah($_POST) > 0 ){
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
    <title>Add Data</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <ul> 
            <li>
                <label for="">NIM : </label>
                <input type="text" name="nim" id="nim" required >
            </li>
            <li>
                <label for="">Nama : </label>
                <input type="text" name="nama" id="nama" required >
            </li>
            <li>
                <label for="">Email : </label>
                <input type="text" name="email" id="email" required >
            </li>
            <li>
                <label for="">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required >
            </li>
            <li>
                <label for="">Gambar : </label>
                <input type="file" name="gambar" id="gambar" required >
            </li>
        </ul>
        <button type="submit" name="submit">Simpan Data</button>
    </form>
</body>
</html>