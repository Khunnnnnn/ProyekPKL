@extends('template.main')

@section('main-content')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-row">
                <a href="/kuis">
                  <button type="button" class="close" aria-label="Close">
                    <p class="text-lg"> <span aria-hidden="true">&times;</span>
                      Tambah Kuis Baru</p>
                  </button>
                </a>
              </div>

              <div class="card">
                <div class="form">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="d-flex mt-2">
                        <div class="ml-2">
                          <h5 class="text-bold">List Soal</h5>
                        </div>

                        <div class="ml-auto text-bold">
                          <p>2</p>
                        </div>
                      </div>

                      <div class="ml-2" style=" height: 750px; width: 250px; overflow-y: auto;">
                        <div>
                          <label class="ml-3 mt-2">
                            <i class="fas fa-book mr-2"></i> Soal 1
                          </label>
                          <p class="badge badge-info ml-5">
                            <i class="fas fa-edit"></i>
                          </p>

                          <p class="badge badge-danger">
                            <i class="fas fa-trash-alt"></i>
                          </p>
                        </div>
                      </div>
                    </div>

                    <form action="/kuis" method="POST">
                      @csrf

                      <div class="col-12 ml-2 mt-2">
                        <label>Mata Pelajaran</label>
                        <div class="form-group">
                          <select class="form-control" name="kategori_kuiz">
                            <option disabled selected>~Mata Pelajaran~</option>
                            @foreach ($kategori_kuiz as $data)
                              <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                            @endforeach
                          </select>
                        </div>

                        <div>
                          <div class="d-flex mt-2 text-bold">
                            <div class="p-2 flex-fill">
                              <label for="judul">Judul</label>
                              <input type="text" name="judul" class="form-control" placeholder="Judul Kuis" id="judul">
                            </div>

                            <div class="p-2 flex-fill">
                              <label for="nilai_kkm">Nilai Minimun Kelulusan</label>
                              <input type="number" name="nilai_kkm" class="form-control" placeholder="Nilai Minimun Kelulusan" id="nilai_kkm">
                            </div>
                          </div>
                        </div>

                        <div class="mt-2">
                          <label for="deskripsi">Deskripsi</label>
                          <textarea name="deskripsi" class="form-control" rows="5" id="deskripsi"></textarea>
                        </div>

                        <div>
                          <div class="d-flex ">
                            <div class="p-2">
                              <label>Soal</label>
                            </div>

                            <div class="p-2 ">
                              <input type="number" class="form-control" placeholder="Durasi Soal Per Detik">
                            </div>

                            <div class="p-2 ml-auto">
                              <button type="button" class="btn btn-danger">Bersihkan</button>
                            </div>
                          </div>
                          <textarea name="soal" class="form-control" rows="5"></textarea>
                        </div>

                        <div class="d-flex mt-2">
                          <div class="p-2 flex-fill">
                            <label> Video</label>
                            <div class="input-group-prepend">
                              <a href="#">
                                <div class="input-group-text">Pilih</div>
                              </a>
                              <input type="text" class="form-control" placeholder="belum ada yang di pilih">
                              <button type="button" class="btn btn-danger">Reset</button>
                            </div>
                          </div>

                          <div class="p-2 flex-fill">
                            <label>Gambar</label>
                            <div class="input-group-prepend">
                              <a href="#">
                                <div class="input-group-text">Pilih</div>
                              </a>
                              <input type="text" class="form-control" placeholder="belum ada yang di pilih">
                              <button type="button" class="btn btn-danger">Reset</button>
                            </div>
                          </div>
                        </div>
                        <div>
                          <label>Jawaban</label>
                          <table class="table table-active">
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Teks</td>
                                <td>Bergambar</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Teks</td>
                                <td>Bergambar</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Teks</td>
                                <td>Bergambar</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <!-- /.card -->

              <div class="footer">
                <div class="d-flex mb-2">
                  <div class="mr-auto">
                    <a href="/kuis">
                      <button type="button" class="btn btn-danger text-white">
                        Batal
                      </button>
                    </a>
                    <button type="button" class="btn btn-info text-white">
                      Kembalikan Soal
                    </button>
                  </div>

                  <div class="text-white">
                    <button type="submit" class="btn btn-success">
                      Tambah Soal
                    </button>
                    <button type="submit" class="btn btn-success">
                      Selesai
                    </button>
                  </div>
                </div>
              </div>

              </form>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.col -->
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection
