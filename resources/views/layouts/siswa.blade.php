@extends('template.main')

@section('main-content')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahSiswa">Tambah</button>

              <!-- Modal Tambah Siswa -->
              <div class="modal fade" id="tambahSiswa" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content bg-warning">
                    <div class="modal-header text-white" style="background-color: #ea9f1c; border:none !important;">
                      <h5 class="modal-title" id="staticBackdropLabel">Tambah Pengguna Baru</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body text-white" style="background-color: #ffa200;">
                      <form>
                        <div class="form-group">
                          <label for="nama">Nama Pengguna</label>
                          <input type="text" class="form-control" id="nama" placeholder="Nama Pengguna">
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <label for="ktp">NIS</label>
                          <input type="number" class="form-control" id="ktp" placeholder="Nomor Induk Siswa">
                        </div>
                        <div class="form-group">
                          <label for="ktp">Kelas</label>
                          <input type="text" class="form-control" id="ktp" placeholder="Kelas">
                        </div>
                        <div class="form-group">
                          <label for="ktp">Password</label>
                          <input type="password" class="form-control" id="password" placeholder="New Password">
                        </div>
                        <div class="form-group">
                          <label for="ktp">Password</label>
                          <input type="password" class="form-control" id="password" placeholder="Confirm Password">
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer" style="background-color: #ea9f1c; border:none !important;">
                      <button type="button" class="btn btn-danger mr-auto" data-dismiss="modal">Batal</button>
                      <button type="submit" class="btn btn-success">Selesai</button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Modal Edit Siswa -->
              <div class="modal fade" id="editSiswa" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content bg-warning">
                    <div class="modal-header text-white" style="background-color: #ea9f1c; border:none !important;">
                      <h5 class="modal-title" id="staticBackdropLabel">Tambah Pengguna Baru</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body text-white" style="background-color: #ffa200;">
                      <form>
                        <div class="form-group">
                          <label for="nama">Nama Pengguna</label>
                          <input type="text" class="form-control" id="nama" placeholder="Nama Pengguna">
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <label for="ktp">NIS</label>
                          <input type="number" class="form-control" id="ktp" placeholder="Nomor Induk Siswa">
                        </div>
                        <div class="form-group">
                          <label for="ktp">Kelas</label>
                          <input type="text" class="form-control" id="ktp" placeholder="Kelas">
                        </div>
                        <div class="form-group">
                          <label for="ktp">Password</label>
                          <input type="password" class="form-control" id="password" placeholder="New Password">
                        </div>
                        <div class="form-group">
                          <label for="ktp">Password</label>
                          <input type="password" class="form-control" id="password" placeholder="Confirm Password">
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer" style="background-color: #ea9f1c; border:none !important;">
                      <button type="button" class="btn btn-danger mr-auto" data-dismiss="modal">Batal</button>
                      <button type="submit" class="btn btn-success">Selesai</button>
                    </div>
                  </div>
                </div>
              </div>

              <table id="datatables" class="table table-bordered table-striped table-sm" style="font-size: 15px;">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th style="width: 13%">Nama</th>
                    <th>Email</th>
                    <th>NIS</th>
                    <th style="width: 13%">Tanggal Daftar</th>
                    <th>Kelas</th>
                    <th>Terverivikasi</th>
                    <th>Aktif</th>
                    <th style="width: 18%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Mario Jose</td>
                    <td>mariobroz@gmail.com</td>
                    <td>9182718100</td>
                    <td>Jum, 10 Mei 2019, 17:26:52</td>
                    <td>XII MIPA 4</td>
                    <td>Sudah Terverifikasi <i class="fas fa-check-circle text-success"></i></i></td>
                    <td>Aktif <i class="fas fa-check-circle text-success"></td>
                    <td class="text-right">
                      <button type="button" class="btn btn-warning btn-sm">Nonaktif</button>
                      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editSiswa">Edit</button>
                      <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Mario Jose Valentino Alexander</td>
                    <td>mariobroz@gmail.com</td>
                    <td>9182718100</td>
                    <td>Jum, 10 Mei 2019, 17:26:52</td>
                    <td>XII MIPA 4</td>
                    <td>Sudah Terverifikasi <i class="fas fa-check-circle text-success"></td>
                    <td>Aktif <i class="fas fa-check-circle text-success"></td>
                    <td class="text-right">
                      <button type="button" class="btn btn-warning btn-sm">Nonaktif</button>
                      <button type="button" class="btn btn-primary btn-sm">Edit</button>
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
