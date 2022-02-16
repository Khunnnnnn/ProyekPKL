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
                        <!-- Tambah Data -->
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
                        <!-- Penutup -->
                        <!-- Edit Data -->
                        <div class="modal fade" id="edit_partner" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content bg-warning">
                                    <div class="modal-header text-white">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Kelas</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-white">
                                        <form action="#" method="POST" id="frmProduct">
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nama Kelas</label>
                                                <input type="text" class="form-control" id="nama_kelas" aria-describedby="emailHelp" placeholder="Masukkan Nama Kelas" name="namakelas" >
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

                        <!-- Penutup -->
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
                                        <a href="#" class="btn btn-primary" onclick="edit_partner(this)" data-target="#edit_partner" data-toggle="modal" data-id="{{$data->id}}">abc</a>
                                        <form action="{{route('kelas.destroy',$data->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"  onclick="return confirm('are you sure?')">Hapus</button>
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
                </form>
            </div>
        </div>
    </div>

    <!-- /.col -->

    <!-- /.row -->
    
    <script>
        function edit_partner(el) {
            var link = $(el) //refer `a` tag which is clicked
            var modal = $("#edit_partner") //your modal
            var full_name = link.data('nama_kelas')
            modal.find('#nama_kelas').val(full_name);
        }

        document.getElementById("close-btn").addEventListener("click", function() {
            document.getElementById("frmProduct").reset();
        });
    </script>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection