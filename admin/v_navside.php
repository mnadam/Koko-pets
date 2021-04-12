<div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="index.php" <?php  if($pages == "home") { echo "class='active-menu'"; } ?>><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="" <?php //if($pagess == "") { echo "class='active-menu'"; } ?>><i class="fa fa-desktop"></i> Transaksi Pelanggan</a>
                    </li>
					<li>
                        <a href="suplier.php" <?php //if($pagess == "suplier") { echo "class='active-menu'"; } ?>><i class="fa fa-bar-chart-o"></i> Transaksi Suplier </a>
                    </li>
                    
                    <li>
                        <a href="#" <?php if(($pages == "barang") OR ($pages == "kategori")) { echo "class='active-menu'"; } ?>><i class="fa fa-sitemap"></i>Managemen Barang<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="barang.php" <?php if($pages == "barang") { echo "class='active-menu'"; } ?>>Barang</a>
                            </li>
                            <li>
                                <a href="kategori.php" <?php if($pages == "kategori") { echo "class='active-menu'"; } ?>>Kategori</a>
                            </li>
                            
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i>Managemen User<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="user_admin.php">Admin</a>
                            </li>
                            <li>
                                <a href="user_operator.php">Operator</a>
                            </li>

                            <li>
                                <a href="#">Suplier</a>
                            </li>

                            <li>
                                <a href="#">Pelanggan</a>
                            </li>
                            
                        </ul>
                    </li>

                    <li>
                        <a href="empty.html"><i class="fa fa-fw fa-file"></i> Empty Page</a>
                    </li>
                </ul>

            </div>