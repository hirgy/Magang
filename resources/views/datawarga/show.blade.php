<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Warga</title>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/datakepalakeluarga') }}">data_kepalakeluarga</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/dataibuhamil') }}">data_ibuhamil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/balita') }}">balita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/dataaset') }}">dataaset</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/datapinjaman') }}">datapinjaman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/bantuansosial') }}">bantuansosial</a>
            </li>
        </ul>
    </div>
</nav>
    <!-- Tambahkan link ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4">Data Warga</h1>

        <div class="table-responsive">
            <table class="table table-bordered">
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
                        <th>Hamil</th>
                        <th>HPHT</th>
                        <th>Usia Kehamilan</th>
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
                            <td>{{ $warga->Hamil ? 'Ya' : 'Tidak' }}</td>
                            <td>{{ $warga->HPHT }}</td>
                            <td>{{ $warga->UsiaKehamilan }}</td>
                            <td>{{ $warga->Agama }}</td>
                            <td>{{ $warga->Kewarganegaraan }}</td>
                            <td>{{ $warga->StatusKawin }}</td>
                            <td>{{ $warga->Pendidikan }}</td>
                            <td>{{ $warga->GolonganDarah }}</td>
                            <td>{{ $warga->Pekerjaan }}</td>
                            <td>{{ $warga->KelainanFisik ? 'Ya' : 'Tidak' }}</td>
                            <td>{{ $warga->Cacat ? 'Ya' : 'Tidak' }}</td>
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
                            <td>{{ $warga->AsuransiKesehatan ? 'Ya' : 'Tidak' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Tambahkan script dan link ke Bootstrap JS (jika diperlukan) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
