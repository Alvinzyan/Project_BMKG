<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Surat Aloptoma BMKG - A4</title>
    <style>
        /* ==== RESET DASAR ==== */
        @page {
            size: A4;
            margin: 15mm;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: "Times New Roman", serif;
            color: #111;
            background: #494949ff;
        }

        .paper-wrap {
            width: 210mm;
            min-height: 297mm;
            margin: 0 auto;
            background: #fff;
            box-sizing: border-box;
            page-break-after: always;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.3);
            border-radius: 4px;
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
            font-size: 11pt;
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
            font-size: 11pt;
            padding: 0 20mm;
        }

        .content-one {
            margin-top: 10mm;
            font-size: 11pt;
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
            font-size: 11pt;
        }

        .signature .space {
            height: 22mm;
        }

        /* ==== HALAMAN KEDUA ==== */
        .header-lampiran {
            width: 100%;
            display: flex;
            justify-content: flex-end;
            padding-right: 20mm;
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
        }

        /* ==== TABEL ==== */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 5mm;
            font-size: 9pt;
            table-layout: fixed;
            word-wrap: break-word;
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

        /* proporsional agar total muat 190mm */
        .table col:nth-child(1) {
            width: 10mm;
        }

        .table col:nth-child(2) {
            width: 35mm;
        }

        .table col:nth-child(3) {
            width: 25mm;
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
            width: 26mm;
        }

        .table col:nth-child(10) {
            width: 30mm;
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

        /* ==== FOOTER ==== */
        .footer {
            width: 100%;
            font-size: 7pt;
            text-align: center;
            margin-top: auto;
            padding: 2mm 0;
        }

        .footer .line-footer {
            width: 70%;
            border-top: 1px solid #000;
            margin: 0 auto 1mm auto;
        }

        .footer .content-footer {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 3mm;
            flex-wrap: wrap;
        }

        .footer .barcode {
            height: 8mm;
        }

        .footer .text {
            font-style: italic;
            line-height: 1.2;
            text-align: center;
        }

        /* ==== CETAK ==== */
        @media print {

            html,
            body {
                width: 210mm;
                height: 297mm;
            }

            .paper-wrap {
                margin: 0;
                box-shadow: none;
            }

            .footer {
                position: relative;
                bottom: 0;
            }
        }
    </style>
</head>

<body>

    <!-- ===== HALAMAN 1: HALAMAN UTAMA ===== -->
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

            <section class="meta-row">
                <div class="meta-left">
                    <div class="meta-item">
                        <div class="label">Nomor</div>
                        <div class="value">: e.B/IJ.01.01/026/KBWI/VII/2025</div>
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
                <div class="meta-right">Banyuwangi, 25 Juli 2025</div>
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
                    Meteorologi Banyuwangi tanggal 19 – 25 Juli 2025 (sebagaimana terlampir).</p>
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

    <!-- ===== HALAMAN 2: DATA ALAT===== -->
    <div class="paper-wrap">
        <div class="sheet">
            <div class="header-lampiran">
                <div class="info-lampiran">
                    <p>Lampiran Surat</p>
                    <div class="meta-item-two">
                        <span class="label">Nomor</span>
                        <span class="colon">:</span>
                        <span class="value">e.B/IJ.01.01/026/KBWI/VII/2025</span>
                    </div>
                    <div class="meta-item-two">
                        <span class="label">Tanggal</span>
                        <span class="colon">:</span>
                        <span class="value">16 Oktober 2025</span>
                    </div>
                </div>
            </div>

            <div class="content-two">
                <h2 class="title">DAFTAR PERALATAN OPERASIONAL</h2>
                <div class="section">
                    <p><strong>A. Peralatan di Kantor Meteorologi Banyuwangi</strong></p>
                    <p class="subtitle">Peralatan konvensional</p>
                </div>

                <table class="table">
                    <colgroup>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                    </colgroup>
                    <thead>
                        <tr>
                            <th rowspan="2">NO</th>
                            <th rowspan="2">NAMA ALAT</th>
                            <th rowspan="2">MERK/TYPE</th>
                            <th rowspan="2">JMH</th>
                            <th colspan="3">KONDISI</th>
                            <th rowspan="2">TAHUN PEMASANGAN</th>
                            <th rowspan="2">KALIBRASI TERAKHIR</th>
                            <th rowspan="2">KETERANGAN</th>
                        </tr>
                        <tr>
                            <th>B</th>
                            <th>RR</th>
                            <th>RB</th>
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

    <!-- ===== HALAMAN 3: FOTO LAMPIRAN ===== -->
    <div class="paper-wrap">
        <div class="sheet">
            <h2 class="title">Lampiran</h2>
            <div style="display: flex; flex-wrap: wrap; gap: 10mm; justify-content: center; padding: 10mm;">
                <div style="width: 80mm; text-align: center;">
                    <img src="{{ asset('storage/foto1.jpg') }}" alt="Foto 1" style="width:100%; border:1px solid #000;">
                    <p style="font-size: 10pt; margin-top: 2mm;">Foto 1: Thermometer BB/BK</p>
                </div>
                <div style="width: 80mm; text-align: center;">
                    <img src="{{ asset('storage/foto2.jpg') }}" alt="Foto 2" style="width:100%; border:1px solid #000;">
                    <p style="font-size: 10pt; margin-top: 2mm;">Foto 2: Sangkar Meteorologi</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>