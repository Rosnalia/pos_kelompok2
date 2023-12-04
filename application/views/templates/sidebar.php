<body class="hold-transition sidebar-mini">
    <div class="wrapper">

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #37898C;">
        

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="<?= base_url('assets/template') ?>/dist/img/user1.png " style="border-radius: 50%;">
            </div>
            <div class="info">
              <a class="d-block text-light">Rosnalia</a>
            </div>
          </div>

          

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
              <a href="<?= base_url('dashboard') ?>" class="nav-link text-light">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item menu-close">
                <a href="#" class="nav-link text-light">
                    <i class="nav-icon fas fa-star"></i>
                    <p>Master Data
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('user') ?>" class="nav-link text-light">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('kategori') ?>" class="nav-link text-light">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Kategori</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('barang') ?>" class="nav-link text-light">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('suplier') ?>" class="nav-link text-light">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Suplier</p>
                            </a>
                        </li>
                    </ul>
            </li>

            <li class="nav-item menu-close">
                <a href="#" class="nav-link text-light">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Transaksi
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('transaksi_pembelian') ?>" class="nav-link text-light">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Pembelian</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('transaksi_penjualan') ?>" class="nav-link text-light">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Penjualan</p>
                            </a>
                        </li>
                    </ul>
            </li>

            <li class="nav-item menu-close">
                <a href="#" class="nav-link text-light">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Laporan
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('pembelian') ?>" class="nav-link text-light">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Pembelian</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('penjualan') ?>" class="nav-link text-light">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Penjualan</p>
                            </a>
                        </li>
                   </ul>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('login')?>" class="nav-link text-light">
                  <i class="far fa-back nav-icon"></i>
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
