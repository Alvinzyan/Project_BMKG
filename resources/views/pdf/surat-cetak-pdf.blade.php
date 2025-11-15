<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <title>Surat Aloptoma BMKG - A4</title>
    <style>
        @page {
            size: A4;
            margin: 0;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: "Times New Roman", serif;
        }

        /* === PEMBUNGKUS HALAMAN === */
        .paper-wrap {
            width: 210mm;
            height: 297mm;
            background: white;
            margin: 0 auto;
            page-break-after: always;
            position: relative;
            box-sizing: border-box;
            overflow: hidden;
        }

        /* === HEADER === */
        .letter-header {
            background-color: #e1e1e1;
            width: 210mm;
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
            font-size: 11pt;
            box-sizing: border-box;
        }

        .meta-row {
            width: 100%;
            font-size: 11pt;
            white-space: nowrap;
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
            font-size: 11pt;
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
        /* table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 5mm;
            font-size: 9pt;
            table-layout: fixed;
            word-wrap: break-word;
        } */

        th,
        td {
            border: 1px solid #000;
            padding: 1mm 1.5mm;
            vertical-align: middle;
            text-align: center;
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

        /* === HALAMAN 3 (LAMPIRAN FOTO) === */
        .lampiran {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10mm;
            padding: 10mm;
            box-sizing: border-box;
        }

        .lampiran img {
            width: 80mm;
            border: 1px solid black;
        }

        .lampiran p {
            font-size: 10pt;
            text-align: center;
            margin-top: 2mm;
        }
    </style>
</head>

<body>

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
    <div class="paper-wrap">
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
                <div class="section">
                    <p><strong>A. Peralatan di Kantor Meteorologi Banyuwangi</strong></p>
                    <p class="subtitle">Peralatan konvensional</p>
                </div>

                <table table style="width: 100%; border-collapse: collapse; font-size: 10px; table-layout: fixed;">
                    <thead>
                        <tr>
                            <th rowspan="2" style="width: 5%; border: 1px solid #000; padding: 3px;">NO</th>
                            <th rowspan="2" style="width: 18%; border: 1px solid #000; padding: 3px;">NAMA ALAT</th>
                            <th rowspan="2" style="width: 12%; border: 1px solid #000; padding: 3px;">MERK / TYPE</th>
                            <th rowspan="2" style="width: 5%; border: 1px solid #000; padding: 3px;">JML</th>
                            <th colspan="3" style="width: 15%; border: 1px solid #000; padding: 3px;">KONDISI</th>
                            <th rowspan="2" style="width: 15%; border: 1px solid #000; padding: 3px;">TAHUN<br>PEMASANGAN</th>
                            <th rowspan="2" style="width: 15%; border: 1px solid #000; padding: 3px;">KALIBRASI<br>TERAKHIR</th>
                            <th rowspan="2" style="width: 15%; border: 1px solid #000; padding: 3px;">KETERANGAN</th>
                        </tr>
                        <tr>
                            <th style="width: 5%; border: 1px solid #000; padding: 3px;">B</th>
                            <th style="width: 5%; border: 1px solid #000; padding: 3px;">RR</th>
                            <th style="width: 5%; border: 1px solid #000; padding: 3px;">RB</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sangkar Meteorologi</td>
                            <td>Kayu Lokal</td>
                            <td>1</td>
                            <td>√</td>
                            <td></td>
                            <td></td>
                            <td>2004</td>
                            <td>Mei 2024</td>
                            <td>Terpasang</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Thermometer BB/BK</td>
                            <td>Schneider</td>
                            <td>2</td>
                            <td></td>
                            <td>√</td>
                            <td></td>
                            <td>2000</td>
                            <td>Mei 2024</td>
                            <td>Terpasang</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Thermometer BB/BK</td>
                            <td>F. Ketterer</td>
                            <td>2</td>
                            <td></td>
                            <td>√</td>
                            <td></td>
                            <td>2011</td>
                            <td>Mei 2024</td>
                            <td>Terpasang</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Thermometer Max./Min</td>
                            <td>Schneider</td>
                            <td>1</td>
                            <td>√</td>
                            <td></td>
                            <td></td>
                            <td>1986</td>
                            <td>Mei 2024</td>
                            <td>Terpasang</td>
                        </tr>
                    </tbody>
                </table>

                <div class="catatan">
                    <p><strong>Catatan:</strong></p>
                    <ol>
                        <li>Garis pembacaan pada Thermometer Apung hilang.</li>
                        <li>Pada Theodolite, saat pemindahan dari lensa dekat ke jauh menjadi tidak terarah/fokus.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== HALAMAN 2: DATA ALAT ===== -->
    <!-- <div class="paper-wrap">
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

                @foreach($lokasi->kategori as $kategori)
                <p class="subtitle">{{ $kategori->nama_kategori }}</p>

                {{-- TABLE --}}
                <table style="width: 100%; border-collapse: collapse; font-size: 10px; table-layout: fixed;">
                    <thead>
                        <tr>
                            <th rowspan="2" style="width: 5%; border: 1px solid #000; padding: 3px;">NO</th>
                            <th rowspan="2" style="width: 18%; border: 1px solid #000; padding: 3px;">NAMA ALAT</th>
                            <th rowspan="2" style="width: 12%; border: 1px solid #000; padding: 3px;">MERK / TYPE</th>
                            <th rowspan="2" style="width: 5%; border: 1px solid #000; padding: 3px;">JML</th>
                            <th colspan="3" style="width: 15%; border: 1px solid #000; padding: 3px;">KONDISI</th>
                            <th rowspan="2" style="width: 15%; border: 1px solid #000; padding: 3px;">TAHUN<br>PEMASANGAN</th>
                            <th rowspan="2" style="width: 15%; border: 1px solid #000; padding: 3px;">KALIBRASI<br>TERAKHIR</th>
                            <th rowspan="2" style="width: 15%; border: 1px solid #000; padding: 3px;">KETERANGAN</th>
                        </tr>
                        <tr>
                            <th style="width: 5%; border: 1px solid #000; padding: 3px;">B</th>
                            <th style="width: 5%; border: 1px solid #000; padding: 3px;">RR</th>
                            <th style="width: 5%; border: 1px solid #000; padding: 3px;">RB</th>
                        </tr>
                    </thead>

                    <tbody>
                        {{-- =========================
                                 LOOP ALAT PER KATEGORI
                            ========================== --}}
                        @forelse($kategori->alat as $alat)
                        <tr>
                            <td style="border:1px solid #000; padding:3px;">{{ $loop->iteration }}</td>
                            <td style="border:1px solid #000; padding:3px;">{{ $alat->nama }}</td>
                            <td style="border:1px solid #000; padding:3px;">{{ $alat->merk }}</td>
                            <td style="border:1px solid #000; padding:3px;">{{ $alat->jumlah }}</td>

                            <td style="border:1px solid #000; padding:3px;">{{ $alat->kondisi == 'B' ? '√' : '' }}</td>
                            <td style="border:1px solid #000; padding:3px;">{{ $alat->kondisi == 'RR' ? '√' : '' }}</td>
                            <td style="border:1px solid #000; padding:3px;">{{ $alat->kondisi == 'RB' ? '√' : '' }}</td>

                            <td style="border:1px solid #000; padding:3px;">{{ $alat->tahun_pemasangan }}</td>
                            <td style="border:1px solid #000; padding:3px;">{{ $alat->kalibrasi_terakhir }}</td>
                            <td style="border:1px solid #000; padding:3px;">{{ $alat->keterangan }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10" style="border:1px solid #000; padding:3px; text-align:center;">
                                Tidak ada data peralatan.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                @endforeach
                @endforeach

            </div>
        </div>
    </div> -->

    <!-- ===== HALAMAN 3 ===== -->
    <div class="paper-wrap">
        <div class="content-two">
            <h2>Lampiran</h2>
            <div class="lampiran">
                <div>
                    <img src="{{ public_path('storage/foto1.jpg') }}" alt="Foto 1">
                    <p>Foto 1: Thermometer BB/BK</p>
                </div>
                <div>
                    <img src="{{ public_path('storage/foto2.jpg') }}" alt="Foto 2">
                    <p>Foto 2: Sangkar Meteorologi</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>