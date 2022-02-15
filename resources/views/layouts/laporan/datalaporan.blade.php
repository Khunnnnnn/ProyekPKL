@extends('template.main')

@section('main-content')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
                <div class="mt-4">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Judul</th>
                                <th>Kelas</th>
                                <th>Tanggal Aktif</th>
                                <th>Tanggal Non Aktif</th>
                                <th>Peserta Kuis</th>
                                <th>Nilai Rata-rata</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Pendidikan Agama dan Budi Pekerti</td>
                                <td>Ulangan AKhir Semester</td>
                                <td>X</td>
                                <td>2011/04/25</td>
                                <td>2011/04/25</td>
                                <td>30</td>
                                <td>80</td>
                                <td>
                                    <a href="details">
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
