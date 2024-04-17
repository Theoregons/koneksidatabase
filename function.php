<?php 
    $koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");

    function query($query) {
        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row; 
        } 
        return $rows;
    }

    function cari($keyword){
        $query = "SELECT * FROM data_mhs where nama like '%$keyword%' ";
        return query($query); 
    }

    function ubah($data) {
        global $koneksi;

        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $nim = htmlspecialchars($data["nim"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "update data_mhs set 
            nama = '$nama',
            nim = '$nim',
            email = '$email',
            jurusan = '$jurusan',
            gambar = '$gambar' where id = $id
        ";
        
        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);
    }
    // $mhs = mysqli_fetch_array($result);
    // var_dump($mhs);
    
    // while ($mhs = mysqli_fetch_assoc($result)) {
    //     var_dump($mhs);
    // }
?>