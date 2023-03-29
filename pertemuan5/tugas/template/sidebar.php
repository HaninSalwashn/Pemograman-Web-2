<?php
$menu = [
    'Home' => 'index.php',
    'List Pelanggan' => 'list_pelanggan.php',
    'Tambah Pelanggan' => 'form_pelanggan.php',
    'About' => 'About.php'
];

$icons = [
    'Home' => 'home',
    'List Pelanggan' => 'list',
    'Tambah Pelanggan' => 'plus',
    'About' => 'info'
];
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 fixed">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><strong>ADMIN</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/maine-coon-1.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="login.php" class="d-block">Hanin Salwa</a>
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
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php foreach($menu as $key => $value): ?>
            <li class="nav-item">
              <a href="<?= $value ?>" class="nav-link">
                <i class="fas fa-<?= $icons[$key] ?>"></i>
                  <p><?= $key ?></p>
              </a>
            </li>
          <?php endforeach ?>
          
            </aside>
    <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->