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
              <div class="modal fade" id="tambahKategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content bg-warning">
                    <div class="modal-header text-white" style="background-color: #ea9f1c; border:none !important;">
                      <h5 class="modal-title" id="exampleModalLongTitle">Tambah Kategori</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body text-white" style="background-color: #ffa200;">

                      <form action="{{ route('kategorikuis.store') }}" method="POST" id="frmProduct">
                        @csrf
                        <div class="form-group">
                          <label for="namakategori">Nama Kategori</label>
                          <input type="text" class="form-control" id="namakategori" placeholder="Masukkan Nama Kategori" name="namakategori">
                        </div>
                        <div class="form-group">
                          <label for="judulkuis">Judul Kuis</label>
                          <input type="text" class="form-control" id="judulkuis" placeholder="Masukkan Judul Kuis" name="judulkuis">
                        </div>
                        <div class="form-group">
                          <label for="nilaikkm">Nilai Minimum Kelulusan</label>
                          <input type="number" class="form-control" id="nilaikkm" placeholder="Masukkan Nilai KKM" name="nilaikkm">
                        </div>
                        <div class="form-group">
                          <label for="deskripsi">Deskripsi</label>
                          <textarea name="deskripsi" class="form-control" rows="5" id="deskripsi" placeholder="Masukkan Deskripsi Soal Ujian"></textarea>
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

              <table id="datatables" class="table table-bordered table-striped table-sm" style="font-size: 15px;">
                <thead>
                  <tr>
                    <th style="width: 1%;">No.</th>
                    <th style="width: 9%;">Nama Kategori</th>
                    <th style="width: 9%;">Judul Kuis</th>
                    <th style="width: 4%;">Nilai KKM</th>
                    <th style="width: 14%;">Deskripsi</th>
                    <th style="width: 10%;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($mapels as $mapel)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $mapel->nama_kategori }}</td>
                      <td>{{ $mapel->judul_kuis }}</td>
                      <td>{{ $mapel->nilai_kkm }}</td>
                      <td>{{ $mapel->deskripsi }}</td>
                      <td class="text-right">
                        <a href="/kuis/create/{{ $mapel->id }}">
                          <button type="button" class="btn btn-success btn-sm">Tambah Kuis</button>
                        </a>
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalUpdateKategori{{ $mapel->id }}">Edit</button>
                        <form action="{{ route('kategorikuis.destroy', $mapel->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                      </td>
                    </tr>

                    <!-- Modal Update Kategori Kuis-->
                    <div class="modal fade" id="modalUpdateKategori{{ $mapel->id }}" tabindex="-1" aria-labelledby="modalUpdateKategori" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content bg-warning">
                          <div class="modal-header text-white" style="background-color: #ea9f1c; border:none !important;">
                            <h5 class="modal-title">Edit Kategori Kuis</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>

                          <div class="modal-body text-white" style="background-color: #ffa200;">
                            <!--FORM UPDATE BARANG-->
                            <form action="{{ route('kategorikuis.update', $mapel->id) }}" method="post">
                              @csrf
                              @method('put')
                              <div class="form-group">
                                <label for="updateNamaKategori">Nama Kategori</label>
                                <input type="text" class="form-control" id="updateNamaKategori" name="updateNamaKategori" value="{{ $mapel->nama_kategori }}">
                              </div>
                              <div class="form-group">
                                <label for="updateJudulKuis">Judul Kuis</label>
                                <input type="text" class="form-control" id="updateJudulKuis" name="updateJudulKuis" value="{{ $mapel->judul_kuis }}">
                              </div>
                              <div class="form-group">
                                <label for="updateNilaiKkm">Nilai Minimum Kelulusan</label>
                                <input type="number" class="form-control" id="updateNilaiKkm" name="updateNilaiKkm" value="{{ $mapel->nilai_kkm }}">
                              </div>
                              <div class="form-group">
                                <label for="updateDeskripsi">Deskripsi</label>
                                <textarea name="updateDeskripsi" class="form-control" rows="5" id="updateDeskripsi">{{ $mapel->deskripsi }}</textarea>
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
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
@endsection
