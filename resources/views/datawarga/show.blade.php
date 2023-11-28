@include('dashboard.main')
    <div class="container">
        <h1 class="mb-4">Data Warga</h1>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No KK</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Tanggal Meninggal</th>
                        <th>Tahun</th>
                        <th>Bulan</th>
                        <th>Hari</th>
                        <th>Jenis Kelamin</th>
                        <th>Hubungan dengan Kepala Keluarga</th>
                        <th>Agama</th>
                        <th>Kewarganegaraan</th>
                        <th>Status Kawin</th>
                        <th>Pendidikan</th>
                        <th>Golongan Darah</th>
                        <th>Pekerjaan</th>
                        <th>Kelainan Fisik</th>
                        <th>Cacat</th>
                        <th>Alamat</th>
                        <th>RW</th>
                        <th>RT</th>
                        <th>Desa</th>
                        <th>Kecamatan</th>
                        <th>Akta Lahir</th>
                        <th>No Akta Lahir</th>
                        <th>Surat Keterangan Kematian</th>
                        <th>No Surat Keterangan Kematian</th>
                        <th>NIK Ayah</th>
                        <th>NIK Ibu</th>
                        <th>No Akta Nikah</th>
                        <th>Tanggal Nikah</th>
                        <th>No Akta Cerai</th>
                        <th>Tanggal Cerai</th>
                        <th>Pendapatan Per Bulan</th>
                        <th>Asuransi Kesehatan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataWarga as $warga)
                        <tr>
                            <td>{{ $warga->NoKK }}</td>
                            <td>{{ $warga->NIK }}</td>
                            <td>{{ $warga->Nama }}</td>
                            <td>{{ $warga->TempatLahir }}</td>
                            <td>{{ $warga->TanggalLahir }}</td>
                            <td>{{ $warga->TanggalMeninggal }}</td>
                            <td>{{ $warga->Tahun }}</td>
                            <td>{{ $warga->Bulan }}</td>
                            <td>{{ $warga->Hari }}</td>
                            <td>{{ $warga->JenisKelamin }}</td>
                            <td>{{ $warga->HubunganDenganKepalaKeluarga }}</td>
                            <td>{{ $warga->Agama }}</td>
                            <td>{{ $warga->Kewarganegaraan }}</td>
                            <td>{{ $warga->StatusKawin }}</td>
                            <td>{{ $warga->Pendidikan }}</td>
                            <td>{{ $warga->GolonganDarah }}</td>
                            <td>{{ $warga->Pekerjaan }}</td>
                            <td>{{ $warga->KelainanFisik ? 'Ya' : 'Tidak' }}</td>
                            <td>{{ $warga->Cacat ? 'Ya' : 'Tidak' }}</td>
                            <td>{{ $warga->Alamat }}</td>
                            <td>{{ $warga->RW }}</td>
                            <td>{{ $warga->RT }}</td>
                            <td>{{ $warga->Desa }}</td>
                            <td>{{ $warga->Kecamatan }}</td>
                            <td>{{ $warga->AktaLahir }}</td>
                            <td>{{ $warga->NoAktaLahir }}</td>
                            <td>{{ $warga->SuratKeteranganKematian }}</td>
                            <td>{{ $warga->NoSuratKeteranganKematian }}</td>
                            <td>{{ $warga->NIKAyah }}</td>
                            <td>{{ $warga->NIKIbu }}</td>
                            <td>{{ $warga->NoAktaNikah }}</td>
                            <td>{{ $warga->TanggalNikah }}</td>
                            <td>{{ $warga->NoAktaCerai }}</td>
                            <td>{{ $warga->TanggalCerai }}</td>
                            <td>{{ $warga->PendapatanPerBulan }}</td>
                            <td>{{ $warga->AsuransiKesehatan ? 'Ya' : 'Tidak' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</html>
