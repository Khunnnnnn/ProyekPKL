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
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content bg-warning">
                    <div class="modal-header text-white" style="background-color: #ea9f1c; border:none !important;">
                      <h5 class="modal-title" id="staticBackdropLabel">Administrator Baru</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body text-white" style="background-color: #ffa200;">
                      <form method="post" action="/admin-quiz">
                        @csrf
                        <div class="form-group">
                          <label for="nama">Nama Pengguna</label>
                          <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Pengguna">
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <label for="ktp">KTP</label>
                          <input type="number" name="ktp" class="form-control" id="ktp" placeholder="Kartu Tanda Penduduk">
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" name="password" class="form-control" id="password" placeholder="New Password">
                        </div>
                        <div class="form-group">
                          <label for="password2">Password</label>
                          <input type="password" name="password2" class="form-control" id="password2" placeholder="Confirm Password">
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

              <table id="datatables" class="table table-bordered table-striped table-sm" style="font-size: 15px; position: relative;">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>KTP</th>
                    <th>Tanggal Pendaftaran</th>
                    <th>Terverifikasi</th>
                    <th>Aktif</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($admins as $admin)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $admin->nama }}</td>
                      <td>{{ $admin->email }}</td>
                      <td>{{ $admin->ktp }}</td>
                      <td>Jum, 10 Mei 2019, 17:26:52</td>
                      <td> {{$admin->Verifikasi->Verifikasi}} <i class="fas fa-check-circle text-success"></td>
                      <td>{{ $admin->Status->Status}} <i class="fas fa-check-circle text-success"></td>
                      <td>
                        @if($admin->Status->Status == 'Aktif')
                          <a onclick="return confirm('Apakah anda yakin ingin mengubah status?')" href="{{ url('/admin-quiz/update-status', $admin->id) }}">
                            <button type="button" class="btn btn-warning btn-sm text-white">Nonaktif</button>
                          </a>
                        @else
                          <a onclick="return confirm('Apakah anda yakin ingin mengubah status?')" href="{{ url('/admin-quiz/update-status-aktif',$admin->id) }}">
                            <button type="button" class="btn btn-success btn-sm">Aktif</button>
                          </a>
                        @endif

                        <button type="button" class="btn btn-primary btn-sm btn-ubah" data-toggle="modal" data-target="#editAdmin" data-id="{{ $admin->id }}" data-Nama="{{ $admin->nama }}" data-Email="{{ $admin->email }}" data-KTP="{{ $admin->ktp }}">Edit</button>

                        <!-- Modal Edit Admin -->
                        <div class="modal fade" id="editAdmin" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content bg-warning">
                              <div class="modal-header text-white" style="background-color: #ea9f1c; border:none !important;">
                                <h5 class="modal-title" id="staticBackdropLabel">Administrator Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body text-white" style="background-color: #ffa200;">
                                <form action="#" method="POST" id="formEdit">
                                  @method("put")
                                  <div class="form-group">
                                    <label for="nama">Nama Pengguna</label>
                                    <input type="text" class="form-control" id="namaEdit" placeholder="Nama Pengguna">
                                  </div>
                                  <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="emailEdit" placeholder="Email">
                                  </div>
                                  <div class="form-group">
                                    <label for="ktp">KTP</label>
                                    <input type="number" class="form-control" id="ktpEdit" placeholder="Kartu Tanda Penduduk">
                                  </div>
                                  <div class="form-group">
                                    <label for="ktp">Password</label>
                                    <input type="password" class="form-control" id="passwordEdit" placeholder="New Password">
                                  </div>
                                  <div class="form-group">
                                    <label for="ktp">Password</label>
                                    <input type="password" class="form-control" id="passwordEdit" placeholder="Confirm Password">
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
