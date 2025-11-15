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
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

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

        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-2">
            @include('template.navbar')
        </nav>

                <di class="row">
                    <div class="col-12 mb-4">

                        <div class="row g-3">
                            <!-- Card Total User -->
                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="card text-white" style="background-color: #1E3D58;">
                                    <div class="card-body d-flex align-items-center">
                                        <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="32"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-users-group">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                            <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" />
                                            <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                            <path d="M17 10h2a2 2 0 0 1 2 2v1" />
                                            <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                            <path d="M3 13v-1a2 2 0 0 1 2 -2h2" />
                                        </svg>
                                        <div>
                                            <h5 class="card-title mb-0">Total User</h5>
                                            <p class="card-text fs-4 fw-bolder">{{ $totalUser }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Admin -->
                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="card text-white" style="background-color: #1E3D58;">
                                    <div class="card-body d-flex align-items-center">
                                        <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                        </svg>
                                        <div>
                                            <h5 class="card-title mb-0">Admin</h5>
                                            <p class="card-text fs-4 fw-bolder">
                                                {{ $totalAdmin }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Teknisi -->
                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="card text-white" style="background-color: #1E3D58;">
                                    <div class="card-body d-flex align-items-center">
                                        <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="32"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-tool">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M7 10h3v-3l-3.5 -3.5a6 6 0 0 1 8 8l6 6a2 2 0 0 1 -3 3l-6 -6a6 6 0 0 1 -8 -8l3.5 3.5" />
                                        </svg>
                                        <div>
                                            <h5 class="card-title mb-0">Teknisi</h5>
                                            <p class="card-text fs-4 fw-bolder">
                                                {{ $totalTeknisi }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 mt-2">
                            <div class="col-12">
                                <div class="card shadow" style="background-color:#1E3D58; border:0;">
                                    <div class="card-header d-flex justify-content-between align-items-center text-white"
                                        style="border-bottom:none;">
                                        <div class="d-flex align-items-center">
                                            <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="32"
                                                height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-tool">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M7 10h3v-3l-3.5 -3.5a6 6 0 0 1 8 8l6 6a2 2 0 0 1 -3 3l-6 -6a6 6 0 0 1 -8 -8l3.5 3.5" />
                                            </svg>
                                            <h2 class="fs-4 fw-bolder mb-0 text-white">Aktivitas Teknisi</h2>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-flush bg-white">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Teknisi</th>
                                                    <th>Status</th>
                                                    <th>Terakhir Aktif</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php use Carbon\Carbon; @endphp
                                                @forelse ($teknisi as $user)
                                                    @php
                                                        $isOnline =
                                                            $user->last_seen &&
                                                            Carbon::parse($user->last_seen)->gt(now()->subMinutes(5));
                                                    @endphp
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $user->nama_lengkap }}</td>
                                                        <td>
                                                            @if ($isOnline)
                                                                <span class="d-inline-flex align-items-center">
                                                                    <span class="rounded-circle me-2"
                                                                        style="width:10px; height:10px; background-color:green;"></span>
                                                                    <span
                                                                        style="color:green; font-weight:600;">Online</span>
                                                                </span>
                                                            @else
                                                                <span class="d-inline-flex align-items-center">
                                                                    <span class="rounded-circle me-2"
                                                                        style="width:10px; height:10px; background-color:gray;"></span>
                                                                    <span
                                                                        style="color:#6c757d; font-weight:600;">Offline</span>
                                                                </span>
                                                            @endif
                                                        </td>

                                                        <td>
                                                            @if ($isOnline)
                                                                baru saja
                                                            @else
                                                                {{ $user->last_seen ? Carbon::parse($user->last_seen)->diffForHumans() : '-' }}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="9" class="text-muted text-center">Belum
                                                            ada data</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </di    v>

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

    <!-- Modal Error Handling -->
    @if ($errors->any())
        @if (session('edit_user_id'))
            <script>
                var modalEdit = new bootstrap.Modal(document.getElementById('modalEditAkun{{ session('edit_user_id') }}'));
                modalEdit.show();
            </script>
        @else
            <script>
                var modalTambah = new bootstrap.Modal(document.getElementById('modalTambahAkun'));
                modalTambah.show();
            </script>
        @endif
    @endif

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // === Modal Hapus ===
            window.hapusAkun = function(id, nama) {
                document.getElementById('hapusNamaUser').innerText = nama;
                document.getElementById('formHapusAkun').action = '/kelola-akun/' + id;
            };

            // === Toggle Password Universal ===
            document.querySelectorAll('.btn-toggle-password').forEach(button => {
                button.addEventListener('click', function() {
                    const input = this.closest('.input-group').querySelector('input');
                    const icon = this.querySelector('i');
                    if (input.type === 'password') {
                        input.type = 'text';
                        icon.classList.replace('bi-eye', 'bi-eye-slash');
                    } else {
                        input.type = 'password';
                        icon.classList.replace('bi-eye-slash', 'bi-eye');
                    }
                });
            });
        });
    </script>
</body>

</html>
