<?php 

// menghubungkan koneksi database
include 'koneksi.php';
 
// menangkap data dari form
if(isset($_POST['suplier'])){
$id = $_POST['id_suplier'];
 
// menginput data ke table barang
 
mysqli_query($mysqli,"delete from suplier where id_suplier = '$id' ")or die(mysqli_error($mysqli));
 
// mengalihkan halaman kembali ke index.php

echo "<script>alert('Data berhasil Dihapus !');document.location='user_suplier.php'</script>";
}

?>