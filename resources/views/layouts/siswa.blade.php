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
                    <form action="{{route('siswa.store')}}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label for="nama">Nama Pengguna</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama Pengguna" name="nama_siswa">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email_siswa">
                      </div>
                      <div class="form-group">
                        <label for="ktp">NIS</label>
                        <input type="number" class="form-control" id="ktp" placeholder="Nomor Induk Siswa" name="nis_siswa">
                      </div>
                      <div class="form-group">
                        <label for="ktp">Kelas</label>
                        <select class="form-control" name="kelas_siswa">
                          <option disabled selected>Masukkan Kelas</option>
                          @foreach ($kelas as $row)
                          <option value="{{$row->id}}">
                            {{$row->nama_kelas}}
                          </option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="ktp">Kelas</label>
                        <select class="form-control" name="jurusan_siswa">
                          <option disabled selected>Masukkan Jurusan</option>
                          @foreach ($jurusan as $row)
                          <option value="{{$row->id}}">
                            {{$row->nama_jurusan}}
                          </option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="ktp">Verifikasi</label>
                        <select class="form-control" name="verifikasi">
                          <option disabled selected>Pilihan</option>
                          @foreach ($verif as $row)
                          <option value="{{$row->id}}">
                            {{$row->Verifikasi}}
                          </option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="ktp">Status</label>
                        <select class="form-control" name="status">
                          <option disabled selected>Pilihan</option>
                          @foreach ($status as $row)
                          <option value="{{$row->id}}">
                            {{$row->Status}}
                          </option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="ktp">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Confirm Password" name="pass_siswa">
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
                @foreach ($siswa as $data)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $data->nama   }}</td>
                  <td>{{ $data->email }}</td>
                  <td>{{ $data->nis_siswa }}</td>
                  <td>{{ $data->created_at }}</td>
                  <td>{{$data->Jurusan->nama_jurusan}} | {{ $data->Kelaz->nama_kelas }}</td>
                  <td> {{$data->Verifikasi->Verifikasi}}</td>
                  <td>{{$data->Status->Status}}</td>
                  <td class="text-right">
                    <form action="{{ url('post/update', $data->id ) }}" class="d-inline" method="POST">
                    @csrf
                    @method('put')
                    <button class="btn btn-secondary btn-sm">Nonaktif</button>
                    </form>
                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalUpdateBarang{{ $data->id }}">Update</button>
                    <form action="{{route('siswa.destroy',$data->id)}}" method="POST" class="d-inline">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                  </td>
                </tr>
                <!-- Modal Update Barang-->
                <div class="modal fade" id="modalUpdateBarang{{ $data->id }}" tabindex="-1" aria-labelledby="modalUpdateBarang" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content bg-warning  ">
                      <div class="modal-header">
                        <h5 class="modal-title text-white">Update Siswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body text-white" style="background-color: #ffa200;">
                        <!--FORM UPDATE BARANG-->
                        <form action="{{route('siswa.update',$data->id)}}" method="post">
                          @csrf
                          @method('put')
                          <div class="form-group">
                            <label for="nama">Nama Pengguna</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama Pengguna" value="{{ $data->nama_siswa}}" name="updatenamasiswa">
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" value="{{ $data->email_siswa}}" name="updateemailsiswa">
                          </div>
                          <div class="form-group">
                            <label for="ktp">NIS</label>
                            <input type="number" class="form-control" id="ktp" placeholder="Nomor Induk Siswa" value="{{ $data->nis_siswa}}" name="updatenissiswa">
                          </div>
                          <div class="form-group">
                            <label for="ktp">Kelas</label>
                            <select class="form-control" name="updatekelassiswa" value="">
                              @foreach ($kelas as $row)
                              <option value="{{$row->id}}">
                                {{$row->nama_kelas}}
                              </option>
                              @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="ktp">Kelas</label>
                            <select class="form-control" name="updatejurusansiswa">
                              @foreach ($jurusan as $row)
                              <option value="{{$row->id}}">
                                {{$row->nama_jurusan}}
                              </option>
                              @endforeach
                            </select>
                          </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Perbarui Data</button>
                      </form>
                      <!--END FORM UPDATE BARANG-->
                    </div>
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
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
  
</section>

<!-- /.content -->
@endsection