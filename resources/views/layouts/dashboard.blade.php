@extends('template.main')

@section('main-content')
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-graduation-cap"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">TOTAL SISWA</span>
              <span class="info-box-number">
                {{ $siswa->count() }} orang
              </span>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">TOTAL GURU</span>
              <span class="info-box-number">
                {{ $guru->count() }} orang
              </span>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-book"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">TOTAL KUIS AKTIF SAAT INI</span>
              <span class="info-box-number">
                {{ $kuis->count() }}
              </span>
            </div>
          </div>
        </div>
        <div class="info-box">
          <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
          <div class="col-md-5">
            <p class="text-center">
              <strong>MATA PELAJARAN</strong>
            </p>

            @foreach ($kategori as $kat)
              <div class="" style="width: 80%">
                <i class="fas fa-square-full"></i>
                <span>{{ $kat->nama_kategori }}</span>
              </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script>
      var xValues = [100, 200, 300];

      new Chart("myChart", {
        type: "line",
        data: {
          labels: ['Jan-20', 'Feb-20', 'Mar-20'],
          //labels: xValues,
          datasets: [{
            data: [860, 1600, 1060],
            borderColor: "yellow",
            fill: true
          }, {
            data: [1600, 1700, 1700],
            borderColor: "red",
            fill: true
          }, {
            data: [300, 700, 2000],
            borderColor: "chocolate",
            fill: true
          }, {
            data: [600, 1200, 1800],
            borderColor: "gainsboro",
            fill: true
          }, {
            data: [200, 700, 900],
            borderColor: "dodgerBlue",
            fill: true
          }, {
            data: [700, 500, 800],
            borderColor: "aqua",
            fill: true
          }]
        },
        options: {
          legend: {
            display: false
          },
          title: {
            display: true,
            text: "Data bulan 21 May 19 - 10 Dec 19"
          }
        }
      });
    </script>
  </section>
@endsection
