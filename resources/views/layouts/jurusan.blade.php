@extends('template.main')

@section('main-content')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
                Tambah
              </button>
              <!-- Tambah Data -->
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content bg-warning">
                    <div class="modal-header text-white" style="background-color: #ea9f1c; border:none !important;">
                      <h5 class="modal-title" id="exampleModalLongTitle">Tambah Jurusan</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body text-white" style="background-color: #ffa200;">
                      <form action="{{ route('jurusan.store') }}" method="POST" id="frmProduct">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama Jurusan</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Jurusan" name="namajurusan">
                        </div>

                    </div>
                    <div class="modal-footer" style="background-color: #ea9f1c; border:none !important;">
                      <button type="button" class="btn btn-danger mr-auto" data-dismiss="modal" id="close-btn">Batalkan</button>
                      <button type="submit" class="btn btn-success">Selesai</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Penutup -->
              <!-- Edit Data -->
              <!-- Penutup -->
              <table id="datatables" class="table table-bordered table-striped table-sm" style="font-size: 15px;">
                <thead>
                  <tr>
                    <th style="width: 1%;">No.</th>
                    <th style="width: 13%;">Nama Jurusan</th>
                    <th style="width: 4%;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($jurusan as $data)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $data->nama_jurusan }}</td>
                      <td class="text-right">
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalUpdateBarang{{ $data->id }}">Edit</button>
                        <form action="{{ route('jurusan.destroy', $data->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>

                      </td>
                    </tr>
                    <!-- Modal Update Barang-->
                    <div class="modal fade" id="modalUpdateBarang{{ $data->id }}" tabindex="-1" aria-labelledby="modalUpdateBarang" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content bg-warning">
                          <div class="modal-header text-white" style="background-color: #ea9f1c; border:none !important;">
                            <h5 class="modal-title">Edit Jurusan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>

                          <div class="modal-body text-white" style="background-color: #ffa200;">
                            <!--FORM UPDATE BARANG-->
                            <form action="{{ route('jurusan.update', $data->id) }}" method="post">
                              @csrf
                              @method('put')
                              <div class="form-group">
                                <label for="updateNamaJurusan">Nama Jurusan</label>
                                <input type="text" class="form-control" id="updateNamaJurusan" name="updateNamaJurusan" value="{{ $data->nama_jurusan }}">
                              </div>
                              <!--END FORM UPDATE BARANG-->
                          </div>

                          <div class="modal-footer" style="background-color: #ea9f1c; border:none !important;">
                            <button type="button" class="btn btn-danger mr-auto" data-dismiss="modal" id="close-btn">Batalkan</button>
                            <button type="submit" class="btn btn-success">Selesai</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- End Modal UPDATE Barang-->
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </form>
        </div>
      </div>
    </div>

    <!-- /.col -->

    <!-- /.row -->

    <script>
      document.getElementById("close-btn").addEventListener("click", function() {
        document.getElementById("frmProduct").reset();
      });
    </script>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection
