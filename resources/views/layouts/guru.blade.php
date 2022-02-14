@extends('template.main')

@section('main-content')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <button type="button" class="btn btn-success">Tambah</button>
              <table id="example1" class="table table-bordered table-striped table-sm" style="font-size: 15px; position: relative;">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>KTP</th>
                    <th>Tanggal Pendaftaran</th>
                    <th>Terverivikasi</th>
                    <th>Aktif</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Mario Jose</td>
                    <td>mariobroz@gmail.com</td>
                    <td>51029181710001</td>
                    <td>Jum, 10 Mei 2019, 17:26:52</td>
                    <td>Sudah Terverifikasi <i class="fas fa-check-circle text-success"></td>
                    <td>Aktif <i class="fas fa-check-circle text-success"></td>
                    <td>
                      <button type="button" class="btn btn-warning btn-sm">Nonaktif</button>
                      <button type="button" class="btn btn-info btn-sm">Edit</button>
                      <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Alberto</td>
                    <td>alberto@gmail.com</td>
                    <td>51029181710003</td>
                    <td>Kam, 18 Mei 2011, 17:26:52</td>
                    <td>Sudah Terverifikasi <i class="fas fa-check-circle text-success"></td>
                    <td>Tidak Aktif</td>
                    <td>
                      <button type="button" class="btn btn-warning btn-sm">Nonaktif</button>
                      <button type="button" class="btn btn-info btn-sm">Edit</button>
                      <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection
