@include('layouts.main')
    <div class="container d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottomd-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="mb-4">Data Balita</h1>
    </div>

        <div class="container table-responsive">
            <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>No KK</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Lingkar Kepala (cm)</th>
                        <th>Lingkar Lengan (cm)</th>
                        <th>Berat Badan (kg)</th>
                        <th>Tinggi Badan (cm)</th>
                        <!-- Tambahkan kolom sesuai dengan kebutuhan -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataBalita as $balita)
                        <tr>
                            <td>{{ $balita->NoKK }}</td>
                            <td>{{ $balita->NIK }}</td>
                            <td>{{ $balita->Nama }}</td>
                            <td>{{ $balita->LingkarKepala }}</td>
                            <td>{{ $balita->LingkarLengan }}</td>
                            <td>{{ $balita->BeratBadan }}</td>
                            <td>{{ $balita->TinggiBadan }}</td>
                            <!-- Tambahkan kolom sesuai dengan kebutuhan -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
