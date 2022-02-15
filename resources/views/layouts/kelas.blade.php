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
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content bg-warning">
                                    <div class="modal-header text-white">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Kelas</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-white">
                                        <form action="{{ route('kelas.store') }}" method="POST" id="frmProduct">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nama Kelas</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Kelas" name="namakelas">
                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger mr-auto" data-dismiss="modal" id="close-btn">Batalkan</button>
                                        <button type="submit" class="btn btn-success">Selesai</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <table id="datatables" class="table table-bordered table-striped" style="font-size: 15px;">
                            <thead>
                                <tr>
                                    <th style="width: 5%;">No.</th>
                                    <th style="width: 13%;">Nama Kelas</th>
                                    <th style="width: 20%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($kelas as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->nama_kelas}}</td>
                                    <td class="text-right">
                                        <button type="button" class="btn btn-warning">Nonaktif</button>
                                        <button type="button" class="btn btn-primary">Edit</button>
                                        <button type="button" class="btn btn-danger">Hapus</button>
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
    <script>
        document.getElementById("close-btn").addEventListener("click", function() {
            document.getElementById("frmProduct").reset();
        });
    </script>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection