@include('dashboard.main')
    <div class="container">
        <h1 class="mb-4">Data Balita</h1>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No KK</th>
                        <th>NIK</th>
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
</html>
