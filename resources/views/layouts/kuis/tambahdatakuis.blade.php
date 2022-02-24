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

                      <div>
                        <label class="ml-3 mt-2">
                          <i class="fas fa-book mr-2"></i> Soal 2
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

                  <div class="col-8 ml-2 mt-2">
                    <label>Mata Pelajaran</label>
                    <div class="form-group">
                      <select class="form-control">
                        <option disabled selected>~Mata Pelajaran~</option>
                        <option>Pendidikan Agama dan Budi Pekerti</option>
                        <option>Matematika Dasar</option>
                      </select>
                    </div>

                    <div>
                      <div class="d-flex mt-2 text-bold">
                        <div class="p-2 flex-fill">
                          <label>Judul</label>
                          <input type="judul" class="form-control" placeholder="judul kuis">
                        </div>

                        <div class="p-2 flex-fill">
                          <label>Nilai Minimun Kelulusan</label>
                          <input type="number" class="form-control" placeholder="Nilai Minimun Kelulusan">
                        </div>
                      </div>
                    </div>

                    <div class="mt-2">
                      <label>Deskripsi</label>
                      <textarea class="form-control" rows="5"></textarea>
                    </div>

                    <div>
                      <div class="d-flex ">
                        <div class="p-2">
                          <label>Soal</label>
                        </div>

                        <div class="p-2 ">
                          <input type="number" class="form-control" placeholder="durasi soal per detik">
                        </div>

                        <div class="p-2 ml-auto">
                          <button type="button" class="btn btn-danger">Bersihkan</button>
                        </div>
                      </div>
                      <textarea class="form-control" rows="5"></textarea>
                    </div>

                    <div class="d-flex mt-2">
                      <div class="p-2 flex-fill">
                        <label> Video</label>
                        <!-- <div class="input-group-prepend">
                                        <a href="#">
                                          <div class="input-group-text">Pilih</div>
                                        </a>
                                          <input type="text" class="form-control" placeholder="belum ada yang di pilih">
                                          <button type="button" class="btn btn-danger">Reset</button>
                                      </div>                                       -->
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary" type="button">Button</button>
                          </div>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile03">
                            <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                          </div>
                        </div>

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
            <!-- /.card-body -->
          </div>

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