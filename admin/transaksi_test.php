<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include 'v_head.php'; ?>
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
                
                <?php  include 'v_navside.php';?>

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

                <!-- button -->

               
                    
                    
                        <div class="panel panel-default">
                            <!-- <div class="panel-heading"> AKSI </div>         -->
                                    
                                  <div class="panel-body"> 
                                    
                                    <a href="#addModal" class="btn btn-primary" data-toggle="modal"> <i class="fa fa-plus"> </i> Tambah Kategori</a>     
                                  </div>

                         </div>
               

                <!-- /. ROW  -->

                <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>CSS grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>Trident</td>
                                            <td>Internet Explorer 4.0</td>
                                            <td>Win 95+</td>
                                            <td class="center">4</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>Trident</td>
                                            <td>Internet Explorer 5.0</td>
                                            <td>Win 95+</td>
                                            <td class="center">5</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>Trident</td>
                                            <td>Internet Explorer 5.5</td>
                                            <td>Win 95+</td>
                                            <td class="center">5.5</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>Trident</td>
                                            <td>Internet Explorer 6</td>
                                            <td>Win 98+</td>
                                            <td class="center">6</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>Trident</td>
                                            <td>Internet Explorer 7</td>
                                            <td>Win XP SP2+</td>
                                            <td class="center">7</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>Trident</td>
                                            <td>AOL browser (AOL desktop)</td>
                                            <td>Win XP</td>
                                            <td class="center">6</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Firefox 1.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Firefox 1.5</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Firefox 2.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Firefox 3.0</td>
                                            <td>Win 2k+ / OSX.3+</td>
                                            <td class="center">1.9</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Camino 1.0</td>
                                            <td>OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Camino 1.5</td>
                                            <td>OSX.3+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Netscape 7.2</td>
                                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Netscape Browser 8</td>
                                            <td>Win 98SE+</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Netscape Navigator 9</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.0</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.1</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1.1</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.2</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1.2</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.3</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1.3</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.4</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1.4</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.5</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1.5</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.6</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1.6</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.7</td>
                                            <td>Win 98+ / OSX.1+</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.8</td>
                                            <td>Win 98+ / OSX.1+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Seamonkey 1.1</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Epiphany 2.20</td>
                                            <td>Gnome</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Webkit</td>
                                            <td>Safari 1.2</td>
                                            <td>OSX.3</td>
                                            <td class="center">125.5</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Webkit</td>
                                            <td>Safari 1.3</td>
                                            <td>OSX.3</td>
                                            <td class="center">312.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Webkit</td>
                                            <td>Safari 2.0</td>
                                            <td>OSX.4+</td>
                                            <td class="center">419.3</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Webkit</td>
                                            <td>Safari 3.0</td>
                                            <td>OSX.4+</td>
                                            <td class="center">522.1</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Webkit</td>
                                            <td>OmniWeb 5.5</td>
                                            <td>OSX.4+</td>
                                            <td class="center">420</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Webkit</td>
                                            <td>iPod Touch / iPhone</td>
                                            <td>iPod</td>
                                            <td class="center">420.1</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Webkit</td>
                                            <td>S60</td>
                                            <td>S60</td>
                                            <td class="center">413</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 7.0</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 7.5</td>
                                            <td>Win 95+ / OSX.2+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 8.0</td>
                                            <td>Win 95+ / OSX.2+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 8.5</td>
                                            <td>Win 95+ / OSX.2+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 9.0</td>
                                            <td>Win 95+ / OSX.3+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 9.2</td>
                                            <td>Win 88+ / OSX.3+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 9.5</td>
                                            <td>Win 88+ / OSX.3+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera for Wii</td>
                                            <td>Wii</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Nokia N800</td>
                                            <td>N800</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Nintendo DS browser</td>
                                            <td>Nintendo DS</td>
                                            <td class="center">8.5</td>
                                            <td class="center">C/A<sup>1</sup>
                                            </td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>KHTML</td>
                                            <td>Konqureror 3.1</td>
                                            <td>KDE 3.1</td>
                                            <td class="center">3.1</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>KHTML</td>
                                            <td>Konqureror 3.3</td>
                                            <td>KDE 3.3</td>
                                            <td class="center">3.3</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>KHTML</td>
                                            <td>Konqureror 3.5</td>
                                            <td>KDE 3.5</td>
                                            <td class="center">3.5</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Tasman</td>
                                            <td>Internet Explorer 4.5</td>
                                            <td>Mac OS 8-9</td>
                                            <td class="center">-</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Tasman</td>
                                            <td>Internet Explorer 5.1</td>
                                            <td>Mac OS 7.6-9</td>
                                            <td class="center">1</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Tasman</td>
                                            <td>Internet Explorer 5.2</td>
                                            <td>Mac OS 8-X</td>
                                            <td class="center">1</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Misc</td>
                                            <td>NetFront 3.1</td>
                                            <td>Embedded devices</td>
                                            <td class="center">-</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Misc</td>
                                            <td>NetFront 3.4</td>
                                            <td>Embedded devices</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Misc</td>
                                            <td>Dillo 0.8</td>
                                            <td>Embedded devices</td>
                                            <td class="center">-</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Misc</td>
                                            <td>Links</td>
                                            <td>Text only</td>
                                            <td class="center">-</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Misc</td>
                                            <td>Lynx</td>
                                            <td>Text only</td>
                                            <td class="center">-</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Misc</td>
                                            <td>IE Mobile</td>
                                            <td>Windows Mobile 6</td>
                                            <td class="center">-</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Misc</td>
                                            <td>PSP browser</td>
                                            <td>PSP</td>
                                            <td class="center">-</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr class="gradeU">
                                            <td>Other browsers</td>
                                            <td>All others</td>
                                            <td>-</td>
                                            <td class="center">-</td>
                                            <td class="center">U</td>
                                        </tr>
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
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <?php include 'v_script.php'; ?>
     <!-- Tambah Modal HTML -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH KATEGORI</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Id Kategori</label>
            <input type="text" class="form-control" id="" name="id_kategori" disabled>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nama Kategori</label>
            <input type="text" class="form-control" id="" name="nama_kategori">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"><i class="fa fa-check"></i> Simpan </button>
      </div>
    </div>
  </div>
</div>
    
    <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    <script src='assets/js/custom-scripts.js'></script>

   
</body>
</html>
