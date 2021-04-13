<?php 

// menghubungkan koneksi database
include 'koneksi.php';
 
// menangkap data dari form
if(isset($_POST['suplier'])){
$id = $_POST['id_suplier'];
$nama = $_POST['nama_suplier'];
$telp = $_POST['no_telp'];
 
// menginput data ke table barang
 
mysqli_query($mysqli,"Update suplier set nama_suplier = '$nama', no_telp = '$telp' where id_suplier = '$id' ")or die(mysqli_error($mysqli));
 
// mengalihkan halaman kembali ke index.php

echo "<script>alert('Data berhasil Edit !');document.location='user_suplier.php'</script>";
}

?>