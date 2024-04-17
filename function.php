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

    // $mhs = mysqli_fetch_array($result);
    // var_dump($mhs);
    
    // while ($mhs = mysqli_fetch_assoc($result)) {
    //     var_dump($mhs);
    // }
?>