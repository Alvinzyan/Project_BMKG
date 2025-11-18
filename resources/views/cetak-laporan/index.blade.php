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
    <title>Cetak Laporan - Aplikasi Inventaris BMKG</title>
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
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('volt/assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('volt/assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('volt/assets/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('volt/assets/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('volt/assets/img/favicon/safari-pinned-tab.svg') }}" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Sweet Alert -->
    <link type="text/css" href="{{ asset('volt/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="{{ asset('volt/vendor/notyf/notyf.min.css') }}" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('volt/css/volt.css') }}" rel="stylesheet">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

    <!-- Untuk Filter Periode -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>

<body>

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <a class="navbar-brand me-lg-5" href="../../index.html">
            <img class="navbar-brand-dark" src="../../assets/img/brand/light.svg" alt="Volt logo" /> <img
                class="navbar-brand-light" src="../../assets/img/brand/dark.svg" alt="Volt logo" />
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

                <div class="row">

                    <div class="col-12 col-sm-12 col-xl-5 mb-3">
                        <div class="d-flex align-items-end">
                            <label for="periode" class="form-label me-2">Periode</label>

                            <input type="text" id="periode" class="form-control" placeholder="Pilih tanggal">

                            <input type="hidden" id="periode_start" name="periode_start">
                            <input type="hidden" id="periode_end" name="periode_end">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-xl-2 mb-3">
                        <button class="btn btn-sm btn-info"><svg class="icon icon-xs me-1"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                <path
                                    d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                            </svg>Tampilkan</button>
                    </div>
                </div>
            </div>
        </div>

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
                                    Judul Laporan
                                </h5>

                                <p class="fw-normal fs-6">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                </p>

                                <div class="col mb-3">
                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalNomorSurat">
                                        Cetak Laporan
                                    </button>
                                </div>

                                <!-- Modal Isi Nomor Surat -->
                                <div class="modal fade" id="modalNomorSurat" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content border-0 shadow">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Isi Nomor Surat</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <form method="GET" action="{{ route('laporan-alat.pdf') }}">
                                                <div class="modal-body">
                                                    <div class="row g-3">

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
                                                    <button type="submit" class="btn btn-success">Cetak</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <iframe src="{{ route('laporan-alat.view') }}" width="100%" height="600px" style="border: none;" loading="lazy" title="Laporan Lihat View"></iframe>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

    <!-- Periode -->
    <style>
        /* highlight minggu */
        .week-highlight {
            background-color: rgba(0, 123, 255, 0.2) !important;

            border-radius: 50%;
            color: #000 !important;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        function hitungRentangMinggu(tanggal) {
            const tanggalDipilih = new Date(tanggal);
            const hari = tanggalDipilih.getDay();
            const jarakKeSabtu = (hari + 1) % 7;
            const awal = new Date(tanggalDipilih);
            awal.setDate(tanggalDipilih.getDate() - jarakKeSabtu);
            const akhir = new Date(awal);
            akhir.setDate(awal.getDate() + 6);
            return [awal, akhir];
        }

        function formatYMD(t) {
            return t.toISOString().split("T")[0];
        }

        const kalender = flatpickr("#periode", {
            dateFormat: "d-m-Y",
            locale: {
                firstDayOfWeek: 6
            },
            onChange: function(tanggalTerpilih, stringTanggal, instansi) {

                if (tanggalTerpilih.length > 0) {
                    const [awal, akhir] = hitungRentangMinggu(tanggalTerpilih[0]);

                    const formatDisplay = t => t.toLocaleDateString('id-ID', {
                        day: '2-digit',
                        month: '2-digit',
                        year: 'numeric'
                    });
                    instansi.input.value = `${formatDisplay(awal)} s.d. ${formatDisplay(akhir)}`;

                    // 🔥 SET HIDDEN VALUE UNTUK CONTROLLER
                    document.getElementById("periode_start").value = formatYMD(awal);
                    document.getElementById("periode_end").value = formatYMD(akhir);

                    setTimeout(() => {
                        document.querySelectorAll(".flatpickr-day").forEach(elemen => {
                            const t = elemen.dateObj;
                            if (t >= awal && t <= akhir) {
                                elemen.classList.add("week-highlight");
                            } else {
                                elemen.classList.remove("week-highlight");
                            }
                        });
                    }, 50);
                }
            },

            onMonthChange: function(tanggalTerpilih) {
                if (tanggalTerpilih.length > 0) {
                    const [awal, akhir] = hitungRentangMinggu(tanggalTerpilih[0]);

                    setTimeout(() => {
                        document.querySelectorAll(".flatpickr-day").forEach(elemen => {
                            const t = elemen.dateObj;
                            if (t >= awal && t <= akhir) {
                                elemen.classList.add("week-highlight");
                            }
                        });
                    }, 50);
                }
            }
        });
    </script>

    <!-- <script>
        // Fungsi untuk menghitung rentang minggu (Sabtu - Jumat)
        function hitungRentangMinggu(tanggal) {
            const tanggalDipilih = new Date(tanggal);
            const hari = tanggalDipilih.getDay(); // Mengambil indeks hari (0 = Minggu, ... , 6 = Sabtu)
            const jarakKeSabtu = (hari + 1) % 7; // Menghitung selisih ke hari Sabtu sebelumnya
            const awal = new Date(tanggalDipilih);
            awal.setDate(tanggalDipilih.getDate() - jarakKeSabtu);
            const akhir = new Date(awal);
            akhir.setDate(awal.getDate() + 6);
            return [awal, akhir];
        }

        const kalender = flatpickr("#periode", {
            dateFormat: "d-m-Y",
            locale: {
                firstDayOfWeek: 6
            }, // Kalender dimulai dari Sabtu
            onChange: function(tanggalTerpilih, stringTanggal, instansi) {
                if (tanggalTerpilih.length > 0) {
                    const [awal, akhir] = hitungRentangMinggu(tanggalTerpilih[0]);

                    // Format tampilan teks input (contoh: 12-10-2025 s.d. 18-10-2025)
                    const formatTanggal = t => t.toLocaleDateString('id-ID', {
                        day: '2-digit',
                        month: '2-digit',
                        year: 'numeric'
                    });
                    instansi.input.value = `${formatTanggal(awal)} s.d. ${formatTanggal(akhir)}`;

                    // highlight pada minggu yang dipilih
                    setTimeout(() => {
                        document.querySelectorAll(".flatpickr-day").forEach(elemen => {
                            const tanggalHariIni = elemen.dateObj;
                            if (tanggalHariIni >= awal && tanggalHariIni <= akhir) {
                                elemen.classList.add("week-highlight");
                            } else {
                                elemen.classList.remove("week-highlight");
                            }
                        });
                    }, 50);
                }
            },
            onMonthChange: function(tanggalTerpilih, stringTanggal, instansi) {
                // Pastikan highlight tetap muncul saat berpindah bulan
                if (tanggalTerpilih.length > 0) {
                    const [awal, akhir] = hitungRentangMinggu(tanggalTerpilih[0]);
                    setTimeout(() => {
                        document.querySelectorAll(".flatpickr-day").forEach(elemen => {
                            const tanggalHariIni = elemen.dateObj;
                            if (tanggalHariIni >= awal && tanggalHariIni <= akhir) {
                                elemen.classList.add("week-highlight");
                            }
                        });
                    }, 50);
                }
            }
        });
    </script> -->

    <!-- End Periode -->

    <!-- Core -->
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