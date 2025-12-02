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
<html lang="id">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>Inventaris Alat - Aplikasi Inventaris Alat BMKG</title>
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
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('volt/assets/img/favicon/favicon-bmkg.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Sweet Alert -->
    <link type="text/css" href="{{ asset('volt/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="{{ asset('volt/vendor/notyf/notyf.min.css') }}" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('volt/css/volt.css') }}" rel="stylesheet">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

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

        {{-- <div class="py-4">
            <div class="dropdown">
                <button class="btn btn-gray-800 d-inline-flex align-items-center me-2 dropdown-toggle"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    New Task
                </button>
                <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                            </path>
                        </svg>
                        Add User
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                            </path>
                        </svg>
                        Add Widget
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z">
                            </path>
                            <path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path>
                        </svg>
                        Upload Files
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Preview Security
                    </a>
                    <div role="separator" class="dropdown-divider my-1"></div>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <svg class="dropdown-icon text-danger me-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Upgrade to Pro
                    </a>
                </div>
            </div>
        </div> --}}

        <div class="row mt-4">
            <div class="col-12 col-sm-6 col-xl-3 mb-4">
                <a href="{{ route('kantor-bmkg.create') }}" class="card-link">
                    <div class="card-two border-0 shadow text-center hover-card">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <!-- Ikon -->
                            <div
                                class="icon-shape icon-shape-white rounded mb-3 d-flex align-items-center justify-content-center">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-building">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 21l18 0" />
                                    <path d="M9 8l1 0" />
                                    <path d="M9 12l1 0" />
                                    <path d="M9 16l1 0" />
                                    <path d="M14 8l1 0" />
                                    <path d="M14 12l1 0" />
                                    <path d="M14 16l1 0" />
                                    <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
                                </svg>
                            </div>
                            <!-- Tulisan -->
                            <h3 class="fw-extrabold text-white mb-0 fs-6">Kantor Meteorologi Banyuwangi</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-sm-6 col-xl-3 mb-4">
                <a href="{{ route('pos-bandara-bwi.create') }}" class="card-link">
                    <div class="card-two border-0 shadow text-center hover-card">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <!-- Ikon -->
                            <div
                                class="icon-shape icon-shape-white rounded mb-3 d-flex align-items-center justify-content-center">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-building-airport">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M3.59 7h8.82a1 1 0 0 1 .902 1.433l-1.44 3a1 1 0 0 1 -.901 .567h-5.942a1 1 0 0 1 -.901 -.567l-1.44 -3a1 1 0 0 1 .901 -1.433" />
                                    <path
                                        d="M6 7l-.78 -2.342a.5 .5 0 0 1 .473 -.658h4.612a.5 .5 0 0 1 .475 .658l-.78 2.342" />
                                    <path d="M8 2v2" />
                                    <path d="M6 12v9h4v-9" />
                                    <path d="M3 21h18" />
                                    <path d="M22 5h-6l-1 -1" />
                                    <path d="M18 3l2 2l-2 2" />
                                    <path d="M10 17h7a2 2 0 0 1 2 2v2" />
                                </svg>
                            </div>
                            <!-- Tulisan -->
                            <h3 class="fw-extrabold text-white mb-0 fs-6">Pos Meteorologi Bandara Banyuwangi</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-sm-6 col-xl-3 mb-4">
                <a href="{{ route('ketapang-bwi.create') }}" class="card-link">
                    <div class="card-two border-0 shadow text-center hover-card">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <!-- Ikon -->
                            <div
                                class="icon-shape icon-shape-white rounded mb-3 d-flex align-items-center justify-content-center">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-anchor">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 9v12m-8 -8a8 8 0 0 0 16 0m1 0h-2m-14 0h-2" />
                                    <path d="M12 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                </svg>
                            </div>
                            <!-- Tulisan -->
                            <h3 class="fw-extrabold text-white mb-0 fs-6">Pos Meteorologi Pelabuhan Ketapang Banyuwangi</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-sm-6 col-xl-3 mb-4">
                <a href="{{ route('pos-bandara-jmbr.create') }}" class="card-link">
                    <div class="card-two border-0 shadow text-center hover-card">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <!-- Ikon -->
                            <div
                                class="icon-shape icon-shape-white rounded mb-3 d-flex align-items-center justify-content-center">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-building-airport">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M3.59 7h8.82a1 1 0 0 1 .902 1.433l-1.44 3a1 1 0 0 1 -.901 .567h-5.942a1 1 0 0 1 -.901 -.567l-1.44 -3a1 1 0 0 1 .901 -1.433" />
                                    <path
                                        d="M6 7l-.78 -2.342a.5 .5 0 0 1 .473 -.658h4.612a.5 .5 0 0 1 .475 .658l-.78 2.342" />
                                    <path d="M8 2v2" />
                                    <path d="M6 12v9h4v-9" />
                                    <path d="M3 21h18" />
                                    <path d="M22 5h-6l-1 -1" />
                                    <path d="M18 3l2 2l-2 2" />
                                    <path d="M10 17h7a2 2 0 0 1 2 2v2" />
                                </svg>
                            </div>
                            <!-- Tulisan -->
                            <h3 class="fw-extrabold text-white mb-0 fs-6">Pos Meteorologi Bandara Notohadinegoro Jember</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="card-table-two border-0 shadow">
                            <div class="card-header-two">
                                <div class="row align-items-center">
                                    <!-- Kolom kiri: ikon + judul -->
                                    <div class="col d-flex align-items-center">
                                        <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                            <path
                                                d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                            <path d="M9 12h6" />
                                            <path d="M9 16h6" />
                                        </svg>
                                        <h2 class="fs-4 fw-bolder mb-0">Laporan Inventaris Mingguan</h2>
                                    </div>

                                    <!-- Kolom kanan / bawah: periode -->
                                    <div class="col-12 mt-1">
                                        <small class="text-muted">
                                            @if($periode)
                                            <p class="mb-1">
                                                <strong>Periode Aktif</strong>:
                                                Minggu ke-{{ $periode['periode_week'] }}
                                                ({{ $periode['start_label'] }} – {{ $periode['end_label'] }})
                                            </p>
                                            @else
                                            <p>Periode aktif belum tersedia.</p>
                                            @endif
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <colgroup>
                                        <col style="width: 5%;">
                                        <col style="width: 40%;">
                                        <col style="width: 40%;">
                                        <col style="width: 20%;">
                                    </colgroup>
                                    <thead class="thead-primary">
                                        <tr>
                                            <th class="border-bottom">No</th>
                                            <th class="border-bottom">Nama Lokasi</th>
                                            <th class="border-bottom text-center">Status</th>
                                            <th class="border-bottom text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($lokasis as $index => $lokasi)
                                        <tr>
                                            <th class="text-gray-900" scope="row">{{ $index + 1 }}</th>
                                            <td class="fw-bolder text-gray-500">{{ $lokasi->nama_lokasi }}</td>

                                            {{-- Status --}}
                                            <td class="fw-bolder text-gray-500 d-flex justify-content-center">
                                                @if($lokasi->status == 'belum')
                                                <span class="badge bg-danger">Belum (0/{{ $lokasi->total_alat }})</span>
                                                @elseif($lokasi->status == 'proses')
                                                <span class="badge bg-warning">Proses ({{ $lokasi->total_dicek }}/{{ $lokasi->total_alat }})</span>
                                                @else
                                                <span class="badge bg-success">Done ({{ $lokasi->total_alat }}/{{ $lokasi->total_alat }})</span>
                                                @endif
                                            </td>

                                            {{-- Tombol Aksi --}}
                                            <td>
                                                <div class="d-flex flex-row justify-content-center">
                                                    <a href="{{ route('kantor-bmkg.edit') }}" class="btn btn-sm btn-secondary">
                                                        <svg class="icon icon-xs me-1"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-pencil">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none" />
                                                            <path
                                                                d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                                            <path d="M13.5 6.5l4 4" />
                                                        </svg>
                                                        Edit
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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

    @if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Sukses',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonColor: '#0d6efd',
                confirmButtonText: 'OK'
            });
        });
    </script>
    @endif

    <script src="{{ asset('volt/vendor/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>

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