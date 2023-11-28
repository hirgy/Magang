@include('dashboard.main')
<div class="container d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottomd-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="mb-4">Data Kepala Keluarga</h1>
</div>

    <div class="container table-responsive">
        <table class="table table-bordered table-striped table-sm">
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
