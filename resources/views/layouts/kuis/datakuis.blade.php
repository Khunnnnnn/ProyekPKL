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
                  @foreach ($kuiz as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->nama_kategori }}</td>
                      <td>{{ $item->judul_kuis }}</td>
                      <td>{{ $item->deskripsi }}</td>
                      <td>
                        <button type="button" class="btn btn-info btn-sm">Set jadwal</button>
                        <a href="/kuis/edit">
                          <button type="button" class="btn btn-success btn-sm">Edit</button>
                        </a>
                        <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                      </td>
                    </tr>
                  @endforeach
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
