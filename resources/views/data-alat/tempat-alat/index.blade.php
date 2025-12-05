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
    <title>Lokasi Data Alat - Aplikasi Inventaris Alat BMKG</title>
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

    <!-- Notyf -->
    <link type="text/css" href="{{ asset('volt/vendor/notyf/notyf.min.css') }}" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('volt/css/volt.css') }}" rel="stylesheet">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

    <!-- ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        /* Tombol Archive */
        .btn-archive {
            background-color: #1E3D58;
            color: white;
            border: none;
            padding: 0.25rem;
            transition: all 0.3s ease;
        }

        .btn-archive:hover {
            background-color: white;
            color: #1E3D58;
        }

        /* Tombol Hapus */
        .btn-hapus {
            background-color: #1E3D58;
            color: white;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-hapus:hover {
            background-color: white;
            color: #1E3D58;
        }
    </style>

</head>

<body>

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

    <nav class="navbar navbar-dark px-4 col-12 d-lg-none" style="background-color: #1E3D58">
        <a class="navbar-brand me-lg-5" href="/inventaris-alat">
            <img class="navbar-brand-dark me-2" src="{{ asset('volt/assets/img/BMG_2003.png') }}"
                alt="Logo BMKG" />Stamet Banyuwangi<img class="navbar-brand-light"
                src="{{ asset('volt/assets/img/BMG_2003.png') }}" alt="Logo BMKG" />
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

        <div class="row mb-4 mt-4">
            <div class="col-12 d-flex align-items-center">

                <a href="/data-alat" class="hover-back">
                    <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 12l14 0" />
                        <path d="M5 12l6 6" />
                        <path d="M5 12l6 -6" />
                    </svg>
                </a>

                <!-- ICON -->
                <div class="d-flex align-items-center justify-content-center text-white rounded me-2 me-sm-2 flex-shrink-0"
                    style="width: 45px; height: 45px; background-color:#1E3D58;">
                    <!-- SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icon-tabler-database">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <ellipse cx="12" cy="6" rx="9" ry="3" />
                        <path d="M3 6v12c0 1.667 4 3 9 3s9 -1.333 9 -3v-12" />
                        <path d="M3 12c0 1.667 4 3 9 3s9 -1.333 9 -3" />
                    </svg>
                </div>

                <!-- Judul -->
                <h2 class="fs-4 fw-bolder mb-0" style="color:#1E3D58;">Peralatan di {{ $lokasi->nama_lokasi }}</h2>
            </div>
        </div>

        <div class="card border-0 mb-4"
            style="background-color:#fff; border-top:3px solid #1E3D58; padding-bottom:30px;">
            <div
                class="card-header border-0 fw-bold text-dark d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between gap-2">

                <span class="fw-bolder fs-4">Daftar Kategori</span>

                <div class="d-flex flex-wrap gap-2">

                    <!-- Tombol Archive -->
                    <a href="/data-alat/{{ urlencode($lokasi->nama_lokasi) }}/archive"
                        class="btn btn-sm btn-secondary text-white d-inline-flex align-items-center px-3 py-1">

                        <svg class="icon me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                            <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                            <path d="M10 12l4 0" />
                        </svg>

                        <span class="small">Archive</span>
                    </a>

                    <!-- Tombol Tambah -->
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalTambahKategori"
                        class="btn btn-sm text-white d-inline-flex align-items-center px-3 py-1"
                        style="background-color:#1E3D58;">

                        <svg class="icon me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>

                        <span class="small">Tambah</span>
                    </a>

                </div>
            </div>


            <div style="border-bottom:1px solid #e5e5e5; margin-bottom:25px;"></div>

            <div class="row row-cols-1 row-cols-md-2 g-3 justify-content-center">
                @foreach ($lokasi->kategoris as $kategori)
                    <div class="col-12 col-md-6 position-relative">
                        <div class="position-absolute"
                            style="right: 0.875rem; top: 4.375rem; z-index: 10; display:flex; align-items:center;">

                            <!-- Tombol Archive untuk tiap kategori -->
                            <form id="archive-form-{{ $kategori->id }}"
                                action="{{ route('data-alat.kategori.archive.action', $kategori->id) }}"
                                method="POST">

                                @csrf
                                <button type="button" onclick="confirmArchive('{{ $kategori->id }}')"
                                    class="btn btn-sm btn-archive">
                                    <svg class="icon icon-xs" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-archive">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                        <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                                        <path d="M10 12l4 0" />
                                    </svg>

                                    <span class="small">Archive</span>
                                </button>
                            </form>

                            <!-- Tombol Hapus (muncul bila kategori tidak punya alat) -->
                            @if ($kategori->alats->count() == 0)
                                <form action="{{ route('data-alat.tempat-alat.delete', $kategori->id) }}"
                                    method="POST" class="form-hapus-kategori"
                                    style="right: 1rem; top: 2rem; z-index:10;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-sm btn-hapus">
                                        <i class="bi bi-trash fs-4"></i> Hapus
                                    </button>
                                </form>
                            @endif
                        </div>

                        <a
                            href="{{ url('/data-alat/' . urlencode($lokasi->nama_lokasi) . '/' . urlencode($kategori->nama_kategori)) }}">
                            <div class="card-two border-0 shadow hover-card position-relative">
                                <div class="card-body d-flex align-items-center">
                                    <!-- ICON -->
                                    <div class="icon-shape icon-shape-white rounded d-flex align-items-center justify-content-center me-3"
                                        style="width:50px; height:50px;">
                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-tools">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 21h4l13 -13a1.5 1.5 0 0 0 -4 -4l-13 13v4" />
                                            <path d="M14.5 5.5l4 4" />
                                            <path d="M12 8l-5 -5l-4 4l5 5" />
                                            <path d="M7 8l-1.5 1.5" />
                                            <path d="M16 12l5 5l-4 4l-5 -5" />
                                            <path d="M16 17l-1.5 1.5" />
                                        </svg>
                                    </div>

                                    <!-- TEXT -->
                                    <div>
                                        <h3 class="fw-extrabold text-white fs-5 ">{{ $kategori->nama_kategori }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

                <div class="col-12 col-md-6">
                    <a href="{{ url('/data-alat/' . urlencode($lokasi->nama_lokasi) . '/semua') }}">
                        <div class="card-two border-0 shadow hover-card">
                            <div class="card-body d-flex align-items-center">
                                <!-- ICON -->
                                <div class="icon-shape icon-shape-white rounded d-flex align-items-center justify-content-center me-3"
                                    style="width:50px; height:50px;">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-category">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 4h6v6h-6z" />
                                        <path d="M14 4h6v6h-6z" />
                                        <path d="M4 14h6v6h-6z" />
                                        <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                    </svg>
                                </div>

                                <!-- TEXT -->
                                <div>
                                    <h3 class="fw-extrabold text-white fs-4">Semua Kategori</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Modal Tambah Kategori-->
            <div class="modal fade" id="modalTambahKategori" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content border-0 shadow">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Kategori Alat di {{ $lokasi->nama_lokasi }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <form method="POST"
                            action="{{ route('data-alat.tempat-alat.kategori.store', $lokasi->nama_lokasi) }}">
                            @csrf
                            <div class="modal-body">
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <label class="form-label">Nama Kategori</label>
                                        <input type="text" class="form-control" name="nama_kategori" required>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer class="mt auto bg-white rounded shadow p-3 mb-3 mt-3">
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
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "{{ session('success') }}",
                confirmButtonColor: '#0d6efd',
                confirmButtonText: 'OK'
            });
        </script>
    @endif

    <script>
        function confirmArchive(id) {

            Swal.fire({
                title: "Archive Kategori?",
                text: "Kategori akan dipindahkan ke arsip.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#0d6efd",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Archive!",
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById("archive-form-" + id).submit();
                }
            });
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.btn-hapus');

            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    let form = this.closest('form');

                    Swal.fire({
                        title: 'Yakin ingin menghapus kategori ini?',
                        text: "Kategori yang dihapus tidak dapat dikembalikan.",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>

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
