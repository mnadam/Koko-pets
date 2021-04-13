<?php session_start();
     if($_SESSION['sesi_user'] == ""){
	 	header("location:../login.php");
     }
                      $id_operator = $_SESSION['sesi_user'];
                                                $sesi_result = mysqli_query($mysqli, "SELECT * FROM operator where id_operator = '$id_operator'");
                                                $data = mysqli_fetch_assoc($sesi_result);
                                                $id_kategori = $data['id_operator'];
                                                $nama_operator = $data['nama_operator'];
                                                $level = $data['level'];

                                                ?>