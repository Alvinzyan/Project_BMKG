<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Surat Laporan - Aplikasi Inventaris BMKG</title>
    <style>
        /* ==== BODY & PAPER ==== */
        body {
            margin: 0;
            padding: 20px 0;
            font-family: "Times New Roman", serif;
            background: #ccc;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10mm;
        }

        .paper-wrap {
            width: 210mm;
            min-height: 297mm;
            background: #fff;
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.3);
            border-radius: 4px;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            scroll-snap-align: start;
        }

        .paper-wrap.page-2,
        .paper-wrap.page-3 {
            padding-top: 10mm;
            padding-bottom: 10mm;
        }

        .sheet {
            width: 100%;
            flex: 1;
            display: flex;
            flex-direction: column;
            box-sizing: border-box;
        }

        /* ==== HEADER UTAMA ==== */
        .letter-header {
            position: relative;
            background-color: #e1e1e1;
            padding-top: 6mm;
        }

        .logo {
            position: absolute;
            left: 15mm;
            top: 6mm;
            width: 70px;
            height: auto;
        }

        .header-text {
            text-align: center;
            padding-top: 4px;
            line-height: 1.1;
            padding-left: 10mm;
        }

        .header-text .org-name {
            font-weight: 700;
            font-size: 13pt;
        }

        .header-text .sub {
            display: block;
            font-size: 10pt;
            font-weight: 600;
            margin-top: 2px;
            text-align: center;
        }

        .line-2 {
            margin-top: 5px;
            height: 2px;
            border-bottom: 2px solid #000;
            border-top: 2px solid #000;
        }

        /* ==== ISI SURAT ==== */
        .meta-row {
            display: flex;
            margin-top: 10mm;
            gap: 6mm;
            padding: 0 20mm;
        }

        .meta-left {
            flex: 1;
            font-size: 12pt;
        }

        .meta-item {
            margin-bottom: 6px;
            display: flex;
            align-items: flex-start;
        }

        .meta-left .label {
            width: 80px;
            font-weight: bold;
        }

        .meta-right {
            width: 55mm;
            text-align: right;
            font-size: 11pt;
        }

        .recipient {
            display: flex;
            margin-top: 10mm;
            font-size: 12pt;
            padding: 0 20mm;
        }

        .content-one {
            margin-top: 10mm;
            font-size: 12pt;
            line-height: 1.4;
            text-align: justify;
            padding: 0 20mm;
        }

        .content-one p {
            margin: 10px 0;
            text-indent: 10mm;
        }

        .signature-wrap {
            margin-top: 24mm;
            display: flex;
            justify-content: flex-end;
            padding-right: 20mm;
        }

        .signature {
            width: 55mm;
            text-align: left;
            font-size: 12pt;
        }

        .signature .space {
            height: 22mm;
        }

        /* ==== HALAMAN 2 ==== */
        .header-lampiran {
            width: 100%;
            display: flex;
            justify-content: flex-start;
            padding-left: 150mm;
            margin-top: 5mm;
        }

        .info-lampiran {
            text-align: left;
            font-size: 12px;
            line-height: 1.5;
        }

        .info-lampiran p {
            margin: 0 0 4px 0;
            font-weight: bold;
        }

        .meta-item-two {
            display: grid;
            grid-template-columns: 70px 10px auto;
            gap: 4px;
            align-items: start;
            white-space: nowrap;
        }

        .meta-item-two .label {
            font-weight: normal;
        }

        .meta-item-two .colon {
            text-align: center;
        }

        .meta-item-two .value {
            white-space: normal;
        }

        .content-two {
            font-size: 10.5pt;
            text-align: left;
            padding: 0 15mm;
        }

        .title {
            text-align: center;
            font-size: 11pt;
            font-weight: bold;
            margin: 4mm 0;
            text-transform: uppercase;
        }

        .section p {
            margin: 2mm 0;
            page-break-inside: avoid;
        }

        /* ==== TABEL ==== */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 5mm;
            font-size: 9pt;
            table-layout: fixed;
            word-wrap: break-word;
            page-break-inside: auto;
        }

        .table th,
        .table td {
            border: 1px solid #000;
            padding: 1mm 1.5mm;
            text-align: center;
        }

        .table td:nth-child(2),
        .table td:nth-child(3) {
            text-align: left;
        }

        .table th {
            background: #fff;
            font-size: 9pt;
            text-align: center;
        }

        .table col:nth-child(1) {
            width: 10mm;
        }

        .table col:nth-child(2) {
            width: 35mm;
        }

        .table col:nth-child(3) {
            width: 30mm;
        }

        .table col:nth-child(4) {
            width: 12mm;
        }

        .table col:nth-child(5),
        .table col:nth-child(6),
        .table col:nth-child(7) {
            width: 8mm;
        }

        .table col:nth-child(8) {
            width: 27mm;
        }

        .table col:nth-child(9) {
            width: 25mm;
        }

        .table col:nth-child(10) {
            width: 27mm;
        }

        .catatan {
            margin-top: 4mm;
            font-size: 8pt;
        }

        .catatan ol {
            padding-left: 4mm;
            margin: 0;
        }

        .catatan li {
            margin-bottom: 1mm;
        }
    </style>
