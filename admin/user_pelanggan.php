<?php include 'koneksi.php'; 
      include 'data_sesi.php';
      $pages = "user_pelanggan"; 
      // $huruf = "SUP";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- INCLUDE v_head.php -->

<?php include 'v_head.php'; ?>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <!-- INCLUDE NAVTOP -->
            <?php include 'v_navtop.php' ?>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
                <!-- include navside.php -->
                <?php include 'v_navside.php';?>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                        Data User Pelanggan <small> </small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->

               


                <div class="row">
                
                   
                          
                <div class="col-md-12">
                     <!-- Advanced Tables -->
                     <!-- <div class="panel panel-default">
                        <div class="panel-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal" ><i class="fa fa-plus"> </i> Tambah</button>
					     
                        </div>
                     </div>   -->
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
                                            <th>Id Pelanggan</th>
                                            <th>Nama Pelanggan</th>
                                            <?PHP if($level == "4"){ ?> <tH>Password </th> <?php } ?>
                                            <th>No. Telp </th>
                                            <th>Alamat </th>
                                            <th>Level </th>
                                            <?PHP if($level == "4"){ ?><th>Aksi </th><?php  } ?>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                                <?php 
                                               
                                                
                                                $result = mysqli_query($mysqli, "SELECT * FROM pelanggan where level = 1 ");
                                                while($data = mysqli_fetch_array($result)){
                                                    $id_pelanggan = $data['id_pelanggan'];
                                                ?>
                                        <tr class="gradeX">
                                            <td><?php echo $data['id_pelanggan']; ?></td>
                                            <td><?php echo $data['nama_pelanggan']; ?></td>
                                                <?PHP if($level == "4"){ ?><td><?php echo $data['password']; ?></td> <?php } ?>
                                            <td><?php echo $data['no_telp']; ?></td>
                                            <td><?php echo $data['alamat']; ?></td>
                                            
                                            <td><?php  $lev = $data['level']; if($lev == "1"){ $lev = "Pelanggan"; } echo "$lev"; ?> </td>
                                            <?PHP if($level == "4"){ ?><td>
                                                    <a href="#editModal<?php echo $id_pelanggan; ?>" class="edit" data-toggle="modal"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"  > </i> | </a>
                                                    <a href="#hapusModal<?php echo $id_pelanggan; ?>" class="delete" data-toggle="modal"><i class="fa fa-trash" data-toggle="tooltip" title="Delete" style="color:red"> </i></a>
                                            </td> <?php } ?>
                                            
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



<!-- MODAL EDIT -->

                                                <?php 
                                               
                                                
                                               $result = mysqli_query($mysqli, "SELECT * FROM pelanggan where level= 1 ");
                                               while($data = mysqli_fetch_array($result)){
                                                   $id_pelanggan = $data['id_pelanggan'];
                                                   $nama_pelanggan = $data['nama_pelanggan'];
                                                   $no_telp = $data['no_telp'];
                                                   $alamat = $data['alamat'];
                                               ?>
<div class="modal fade" id="editModal<?php echo $id_pelanggan; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit pelanggan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="p_edit_pelanggan.php">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Id pelanggan </label>
            <input type="text" class="form-control" id="" value="<?php echo $id_pelanggan ?>" name="id_pelanggan" readonly>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nama Operator</label>
            <input type="text" class="form-control" id="" value="<?php echo $nama_pelanggan ?>" name="nama_pelanggan" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">No Telp</label>
            <input type="text" class="form-control" id="" value="<?php echo $no_telp ?>" name="no_telp" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Alamat</label>
            <input type="text" class="form-control" id="" value="<?php echo $alamat ?>" name="alamat" required>
          </div>

          
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="pelanggan">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

                                               <?php } ?>



<!--Modal: modalConfirmDelete-->
<?php
                $result = mysqli_query($mysqli, "SELECT * FROM pelanggan");
                while($data = mysqli_fetch_array($result)){
                    $id_pelanggan = $data['id_pelanggan'];
                    $nama_pelanggan = $data['nama_pelanggan'];
                   
                ?>
<div class="modal fade" id="hapusModal<?php echo $id_pelanggan; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
      <form method="post" action="p_hapus_pelanggan.php">
      Kamu yakin menghhapus <b> <?php echo $nama_pelanggan; ?>  </b> dari database ?
        <!-- <i class="fas fa-times fa-4x animated rotateIn"></i> -->
        <input type="hidden" name="id_pelanggan" value="<?php echo $id_pelanggan; ?>">

      

             
      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
       <button class="btn btn-danger" name="pelanggan" type="submit">Yes</button>
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