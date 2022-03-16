<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-warning">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
        <p class="text-white">Avatar | {{ ucfirst(Auth()->user()->nama) }} <i class="fas fa-user-circle"></i></p>
      </a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->
