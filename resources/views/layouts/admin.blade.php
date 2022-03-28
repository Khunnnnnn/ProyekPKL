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
                        <input type="text" name="password" class="form-control" id="password" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="ktp">Verifikasi</label>
                        <select class="form-control  @error('verifikasi') is-invalid @enderror" name="id_verifikasi">
                          <option disabled selected>Pilihan</option>
                          @foreach ($verifikasi as $row)
                          <option value="{{$row->id}}">
                            {{$row->Verifikasi}}
                          </option>
                          @endforeach
                        </select>
                        @error('verifikasi')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="ktp">Status</label>
                        <select class="form-control  @error('status') is-invalid @enderror" name="id_status">
                          <option disabled selected>Pilihan</option>
                          @foreach ($status as $row)
                          <option value="{{$row->id}}">
                            {{$row->Status}}
                          </option>
                          @endforeach
                        </select>
                        @error('status')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="level">Sebagai</label>
                        <select class="form-control" name="level">
                            @foreach ($level as $row)
                            @if($row->level == 'Admin')
                            <option value="{{$row->id}}">
                                {{$row->level}}
                            </option>
                            @endif
                            @endforeach
                        </select>
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
                  @if($admin->id_status==1)
                  <td>{{ $admin->Status->Status}} <i class="fas fa-check-circle text-success"></td>
                  @elseif($admin->id_status==2)
                  <td>{{ $admin->Status->Status}} <i class="fas fa-exclamation-circle text-danger"></td>
                  @endif
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

                    <button type="button" class="btn btn-primary btn-sm btn-ubah" data-toggle="modal" data-target="#editAdmin{{ $admin->id }}">Edit</button>

                    <!-- Modal Edit Admin -->
                    <div class="modal fade" id="editAdmin{{ $admin->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content bg-warning">
                          <div class="modal-header text-white" style="background-color: #ea9f1c; border:none !important;">
                            <h5 class="modal-title" id="staticBackdropLabel">Administrator Baru</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body text-white" style="background-color: #ffa200;">
                            <form action="{{route('admin-quiz.update',$admin->id)}}" method="POST" >
                              @csrf
                              @method('put')
                              <div class="form-group">
                                <label for="nama">Nama Pengguna</label>
                                <input type="text" class="form-control"  placeholder="Nama Pengguna" value="{{ $admin->nama}}" name="nama">
                              </div>
                              <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" placeholder="Email" value="{{ $admin->email}}" name="email">
                              </div>
                              <div class="form-group">
                                <label for="ktp">KTP</label>
                                <input type="number" class="form-control"  placeholder="Kartu Tanda Penduduk" value="{{ $admin->ktp}}" name="ktp">
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
                    <form action="{{route('admin-quiz.destroy',$admin->id)}}" method="POST" class="d-inline">
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