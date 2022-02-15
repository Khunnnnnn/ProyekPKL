@extends('template.main')

@section('main-content')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <a href="/kuis/create">
                <button type="button" class="btn btn-success">Tambah</button>
              </a>
              
              <table id="datatables" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Kategori</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>

                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Kelas X Pendidikan Agama dan Budi Pekerti</td>
                    <td>Ulangan Kenaikan Kelas</td>
                    <td>Pilihlah salah satu jawaban yang paling benar</td>
                    <td>
                      <button type="button" class="btn btn-info btn-sm">Set jadwal</button>
                      <a href="/kuis/edit">
                        <button type="button" class="btn btn-success btn-sm">Edit</button>
                      </a>
                      <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Kelas X Pendidikan Agama dan Budi Pekerti</td>
                    <td>Ulangan Kenaikan Kelas</td>
                    <td>Pilihlah salah satu jawaban yang paling benar</td>
                    <td>
                      <button type="button" class="btn btn-info btn-sm">Set jadwal</button>
                      <button type="button" class="btn btn-success btn-sm">Edit</button>
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
    <style>
      .table{
        max-width: 900px;
        margin: 0 auto;
        overflow-x: scroll;
        white-space: nowrap;
      }
    </style>
  </section>
  <!-- /.content -->
@endsection
