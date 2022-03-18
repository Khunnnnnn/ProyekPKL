@extends('template.main')

@section('main-content')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <a href="">
                <button type="button" class="btn btn-info">Export</button>
              </a>
                <div class="mt-4">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Tanggal Pengerjaan</th>
                                <th>Jumlah Soal</th>
                                <th>Benar</th>
                                <th>Salah</th>
                                <th>Nilai</th>
                                <th>Lama Pengerjaan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Imanuel</td>
                                <td>X</td>
                                <td>sen, 2011/04/25, 13:00:00</td>
                                <td>20</td>
                                <td>10</td>
                                <td>10</td>
                                <td>70</td>
                                <td>120 menit</td>
                                <td>
                                  <a href="/detailjawaban">
                                  <button type="button" class="btn btn-info btn-sm">Detail</button>
                                  </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
