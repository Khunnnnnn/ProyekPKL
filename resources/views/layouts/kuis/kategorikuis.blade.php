@extends('template.main')

@section('main-content')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahKategori">Tambah</button>

              <!-- Modal Tambah Kategori Kuis -->
              <div class="modal fade" id="tambahKategori" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content bg-warning">
                    <div class="modal-header text-white" style="background-color: #ea9f1c; border:none !important;">
                      <h5 class="modal-title" id="staticBackdropLabel">Tambah Kuis Kategori Baru</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body text-white" style="background-color: #ffa200;">
                      <form method="post" action="/kategorikuis">
                        @csrf
                        <div class="form-group">
                          <label for="nama_kategori">Nama Mata Pelajaran</label>
                          <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" placeholder="Nama Pengguna">
                        </div>
                    </div>
                    <div class="modal-footer" style="background-color: #ea9f1c; border:none !important;">
                      <button type="button" class="btn btn-danger mr-auto" data-dismiss="modal">Batal</button>
                      <button type="submit" class="btn btn-success">Selesai</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>

              <table id="datatables" class="table table-bordered table-striped table-sm" style="font-size: 15px;">
                <thead>
                  <tr>
                    <th style="width: 1%;">No.</th>
                    <th style="width: 13%;">Nama</th>
                    <th style="width: 5%;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($mapels as $mapel)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $mapel->nama_kategori }}</td>
                      <td class="text-right">
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <form action="#" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
@endsection