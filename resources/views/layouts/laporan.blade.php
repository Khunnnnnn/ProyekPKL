@extends('template.main')

@section('main-content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-success">Tambah</button>
                        <table id="datatables" class="table table-bordered table-striped table-sm" style="font-size: 15px; white-space: nowrap; max-width: 600px;">
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
                                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
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