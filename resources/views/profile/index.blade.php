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
    <title>Profil - Aplikasi Inventaris Alat BMKG</title>
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

    <style>
        .nav-tabs .nav-link.active {
            background-color: #1E3D58 !important;
            color: white !important;
        }

        .nav-tabs .nav-link:hover {
            background-color: #1E3D58 !important;
            color: white !important;
        }
    </style>

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

        <div class="container-fluid py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-sm rounded-4 p-4" style="background-color: #fff; border: 1px solid #e0e0e0;">
                        <ul class="nav nav-tabs mb-4" id="profileTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="profil-tab" data-bs-toggle="tab" data-bs-target="#profil"
                                    type="button" role="tab" aria-controls="profil" aria-selected="true">
                                    Profil
                                </button>
                            </li>
                            {{-- <li class="nav-item" role="presentation">
                                <button class="nav-link" id="ubah-password-tab" data-bs-toggle="tab" data-bs-target="#ubah-password"
                                    type="button" role="tab" aria-controls="ubah-password" aria-selected="false">
                                    Ubah Password
                                </button>
                            </li> --}}
                        </ul>

                        <div class="tab-content" id="profileTabContent">
                            <!-- Profil -->
                            <div class="tab-pane fade show active" id="profil" role="tabpanel" aria-labelledby="profil-tab">
                                <div class="text-center mb-4">
                                    <img src="{{ $users->foto_profil  ? asset('storage/'. $users->foto_profil) : asset('storage/foto_profil/default-profile.png') }}" class="rounded-circle mb-2" style="width: 100px; height: 100px; object-fit: cover;">
                                    @if (auth()->user()->peran=="teknisi")
                                    <div>
                                        <button class="btn btn-sm text-white" style="background-color:#1E3D58;" data-bs-toggle="modal" data-bs-target="#modalEditProfile">Edit Profile</button>
                                    </div>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ $users->nama_lengkap}}" readonly>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="nip" class="form-label">NIP</label>
                                        <input type="text" class="form-control" id="nip" value="{{ $users->nip ?? '-' }}" readonly>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="jabatan" class="form-label">Jabatan</label>
                                        <input type="jabatan" class="form-control" id="jabatan" value="{{ $users->jabatan ?? '-' }}" readonly>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                        <input type="jenis_kelamin" class="form-control" id="jenis_kelamin" value="{{ $users->jenis_kelamin ?? '-' }}" readonly>
                                    </div>
                                    <!-- <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" value="{{ $users->email}}" readonly>
                                </div> -->
                                </div>
                            </div>

                            {{-- <!-- Ubah Password -->
                            <div class="tab-pane fade" id="ubah-password" role="tabpanel" aria-labelledby="ubah-password-tab">
                                <form>
                                    <div class="mb-3">
                                        <label for="current_password" class="form-label">Password Lama</label>
                                        <input type="password" class="form-control" id="current_password" placeholder="Masukkan password lama" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="new_password" class="form-label">Password Baru</label>
                                        <input type="password" class="form-control" id="new_password" placeholder="Masukkan password baru" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="new_password_confirmation" class="form-label">Konfirmasi Password</label>
                                        <input type="password" class="form-control" id="new_password_confirmation" placeholder="Konfirmasi password baru" required>
                                    </div>
                                    <button type="submit" class="btn btn-sm text-white" style="background-color:#1E3D58;">Simpan Perubahan</button>
                                </form>
                            </div> --}}

                            <!-- Modal Edit Akun -->
                            <div class="modal fade" id="modalEditProfile" tabindex="-1" aria-labelledby="modalEditProfileLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-md">
                                    <div class="modal-content border-0 shadow">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-dark" id="modalEditProfileLabel">Edit Profil</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <!-- Foto Profil -->
                                                <div class="text-center mb-3">
                                                    <img src="{{ $users->foto_profil  ? asset('storage/'.$users->foto_profil) : asset('storage/foto_profil/default-profile.png') }}"
                                                        class="rounded-circle mb-2 shadow-sm"
                                                        style="width: 110px; height: 110px; object-fit: cover;">
                                                    <div>
                                                        <input type="file" class="form-control mt-2 w-75 mx-auto" name="foto_profil">
                                                    </div>
                                                    @error('foto_profil')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <!-- Nama -->
                                                <div class="mb-3">
                                                    <label for="nama_lengkap_edit" class="form-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="nama_lengkap_edit"
                                                        name="nama_lengkap" value="{{ $users->nama_lengkap }}">
                                                    @error('nama_lengkap')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <!-- Jenis Kelamin -->
                                                <div class="mb-3">
                                                    <label for="jenis_kelamin_edit" class="form-label">Jenis Kelamin</label>
                                                    <select class="form-control" id="jenis_kelamin_edit" name="jenis_kelamin">
                                                        <option value="laki laki" {{ $users->jenis_kelamin == 'laki laki' ? 'selected' : '' }}>Laki-laki</option>
                                                        <option value="perempuan" {{ $users->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="jabatan_edit" class="form-label">Jabatan</label>
                                                    <input type="text" class="form-control" name="jabatan" value="{{ $user->jabatan ?? '-' }}"
                                                        oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\b\w/g, l => l.toUpperCase())">
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

    <script src="{{ asset('volt/vendor/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
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

    @if ($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var editModal = new bootstrap.Modal(document.getElementById('modalEditProfile'));
            editModal.show();
        });
    </script>
    @endif

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