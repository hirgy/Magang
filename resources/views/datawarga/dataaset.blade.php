@include('dashboard.main')
<div class="container d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottomd-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="mb-4">Data Aset</h1>
</div>

    <div class="container table-responsive">
        <table class="table table-bordered table-striped table-sm">
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
                            <td>{{ $aset->MemilikiTeleponSeluler }}</td>
                            <td>{{ $aset->MemilikiFasilitasInternet }}</td>
                            <td>{{ $aset->MemilikiPerangkatKomputer }}</td>
                            <td>{{ $aset->MemilikiKendaraanBerodaDua }}</td>
                            <td>{{ $aset->MemilikiKendaraanBerodaEmpat }}</td>
                            <td>{{ $aset->MemilikiKendaraanLainnya }}</td>
                            <td>{{ $aset->MemilikiKendaraanListrik }}</td>
                            <!-- ... (tambahkan kolom sesuai dengan kebutuhan) -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</html>
