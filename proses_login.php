<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM tb_login WHERE username = '$username' AND password = '$password'";
$sql = mysqli_query($koneksi, $query);
$fetch = mysqli_fetch_assoc($sql);

// var_dump($fetch) or die;
if ($fetch == true) {
    header('Location: index.php');
} else {
    echo "<script>alert('Username atau password salah.');window.location='login.php';</script>";
 }
?>