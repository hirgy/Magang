@include('dashboard.main')
<div class="container d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottomd-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="mb-4">Data Ibu Hamil</h1>
</div>

    <div class="container table-responsive">
        <table class="table table-bordered table-striped table-sm">
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
