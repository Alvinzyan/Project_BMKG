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
    <title>Tambah Data Alat - Aplikasi Inventaris Alat BMKG</title>
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

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

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

        <div class="row mb-4 mt-4">
            <div class="col-12 d-flex align-items-center">
                <a href="/data-alat/{{ urlencode($lokasi->nama_lokasi) }}" class="hover-back">
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
                <div class="icon-shape rounded d-flex align-items-center justify-content-center me-2"
                    style="width:40px; height:40px; background-color:#1E3D58; color:#fff;">
                    <!-- SVG -->
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-database">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <ellipse cx="12" cy="6" rx="9" ry="3" />
                        <path d="M3 6v12c0 1.667 4 3 9 3s9 -1.333 9 -3v-12" />
                        <path d="M3 12c0 1.667 4 3 9 3s9 -1.333 9 -3" />
                    </svg>
                </div>

                <!-- Judul -->
                <h2 class="fs-4 fw-bolder mb-0" style="color:#1E3D58;">Data Alat</h2>
            </div>
        </div>

        <div class="row mb-4 mt-4">
            <div class="align-items-center">
                <div class="row g-0 border mb-1">
                    <div class="col-2 p-2 fw-bold text-white bg-dark"
                        style="background:#1E3D58; border-radius: 12px 0 0 12px;">Lokasi</div>
                    <div class="col-10 p-2 bg-white text-dark"
                        style="color:#1E3D58; border:1px solid #1E3D58; border-radius: 0 12px 12px 0;">
                        {{ $lokasi->nama_lokasi }}</div>
                </div>

                <div class="row g-0 border">
                    <div class="col-2 p-2 fw-bold text-white bg-dark"
                        style="background:#1E3D58; border-radius: 12px 0 0 12px;">Kategori</div>
                    <div class="col-10 p-2 bg-white text-dark"
                        style="color:#1E3D58; border:1px solid #1E3D58; border-radius: 0 12px 12px 0;">
                        {{ $nama_kategori }}</div>
                </div>
            </div>
        </div>

        @foreach ($alats as $group => $list)
            <div class="card shadow-sm rounded-0 mb-4" style="background-color:#fff; border-top:3px solid #1E3D58;">
                <div class="card-header fw-bold text-dark d-flex justify-content-between align-items-center">
                    {{ $group }}
                    <a href="#" class="btn btn-sm text-white" style="background-color:#1E3D58;"
                        data-bs-toggle="modal" data-bs-target="#modalTambahAlat_{{ Str::slug($group) }}">
                        <i class="bi bi-plus"></i> Tambah Data
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-center align-middle"
                            style="border:1px solid #000; border-collapse:collapse; font-size:14px;">
                            <thead>
                                <tr>
                                    <th style="border:1px solid #000;">No</th>
                                    <th style="border:1px solid #000;">Nama Alat</th>
                                    <th style="border:1px solid #000;">Merk/Type</th>
                                    <th style="border:1px solid #000;">Jumlah</th>
                                    <th style="border:1px solid #000;">Tahun Pemasangan</th>
                                    <th style="border:1px solid #000;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($list as $a)
                                    <tr data-id="{{ $a->id }}">
                                        <td style="border:1px solid #000;">{{ $loop->iteration }}</td>
                                        <td style="border:1px solid #000;">{{ $a->nama_alat }}</td>
                                        <td style="border:1px solid #000;">{{ $a->merk_tipe }}</td>
                                        <td style="border:1px solid #000;">{{ $a->jumlah }}</td>
                                        <td style="border:1px solid #000;">{{ $a->tahun_pemasangan }}</td>
                                        <td style="border:1px solid #000;">

                                            <a href="#" class="btn btn-sm btn-secondary" data-bs-toggle="modal"
                                                data-bs-target="#modalEditAlat_{{ $a->id }}">
                                                <svg class="icon icon-xs" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-pencil">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                                    <path d="M13.5 6.5l4 4" />
                                                </svg>Edit</a>

                                            <!-- Tombol Hapus -->
                                            <form
                                                action="{{ route('data-alat.tambah-data-alat.destroy', [
                                                    'nama_lokasi' => $lokasi->nama_lokasi,
                                                    'nama_kategori' => $group,
                                                    'id' => $a->id,
                                                ]) }}"
                                                method="POST" class="d-inline form-hapus">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <svg class="icon icon-xs" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                    <!-- Modal Edit Alat -->
                                    <div class="modal fade" id="modalEditAlat_{{ $a->id }}" tabindex="-1"
                                        aria-labelledby="modalEditAlatLabel_{{ $a->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content border-0 shadow">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-dark"
                                                        id="modalEditAlatLabel_{{ $a->id }}">Edit Alat -
                                                        {{ $a->nama_alat }}</h5>
                                                    <button type="button" class="btn-close btn-close-dark"
                                                        data-bs-dismiss="modal" aria-label="Tutup"></button>
                                                </div>

                                                <form
                                                    action="{{ route('data-alat.tambah-data-alat.update', [
                                                        'nama_lokasi' => $lokasi->nama_lokasi,
                                                        'id' => $a->id,
                                                        'nama_kategori' => $kategori->nama_kategori ?? null,
                                                    ]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label class="form-label">Nama Alat</label>
                                                            <input type="text" class="form-control"
                                                                name="nama_alat" value="{{ $a->nama_alat }}"
                                                                required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label">Merk / Type</label>
                                                            <input type="text" class="form-control"
                                                                name="merk_tipe" value="{{ $a->merk_tipe }}"
                                                                required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label">Jumlah</label>
                                                            <input type="number" class="form-control" name="jumlah"
                                                                value="{{ $a->jumlah }}" required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label">Tahun Pemasangan</label>
                                                            <input type="number" class="form-control"
                                                                name="tahun_pemasangan"
                                                                value="{{ $a->tahun_pemasangan }}" required>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-success">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <tr class="text-center align-middle">
                                        <td style="border:1px solid #000;"></td>
                                        <td colspan="5" style="border:1px solid #000;">Belum ada data alat</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- modal tambah alat -->
            <div class="modal fade" id="modalTambahAlat_{{ Str::slug($group) }}" tabindex="-1"
                aria-labelledby="modalTambahAlatLabel_{{ Str::slug($group) }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-0 shadow">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" id="modalTambahAlatLabel_{{ Str::slug($group) }}">
                                Tambah Alat - {{ $group }}</h5>
                            <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="modal"
                                aria-label="Tutup"></button>
                        </div>

                        <form method="POST"
                            action="{{ route('data-alat.tambah-data-alat.store', ['nama_lokasi' => $lokasi->nama_lokasi, 'nama_kategori' => $group]) }}">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="nama_alat_{{ Str::slug($group) }}" class="form-label">Nama
                                        Alat</label>
                                    <input type="text" class="form-control"
                                        id="nama_alat_{{ Str::slug($group) }}" name="nama_alat" required>
                                </div>

                                <div class="mb-3">
                                    <label for="merk_tipe_{{ Str::slug($group) }}" class="form-label">Merk /
                                        Type</label>
                                    <input type="text" class="form-control"
                                        id="merk_tipe_{{ Str::slug($group) }}" name="merk_tipe" required>
                                </div>

                                <div class="mb-3">
                                    <label for="jumlah_{{ Str::slug($group) }}" class="form-label">Jumlah</label>
                                    <input type="number" class="form-control" id="jumlah_{{ Str::slug($group) }}"
                                        name="jumlah" required>
                                </div>

                                <div class="mb-3">
                                    <label for="tahun_pemasangan_{{ Str::slug($group) }}" class="form-label">Tahun
                                        Pemasangan</label>
                                    <input type="number" class="form-control"
                                        id="tahun_pemasangan_{{ Str::slug($group) }}" name="tahun_pemasangan"
                                        required>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-danger"
                                    data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const forms = document.querySelectorAll('.form-hapus');

            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();

                    Swal.fire({
                        title: 'Yakin ingin menghapus alat ini?',
                        text: "Data yang dihapus tidak dapat dikembalikan.",
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
