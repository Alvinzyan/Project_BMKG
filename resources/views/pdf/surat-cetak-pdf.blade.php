<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <title>Surat Aloptama BMKG - A4</title>
    <style>
        @page {
            size: A4;
            margin: 12mm 0 0 0;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: "Times New Roman", serif;
        }

        /* === PEMBUNGKUS HALAMAN === */
        .paper-wrap {
            width: 100%;
            /* height: 100%; */
            background: white;
            margin: 5mm auto;
            page-break-after: always;
            position: relative;
            box-sizing: border-box;
            overflow: hidden;
        }

        .paper-wrap:last-child {
            page-break-after: auto;
        }

        .paper-wrap:not(.last-page) {
            page-break-after: always;
        }

        /* === HEADER === */
        .letter-header {
            background-color: #e1e1e1;
            width: 210mm;
            margin-top: -20mm;
            padding-top: 10mm;
            box-sizing: border-box;
            text-align: center;
            position: relative;
        }

        .letter-header img.logo {
            position: absolute;
            left: 13mm;
            top: 10mm;
            width: 70px;
            height: auto;
        }

        .header-text {
            margin-left: 115px;
            margin-right: 15mm;
            line-height: 1.2;
        }

        .org-name {
            font-size: 13pt;
            font-weight: bold;
        }

        .sub {
            font-size: 10pt;
            font-weight: 600;
        }

        .line-2 {
            margin-top: 5px;
            height: 2px;
            border-bottom: 2px solid #000;
            border-top: 2px solid #000;
        }

        /* === KONTEN SURAT === */
        .content-wrap {
            padding: 10mm 20mm;
            font-size: 12pt;
            box-sizing: border-box;
        }

        .meta-row {
            width: 100%;
            font-size: 12pt;
            white-space: nowrap;
            align-items: flex-start;
        }

        .meta-left {
            display: inline-block;
            width: 60%;
            vertical-align: top;
        }

        .meta-right {
            display: inline-block;
            width: 38%;
            text-align: right;
            vertical-align: top;
        }

        .meta-left .label {
            display: inline-block;
            width: 80px;
            font-weight: bold;
        }

        .value-indent {
            display: block;
            margin-left: 23mm;
        }

        .recipient {
            margin-top: 12mm;
            font-size: 12pt;
        }

        .recipient .label {
            display: inline-block;
            width: 2mm;
            vertical-align: top;
        }

        .recipient .address {
            display: inline-block;
            width: calc(100% - 2mm - 20mm);
            margin-left: 5mm;
            vertical-align: top;
        }

        .content {
            margin-top: 10mm;
            text-align: justify;
            text-indent: 10mm;
            line-height: 1.5;
        }

        .signature {
            text-align: left;
            margin-top: 25mm;
            padding-left: 110mm;
        }

        .signature .name {
            margin-top: 22mm;
        }

        /* === HALAMAN 2 (TABEL) === */
        .header-lampiran {
            width: 100%;
            display: flex;
            justify-content: flex-end;
            padding-left: 140mm;
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

        .content-two {
            padding: 10mm 15mm;
            box-sizing: border-box;
        }

        .content-two h2 {
            text-align: center;
            margin: 0 0 2mm 0;
            font-size: 12pt;
        }

        .meta-item-two {
            margin-bottom: 3px;
            font-size: 11px;
        }

        .meta-item-two .label {
            display: inline-block;
            width: 50px;
        }

        .meta-item-two .colon {
            display: inline-block;
            width: 10px;
            text-align: center;
        }

        .meta-item-two .value {
            display: inline-block;
            width: auto;
        }

        /* ==================== TABEL ==================== */
        th,
        td {
            border: 1px solid #000;
            padding: 1mm 1.5mm;
            vertical-align: middle;
            text-align: center;
        }

        .catatan {
            margin-top: 2mm;
            font-size: 8pt;
        }

        .catatan ol {
            padding-left: 4mm;
            margin: 0;
        }

        .catatan li {
            margin-bottom: 1mm;
        }

        /* ==================== TTD ==================== */
        .paper-wrap.page-ttd {
            padding-left: 5mm;
        }

        .ttd-table {
            padding-top: 10mm;
            width: 100%;
            border-collapse: collapse;
        }

        .ttd-td {
            text-align: left;
            vertical-align: top;
            border: none;
            font-size: 12pt;
        }

        .ttd-title span {
            display: block;
            margin-top: 2mm;
        }

        .ttd-space {
            height: 25mm;
        }

        .ttd-name {
            margin-top: 2mm;
        }

        /* ==================== FOOTER ==================== */
        .page-footer {
            position: fixed;
            bottom: 5mm;
            left: 0;
            width: 100%;
            text-align: center;
            font-size: 10pt;
        }

        .page-footer .footer-line {
            width: 70%;
            height: 1px;
            background: #534d4dff;
            margin: 0 auto 2mm auto;/
        }

        .page-footer .footer-text {
            max-width: 65%;
            margin: 0 auto;
            text-align: center;
            padding: 0 5mm;
            font-style: italic;
        }
    </style>
</head>

<body>
    <div class="page-footer">
        <div class="footer-line"></div>
        <div class="footer-text">
            Dokumen ini telah ditandatangani secara elektronik
            menggunakan sertifkat elektronik yang diterbitkan oleh Badan Sertifikat Elektronik (BSrE), Badan Siber dan Sandi Negara
        </div>
    </div>

    <!-- ===== HALAMAN 1 ===== -->
    <div class="paper-wrap">
        <header class="letter-header">
            <img class="logo" src="{{ public_path('volt/assets/img/logo bmkg 2.png') }}" alt="Logo Instansi">

            <div class="header-text">
                <div class="org-name">BADAN METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA</div>
                <div class="org-name">STASIUN METEOROLOGI KELAS III BANYUWANGI</div>
                <div class="sub">
                    Jl. Jaksa Agung Suprapto No. 152 Banyuwangi, Kode Pos: 68425<br>
                    Telp: (0333) 421888 / 410088<br>
                    Email: stamet.banyuwangi436911@gmail.com / met_987@yahoo.com / stamet.banyuwangi@bmkg.go.id<br>
                    Website: www.stamet-banyuwangi.bmkg.go.id
                </div>
            </div>
            <div class="line-2"></div>

        </header>

        <div class="content-wrap">
            <section class="meta-row">
                <div class="meta-left">
                    <div class="meta-item"><span class="label">Nomor</span>: {{ $nomor_surat }}</div>
                    <div class="meta-item"><span class="label">Lampiran</span>: 1 (satu) berkas</div>
                    <div class="meta-item"><span class="label">Perihal</span>: Laporan Kondisi Aloptama<br>
                        <span class="value-indent">Stasiun Meteorologi Banyuwangi</span>
                    </div>
                </div>
                <div class="meta-right">Banyuwangi, {{ $tanggal }}</div>
                <div style="clear: both;"></div>
            </section>

            <div class="recipient">
                <span class="label">Yth.</span>
                <span class="address">
                    Koordinator Stasiun Meteorologi Klimatologi<br>
                    dan Geofisika Provinsi Jawa Timur<br>
                    di<br>
                    Sidoarjo
                </span>
            </div>

            <div class="content">
                <p>Dengan hormat, bersama ini kami sampaikan Laporan Kondisi Peralatan yang dioperasikan di Stasiun Meteorologi Banyuwangi tanggal {{ $tanggal_periode }} (sebagaimana terlampir).</p>
                <p>Demikian Laporan Kondisi Aloptama ini kami sampaikan, atas perhatiannya diucapkan terima kasih.</p>
            </div>

            <div class="signature">
                <div>Kepala Stasiun</div>
                <div class="name">Teguh Tri Susanto</div>
            </div>
        </div>
    </div>

    <!-- ===== HALAMAN 2: DATA ALAT ===== -->
    <div class="paper-wrap page-2">
        <div class="sheet">
            <div class="header-lampiran">
                <div class="info-lampiran">
                    <p>Lampiran Surat</p>
                    <div class="meta-item-two">
                        <span class="label">Nomor</span>
                        <span class="colon">:</span>
                        <span class="value">{{ $nomor_surat }}</span>
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

                {{-- TABLE --}}
                <table style="width: 100%; border-collapse: collapse; font-size: 11px; table-layout: fixed;">
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
                        $lastPengecekan = $alat->latestPengecekan;
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
                            <td style="border:1px solid #000; padding:3px; font-family: DejaVu Sans;">{{ in_array('baik', $kondisi) ? '✓' : '' }}</td>
                            <td style="border:1px solid #000; padding:3px; font-family: DejaVu Sans;">{{ in_array('rusak ringan', $kondisi) ? '✓' : '' }}</td>
                            <td style="border:1px solid #000; padding:3px; font-family: DejaVu Sans;">{{ in_array('rusak berat', $kondisi) ? '✓' : '' }}</td>
                            <td style="border:1px solid #000; padding:3px;">{{ $alat->tahun_pemasangan }}</td>
                            <td style="border:1px solid #000; padding:3px;"> {{ optional($alat->latestKalibrasi)->kalibrasi_terakhir
                                ? \Carbon\Carbon::createFromFormat('Y-m', $alat->latestKalibrasi->kalibrasi_terakhir)
                                ->locale('id')
                                ->translatedFormat('F Y') : '' }}
                            </td>
                            <td style="border:1px solid #000; padding:3px;">{{ ucfirst($alat->keterangan) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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

    <!-- HALAMAN TAMBAHAN: TANDA TANGAN -->
    <div class="paper-wrap page-ttd">
        <div class="content-wrap">

            <p style="text-align:justify; font-size:12pt;">
                Demikian laporan peralatan ini kami sampaikan, atas perhatiannya kami ucapkan terima kasih.
            </p>

            <table class="ttd-table" width="90%">
                <tr>
                    <td class="ttd-td">
                        <div class="ttd-title">
                            Mengetahui,
                            <span>Kepala Stasiun Meteorologi Banyuwangi</span>
                        </div>

                        <div class="ttd-space"></div>

                        <div class="ttd-name">
                            <p>Teguh Tri Susanto</p>
                        </div>
                    </td>

                    <td class="ttd-td">
                        <div class="ttd-title">
                            Pembuat Laporan
                            <span>Teknisi</span>
                        </div>

                        <div class="ttd-space"></div>

                        <div class="ttd-name">
                            <p>{{ Auth::user()->nama_lengkap }}</p>
                        </div>
                    </td>
                </tr>
            </table>

        </div>
    </div>

    <!-- HALAMAN 3: FOTO -->
    <div class="paper-wrap last-page page-3">
        <div class="sheet" style="padding-left:15mm; padding-right:5mm;">
            <h2 style="text-align:center; font-size:14pt; margin-bottom:5mm;">Lampiran Foto Peralatan</h2>

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

            <h3 style="font-size:12pt; margin-top:5mm; margin-bottom:3mm;">
                {{ $lokasiNo }}. {{ $lokasi->nama_lokasi }}
            </h3>

            @foreach ($alatDenganFoto as $item)
            <div style="width:100%; text-align:center; margin-bottom:10mm; page-break-inside: avoid;">
                <img src="{{ public_path('storage/' . $item['foto']) }}"
                    style="width:100%; max-width:110mm; height:60mm; object-fit:cover; border:1px solid #000;">
                <p style="font-size:12pt; margin-top:2mm;">{{ $item['nama'] }}</p>
            </div>
            @endforeach

            @php $lokasiNo++; @endphp

            @endforeach
        </div>
    </div>

</body>

</html>