<?php 
    include 'koneksi.php';
    include 'data_sesi.php';
                                             

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- INCLUDE v_head.php -->

<?php include 'v_head.php'; ?>


<body>
   
    <div id="wrapper">
        <!-- NAV TOP -->
        <nav class="navbar navbar-default top-navbar" role="navigation">
            
            <!-- INCLUDE NAVTOP -->
            <?php include 'v_navtop.php'; ?>

        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
                <!-- include navside.php -->
                <?php $pages = "home"; ?>
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
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="fa fa-truck fa-5x"></i>
                                <h3>8,457</h3>
                            </div>
                            <div class="panel-footer back-footer-green">
                                Suplier

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                                <i class="fa fa-shopping-cart fa-5x"></i>
                                <h3>52,160 </h3>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                Penjualan

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-body">
                                <i class="fas fa-shopping-basket fa-5x"></i>
                                <h3>15,823 </h3>
                            </div>
                            <div class="panel-footer back-footer-red">
                                Barang

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-brown">
                            <div class="panel-body">
                                <i class="fa fa-users fa-5x"></i>
                                <h3>36,752 </h3>
                            </div>
                            <div class="panel-footer back-footer-brown">
                                User

                            </div>
                        </div>
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
    <script src='assets/js/custom-scripts.js'></script>

</body>

</html>