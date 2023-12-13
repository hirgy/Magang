@include('layouts.main')
<div class="container d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottomd-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="mb-4">Data Pinjaman</h1>
</div>

    <div class="container table-responsive">
        <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>No KK</th>
                        <th>Memiliki Pinjaman Perbankan</th>
                        <th>Memiliki Pinjaman Koperasi</th>
                        <th>Simpan Pinjam</th>
                        <th>Terjerat Pinjol</th>
                        <th>Terjerat Rentenir</th>
                        <!-- ... (tambahkan kolom sesuai dengan kebutuhan) -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataPinjaman as $pinjaman)
                        <tr>
                            <td>{{ $pinjaman->NoKK }}</td>
                            <td>{{ $pinjaman->MemilikiPinjamanPerbankan }}</td>
                            <td>{{ $pinjaman->MemilikiPinjamanKoperasi }}</td>
                            <td>{{ $pinjaman->SimpanPinjam }}</td>
                            <td>{{ $pinjaman->TerjeratPinjol }}</td>
                            <td>{{ $pinjaman->TerjeratRentenir}}</td>
                            <!-- ... (tambahkan kolom sesuai dengan kebutuhan) -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</html>
