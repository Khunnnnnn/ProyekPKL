<!doctype html>
<html lang="en">

<head>
    <title>Login APP Quiz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('login/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
</head>

<body>
    @include('sweetalert::alert')
    <section class="ftco-section">
        <div class="container">
            @if (session('success'))
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="d-md-flex">
                        <div class="img" style="background-image: url(/login/image/bg-2.png); ">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign Up</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                    </p>
                                </div>
                            </div>
                            <form action="{{route('customregisMurid')}}" method="POST" class="signin-form" novalidate>
                                {{csrf_field()}}
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Nama</label>
                                    <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="name">NIS</label>
                                    <input type="number" class="form-control" placeholder="NIS" name="nis" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Email</label>
                                    <input type="text" class="form-control" placeholder="Email" name="email" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <div class="input-group" id="show_hide_password">
                                        <input type="password" name='password' class="form-control" name="password" required autocomplete="current-password">
                                        <div class="input-group-append">
                                            <a href="" class="btn btn-outline-secondary"><i class="bi bi-eye-slash" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="level">Pilih Jurusan</label>
                                    <select class="form-control" name="jurusan">
                                        @foreach ($jurusan as $row)
                                        <option value="{{$row->id}}">
                                            {{$row->nama_jurusan}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="level">Pilih Kelas</label>
                                    <select class="form-control" name="kelas">
                                        @foreach ($kelas as $row)
                                        <option value="{{$row->id}}">
                                            {{$row->nama_kelas}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="level">Sebagai</label>
                                    <select class="form-control" name="level">
                                        @foreach ($level as $row)
                                        @if($row->level == 'Siswa')
                                        <option value="{{$row->id}}">
                                            {{$row->level}}
                                        </option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="level">Verifikasi</label>
                                    <select class="form-control" name="verifikasi">
                                        @foreach ($verif as $row)
                                        <option value="{{$row->id}}">
                                            {{$row->Verifikasi}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="level">Status</label>
                                    <select class="form-control" name="status">
                                        @foreach ($status as $row)
                                        <option value="{{$row->id}}">
                                            {{$row->Status}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
                                </div>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bi bi-eye-slash");
                    $('#show_hide_password i').removeClass("bi bi-eye");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bi bi-eye-slash");
                    $('#show_hide_password i').addClass("bi bi-eye");
                }
            });
        });
    </script>
</body>

</html>