       <div id="left">
            <ul id="menu" class="collapse">
                <li class="panel active"><a href="index.php"><i class="icon-home"></i> Dashboard</a></li>
                <li><a href="?menu=kas_masuk"><i class="icon-paper-clip"> </i> Kas Masuk</a></li>
                <li><a href="?menu=kas_keluar"><i class="icon-paper-clip"></i> Kas Keluar</a></li>
                <li><a href="?menu=laporanpertanggal"><i class="icon-paper-clip"></i> Laporan Kas Masuk</a></li>
                <li><a href="?menu=laporankas_keluar"><i class="icon-paper-clip"></i> Laporan Kas Keluar</a></li>
               <!-- <li><a href="?menu=laporanrekapitulasi"><i class="icon-paper-clip"></i> Laporan Rekapitulasi</a></li> -->
              
                <li><a href="?menu=user"><i class="icon-user "></i> Daftar User</a></li>
            </ul>
        </div>
		
		
		<div id="content">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">
						<h1>Pengelolaan Kas</h1>
                    </div>
                </div>
                <hr/>
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
						<?php
						if($_GET["menu"]){
							include_once("load.php");
						}else{
							echo "<div class='col-lg-12'>
										<div class='panel panel-default'>
											<div class='panel-heading'>
												Tentang Aplikasi
											</div>
											<div class='panel-body'>
												<ul class='nav nav-tabs'>
													<li class='active'><a href='#home' data-toggle='tab'>Home</a>
													</li>
													
												</ul>

												<div class='tab-content'>
													<div class='tab-pane fade in active' id='home'>
													<h4>Selamat Datang di Sistem Informasi Pengelolaan Kas </h4><br><hr>
													
																										
													<h5>RESPONSI PTCC TI-9 165410215 EDY PURNOMO<h5>
													</div>
													
												</div>
											</div>
										</div>
									</div>";
						}
						?>
					</div>
                </div>
                  <!--END BLOCK SECTION -->
                <hr />
            </div>
        </div>