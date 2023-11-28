@include('dashboard.main')
    <div class="container">
        <h1 class="mb-4">Data Kepala Keluarga</h1>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No KK</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <!-- Tambahkan kolom sesuai dengan kebutuhan -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataKepalaKeluarga as $kepalaKeluarga)
                        <tr>
                            <td>{{ $kepalaKeluarga->NoKK }}</td>
                            <td>{{ $kepalaKeluarga->NIK }}</td>
                            <td>{{ $kepalaKeluarga->Nama }}</td>
                            <!-- Tambahkan kolom sesuai dengan kebutuhan -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</html>
