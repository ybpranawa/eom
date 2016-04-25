<?php echo '<header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>E Office </b>Management</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active"><a href="index.php"><i class="fa fa-circle-o"></i> Home</a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Proyek</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Tambah Data</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Ubah Data</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Lihat Data</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Purchase Order</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Buat PO</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Tambah Barang</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Ubah PO</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Hapus PO</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> LIhat PO</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Approve PO</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Surat Jalan</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Tambah Surat</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> HUbungkan Surat</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Lihat Surat</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Cetak Surat</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Posting</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Tambah Posting</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Catat Posting</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Ubah Posting</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Cetak Posting</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Lihat Posting</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Detail Posting</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Barang</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Catat Barang</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Ubah Barang</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Lihat Barang</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>';