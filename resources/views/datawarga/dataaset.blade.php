<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Aset</title>

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
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <!-- <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Beranda <span class="sr-only">(current)</span></a>
            </li> -->
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
    <div class="container">
        <h1 class="mb-4">Data Aset</h1>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No KK</th>
                        <th>Memiliki Telepon Seluler</th>
                        <th>Memiliki Fasilitas Internet</th>
                        <th>Memiliki Perangkat Komputer</th>
                        <th>Memiliki Kendaraan Beroda Dua</th>
                        <th>Memiliki Kendaraan Beroda Empat</th>
                        <th>Memiliki Kendaraan Lainnya</th>
                        <th>Memiliki Kendaraan Listrik</th>
                        <!-- ... (tambahkan kolom sesuai dengan kebutuhan) -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataAset as $aset)
                        <tr>
                            <td>{{ $aset->NoKK }}</td>
                            <td>{{ $aset->MemilikiTeleponSeluler ? 'Ya' : 'Tidak' }}</td>
                            <td>{{ $aset->MemilikiFasilitasInternet ? 'Ya' : 'Tidak' }}</td>
                            <td>{{ $aset->MemilikiPerangkatKomputer ? 'Ya' : 'Tidak' }}</td>
                            <td>{{ $aset->MemilikiKendaraanBerodaDua ? 'Ya' : 'Tidak' }}</td>
                            <td>{{ $aset->MemilikiKendaraanBerodaEmpat ? 'Ya' : 'Tidak' }}</td>
                            <td>{{ $aset->MemilikiKendaraanLainnya ? 'Ya' : 'Tidak' }}</td>
                            <td>{{ $aset->MemilikiKendaraanListrik ? 'Ya' : 'Tidak' }}</td>
                            <!-- ... (tambahkan kolom sesuai dengan kebutuhan) -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
    <!-- Tambahkan script dan link ke Bootstrap JS (jika diperlukan) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
