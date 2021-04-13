<?php include 'koneksi.php'; 
      include 'data_sesi.php';
      $pages = "kategori"; 
      $huruf = "KAT";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- INCLUDE v_head.php -->

<?php include 'v_head.php'; ?>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <!-- INCLUDE NAVTOP -->
            <?php include 'v_navtop.php'; ?>
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
                            Kategori <small> </small>
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
                             Table Kategori
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <form method="post" action="">     
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id Kategori</th>
                                            <th>Nama Kategori</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                                <?php 
                                               
                                                
                                                $result = mysqli_query($mysqli, "SELECT * FROM kategori");
                                                while($data = mysqli_fetch_array($result)){
                                                    $id_kategori = $data['id_kategori'];
                                                ?>
                                        <tr class="gradeX">
                                            <td><?php echo $data['id_kategori']; ?></td>
                                            <td><?php echo $data['nama_kategori']; ?></td>
                                            <td>
                                                    <a href="#editModal<?php echo $id_kategori; ?>" class="edit" data-toggle="modal"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"  > </i> | </a>
                                                    <a href="#hapusModal<?php echo $id_kategori; ?>" class="delete" data-toggle="modal"><i class="fa fa-trash" data-toggle="tooltip" title="Delete" style="color:red"> </i></a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="p_simpan_kategori.php">

        <?Php 
                                $result = mysqli_query($mysqli, "SELECT max(id_kategori) as kodeTerbesar FROM kategori");
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
            <label for="recipient-name" class="col-form-label">Id Kategori </label>
            <input type="text" class="form-control" id="" value="<?php echo $kodeBarang ?>" name="id_kategori" readonly>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nama Kategori</label>
            <input type="text" class="form-control" id="" name="nama_kategori" required>
          </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- MODAL EDIT -->

                                                <?php 
                                               
                                                
                                               $result = mysqli_query($mysqli, "SELECT * FROM kategori");
                                               while($data = mysqli_fetch_array($result)){
                                                   $id_kategori = $data['id_kategori'];
                                                   $nama_kategori = $data['nama_kategori'];
                                               ?>
<div class="modal fade" id="editModal<?php echo $id_kategori; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="p_edit_kategori.php">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Id Kategori </label>
            <input type="text" class="form-control" id="" value="<?php echo $id_kategori ?>" name="id_kategori" readonly>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nama Kategori</label>
            <input type="text" class="form-control" id="" value="<?php echo $nama_kategori ?>" name="nama_kategori" required>
          </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

                                               <?php } ?>



<!--Modal: modalConfirmDelete-->
<?php
                $result = mysqli_query($mysqli, "SELECT * FROM kategori");
                while($data = mysqli_fetch_array($result)){
                    $id_kategori = $data['id_kategori'];
                    $nama_kategori = $data['nama_kategori'];
                   
                ?>
<div class="modal fade" id="hapusModal<?php echo $id_kategori; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
      <form method="post" action="p_hapus_kategori.php">
      Kamu yakin menghhapus <b> <?php echo $nama_kategori; ?>  </b> dari database ?
        <!-- <i class="fas fa-times fa-4x animated rotateIn"></i> -->
        <input type="hidden" name="id_kategori" value="<?php echo $id_kategori; ?>">

      

             
      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
       <button class="btn btn-danger" name="simpan" type="submit">Yes</button>
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