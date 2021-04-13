<?php 

// menghubungkan koneksi database
include 'koneksi.php';
 
// menangkap data dari form
if(isset($_POST['admin'])){
$id = $_POST['id_operator'];
 
// menginput data ke table barang
 
mysqli_query($mysqli,"delete from operator where id_operator = '$id' ")or die(mysqli_error($mysqli));
 
// mengalihkan halaman kembali ke index.php

echo "<script>alert('Data berhasil Dihapus !');document.location='user_admin.php'</script>";
}


if(isset($_POST['operator'])){
    $id = $_POST['id_operator'];
     
    // menginput data ke table barang
     
    mysqli_query($mysqli,"delete from operator where id_operator = '$id' ")or die(mysqli_error($mysqli));
     
    // mengalihkan halaman kembali ke index.php
    
    echo "<script>alert('Data berhasil Dihapus !');document.location='user_operator.php'</script>";
    }
?>