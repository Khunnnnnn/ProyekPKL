@extends('template.main')

@section('main-content')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahAdmin">Tambah</button>

              <!-- Modal Tambah Admin -->
              <div class="modal fade" id="tambahAdmin" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content bg-warning">
                    <div class="modal-header text-white" style="background-color: #DAA520; border:none !important;">
                      <h5 class="modal-title" id="staticBackdropLabel">Administrator Baru</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body text-white">
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
                          <label for="ktp">KTP</label>
                          <input type="number" class="form-control" id="ktp" placeholder="Kartu Tanda Penduduk">
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
                    <div class="modal-footer" style="background-color: #DAA520; border:none !important;">
                      <button type="button" class="btn btn-danger mr-auto" data-dismiss="modal">Batal</button>
                      <button type="submit" class="btn btn-success">Selesai</button>
                    </div>
                  </div>
                </div>
              </div>

              <table id="datatables" class="table table-bordered table-striped table-sm" style="font-size: 15px; position: relative;">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>KTP</th>
                    <th>Tanggal Pendaftaran</th>
                    <th>Terverivikasi</th>
                    <th>Aktif</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Mario Jose</td>
                    <td>mariobroz@gmail.com</td>
                    <td>51029181710001</td>
                    <td>Jum, 10 Mei 2019, 17:26:52</td>
                    <td>Sudah Terverifikasi <i class="fas fa-check-circle text-success"></td>
                    <td>Aktif <i class="fas fa-check-circle text-success"></td>
                    <td>
                      <button type="button" class="btn btn-warning btn-sm">Nonaktif</button>
                      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editAdmin">Edit</button>

                      <!-- Modal Edit Admin -->
                      <div class="modal fade" id="editAdmin" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content bg-warning">
                            <div class="modal-header text-white" style="background-color: #DAA520; border:none !important;">
                              <h5 class="modal-title" id="staticBackdropLabel">Administrator Baru</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body text-white">
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
                                  <label for="ktp">KTP</label>
                                  <input type="number" class="form-control" id="ktp" placeholder="Kartu Tanda Penduduk">
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
                            <div class="modal-footer" style="background-color: #DAA520; border:none !important;">
                              <button type="button" class="btn btn-danger mr-auto" data-dismiss="modal">Batal</button>
                              <button type="submit" class="btn btn-success">Selesai</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Alberto</td>
                    <td>alberto@gmail.com</td>
                    <td>51029181710003</td>
                    <td>Kam, 18 Mei 2011, 17:26:52</td>
                    <td>Sudah Terverifikasi <i class="fas fa-check-circle text-success"></td>
                    <td>Tidak Aktif</td>
                    <td>
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
