<?php
include 'koneksi.php';

$no_surat   = $_POST['no_surat'];
$no_agenda         = $_POST['no_agenda'];
$tgl_surat       = $_POST['tgl_surat'];
$tgl_masuk    = $_POST['tgl_masuk'];
$asal_surat    = $_POST['asal_surat'];
$perihal    = $_POST['perihal'];
$file    = $_FILES['file']['name'];

if($file != "") {
  $ekstensi_diperbolehkan = array('pdf','docx', 'doc', 'txt');
  $x = explode('.', $file);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['file']['tmp_name'];   
  $angka_acak = rand(1,999);
  $nama_file_baru = $angka_acak.'-'.$file;
  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
      move_uploaded_file($file_tmp, 'file/'.$nama_file_baru);
      $query = "INSERT INTO tb_suratmasuk (no_surat, no_agenda, tgl_surat, tgl_masuk, asal_surat, perihal, file) VALUES 
      ('$no_surat', '$no_agenda', '$tgl_surat', '$tgl_masuk', '$asal_surat', '$perihal', '$nama_file_baru')";
      $result = mysqli_query($koneksi, $query);
      if(!$result){
          die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
              " - ".mysqli_error($koneksi));
      } else {
          echo "<script>alert('Data berhasil ditambah.');window.location='surat_masuk.php';</script>";
      }

  } else {
      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='surat_masuk.php';</script>";
  }
} 

else{
  $query = "INSERT INTO tb_suratmasuk (no_surat, no_agenda, tgl_surat, tgl_masuk, asal_surat, perihal, file) VALUES 
      ('$no_surat', '$no_agenda', '$tgl_surat', '$tgl_masuk', '$asal_surat', '$perihal', null)";


  $result = mysqli_query($koneksi, $query);
  if(!$result){
    die("Query gagal dijalankan ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));

  }else{
  echo"<script>alert('Data Berhasil Disimpan.');window.location = 'surat_keluar.php' </script>";
  }
}



?>
