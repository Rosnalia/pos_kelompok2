<body class="hold-transition sidebar-mini">
    <div class="wrapper">
    
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
      </nav>
      <!-- /.navbar -->
    
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?= base_url('dashboard') ?>" class="brand-link">
          <img src="<?= base_url('assets/template') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Apotek Griya Sejahtera</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="<?= base_url('assets/template') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Alexander Pierce</a>
            </div>
          </div>
    
          <!-- SidebarSearch Form -->
          <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div>
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              
            <li class="nav-item">
              <a href="<?= base_url('dashboard') ?>" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item menu-close">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-star"></i>
                    <p>Master Data
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('user') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('kategori') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Kategori</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('barang') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('suplier') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Suplier</p>
                            </a>
                        </li>
                    </ul>
            </li>
            
            <li class="nav-item menu-close">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Transaksi
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('transaksi_pembelian') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Pembelian</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('transaksi_penjualan') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Penjualan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('retur') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Retur</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('terima') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Terima</p>
                            </a>
                        </li>
                    </ul>
            </li>
            
            <li class="nav-item menu-close">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Laporan
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('pembelian') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Pembelian</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('penjualan') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Penjualan</p>
                            </a>
                        </li>
                   </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-back"></i>
                      <p>Sign Out</p>
              </a>
            </li>
                
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    
        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">