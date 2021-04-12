<?php 

// menghubungkan koneksi database
include 'koneksi.php';
 
// menangkap data dari form
if(isset($_POST['admin'])){
$lev = 4;
$id = $_POST['id_admin'];
$nama = $_POST['nama_admin'];
$password = $_POST['password'];
 
// menginput data ke table barang
 
mysqli_query($mysqli,"INSERT INTO operator VALUES ('$id','$password','$nama','$lev')")or die(mysqli_error($mysqli));
 
// mengalihkan halaman kembali ke index.php

echo "<script>alert('Data berhasil ditambahkan !');document.location='user_admin.php'</script>";
}


if(isset($_POST['operator'])){
    $lev = 3;
    $id = $_POST['id_operator'];
    $nama = $_POST['nama_operator'];
    $password = $_POST['password'];
    // menginput data ke table barang
     
    mysqli_query($mysqli,"INSERT INTO operator VALUES ('$id','$password','$nama','$lev')")or die(mysqli_error($mysqli));
     
    // mengalihkan halaman kembali ke index.php
    
    echo "<script>alert('Data berhasil ditambahkan !');document.location='user_operator.php'</script>";
    }
?>