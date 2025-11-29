<!--

=========================================================
* Volt Free - Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)
* License (https://themesberg.com/licensing)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>Cetak Laporan - Aplikasi Inventaris Alat BMKG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta name="author" content="Themesberg">
    <meta name="description"
        content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
    <meta name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
    <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://demo.themesberg.com/volt-pro">
    <meta property="og:title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta property="og:description"
        content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
    <meta property="og:image"
        content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://demo.themesberg.com/volt-pro">
    <meta property="twitter:title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta property="twitter:description"
        content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
    <meta property="twitter:image"
        content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('volt/assets/img/favicon/favicon-bmkg.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Sweet Alert -->
    <link type="text/css" href="{{ asset('volt/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('volt/vendor/notyf/notyf.min.css') }}" rel="stylesheet">
</head>

<body>

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

    <nav class="navbar navbar-dark px-4 col-12 d-lg-none" style="background-color: #1E3D58">
        <a class="navbar-brand me-lg-5" href="/inventaris-alat">
            <img class="navbar-brand-dark me-2" src="{{ asset('volt/assets/img/BMG_2003.png') }}" alt="Logo BMKG" />Stamet Banyuwangi<img
                class="navbar-brand-light" src="{{ asset('volt/assets/img/BMG_2003.png') }}" alt="Logo BMKG" />
        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <nav id="sidebarMenu" class="sidebar d-lg-block text-white collapse" data-simplebar>
        @include('template.sidebar')
    </nav>

    <main class="content">
        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
            @include('template.navbar')
        </nav>

        <div class="card-three border-0 shadow mt-4">
            <div class="card-body">
                <h2 class="fw-bolder fs-4">Filter Laporan Inventaris Alat</h2>

                <!-- Form filter (satu saja) -->
                <form id="formFilter" method="GET" action="{{ route('laporan-alat.index') }}">

                    <div class="row">
                        <div class="col-12 col-sm-12 col-xl-5 mb-3">
                            <div class="d-flex align-items-end">
                                <label for="periode" class="form-label me-2">Periode</label>

                                <input type="text" id="periode" class="form-control" placeholder="Pilih tanggal" autocomplete="off">

                                <input type="hidden" id="periode_start" name="periode_start">
                                <input type="hidden" id="periode_end" name="periode_end">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-xl-2 mb-3">
                            <button id="btnTampilkan" type="button" class="btn btn-sm btn-info">
                                <svg class="icon icon-xs me-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                    <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                </svg>
                                Tampilkan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        @php
        $startDisplay = $periode_start ? \Carbon\Carbon::parse($periode_start)->translatedFormat('d F Y') : '-';
        $endDisplay = $periode_end ? \Carbon\Carbon::parse($periode_end)->translatedFormat('d F Y') : '-';
        @endphp

        <!-- Form report / area yang berisi iframe (id diganti supaya tidak duplikat) -->
        <form id="formReport">
            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="card-three border-0 shadow mt-4">
                                <div class="card-header-two">
                                    <h2 class="fs-4 fw-bolder mb-0">Laporan Inventaris Alat BMKG</h2>
                                </div>

                                <div class="card-four border-0 shadow mt-2 px-4 py-3 bg-white">
                                    <h5 class="fw-bold fs-5">
                                        Laporan Kondisi Aloptama - Stasiun Meteorologi Banyuwangi
                                    </h5>

                                    <p class="fw-normal fs-6 periode-text" id="periodeText">
                                        Laporan ini  berdasarkan periode {{ $startDisplay }} - {{ $endDisplay }}
                                    </p>

                                    <!-- <div class="col mb-3">
                                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalNomorSurat">
                                            Cetak Laporan
                                        </button>
                                    </div> -->
                                    @php
                                    $showButton = (!empty($totalData) && $totalData > 0);
                                    @endphp

                                    <div class="col mb-3">
                                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalNomorSurat"
                                            @if(!$showButton) style="display:none;" @endif>
                                            Cetak Laporan
                                        </button>
                                    </div>

                                    <!-- Modal Nomor Surat -->
                                    <div class="modal fade" id="modalNomorSurat" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content border-0 shadow">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Isi Nomor Surat</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>

                                                <form method="GET" action="{{ route('laporan-alat.pdf') }}" target="_blank">
                                                    <input type="hidden" name="periode_start" value="{{ $periode_start }}">
                                                    <input type="hidden" name="periode_end" value="{{ $periode_end }}">
                                                    <div class="modal-body">
                                                        <div class="row g-3">
                                                            <div class="col-md-12">
                                                                <label class="form-label">Nama Teknisi</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ Auth::user()->nama_lengkap }}"
                                                                    name="nama_lengkap"
                                                                    readonly>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <label class="form-label">Nomor Surat</label>
                                                                <input type="text" class="form-control" name="nomor_surat"
                                                                    placeholder="Contoh: e.B/IJ.01.01/026/KBWI/VII/2025" required>
                                                                @error('nomor_surat')
                                                                <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                                        <a href="#" id="btnCetakPdf" target="_blank" class="btn btn-success">
                                                            Cetak PDF
                                                        </a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div data-total-data="{{ $totalData ?? 0 }}" style="display: none;"></div>

                                    <div id="contentArea">
                                        @if(isset($totalData) && $totalData == 0)
                                        <div class="alert alert-warning d-flex align-items-center" role="alert">
                                            <svg class="icon icon-sm me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                                                <line x1="12" y1="9" x2="12" y2="13"></line>
                                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                            </svg>
                                            <div>
                                                <strong>Tidak ada data pengecekan pada periode {{ \Carbon\Carbon::parse($periode_start)->translatedFormat('d F Y') }} - {{ \Carbon\Carbon::parse($periode_end)->translatedFormat('d F Y') }}</strong>
                                            </div>
                                        </div>
                                        @else
                                        <iframe
                                            id="laporanIframe"
                                            src="{{ route('laporan-alat.view', ['periode_start' => $periode_start, 'periode_end' => $periode_end]) }}"
                                            width="100%" height="800">
                                        </iframe>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <footer class="bg-white rounded shadow p-3 mb-3 mt-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <p class="mb-0" style="font-size: 0.9rem;">
                            © 2025 Badan Meteorologi, Klimatologi, dan Geofisika
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <style>
        /* highlight minggu */
        .week-highlight {
            background-color: rgba(0, 123, 255, 0.2) !important;
            border-radius: 50%;
            color: #000 !important;
        }
    </style>

    <style>
        .flatpickr-day.flatpickr-disabled {
            pointer-events: auto !important;
            opacity: 1 !important;
            color: inherit !important;
        }

        /* highlight minggu */
        .week-highlight {
            background-color: rgba(0, 123, 255, 0.2) !important;
            border-radius: 50%;
            color: #000 !important;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- <script>
        /* ===============================
        HELPER FUNCTIONS
        =============================== */
        function hitungRentangMinggu(tanggal) {
            const t = new Date(tanggal);
            const day = t.getDay();
            const diffToStart = (day - 6 + 7) % 7;

            const awal = new Date();
            awal.setDate(t.getDate() - diffToStart);

            const akhir = new Date(awal);
            akhir.setDate(awal.getDate() + 6);

            awal.setHours(0, 0, 0, 0);
            akhir.setHours(23, 59, 59, 999);

            return [awal, akhir];
        }

        function formatYMD(date) {
            const offset = date.getTimezoneOffset() * 60000;
            return new Date(date - offset).toISOString().split("T")[0];
        }

        function highlightMinggu(inst, awal, akhir) {
            setTimeout(() => {
                const container = inst.daysContainer;
                if (!container) return;

                container.querySelectorAll(".flatpickr-day").forEach(el => {
                    const dt = el.dateObj;
                    if (!dt) return;

                    // Hilangkan disabled palsu
                    if (el.classList.contains("flatpickr-disabled")) {
                        el.classList.remove("flatpickr-disabled");
                        el.removeAttribute("aria-disabled");
                        el.removeAttribute("tabindex");
                    }

                    const real = new Date(dt);
                    real.setHours(0, 0, 0, 0);

                    el.classList.toggle("week-highlight", real >= awal && real <= akhir);
                });
            }, 50);
        }

        function reapply(inst) {
            const start = periode_start.value;
            const end = periode_end.value;
            if (!start || !end) return;

            highlightMinggu(inst, new Date(start), new Date(end));
        }

        /* ===============================
           ELEMENTS
        =============================== */
        const btnTampilkan = document.getElementById("btnTampilkan");
        const periode_start = document.getElementById("periode_start");
        const periode_end = document.getElementById("periode_end");

        // Tombol Cetak PDF di modal
        const btnCetakPdf = document.getElementById("btnCetakPdf");
        const modalNomorSurat = document.getElementById("modalNomorSurat");

        btnCetakPdf.addEventListener('click', (e) => {
            const periodeStartVal = document.querySelector('#modalNomorSurat input[name="periode_start"]').value;
            const periodeEndVal = document.querySelector('#modalNomorSurat input[name="periode_end"]').value;
            const namaLengkapVal = document.querySelector('#modalNomorSurat input[name="nama_lengkap"]').value;
            const nomorSuratVal = document.querySelector('#modalNomorSurat input[name="nomor_surat"]').value;

            if (!nomorSuratVal) {
                e.preventDefault(); // cegah link kalau nomor surat kosong
                Swal.fire({
                    icon: 'warning',
                    title: 'Nomor surat harus diisi!'
                });
                return;
            }

            const baseUrl = "{{ route('laporan-alat.pdf') }}";

            btnCetakPdf.href = `${baseUrl}?periode_start=${periodeStartVal}&periode_end=${periodeEndVal}&nama_lengkap=${encodeURIComponent(namaLengkapVal)}&nomor_surat=${encodeURIComponent(nomorSuratVal)}`;
        });

        /* ===============================
           FLATPICKR INITIALIZATION
        =============================== */
        const kalender = flatpickr("#periode", {
            dateFormat: "d-m-Y",
            allowInput: false,
            locale: {
                firstDayOfWeek: 6
            },

            onReady(_, __, inst) {
                reapply(inst);
            },
            onOpen(_, __, inst) {
                reapply(inst);
            },
            onValueUpdate(_, __, inst) {
                reapply(inst);
            },
            onMonthChange(_, __, inst) {
                reapply(inst);
            },
            onYearChange(_, __, inst) {
                reapply(inst);
            },

            onChange(selectedDates, _, inst) {
                if (!selectedDates.length) return;

                const [awal, akhir] = hitungRentangMinggu(selectedDates[0]);
                inst.jumpToDate(awal);

                inst.input.value = `${awal.toLocaleDateString("id-ID")} s.d. ${akhir.toLocaleDateString("id-ID")}`;

                periode_start.value = formatYMD(awal);
                periode_end.value = formatYMD(akhir);

                highlightMinggu(inst, awal, akhir);

                // Update modal hidden inputs otomatis
                document.querySelector('#modalNomorSurat input[name="periode_start"]').value = periode_start.value;
                document.querySelector('#modalNomorSurat input[name="periode_end"]').value = periode_end.value;
            }
        });

        /* ===============================
           BUTTON "Tampilkan" CLICK
        =============================== */
        btnTampilkan.addEventListener("click", () => {
            if (!periode_start.value || !periode_end.value) {
                Swal.fire({
                    icon: "warning",
                    title: "Periode belum dipilih!"
                });
                return;
            }

            const iframe = document.getElementById("laporanIframe");
            const baseUrl = "{{ route('laporan-alat.view') }}";
            iframe.src = `${baseUrl}?periode_start=${periode_start.value}&periode_end=${periode_end.value}`;

            // Update teks periode
            const periodeText = document.getElementById("periodeText");
            const start = new Date(periode_start.value);
            const end = new Date(periode_end.value);
            periodeText.textContent = `Laporan ini dibuat berdasarkan periode ${start.toLocaleDateString('id-ID')} - ${end.toLocaleDateString('id-ID')}`;
        });

        /* ===============================
           RESTORE HIGHLIGHT SAAT RELOAD
        =============================== */
        document.addEventListener("DOMContentLoaded", () => {
            const start = "{{ $periode_start ?? '' }}";
            const end = "{{ $periode_end ?? '' }}";
            if (!start || !end) return;

            const s = new Date(start);
            const e = new Date(end);

            document.querySelector("#periode").value =
                `${s.toLocaleDateString("id-ID")} s.d. ${e.toLocaleDateString("id-ID")}`;

            periode_start.value = start;
            periode_end.value = end;

            // Update modal hidden inputs otomatis
            document.querySelector('#modalNomorSurat input[name="periode_start"]').value = start;
            document.querySelector('#modalNomorSurat input[name="periode_end"]').value = end;

            setTimeout(() => highlightMinggu(kalender, s, e), 120);
        });
    </script> -->

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        /* ===============================
       HELPER FUNCTIONS
    =============================== */
        function hitungRentangMinggu(tanggal) {
            const t = new Date(tanggal);
            t.setHours(0, 0, 0, 0);

            const day = t.getDay();
            const diffToStart = (day - 6 + 7) % 7;

            const awal = new Date(t);
            awal.setDate(t.getDate() - diffToStart);
            awal.setHours(0, 0, 0, 0);

            const akhir = new Date(awal);
            akhir.setDate(awal.getDate() + 6);
            akhir.setHours(23, 59, 59, 999);

            return [awal, akhir];
        }

        function formatYMD(date) {
            const year = date.getFullYear();
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const day = String(date.getDate()).padStart(2, '0');
            return `${year}-${month}-${day}`;
        }

        function highlightMinggu(inst, awal, akhir) {
            setTimeout(() => {
                const container = inst.daysContainer;
                if (!container) return;

                const today = new Date();
                today.setHours(0, 0, 0, 0);

                container.querySelectorAll(".flatpickr-day").forEach(el => {
                    const dt = el.dateObj;
                    if (!dt) return;

                    const real = new Date(dt);
                    real.setHours(0, 0, 0, 0);

                    // Disable tanggal setelah hari ini
                    if (real > today) {
                        el.classList.add("flatpickr-disabled");
                        el.setAttribute("aria-disabled", "true");
                        el.setAttribute("tabindex", "-1");
                        el.classList.remove("week-highlight");
                    } else {
                        el.classList.remove("flatpickr-disabled");
                        el.removeAttribute("aria-disabled");
                        el.removeAttribute("tabindex");

                        // Highlight minggu
                        const awalNorm = new Date(awal);
                        awalNorm.setHours(0, 0, 0, 0);
                        const akhirNorm = new Date(akhir);
                        akhirNorm.setHours(0, 0, 0, 0);
                        if (real >= awalNorm && real <= akhirNorm) {
                            el.classList.add("week-highlight");
                        } else {
                            el.classList.remove("week-highlight");
                        }
                    }
                });
            }, 50);
        }

        function reapply(inst) {
            const start = periode_start.value;
            const end = periode_end.value;
            if (!start || !end) return;
            highlightMinggu(inst, new Date(start), new Date(end));
        }

        /* ===============================
           ELEMENTS
        =============================== */
        const btnTampilkan = document.getElementById("btnTampilkan");
        const periode_start = document.getElementById("periode_start");
        const periode_end = document.getElementById("periode_end");
        const btnCetakPdf = document.getElementById("btnCetakPdf");

        btnCetakPdf.addEventListener('click', (e) => {
            const nomorSuratVal = document.querySelector('#modalNomorSurat input[name="nomor_surat"]').value;
            if (!nomorSuratVal) {
                e.preventDefault();
                Swal.fire({
                    icon: 'warning',
                    title: 'Nomor surat harus diisi!'
                });
                return;
            }

            const periodeStartVal = document.querySelector('#modalNomorSurat input[name="periode_start"]').value;
            const periodeEndVal = document.querySelector('#modalNomorSurat input[name="periode_end"]').value;
            const namaLengkapVal = document.querySelector('#modalNomorSurat input[name="nama_lengkap"]').value;
            const baseUrl = "{{ route('laporan-alat.pdf') }}";

            btnCetakPdf.href = `${baseUrl}?periode_start=${periodeStartVal}&periode_end=${periodeEndVal}&nama_lengkap=${encodeURIComponent(namaLengkapVal)}&nomor_surat=${encodeURIComponent(nomorSuratVal)}`;
        });

        /* ===============================
           FLATPICKR
        =============================== */
        const kalender = flatpickr("#periode", {
            dateFormat: "d-m-Y",
            allowInput: false,
            locale: {
                firstDayOfWeek: 6
            },
            maxDate: "today",
            clickOpens: true,

            onReady(_, __, inst) {
                reapply(inst);
            },
            onOpen(_, __, inst) {
                reapply(inst);
            },
            onValueUpdate(_, __, inst) {
                reapply(inst);
            },
            onMonthChange(_, __, inst) {
                reapply(inst);
            },
            onYearChange(_, __, inst) {
                reapply(inst);
            },
            onChange(selectedDates, _, inst) {
                if (!selectedDates.length) return;

                const [awal, akhir] = hitungRentangMinggu(selectedDates[0]);

                inst.jumpToDate(awal);
                inst.input.value = `${awal.toLocaleDateString("id-ID")} s.d. ${akhir.toLocaleDateString("id-ID")}`;

                periode_start.value = formatYMD(awal);
                periode_end.value = formatYMD(akhir);

                highlightMinggu(inst, awal, akhir);

                // Update modal
                document.querySelector('#modalNomorSurat input[name="periode_start"]').value = periode_start.value;
                document.querySelector('#modalNomorSurat input[name="periode_end"]').value = periode_end.value;
            }
        });

        /* ===============================
           BUTTON TAMPILKAN (GABUNGAN)
        =============================== */
        btnTampilkan.addEventListener("click", () => {
            if (!periode_start.value || !periode_end.value) {
                Swal.fire({
                    icon: "warning",
                    title: "Periode belum dipilih!"
                });
                return;
            }

            // Tampilkan loading
            const contentArea = document.getElementById("contentArea");
            const btnCetak = document.querySelector('.btn-danger[data-bs-target="#modalNomorSurat"]');

            contentArea.innerHTML = '<div class="text-center py-5"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div><p class="mt-3">Memuat data...</p></div>';

            // Fetch untuk cek apakah ada data
            const checkUrl = `{{ route('laporan-alat.index') }}?periode_start=${periode_start.value}&periode_end=${periode_end.value}`;

            fetch(checkUrl)
                .then(response => response.text())
                .then(html => {
                    // Parse HTML untuk ambil totalData
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(html, 'text/html');
                    const totalDataElement = doc.querySelector('[data-total-data]');
                    const totalData = totalDataElement ? parseInt(totalDataElement.getAttribute('data-total-data')) : 0;

                    const start = new Date(periode_start.value);
                    const end = new Date(periode_end.value);
                    const periodeText = `${start.toLocaleDateString('id-ID')} - ${end.toLocaleDateString('id-ID')}`;

                    // Update periode text
                    document.getElementById("periodeText").textContent = `Laporan ini dibuat berdasarkan periode ${periodeText}`;

                    // Update modal hidden inputs
                    document.querySelector('#modalNomorSurat input[name="periode_start"]').value = periode_start.value;
                    document.querySelector('#modalNomorSurat input[name="periode_end"]').value = periode_end.value;

                    if (totalData === 0) {
                        // Tidak ada data - tampilkan alert
                        contentArea.innerHTML = `
                        <div class="alert alert-warning d-flex align-items-center" role="alert">
                            <svg class="icon icon-sm me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                                <line x1="12" y1="9" x2="12" y2="13"></line>
                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                            </svg>
                            <div>
                                <strong>Tidak ada data pengecekan pada periode ${periodeText}</strong>
                            </div>
                        </div>
                    `;

                        // Sembunyikan tombol cetak
                        if (btnCetak) btnCetak.style.display = 'none';
                    } else {
                        // Ada data - tampilkan iframe
                        const baseUrl = "{{ route('laporan-alat.view') }}";
                        contentArea.innerHTML = `
                        <iframe
                            id="laporanIframe"
                            src="${baseUrl}?periode_start=${periode_start.value}&periode_end=${periode_end.value}"
                            width="100%" height="800">
                        </iframe>
                    `;

                        // Tampilkan tombol cetak
                        if (btnCetak) btnCetak.style.display = 'inline-block';
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    contentArea.innerHTML = `
                    <div class="alert alert-danger" role="alert">
                        <strong>Terjadi kesalahan saat memuat data.</strong>
                    </div>
                `;
                });
        });

        /* ===============================
           RESTORE ON PAGE LOAD
        =============================== */
        document.addEventListener("DOMContentLoaded", () => {
            const start = "{{ $periode_start ?? '' }}";
            const end = "{{ $periode_end ?? '' }}";

            if (!start || !end) return;

            const s = new Date(start);
            const e = new Date(end);

            // Set input periode
            document.querySelector("#periode").value = `${s.toLocaleDateString("id-ID")} s.d. ${e.toLocaleDateString("id-ID")}`;
            periode_start.value = start;
            periode_end.value = end;

            // Update modal hidden inputs
            document.querySelector('#modalNomorSurat input[name="periode_start"]').value = start;
            document.querySelector('#modalNomorSurat input[name="periode_end"]').value = end;

            // Highlight kalender
            setTimeout(() => highlightMinggu(kalender, s, e), 120);
        });
    </script>

    <!-- Core vendor scripts (sama seperti sebelumnya) -->
    <script src="{{ asset('volt/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('volt/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Vendor JS -->
    <script src="{{ asset('volt/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>

    <!-- Slider -->
    <script src="{{ asset('volt/vendor/nouislider/distribute/nouislider.min.js') }}"></script>

    <!-- Smooth scroll -->
    <script src="{{ asset('volt/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>

    <!-- Charts -->
    <script src="{{ asset('volt/vendor/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('volt/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>

    <!-- Datepicker -->
    <script src="{{ asset('volt/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>

    <!-- Sweet Alerts 2 -->
    <script src="{{ asset('volt/vendor/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>

    <!-- Moment JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

    <!-- Vanilla JS Datepicker -->
    <script src="{{ asset('volt/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>

    <!-- Notyf -->
    <script src="{{ asset('volt/vendor/notyf/notyf.min.js') }}"></script>

    <!-- Simplebar -->
    <script src="{{ asset('volt/vendor/simplebar/dist/simplebar.min.js') }}"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Volt JS -->
    <script src="{{ asset('volt/assets/js/volt.js') }}"></script>
</body>

</html>