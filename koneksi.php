<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_persuratan");

    if(mysqli_connect_errno()){
        echo "error".mysqli_error($koneksi);
    }
?>