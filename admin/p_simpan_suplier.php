<?php 

// menghubungkan koneksi database
include 'koneksi.php';
 
// menangkap data dari form
if(isset($_POST['suplier'])){
$lev = 2;
$id = $_POST['id_suplier'];
$nama = $_POST['nama_suplier'];
$password = $_POST['password'];
$telp = $_POST['no_telp'];
 
// menginput data ke table barang
 
mysqli_query($mysqli,"INSERT INTO suplier VALUES ('$id','$password','$nama','$telp','$lev')")or die(mysqli_error($mysqli));
 
// mengalihkan halaman kembali ke index.php

echo "<script>alert('Data berhasil ditambahkan !');document.location='user_suplier.php'</script>";
}


?>