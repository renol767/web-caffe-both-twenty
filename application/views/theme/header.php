<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-warning topbar mb-4 static-top shadow">

  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3 ">
    <i class="fa fa-bars "></i>
  </button>


  <!--<img src="{base_url('asset/img/ui.png')}" style="width:60px;padding:10px;">-->
  <h1 class="h5 mb-0 text-dark"><?php echo $judul; ?></h1>

  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">



    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-dark 600 small">ADMIN</span>
        <i class="fas fa-user fa-lg fa-fw text-dark"></i>
      </a>

      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item ajax-link" href="<?php echo site_url('user/reset_password'); ?>">
          <i class="fas fa-unlock-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Reset Password
        </a>
        <a class="dropdown-item" href="<?php echo site_url('user/logout'); ?>">
          <i class="fas fa-power-off fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
      </div>
    </li>

  </ul>

</nav>
<!-- End of Topbar -->