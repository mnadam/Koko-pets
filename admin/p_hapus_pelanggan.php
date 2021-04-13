<?php 

// menghubungkan koneksi database
include 'koneksi.php';
 
// menangkap data dari form
if(isset($_POST['pelanggan'])){
$id = $_POST['id_pelanggan'];
 
// menginput data ke table barang
 
mysqli_query($mysqli,"delete from pelanggan where id_pelanggan = '$id' ")or die(mysqli_error($mysqli));
 
// mengalihkan halaman kembali ke index.php

echo "<script>alert('Data berhasil Dihapus !');document.location='user_pelanggan.php'</script>";
}

?>