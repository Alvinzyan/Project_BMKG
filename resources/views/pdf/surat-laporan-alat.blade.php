<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Surat Aloptoma BMKG- A4</title>
    <style>
        /* Print settings */
        @page {
            size: A4;
            margin: 1mm 0;
        }

        @media print {
            body {
                background: none;
                margin: 0;
            }

            .paper-wrap {
                display: block;
                page-break-after: always;
                box-shadow: none;
                background: none;
            }

            .sheet {
                box-shadow: none;
                margin: 0;
                page-break-after: always;
            }

            table,
            tr,
            td,
            th {
                page-break-inside: avoid;
            }
        }

        html,
        body {
            margin: 0;
            padding: 0;
            font-family: "Times New Roman", serif;
            color: #111;
            background: #fff;
        }

        /* Center the A4 preview on screen */
        .paper-wrap {
            min-height: 100vh;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            page-break-after: always;

        }

        .paper-wrap:last-child {
            page-break-after: auto;
        }

        .sheet {
            width: 210mm;
            min-height: 297mm;
            background: #fff;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
            padding: 0;
            margin: 0;
            overflow: hidden;
        }

        /* Halaman pertama */
        .letter-header {
            position: relative;
            background-color: #e1e1e1;
            padding-top: 6mm;
        }

        .logo {
            position: absolute;
            left: 16mm;
            top: 6mm;
            width: 80px;
            height: auto;
        }

        .header-text {
            text-align: center;
            padding-top: 4px;
            line-height: 1.1;
            padding-left: 12mm;
        }

        .header-text .org-name {
            font-weight: 700;
            font-size: 14pt;
            letter-spacing: 0.2px;
        }

        .header-text .sub {
            display: block;
            font-size: 11pt;
            font-weight: 600;
            margin-top: 2px;
            text-align: center;
        }

        .letter-header .line-2 {
            margin-top: 6px;
            height: 2px;
            border-bottom: 2px solid #000;
            border-top: 2px solid #000;
        }

        .meta-row {
            display: flex;
            margin-top: 8mm;
            gap: 8mm;
            padding: 0 28mm;
        }

        .meta-left {
            flex: 1 1 auto;
            font-size: 11pt;
        }

        .meta-left .meta-item {
            margin-bottom: 6px;
            display: flex;
            gap: 6px;
            align-items: flex-start;
        }

        .meta-left .meta-item .label {
            width: 90px;
            font-weight: 600;
        }

        .meta-left .meta-item .value {
            flex: 1;
        }

        .meta-right {
            width: 60mm;
            text-align: right;
            font-size: 11pt;
        }

        .recipient {
            display: flex;
            margin-top: 10mm;
            font-size: 11pt;
            padding: 0 28mm;
        }

        .content-one {
            margin-top: 10mm;
            font-size: 11pt;
            line-height: 1.6;
            text-align: justify;
            padding: 0 28mm;
        }

        .content-one p {
            margin: 12px 0;
            text-indent: 10mm;
            text-align: left;
        }

        .signature-wrap {
            margin-top: 26mm;
            display: flex;
            justify-content: flex-end;
        }

        .signature {
            width: 60mm;
            text-align: left;
            font-size: 11pt;
        }

        .signature .space {
            height: 24mm;
        }

        .signature .name {
            margin-top: 1mm;
        }

        /* Halaman kedua */
        .header-lampiran {
            display: flex;
            justify-content: end;
            padding: 8mm 16mm;
            margin-bottom: 1.6mm;
        }

        .info-lampiran p {
            text-align: left;
            margin: 0;
            line-height: 1.4;
        }

        .meta-item-two {
            display: flex;
            gap: 6px;
            align-items: flex-start;
        }

        .meta-item-two .label {
            width: 48px;
        }

        .meta-item-two .value {
            flex: 1;
        }

        .title {
            text-align: center;
            font-size: 11pt;
            font-weight: bold;
            margin: 0 0 2.8mm 0;
            text-transform: uppercase;
        }

        .content-two {
            font-size: 11pt;
            text-align: left;
            padding: 0 18mm;
        }

        .section p {
            margin: 2mm 0;
            font-size: 11pt;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 6mm;
            font-size: 9pt;
        }

        .table th,
        .table td {
            border: 1px solid #000;
            padding: 3mm;
            text-align: center;
        }

        .table th:nth-child(2),
        .table td:nth-child(2) {
            text-align: left;
        }

        .table th:nth-child(3),
        .table td:nth-child(3) {
            text-align: left;
        }

        .subheader th {
            font-weight: normal;
            border-top: none;
            border-bottom: 1px solid #000;
        }

        .catatan {
            margin-top: 1.8mm;
            font-size: 11pt;
        }

        .catatan ol {
            margin-top: 2mm;
            margin-left: 0;
        }

        .footer {
            position: absolute;
            border-top: 1px solid #000;
            padding-top: 4px;
            font-size: 10pt;
            text-align: center;
            color: #333;
        }
    </style>
</head>

