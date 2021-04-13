<?php 

// menghubungkan koneksi database
include 'koneksi.php';
 
// menangkap data dari form
if(isset($_POST['pelanggan'])){
$id = $_POST['id_pelanggan'];
$nama = $_POST['nama_pelanggan'];
$telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
 
// menginput data ke table barang
 
mysqli_query($mysqli,"Update pelanggan set nama_pelanggan = '$nama', no_telp = '$telp', alamat = '$alamat' where id_pelanggan = '$id' ")or die(mysqli_error($mysqli));
 
// mengalihkan halaman kembali ke index.php

echo "<script>alert('Data berhasil Edit !');document.location='user_pelanggan.php'</script>";
}

?>