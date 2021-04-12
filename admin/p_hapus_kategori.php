<?php 

// menghubungkan koneksi database
include 'koneksi.php';
 
// menangkap data dari form
if(isset($_POST['simpan'])){
$id = $_POST['id_kategori'];
 
// menginput data ke table barang
 
mysqli_query($mysqli,"delete from kategori where id_kategori = '$id' ")or die(mysqli_error($mysqli));
 
// mengalihkan halaman kembali ke index.php

echo "<script>alert('Data berhasil Dihapus !');document.location='kategori.php'</script>";
}
?>