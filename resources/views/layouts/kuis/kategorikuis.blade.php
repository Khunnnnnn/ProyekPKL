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
                                        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Kuis Kategori Baru</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-white">
                                        <form action="#" method="POST" id="frmProduct">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nama Mata Pelajaran</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Mata Pelajaran" name="namakategori">
                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger mr-auto" data-dismiss="modal" id="close-btn">Close</button>
                                        <button type="submit" class="btn btn-success">Save changes</button>
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
                                                <label for="exampleInputEmail1">Nama Mata Pelajaran</label>
                                                <input type="text" class="form-control" id="nama_kategori" aria-describedby="emailHelp" placeholder="Nama Mata Pelajaran" name="namakategori" >
                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger mr-auto" data-dismiss="modal" id="close-btn">Close</button>
                                        <button type="submit" class="btn btn-success">Save changes</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Penutup -->
                        <table id="datatables" class="table table-bordered table-striped table-sm" style="font-size: 15px;">
                            <thead>
                                <tr>
                                    <th style="width: 1%;">No.</th>
                                    <th style="width: 13%;">Nama</th>
                                    <th style="width: 1%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>                            
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-success btn-sm" onclick="edit_partner(this)" data-target="#edit_partner" data-toggle="modal">Edit</a>
                                        <form action="" method="POST" class="d-inline">
                                        <button type="submit" class="btn btn-danger btn-sm mr-2" onclick="return confirm('are you sure?')">Hapus</button>
                                        </form>
                                       
                                    </td>
                                </tr>
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
        document.getElementById("close-btn").addEventListener("click", function() {
            document.getElementById("frmProduct").reset();
        });
    </script>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection