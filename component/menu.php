 <?php session_start();?>
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="./"><i class="fa fa-home"></i> Beranda </a></li>
                  <li ><a><i class="fa fa-book"></i> Data Master <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <?php if ($_SESSION['leveluser'] == 'admin'){ ?>
                      <li><a href="?module=pegawai">Data Pegawai</a></li>
                      <?php }?>
                      <!-- <li><a href="?module=kelas">Data Kelas</a></li> -->
                      <li><a href="?module=nasabah">Data Nasabah</a></li>
                    </ul>
                  </li>
                  <li><a href="?module=transaksi"><i class="fa fa-dollar"></i> Transaksi </a>
                  </li>
                  <li><a><i class="fa fa-print"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?module=laporan-transaksi">Laporan Transaksi</a></li>
                      <li><a href="?module=cetak-rekening">Cetak Rekening</a></li>
                    </ul>
                  </li>
                  <?php if ($_SESSION['leveluser'] == 'admin'){ ?>
                  <li><a href="?module=pengaturan" ><i class="fa fa-cog"></i> Pengaturan </a></li>
                  <?php }?>
                  <li><a href="logout.php"><i class="fa fa-sign-out"></i> Keluar </a></li>
                </ul>
              </div>
            </div>
