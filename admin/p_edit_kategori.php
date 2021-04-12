<?php 

// menghubungkan koneksi database
include 'koneksi.php';
 
// menangkap data dari form
if(isset($_POST['simpan'])){
$id = $_POST['id_kategori'];
$nama = $_POST['nama_kategori'];
 
// menginput data ke table barang
 
mysqli_query($mysqli,"Update kategori set nama_kategori = '$nama' where id_kategori = '$id' ")or die(mysqli_error($mysqli));
 
// mengalihkan halaman kembali ke index.php

echo "<script>alert('Data berhasil Edit !');document.location='kategori.php'</script>";
}
?>