<body>

    {{-- Halaman pertama --}}
    <div class="paper-wrap">
        <div class="sheet">

            <header class="letter-header">
                <!-- Ganti src dengan path sebenarnya, misal /background/logo.png atau asset() -->
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

                <div class="line-2" aria-hidden="true"></div>
            </header>

            <section class="meta-row" aria-label="metadata surat">
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
                        <div class="value">: Laporan Kondisi Aloptama <br>
                            Stasiun Meteorologi Banyuwangi</div>
                    </div>
                </div>

                <div class="meta-right">
                    Banyuwangi, 25 Juli 2025
                </div>
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
                <p>
                    Dengan hormat, bersama ini kami sampaikan Laporan Kondisi Peralatan yang dioperasikan di Stasiun
                    Meteorologi Banyuwangi tanggal 19 – 25 Juli 2025 (sebagaimana terlampir).
                </p>

                <p>
                    Demikian Laporan Kondisi Aloptama ini kami sampaikan, atas perhatiannya diucapkan terima kasih.
                </p>
            </section>

            <div class="signature-wrap">
                <div class="signature">
                    <div>Kepala Stasiun</div>
                    <div class="space" aria-hidden="true"></div>
                    <div class="name">Teguh Tri Susanto</div>
                </div>
            </div>

            <footer class="footer">
            </footer>

        </div>
    </div>

    {{-- Halaman kedua --}}
    <div class="paper-wrap">
        <div class="sheet">
            <div class="header-lampiran">
                <div class="info-lampiran">
                    <p>Lampiran Surat</p>
                    <div class="meta-item-two">
                        <div class="label">Nomor</div>
                        <div class="value">: e.B/IJ.01.01/026/KBWI/VII/2025</div>
                    </div>

                    <div class="meta-item-two">
                        <div class="label">Tanggal</div>
                        <div class="value">: 16 Oktober 2025</div>
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
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA ALAT</th>
                            <th>MERK/TYPE</th>
                            <th>JMH</th>
                            <th colspan="3">KONDISI</th>
                            <th>TAHUN PEMASANGAN</th>
                            <th>KALIBRASI TERAKHIR</th>
                            <th>KETERANGAN</th>
                        </tr>
                        <tr class="subheader">
                            <th colspan="4"></th>
                            <th>B</th>
                            <th>RR</th>
                            <th>RB</th>
                            <th colspan="3"></th>
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
                        <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                    </tbody>
                </table>

                <div class="catatan">
                    <p><strong>Catatan: </strong></p>
                    <ol>
                        <li>Garis pembacaan pada Thermometer Apung hilang.</li>
                        <li>Pada Theodolite, pada saat pemindahan dari lensa dekat ke lensa jauh menjadi tidak
                            terarah/fokus.</li>
                    </ol>
                </div>
            </div>

            <footer class="footer">
            </footer>
        </div>
    </div>

    {{-- Halaman ketiga --}}
    <div class="paper-wrap">
        <div class="sheet">

            <div class="content-two">

                <div class="section" style="margin-top: 6mm">
                    <p><strong>AWS Digital</strong></p>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA ALAT</th>
                            <th>MERK/TYPE</th>
                            <th>JMH</th>
                            <th colspan="3">KONDISI</th>
                            <th>TAHUN PEMASANGAN</th>
                            <th>KALIBRASI TERAKHIR</th>
                            <th>KETERANGAN</th>
                        </tr>
                        <tr class="subheader">
                            <th colspan="4"></th>
                            <th>B</th>
                            <th>RR</th>
                            <th>RB</th>
                            <th colspan="3"></th>
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
                        <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>

            <div class="content-two">

                <div class="section" style="margin-top: 6mm">
                    <p><strong>B. Peralatan di Pos Meteorologi Bandara Banyuwangi</strong></p>
                    <p class="subtitle">Peralatan konvensional</p>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA ALAT</th>
                            <th>MERK/TYPE</th>
                            <th>JMH</th>
                            <th colspan="3">KONDISI</th>
                            <th>TAHUN PEMASANGAN</th>
                            <th>KALIBRASI TERAKHIR</th>
                            <th>KETERANGAN</th>
                        </tr>
                        <tr class="subheader">
                            <th colspan="4"></th>
                            <th>B</th>
                            <th>RR</th>
                            <th>RB</th>
                            <th colspan="3"></th>
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
                        <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>

            <div class="content-two">

                <div class="section" style="margin-top: 6mm">
                    <p>AWOS Kategori 3 ALL WEATHER</p>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA ALAT</th>
                            <th>MERK/TYPE</th>
                            <th>JMH</th>
                            <th colspan="3">KONDISI</th>
                            <th>TAHUN PEMASANGAN</th>
                            <th>KALIBRASI TERAKHIR</th>
                            <th>KETERANGAN</th>
                        </tr>
                        <tr class="subheader">
                            <th colspan="4"></th>
                            <th>B</th>
                            <th>RR</th>
                            <th>RB</th>
                            <th colspan="3"></th>
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
                        <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                    </tbody>
                </table>

                <div class="catatan">
                    <p><strong>Catatan: </strong></p>
                    <ol>
                        <li>Garis pembacaan pada Thermometer Apung hilang.</li>
                        <li>Pada Theodolite, pada saat pemindahan dari lensa dekat ke lensa jauh menjadi tidak
                            terarah/fokus.</li>
                    </ol>
                </div>
            </div>

            <footer class="footer">
            </footer>
        </div>
    </div>


</body>

</html>