</head>

<body>

    <!-- HALAMAN 1 -->
    <div class="paper-wrap">
        <div class="sheet">
            <header class="letter-header">
                <img class="logo" src="{{ asset('volt/assets/img/logo bmkg 2.png') }}" alt="Logo Instansi">
                <div class="header-text">
                    <div class="org-name">BADAN METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA</div>
                    <div class="org-name">STASIUN METEOROLOGI KELAS III BANYUWANGI</div>
                    <div class="sub">
                        Jl. Jaksa Agung Suprapto No. 152 Banyuwangi, Kode Pos: 68425 <br>
                        Telp: (0333) 421888/410088
                        Email: stamet.banyuwangi436911@gmail.com <br>
                        / met_987@yahoo.com / stamet.banyuwangi@bmkg.go.id
                    </div>
                    <div class="sub">Website: www.stamet-banyuwangi.bmkg.go.id</div>
                </div>
                <div class="line-2"></div>
            </header>

            @php
            $tanggalAwal = \Carbon\Carbon::parse($periode_start)->translatedFormat('j');
            $tanggalAkhir = \Carbon\Carbon::parse($periode_end)->translatedFormat('j F Y');
            @endphp
            <section class="meta-row">
                <div class="meta-left">
                    <div class="meta-item">
                        <div class="label">Nomor</div>
                        <div class="value">: -</div>
                    </div>
                    <div class="meta-item">
                        <div class="label">Lampiran</div>
                        <div class="value">: 1 (satu) berkas</div>
                    </div>
                    <div class="meta-item">
                        <div class="label">Perihal</div>
                        <div class="value">: Laporan Kondisi Aloptama<br>
                            <span style="display:inline-block; margin-left:2mm;">Stasiun Meteorologi Banyuwangi</span>
                        </div>
                    </div>
                </div>
                <div class="meta-right">Banyuwangi, {{ $tanggal }}</div>
            </section>

            <section class="recipient">
                <div>Yth.</div>
                <div style="margin-left: 12px">
                    Koordinator Stasiun Meteorologi Klimatologi<br>
                    dan Geofisika Provinsi Jawa Timur<br>
                    di<br>
                    Sidoarjo
                </div>
            </section>

            <section class="content-one">
                <p>Dengan hormat, bersama ini kami sampaikan Laporan Kondisi Peralatan yang dioperasikan di Stasiun
                    Meteorologi Banyuwangi tanggal {{ $tanggalAwal }} – {{ $tanggalAkhir }} (sebagaimana terlampir).</p>
                <p>Demikian Laporan Kondisi Aloptama ini kami sampaikan, atas perhatiannya diucapkan terima kasih.</p>
            </section>

            <div class="signature-wrap">
                <div class="signature">
                    <div>Kepala Stasiun</div>
                    <div class="space"></div>
                    <div class="name">Teguh Tri Susanto</div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== HALAMAN 2: DATA ALAT ===== -->
    <div class="paper-wrap page-2" style="padding-top:15mm;">
        <div class="sheet">
            <div class="header-lampiran">
                <div class="info-lampiran">
                    <p>Lampiran Surat</p>
                    <div class="meta-item-two">
                        <span class="label">Nomor</span>
                        <span class="colon">:</span>
                        <span class="value">-</span>
                    </div>
                    <div class="meta-item-two">
                        <span class="label">Tanggal</span>
                        <span class="colon">:</span>
                        <span class="value">{{ $tanggal }}</span>
                    </div>
                </div>
            </div>

            <div class="content-two">
                <h2 class="title">DAFTAR PERALATAN OPERASIONAL</h2>

                @foreach($lokasiList as $lokasi)
                <div class="section">
                    <p><strong>{{ $loop->iteration }}. {{ $lokasi->nama_lokasi }}</strong></p>
                </div>

                @foreach($lokasi->kategoris as $kategori)
                <p class="subtitle">{{ $kategori->nama_kategori }}</p>

                <table class="table" style="width: 100%; border-collapse: collapse; font-size: 10px; table-layout: fixed;">
                    <thead>
                        <tr>
                            <th rowspan="2" style="width: 5%; border: 1px solid #000; padding: 3px;">NO</th>
                            <th rowspan="2" style="width: 18%; border: 1px solid #000; padding: 3px;">NAMA ALAT</th>
                            <th rowspan="2" style="width: 15%; border: 1px solid #000; padding: 3px;">MERK / TYPE</th>
                            <th rowspan="2" style="width: 5%; border: 1px solid #000; padding: 3px;">JML</th>
                            <th colspan="3" style="width: 15%; border: 1px solid #000; padding: 3px;">KONDISI</th>
                            <th rowspan="2" style="width: 14%; border: 1px solid #000; padding: 3px;">TAHUN<br>PEMASANGAN</th>
                            <th rowspan="2" style="width: 13%; border: 1px solid #000; padding: 3px;">KALIBRASI<br>TERAKHIR</th>
                            <th rowspan="2" style="width: 15%; border: 1px solid #000; padding: 3px;">KETERANGAN</th>
                        </tr>
                        <tr>
                            <th style="width: 5%; border: 1px solid #000; padding: 3px;">B</th>
                            <th style="width: 5%; border: 1px solid #000; padding: 3px;">RR</th>
                            <th style="width: 5%; border: 1px solid #000; padding: 3px;">RB</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($kategori->alats as $alat)
                        @php
                        $lastPengecekan = $alat->pengecekans->sortByDesc('created_at')->first();
                        $kondisi = [];

                        if ($lastPengecekan) {
                        if (is_string($lastPengecekan->kondisi)) {
                        $kondisi = json_decode($lastPengecekan->kondisi, true) ?? [];
                        } elseif (is_array($lastPengecekan->kondisi)) {
                        $kondisi = $lastPengecekan->kondisi;
                        }
                        }
                        @endphp
                        <tr>
                            <td style="border:1px solid #000; padding:3px;">{{ $loop->iteration }}</td>
                            <td style="border:1px solid #000; padding:3px; text-align:left;">{{ $alat->nama_alat }}</td>
                            <td style="border:1px solid #000; padding:3px; text-align:left;">{{ $alat->merk_tipe }}</td>
                            <td style="border:1px solid #000; padding:3px;">{{ $alat->jumlah }}</td>
                            <td style="border:1px solid #000; padding:3px;">{{ in_array('baik', $kondisi) ? '√' : '' }}</td>
                            <td style="border:1px solid #000; padding:3px;">{{ in_array('rusak ringan', $kondisi) ? '√' : '' }}</td>
                            <td style="border:1px solid #000; padding:3px;">{{ in_array('rusak berat', $kondisi) ? '√' : '' }}</td>
                            <td style="border:1px solid #000; padding:3px;">{{ $alat->tahun_pemasangan ?? '' }}</td>
                            <td style="border:1px solid #000; padding:3px;">{{ $lastPengecekan && $lastPengecekan->kalibrasi_terakhir 
                                ? \Carbon\Carbon::createFromFormat('Y-m', $lastPengecekan->kalibrasi_terakhir)->locale('id')
                                ->translatedFormat('F Y') : '' }}
                            </td>
                            <td style="border:1px solid #000; padding:3px;">{{ ucfirst($alat->keterangan ?? '') }}</td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
                <!-- ====== CATATAN PER KATEGORI ====== -->
                @php
                $cat = $kategori->latestCatatan->isi_catatan ?? null;
                $cat = trim($cat);
                @endphp

                @if($cat)
                <div class="catatan" style="margin-bottom:6mm;">
                    <p><strong>Catatan:</strong></p>

                    <ol>
                        @foreach(explode("\n", $cat) as $baris)
                        @if(trim($baris) !== '')
                        <li>{{ $baris }}</li>
                        @endif
                        @endforeach
                    </ol>
                </div>
                @endif
                @endforeach
                @endforeach
            </div>
        </div>
    </div>

    <!-- HALAMAN 3: FOTO -->
    <div class="paper-wrap page-3" style="padding-top:10mm; padding-bottom:5mm; padding-left:5mm; padding-right:5mm;">
        <div class="sheet">
            <h2 class="title">Lampiran Foto Peralatan</h2>

            <div style="padding: 5mm 10mm;">

                @php $lokasiNo = 1; @endphp

                @foreach ($lokasiList as $lokasi)

                @php
                $alatDenganFoto = [];
                foreach ($lokasi->kategoris ?? [] as $kategori) {
                foreach ($kategori->alats ?? [] as $alat) {
                $foto = optional($alat->pengecekans->first())->foto_lampiran;
                if ($foto) {
                $alatDenganFoto[] = [
                'nama' => $alat->nama_alat,
                'foto' => $foto
                ];
                }
                }
                }
                @endphp

                @if (count($alatDenganFoto) == 0)
                @continue
                @endif

                <h3 style="margin-top:2mm; font-size:12pt;">
                    {{ $lokasiNo }}. Lokasi: {{ $lokasi->nama_lokasi }}
                </h3>

                @foreach ($alatDenganFoto as $item)
                <div style="width: 100%; margin-bottom: 12mm; text-align:center;">
                    <img src="{{ asset('storage/' . $item['foto']) }}"
                        style="width: 160mm; height: 100mm; object-fit: cover; border:1px solid #000;">
                    <p style="font-size: 12pt; margin-top: 2mm;">
                        {{ $item['nama'] }}
                    </p>
                </div>
                @endforeach

                @php $lokasiNo++; @endphp

                @endforeach

            </div>
        </div>
    </div>
</body>

</html>