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
                        <a href="#"  <?php if(($pages == "user_admin") OR ($pages == "user_operator") OR ($pages == "user_suplier") OR ($pages == "user_pelanggan")  ) { echo "class='active-menu'"; } ?>><i class="fa fa-users-cog"></i>Managemen User<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <?php if($level == "4") { ?>
                            <li>
                                <a href="user_admin.php" <?php if($pages == "user_admin") { echo "class='active-menu'"; } ?>>Admin</a>
                            </li>
                        <?PHP }; ?>
                            <li>
                                <a href="user_operator.php" <?php if($pages == "user_operator") { echo "class='active-menu'"; } ?>>Operator</a>
                            </li>

                            <li>
                                <a href="user_suplier.php" <?php if($pages == "user_suplier") { echo "class='active-menu'"; } ?>>Suplier</a>
                            </li>

                            <li>
                                <a href="user_pelanggan.php" <?php if($pages == "user_pelanggan") { echo "class='active-menu'"; } ?>>Pelanggan</a>
                            </li>
                            
                        </ul>
                    </li>

                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out"></i> Logout </a>
                    </li>
                </ul>

            </div>