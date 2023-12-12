@include('dashboard.main')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Gradient Donut</title>

    <link href="../../assets/styles.css" rel="stylesheet" />

    <style>
      
        #chart {
      max-width: 380px;
      margin: 35px auto;
      padding: 0;
    }
    
    .apexcharts-legend-text tspan:nth-child(1) {
      font-weight: lighter;
      fill: #999;
    }
    
    .apexcharts-legend-text tspan:nth-child(3) {
      font-weight: bold;
    }
      
    </style>

    <script>
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"><\/script>'
        )
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/eligrey-classlist-js-polyfill@1.2.20171210/classList.min.js"><\/script>'
        )
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/findindex_polyfill_mdn"><\/script>'
        )
    </script>

    
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    

    <script>
      // Replace Math.random() with a pseudo-random number generator to get reproducible results in e2e tests
      // Based on https://gist.github.com/blixt/f17b47c62508be59987b
      var _seed = 42;
      Math.random = function() {
        _seed = _seed * 16807 % 2147483647;
        return (_seed - 1) / 2147483646;
      };
    </script>

    
  </head>

  <body>
     <div id="chart"></div>

    <script>
      
        var options = {
          series: [44, 55, 41, 17, 15],
          chart: {
          width: 300,
          type: 'donut',
        },
        plotOptions: {
          pie: {
            startAngle: -90,
            endAngle: 270
          }
        },
        dataLabels: {
          enabled: false
        },
        fill: {
          type: 'gradient',
        },
        legend: {
          formatter: function(val, opts) {
            return val + " - " + opts.w.globals.series[opts.seriesIndex]
          }
        },
        title: {
          text: 'Data Warga'
        },
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
      
      
    </script>

    
  </body>
</html>

<div class="container d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="mb-4">Data Warga</h1>
</div>



    <div class="container table-responsive">
        <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>No KK</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Tanggal Meninggal</th>
                        <th>Tahun</th>
                        <th>Bulan</th>
                        <th>Hari</th>
                        <th>Jenis Kelamin</th>
                        <th>Hubungan dengan Kepala Keluarga</th>
                        <th>Agama</th>
                        <th>Kewarganegaraan</th>
                        <th>Status Kawin</th>
                        <th>Pendidikan</th>
                        <th>Golongan Darah</th>
                        <th>Pekerjaan</th>
                        <th>Kelainan Fisik</th>
                        <th>Cacat</th>
                        <th>Alamat</th>
                        <th>RW</th>
                        <th>RT</th>
                        <th>Desa</th>
                        <th>Kecamatan</th>
                        <th>Akta Lahir</th>
                        <th>No Akta Lahir</th>
                        <th>Surat Keterangan Kematian</th>
                        <th>No Surat Keterangan Kematian</th>
                        <th>NIK Ayah</th>
                        <th>NIK Ibu</th>
                        <th>No Akta Nikah</th>
                        <th>Tanggal Nikah</th>
                        <th>No Akta Cerai</th>
                        <th>Tanggal Cerai</th>
                        <th>Pendapatan Per Bulan</th>
                        <th>Asuransi Kesehatan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataWarga as $warga)
                        <tr>
                            <td>{{ $warga->NoKK }}</td>
                            <td>{{ $warga->NIK }}</td>
                            <td>{{ $warga->Nama }}</td>
                            <td>{{ $warga->TempatLahir }}</td>
                            <td>{{ $warga->TanggalLahir }}</td>
                            <td>{{ $warga->TanggalMeninggal }}</td>
                            <td>{{ $warga->Tahun }}</td>
                            <td>{{ $warga->Bulan }}</td>
                            <td>{{ $warga->Hari }}</td>
                            <td>{{ $warga->JenisKelamin }}</td>
                            <td>{{ $warga->HubunganDenganKepalaKeluarga }}</td>
                            <td>{{ $warga->Agama }}</td>
                            <td>{{ $warga->Kewarganegaraan }}</td>
                            <td>{{ $warga->StatusKawin }}</td>
                            <td>{{ $warga->Pendidikan }}</td>
                            <td>{{ $warga->GolonganDarah }}</td>
                            <td>{{ $warga->Pekerjaan }}</td>
                            <td>{{ $warga->KelainanFisik }}</td>
                            <td>{{ $warga->Cacat }}</td>
                            <td>{{ $warga->Alamat }}</td>
                            <td>{{ $warga->RW }}</td>
                            <td>{{ $warga->RT }}</td>
                            <td>{{ $warga->Desa }}</td>
                            <td>{{ $warga->Kecamatan }}</td>
                            <td>{{ $warga->AktaLahir }}</td>
                            <td>{{ $warga->NoAktaLahir }}</td>
                            <td>{{ $warga->SuratKeteranganKematian }}</td>
                            <td>{{ $warga->NoSuratKeteranganKematian }}</td>
                            <td>{{ $warga->NIKAyah }}</td>
                            <td>{{ $warga->NIKIbu }}</td>
                            <td>{{ $warga->NoAktaNikah }}</td>
                            <td>{{ $warga->TanggalNikah }}</td>
                            <td>{{ $warga->NoAktaCerai }}</td>
                            <td>{{ $warga->TanggalCerai }}</td>
                            <td>{{ $warga->PendapatanPerBulan }}</td>
                            <td>{{ $warga->AsuransiKesehatan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            
        </div>
    </div>


