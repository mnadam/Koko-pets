<?php include 'koneksi.php'; 
      $pages = "user_operator"; 
      $huruf = "OPR";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- INCLUDE v_head.php -->

<?php include 'v_head.php'; ?>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">SY Koko Pets</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    
                </li>
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
                <!-- include navside.php -->
                <?php $page = "barang"; ?>
                <?php include 'v_navside.php';?>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Dashboard <small> </small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->

               


                <div class="row">
                
                   
                          
                <div class="col-md-12">
                     <!-- Advanced Tables -->
                     <div class="panel panel-default">
                        <div class="panel-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal" ><i class="fa fa-plus"> </i> Tambah</button>
					     
                        </div>
                     </div>  
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Table User Operator
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <form method="post" action="">     
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id Operator</th>
                                            <th>Nama Operator</th>
                                            <tH>Password </th>
                                            <th>Level </th>
                                            <th>Aksi </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                                <?php 
                                               
                                                
                                                $result = mysqli_query($mysqli, "SELECT * FROM operator where level = 3 ");
                                                while($data = mysqli_fetch_array($result)){
                                                    $id_operator = $data['id_operator'];
                                                ?>
                                        <tr class="gradeX">
                                            <td><?php echo $data['id_operator']; ?></td>
                                            <td><?php echo $data['nama_operator']; ?></td>
                                            <td><?php echo $data['password']; ?></td>
                                            <td><?php  $lev = $data['level']; if($lev == "3"){ $lev = "Operator"; } echo "$lev"; ?> </td>
                                            <td>
                                                    <a href="#editModal<?php echo $id_operator; ?>" class="edit" data-toggle="modal"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"  > </i> | </a>
                                                    <a href="#hapusModal<?php echo $id_operator; ?>" class="delete" data-toggle="modal"><i class="fa fa-trash" data-toggle="tooltip" title="Delete" style="color:red"> </i></a>
                                            </td>
                                            
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                               </form>
                                                
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
                <!-- FOOTER -->
                  <?php include 'v_footer.php'; ?>
				</div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->


    <!-- MODAL TAMBAH -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Operator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="p_simpan_operator.php">

        <?Php 
                                $result = mysqli_query($mysqli, "SELECT max(id_operator) as kodeTerbesar FROM operator");
                                $data = mysqli_fetch_array($result);
                                $kodeBarang = $data['kodeTerbesar'];
                            
                                // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
                                // dan diubah ke integer dengan (int)
                                $urutan = (int) substr($kodeBarang, 3, 3);
                            
                                // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
                                $urutan++;
                            
                                // membentuk kode barang baru
                                // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
                                // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
                                // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
                                
                                $kodeBarang = $huruf . sprintf("%03s", $urutan);

            ?>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Id Operator </label>
            <input type="text" class="form-control" id="" value="<?php echo $kodeBarang ?>" name="id_operator" readonly>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nama Operator</label>
            <input type="text" class="form-control" id="" name="nama_operator" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Password</label>
            <input type="password" class="form-control" id="" name="password" required>
          </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="operator">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- MODAL EDIT -->

                                                <?php 
                                               
                                                
                                               $result = mysqli_query($mysqli, "SELECT * FROM operator where level= 3 ");
                                               while($data = mysqli_fetch_array($result)){
                                                   $id_operator = $data['id_operator'];
                                                   $nama_operator = $data['nama_operator'];
                                               ?>
<div class="modal fade" id="editModal<?php echo $id_operator; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Operator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="p_edit_operator.php">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Id Operator </label>
            <input type="text" class="form-control" id="" value="<?php echo $id_operator ?>" name="id_operator" readonly>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nama Operator</label>
            <input type="text" class="form-control" id="" value="<?php echo $nama_operator ?>" name="nama_operator" required>
          </div>

          
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="operator">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

                                               <?php } ?>



<!--Modal: modalConfirmDelete-->
<?php
                $result = mysqli_query($mysqli, "SELECT * FROM operator");
                while($data = mysqli_fetch_array($result)){
                    $id_operator = $data['id_operator'];
                    $nama_operator = $data['nama_operator'];
                   
                ?>
<div class="modal fade" id="hapusModal<?php echo $id_operator; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Konfirmasi </p>
      </div>

      <!--Body-->
      <div class="modal-body">
      <form method="post" action="p_hapus_operator.php">
      Kamu yakin menghhapus <b> <?php echo $nama_operator; ?>  </b> dari database ?
        <!-- <i class="fas fa-times fa-4x animated rotateIn"></i> -->
        <input type="hidden" name="id_operator" value="<?php echo $id_operator; ?>">

      

             
      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
       <button class="btn btn-danger" name="operator" type="submit">Yes</button>
        <a type="button" class="btn btn-default" data-dismiss="modal">No</a>
      </div>
    </div>
                </form>
    <!--/.Content-->
  </div>
</div>
                <?php } ?>
<!--Modal: modalConfirmDelete-->




    <?php include 'v_script.php'; ?>
    
    <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
   <script src='assets/js/custom-scripts.js'></script>
</body>

</html>