@include('dashboard.main')
    <div class="container">
        <h1 class="mb-4">Data Pinjaman</h1>

        <div class="table-responsive">
            <table class="table table-bordered">
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
                            <td>{{ $pinjaman->MemilikiPinjamanPerbankan ? 'Ya' : 'Tidak' }}</td>
                            <td>{{ $pinjaman->MemilikiPinjamanKoperasi ? 'Ya' : 'Tidak' }}</td>
                            <td>{{ $pinjaman->SimpanPinjam ? 'Ya' : 'Tidak' }}</td>
                            <td>{{ $pinjaman->TerjeratPinjol ? 'Ya' : 'Tidak' }}</td>
                            <td>{{ $pinjaman->TerjeratRentenir ? 'Ya' : 'Tidak' }}</td>
                            <!-- ... (tambahkan kolom sesuai dengan kebutuhan) -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</html>
