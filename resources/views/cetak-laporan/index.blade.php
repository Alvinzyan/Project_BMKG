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
    <title>Volt - Free Bootstrap 5 Dashboard</title>
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

        <!-- <div class="card-three border-0 shadow mt-4">
            <div class="card-body">
                <h2 class="fw-bolder fs-4">Form Data Surat</h2>

                <div class="row">
                    <div class="col-12 col-sm-12 col-xl-3 mb-3">
                        <div class="d-flex align-items-end">
                            <label for="" class="form-label me-2">Tempat</label>
                            <input type="text" class="form-control" name="">
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-xl-3 mb-3">
                        <div class="d-flex align-items-end">
                            <label for="" class="form-label me-2">Tanggal</label>
                            <input type="date" class="form-control" name="">
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-xl-4 mb-3">
                        <div class="d-flex align-items-end">
                            <label for="" class="form-label me-2 flex-shrink-0">Nomor Surat</label>
                            <input type="number" class="form-control" name=""
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                type="number" id="inputNumber" maxlength="5">
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-xl-2 mb-3">
                        <button class="btn btn-sm btn-info"><svg class="icon icon-xs me-2"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M14 4l0 4l-6 0l0 -4" />
                            </svg>Simpan</button>
                    </div>
                </div>
            </div>
        </div> -->

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
                                    <!-- <a href="{{ route('laporan-alat.view') }}">
                                        <button class="btn btn-info">Lihat Laporan</button>
                                    </a> -->

                                    <a href="{{ route('laporan-alat.pdf') }}" target="_blank">
                                        <button class="btn btn-danger">Cetak Laporan</button>
                                    </a>
                                </div>

                                <iframe src="{{ route('laporan-alat.view') }}" width="100%" height="600px" style="border: none;" loading="lazy" title="Laporan Lihat View"></iframe>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="theme-settings card bg-gray-800 pt-2 collapse" id="theme-settings">
            <div class="card-body bg-gray-800 text-white pt-4">
                <button type="button" class="btn-close theme-settings-close" aria-label="Close"
                    data-bs-toggle="collapse" href="#theme-settings" role="button" aria-expanded="false"
                    aria-controls="theme-settings"></button>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <p class="m-0 mb-1 me-4 fs-7">Open source <span role="img" aria-label="gratitude">💛</span>
                    </p>
                    <a class="github-button" href="https://github.com/themesberg/volt-bootstrap-5-dashboard"
                        data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star"
                        data-size="large" data-show-count="true"
                        aria-label="Star themesberg/volt-bootstrap-5-dashboard on GitHub">Star</a>
                </div>
                <a href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard" target="_blank"
                    class="btn btn-secondary d-inline-flex align-items-center justify-content-center mb-3 w-100">
                    Download
                    <svg class="icon icon-xs ms-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M2 9.5A3.5 3.5 0 005.5 13H9v2.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 15.586V13h2.5a4.5 4.5 0 10-.616-8.958 4.002 4.002 0 10-7.753 1.977A3.5 3.5 0 002 9.5zm9 3.5H9V8a1 1 0 012 0v5z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <p class="fs-7 text-gray-300 text-center">Available in the following technologies:</p>
                <div class="d-flex justify-content-center">
                    <a class="me-3" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard"
                        target="_blank">
                        <img src="../../assets/img/technologies/bootstrap-5-logo.svg" class="image image-xs">
                    </a>
                    <a href="https://demo.themesberg.com/volt-react-dashboard/#/" target="_blank">
                        <img src="../../assets/img/technologies/react-logo.svg" class="image image-xs">
                    </a>
                </div>
            </div>
        </div>

        <div class="card theme-settings bg-gray-800 theme-settings-expand" id="theme-settings-expand">
            <div class="card-body bg-gray-800 text-white rounded-top p-3 py-2">
                <span class="fw-bold d-inline-flex align-items-center h6">
                    <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Settings
                </span>
            </div>
        </div>

        <footer class="bg-white rounded shadow p-5 mb-4 mt-4">
            <div class="row">
                <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
                    <p class="mb-0 text-center text-lg-start">© 2019-<span class="current-year"></span> <a
                            class="text-primary fw-normal" href="https://themesberg.com"
                            target="_blank">Themesberg</a></p>
                </div>
                <div class="col-12 col-md-8 col-xl-6 text-center text-lg-start">
                    <!-- List -->
                    <ul class="list-inline list-group-flush list-group-borderless text-md-end mb-0">
                        <li class="list-inline-item px-0 px-sm-2">
                            <a href="https://themesberg.com/about">About</a>
                        </li>
                        <li class="list-inline-item px-0 px-sm-2">
                            <a href="https://themesberg.com/themes">Themes</a>
                        </li>
                        <li class="list-inline-item px-0 px-sm-2">
                            <a href="https://themesberg.com/blog">Blog</a>
                        </li>
                        <li class="list-inline-item px-0 px-sm-2">
                            <a href="https://themesberg.com/contact">Contact</a>
                        </li>
                    </ul>
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
    </script>
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