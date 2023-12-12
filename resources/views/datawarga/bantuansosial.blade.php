@include('dashboard.main')
<div class="container d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottomd-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="mb-4">Bantuan Sosial</h1>
</div>
    <div class="container table-responsive">
        <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>No KK</th>
                        <th>BLT Pusat</th>
                        <th>BLT Desa</th>
                        <th>BPNT</th>
                        <th>BPUM</th>
                        <th>BST</th>
                        <th>PKH</th>
                        <th>Sembako</th>
                        <th>KIP</th>
                        <th>KIS</th>
                        <!-- ... (tambahkan kolom sesuai dengan kebutuhan) -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($bantuanSosial as $bantuan)
                        <tr>
                            <td>{{ $bantuan->NoKK }}</td>
                            <td>{{ $bantuan->BLTPusat }}</td>
                            <td>{{ $bantuan->BLTDesa }}</td>
                            <td>{{ $bantuan->BPNT }}</td>
                            <td>{{ $bantuan->BPUM }}</td>
                            <td>{{ $bantuan->BST }}</td>
                            <td>{{ $bantuan->PKH }}</td>
                            <td>{{ $bantuan->Sembako }}</td>
                            <td>{{ $bantuan->KIP }}</td>
                            <td>{{ $bantuan->KIS }}</td>
                            <!-- ... (tambahkan kolom sesuai dengan kebutuhan) -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</html>
