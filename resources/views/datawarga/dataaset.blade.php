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
</html>
