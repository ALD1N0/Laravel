<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="card mt-4 shadow-sm">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Rekapitulasi Penduduk per Desa</h5>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-bordered table-hover mb-0">
                <thead class="table-light text-center">
                    <tr>
                        <th>Desa</th>
                        <th>Total Penduduk</th>
                        <th>Jumlah Dusun</th>
                        <th>Jumlah Keluarga</th>
                        <th>Jumlah Surat</th>
                        <th>Jumlah Kelompok</th>
                        <th>Jumlah RTM</th>
                        <th>Jumlah BPTN</th>
                        <th>Layanan Mandiri</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($summary as $desa => $item)
                        <tr>
                            <td class="text-capitalize">{{ $desa }}</td>
                            <td class="text-end">{{ $item['total_penduduk'] ?? '-' }}</td>
                            <td class="text-end">{{ $item['jumlah_dusun'] ?? '-' }}</td>
                            <td class="text-end">{{ $item['jumlah_keluarga'] ?? '-' }}</td>
                            <td class="text-end">{{ $item['jumlah_surat'] ?? '-' }}</td>
                            <td class="text-end">{{ $item['jumlah_kelompok'] ?? '-' }}</td>
                            <td class="text-end">{{ $item['jumlah_rtm'] ?? '-' }}</td>
                            <td class="text-end">{{ $item['jumlah_program'] ?? '-' }}</td>
                            <td class="text-end">{{ $item['jumlah_layanan_mandiri'] ?? '-' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
