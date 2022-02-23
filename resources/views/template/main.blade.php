<!DOCTYPE html>
<html lang="en">

<head>
  @include('includes.head')
</head>

<body class="hold-transition sidebar-mini">
  @include('sweetalert::alert')
  <div class="wrapper">

    @include('includes.navbar')

    @include('includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mt-2 mb-2">
            <div class="col-sm-6">
              <h1></h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <p>
                  <i class="nav-icon fas fa-tachometer-alt"> Dashboard</i>
                </p>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      @yield('main-content')

    </div>
    <!-- /.content-wrapper -->

    @include('includes.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  @include('includes.script')
</body>

</html>