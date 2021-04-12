<?php 

// menghubungkan koneksi database
include 'koneksi.php';
 
// menangkap data dari form
if(isset($_POST['admin'])){
$id = $_POST['id_admin'];
$nama = $_POST['nama_admin'];
 
// menginput data ke table barang
 
mysqli_query($mysqli,"Update operator set nama_operator = '$nama' where id_operator = '$id' ")or die(mysqli_error($mysqli));
 
// mengalihkan halaman kembali ke index.php

echo "<script>alert('Data berhasil Edit !');document.location='user_admin.php'</script>";
}
?>