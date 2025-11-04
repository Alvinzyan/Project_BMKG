<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Surat Satu</title>
    <style>
        @page {
            size: A4;
            margin: 0;
        }

        body {
            margin: 0;
            font-family: "Times New Roman", serif;
            font-size: 12pt;
            background: #f9f9f9;
        }

        .sheet {
            background: white;
            width: 210mm;
            min-height: 297mm;
            padding: 15mm 15mm;
            margin: auto;
            box-sizing: border-box;
            position: relative;
        }

        .lampiran-header {
            text-align: right;
            margin-bottom: 10mm;
        }

        .lampiran-info p {
            margin: 0;
            line-height: 1.4;
        }

        .title {
            text-align: center;
            font-size: 14pt;
            font-weight: bold;
            margin: 0 0 8mm 0;
            text-transform: uppercase;
        }

        .section p {
            margin: 0;
            font-size: 12pt;
        }

        .subtitle {
            margin-top: 2mm;
            font-style: italic;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 6mm;
            font-size: 11pt;
        }

        .table th,
        .table td {
            border: 1px solid #000;
            padding: 4px 6px;
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
            margin-top: 10mm;
            font-size: 11pt;
        }

        .catatan ol {
            margin-top: 2mm;
            padding-left: 18px;
        }

        .footer {
            position: absolute;
            bottom: 10mm;
            left: 18mm;
            right: 18mm;
            border-top: 1px solid #000;
            padding-top: 4px;
            font-size: 10pt;
            text-align: center;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="sheet">
        <div class="lampiran-header">
            <div class="lampiran-info">
                <p><strong>Lampiran Surat</strong></p>
                <p>Nomor : e.B/IJ.01.01/026/KBWI/VII/2025</p>
                <p>Tanggal: 25 Juli 2025</p>
            </div>
        </div>

        <div class="content">
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
                <p><strong>Catatan:</strong></p>
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
</body>

</html>
