<?php include 'koneksi.php'; 
      include 'data_sesi.php';
      $pages = "barang";
      $huruf = "BRG";
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
                            Data Barang <small> </small>
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
                             Table Data Barang
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                                
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id Barang</th>
                                            <th>Kategori</th>
                                            <th>Suplier</th>
                                            <th>Nama Barang </th>
                                           
                                            <th>Stok</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                                <?php 
                                               
                                                
                                                $result = mysqli_query($mysqli, "SELECT * FROM barang");
                                                while($data = mysqli_fetch_array($result)){
                                                ?>
                                        <tr class="gradeX">
                                            <td><?php echo $data['id_barang']; ?></td>
                                            <td><?php echo $data['id_kategori']; ?></td>
                                            <td><?php echo $data['id_suplier']; ?></td>
                                            <td><?php echo $data['nama_barang']; ?></td>
                                            
                                            <td><?php echo $data['stok']; ?></td>
                                            
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                                                
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
                                $result = mysqli_query($mysqli, "SELECT max(id_barang) as kodeTerbesar FROM barang");
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
            <label for="recipient-name" class="col-form-label">Id Barang </label>
            <input type="text" class="form-control" id="" value="<?php echo $kodeBarang ?>" name="id_barang" readonly>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nama Barang</label>
            <input type="text" class="form-control" id="" name="nama_barang" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nama Kategori</label>
            <input type="text" class="form-control" id="" name="nama_kategori" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nama Suplier</label>
            <input type="text" class="form-control" id="" name="nama_suplier" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Harga Jual</label>
            <input type="text" class="form-control" id="" name="harga_jual" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Harga Beli</label>
            <input type="text" class="form-control" id="" name="harga_beli" required>
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


    <!-- JS Scripts-->

    <!-- jQuery Js -->
    <?php include 'v_script.php'; ?>
    
    <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    <script src='assets/js/custom-scripts.js'></script>
</body>

</html>