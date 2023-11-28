@include('dashboard.main')
    <div class="container">
        <h1 class="mb-4">Data Ibu Hamil</h1>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No KK</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Hamil</th>
                        <th>Hari Pertama Haid (HPHT)</th>
                        <th>Usia Kehamilan</th>
                        <!-- Tambahkan kolom sesuai dengan kebutuhan -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataIbuHamil as $ibuHamil)
                        <tr>
                            <td>{{ $ibuHamil->NoKK }}</td>
                            <td>{{ $ibuHamil->NIK }}</td>
                            <td>{{ $ibuHamil->Nama }}</td>
                            <td>{{ $ibuHamil->Hamil }}</td>
                            <td>{{ $ibuHamil->HPHT }}</td>
                            <td>{{ $ibuHamil->UsiaKehamilan }}</td>
                            <!-- Tambahkan kolom sesuai dengan kebutuhan -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
