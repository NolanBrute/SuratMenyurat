<?php
 include ('koneksi.php');

 $id = ($_GET['id']);

 $query = "DELETE FROM tb_suratkeluar WHERE id = '$id'";
 $result = mysqli_query($koneksi, $query);

            if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));

            } else {
               echo "<script>alert('Data berhasil dihapus.');window.location='surat_keluar.php';</script>";
            }

?>