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

        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="row">
                    <div class="col-12 mb-4">
                        <form action="" method="POST">  
                            <div class="row g-3">
                                <!-- Card Total User -->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card text-white" style="background-color: #1E3D58;">
                                        <div class="card-body d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users me-2" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M5 21v-2a4 4 0 0 1 4 -4h6a4 4 0 0 1 4 4v2" />
                                                <circle cx="12" cy="7" r="4" />
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                            </svg>
                                            <div>
                                                <h5 class="card-title mb-0">Total User</h5>
                                                <p class="card-text fs-4 fw-bolder">150</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card Admin -->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card text-white" style="background-color: #1E3D58;">
                                        <div class="card-body d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shield-user me-2" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M12 3l8 4v5c0 5.5 -3.5 10.74 -8 13c-4.5 -2.26 -8 -7.5 -8 -13v-5l8 -4z" />
                                                <path d="M12 11a2 2 0 1 0 0 4a2 2 0 0 0 0 -4z" />
                                                <path d="M12 13v2" />
                                            </svg>
                                            <div>
                                                <h5 class="card-title mb-0">Admin</h5>
                                                <p class="card-text fs-4 fw-bolder">10</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card Teknisi -->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card text-white" style="background-color: #1E3D58;">
                                        <div class="card-body d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tools me-2" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M14.7 9.3l-3.4 3.4" />
                                                <path d="M10 14l-3 3a2.828 2.828 0 1 1 -4 -4l3-3" />
                                                <path d="M15 5l4 4" />
                                            </svg>
                                            <div>
                                                <h5 class="card-title mb-0">Teknisi</h5>
                                                <p class="card-text fs-4 fw-bolder">5</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                            <div class="row g-3 mt-2">
                                <div class="col-12">
                                    <div class="card shadow" style="background-color:#1E3D58; border:0;">
                                        <div class="card-header d-flex justify-content-between align-items-center text-white" style="border-bottom:none;">
                                            <div class="d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" 
                                                    class="icon icon-tabler icon-tabler-user me-2" 
                                                    width="24" height="24" 
                                                    viewBox="0 0 24 24" 
                                                    stroke-width="2" 
                                                    stroke="currentColor" 
                                                    fill="none" 
                                                    stroke-linecap="round" 
                                                    stroke-linejoin="round"> 
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/> 
                                                    <path d="M12 7a4 4 0 1 0 0 8a4 4 0 0 0 0 -8z" /> 
                                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /> 
                                                </svg>
                                                <h2 class="fs-4 fw-bolder mb-0 text-white">Kelola Akun User</h2>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <button type="button" class="btn btn-sm btn-white"
                                                    data-bs-toggle="modal" data-bs-target="#modalTambahAkun">
                                                    <svg class="icon icon-xs me-1" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M12 5l0 14" />
                                                        <path d="M5 12l14 0" />
                                                    </svg>
                                                    Tambah Akun
                                                </button>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-flush bg-white">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Username</th>
                                                        <!-- <th>Jenis Kelamin</th>
                                                        <th>Photo</th>
                                                        <th>Hak Akses</th> -->
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($users as $index => $user)
                                                        <tr>
                                                            <td>{{ $index + 1 }}</td>
                                                            <td>{{ $user->nama_lengkap }}</td>
                                                            <td>{{ $user->username }}</td>
                                                            <td>
                                                                <a class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalLihatAkun{{ $user->id }}">
                                                                    <i class="bi bi-eye"></i> Lihat
                                                                </a>
                                                                <button type="button" class="btn btn-sm btn-warning me-1" onclick="showEditModal('{{ $user->id }}', '{{ $user->nama_lengkap }}', '{{ $user->username }}')">
                                                                    <i class="bi bi-pencil"></i> Edit
                                                                </button>
                                                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapusAkun"
                                                                    onclick="hapusAkun('{{ $user->id }}', '{{ addslashes($user->nama_lengkap) }}')">
                                                                    <i class="bi bi-trash"></i> Hapus
                                                                </button>
                                                            </td>
                                                        </tr>
                                                       
                                                        <!-- Modal Lihat Akun -->
                                                        <div class="modal fade" id="modalLihatAkun{{ $user->id }}" tabindex="-1"
                                                            aria-labelledby="modalLihatAkunLabel{{ $user->id }}" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                <div class="modal-content border-0 shadow">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="modalLihatAkunLabel{{ $user->id }}">Detail Akun User</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                                                    </div>
                                                                    
                                                                    <div class="modal-body">
                                                                        <div class="row g-3">
                                                                            <!-- Nama Lengkap -->
                                                                            <div class="col-md-6">
                                                                                <label class="form-label">Nama Lengkap</label>
                                                                                <input type="text" class="form-control" value="{{ $user->nama_lengkap }}" readonly>
                                                                            </div>

                                                                            <!-- Username -->
                                                                            <div class="col-md-6">
                                                                                <label class="form-label">Username</label>
                                                                                <input type="text" class="form-control" value="{{ $user->username }}" readonly>
                                                                            </div>

                                                                            <!-- Password (tidak ditampilkan aslinya) -->
                                                                            <div class="col-md-6">
                                                                                <label class="form-label">Password</label>
                                                                                <input type="password" class="form-control" value="********" readonly>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>                                                    
                                                    @empty
                                                        <tr>
                                                            <td colspan="4" class="text-muted text-center">Belum ada data</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Tambah Akun -->
        <div class="modal fade" id="modalTambahAkun" tabindex="-1"
            aria-labelledby="modalTambahAkunLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow">
        <div class="modal-header">
        <h5 class="modal-title" id="modalTambahAkunLabel">Tambah Akun User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <form id="formTambahAkun" action="{{ route('kelola-akun.store') }}" method="POST">
        @csrf
        <div class="modal-body">
        <div class="row g-3">
            <!-- Nama User -->
            <div class="col-md-6">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan nama lengkap" required
                    oninput="this.value = this.value.replace(/\b\w/g, l => l.toUpperCase())">
                @error('nama_lengkap')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Jenis Kelamin -->
            <!-- <div class="col-md-6">
                <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jenisKelamin" name="jenisKelamin" required>
                    <option value="" disabled selected>Pilih jenis kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div> -->

            <!-- Username -->
            <div class="col-md-6">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
                @error('username')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Password -->
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Hak Akses -->
            <!-- <div class="col-md-6">
            <label for="hakAkses" class="form-label">Hak Akses</label>
            <select class="form-select" id="hakAkses" name="hakAkses" required>
                <option value="" disabled selected>Pilih hak akses</option>
                <option value="Admin">Admin</option>
                <option value="Teknisi">Teknisi</option>
                <option value="User">User</option>
            </select>
            </div> -->

            <!-- Photo -->
            <!-- <div class="col-md-6">
            <label for="photo" class="form-label">Photo (opsional)</label>
            <input type="file" class="form-control" id="photo" name="photo">
            </div> -->
        </div>
        </div>

        <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Batal</button>
        <button type="submit" form="formTambahAkun" class="btn btn-sm btn-success">Simpan</button>
        </div>
        </form>
        </div>
        </div>
        </div>

        <!-- Modal Edit Akun -->
        <div class="modal fade" id="modalEditAkun" tabindex="-1" aria-labelledby="modalEditAkunLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow">
        <div class="modal-header">
        <h5 class="modal-title" id="modalEditAkunLabel">Edit Akun User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>

        <form id="formEditAkun" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-body">
        <div class="row g-3">
            <!-- Nama Lengkap -->
            <div class="col-md-6">
                <label for="edit_nama_lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="edit_nama_lengkap" name="nama_lengkap" placeholder="Masukkan nama lengkap" required
                    oninput="this.value = this.value.replace(/\b\w/g, l => l.toUpperCase())">
            </div>

            <!-- Username -->
            <div class="col-md-6">
                <label for="edit_username" class="form-label">Username</label>
                <input type="text" class="form-control" id="edit_username" name="username" placeholder="Masukkan username" required>
            </div>

            <!-- Password -->
            <div class="col-md-6">
                <label for="edit_password" class="form-label">Password</label>
                <input type="password" class="form-control" id="edit_password" name="password" placeholder="Masukkan password baru">
                <small class="text-muted">Kosongkan jika tidak ingin mengubah password</small>
            </div>
        </div>
        </div>

        <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Batal</button>
        <button type="submit" form="formEditAkun" class="btn btn-sm btn-success">Perbarui</button>
        </div>
        </form>
        </div>
        </div>
        </div>

        <!-- Modal Hapus Akun -->
        <div class="modal fade" id="modalHapusAkun" tabindex="-1"
        aria-labelledby="modalHapusAkunLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow">
        <div class="modal-header">
        <h5 class="modal-title" id="modalHapusAkunLabel">Konfirmasi Hapus Akun</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <form id="formHapusAkun" method="POST">
        @csrf
        @method('DELETE')
        <div class="modal-body">
        <p>Apakah Anda yakin ingin menghapus akun berikut?</p>
        <div class="alert alert-warning mb-0">
            <strong id="hapusNamaUser"></strong>
        </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-sm btn-danger">Ya, Hapus</button>
        </div>
        </form>
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
    <script>
        var tambahAkunModal = new bootstrap.Modal(document.getElementById('modalTambahAkun'));
        tambahAkunModal.show();
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