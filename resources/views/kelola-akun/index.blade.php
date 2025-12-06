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
    <title>Kelola Akun - Aplikasi Inventaris Alat BMKG</title>
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
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

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

        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-2">
            @include('template.navbar')
        </nav>

        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="row g-3">
                    <div class="col-12 mb-4 mt-4">
                        <div class="card border-0 shadow" style="background-color:#1E3D58;">
                            <div
                                class="card-header border-0 fw-bold text-white d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between gap-2">

                                <div class="d-flex align-items-center">
                                    <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-user-cog">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h2.5" />
                                        <path d="M19.001 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                        <path d="M19.001 15.5v1.5" />
                                        <path d="M19.001 21v1.5" />
                                        <path d="M22.032 17.25l-1.299 .75" />
                                        <path d="M17.27 20l-1.3 .75" />
                                        <path d="M15.97 17.25l1.3 .75" />
                                        <path d="M20.733 20l1.3 .75" />
                                    </svg>

                                    <h2 class="fs-4 fw-bolder mb-0 text-white">Kelola Akun User</h2>
                                </div>

                                <div class="d-flex flex-wrap">
                                    <button type="button"
                                        class="btn btn-sm btn-white d-inline-flex align-items-center px-2 py-2"
                                        data-bs-toggle="modal" data-bs-target="#modalTambahAkun">
                                        <svg class="icon icon-xs me-1" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 5l0 14" />
                                            <path d="M5 12l14 0" />
                                        </svg>
                                        <span class="small">Tambah Akun</span>
                                    </button>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-flush bg-white">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>NIP</th>
                                            <th>Jabatan</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Hak Akses</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp

                                        @forelse ($users as $user)
                                        @if ($user->peran !== 'teknisi')
                                        @continue
                                        @endif

                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $user->nama_lengkap }}</td>
                                            <td>{{ $user->nip }}</td>
                                            <td>{{ $user->jabatan ?: '-' }}</td>
                                            <td>{{ $user->jenis_kelamin ? \Illuminate\Support\Str::title($user->jenis_kelamin) : '-' }}
                                            </td>
                                            <td>{{ ucwords($user->peran) }}</td>
                                            <td>
                                                <a class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#modalLihatAkun{{ $user->id }}">
                                                    <i class="bi bi-eye"></i> Lihat
                                                </a>
                                                <button type="button" class="btn btn-sm btn-primary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modalEditAkun{{ $user->id }}">
                                                    <i class="bi bi-pencil"></i> Edit
                                                </button>
                                                <form action="{{ route('kelola-akun.destroy', $user->id) }}" method="POST" class="form-hapus-akun d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        Hapus
                                                    </button>
                                                </form>
                                                <button type="button" class="btn btn-sm btn-warning"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modalUbahPassword{{ $user->id }}">
                                                    <i class="bi bi-key"></i> Ubah Kata Sandi
                                                </button>
                                            </td>
                                        </tr>

                                        <!-- Modal Lihat Akun -->
                                        <div class="modal fade" id="modalLihatAkun{{ $user->id }}"
                                            tabindex="-1"
                                            aria-labelledby="modalLihatAkunLabel{{ $user->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content border-0 shadow">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="modalLihatAkunLabel{{ $user->id }}">Detail
                                                            Akun Pengguna</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Tutup"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="text-center mb-4">
                                                            @php
                                                            // cek apakah file ada di storage
                                                            if (
                                                            $user->foto_profil &&
                                                            file_exists(
                                                            storage_path(
                                                            'app/public/' . $user->foto_profil,
                                                            ),
                                                            )
                                                            ) {
                                                            $fotoPath = $user->foto_profil;
                                                            } else {
                                                            $fotoPath = 'foto_profil/default-profile.png'; // sesuaikan path default kamu
                                                            }
                                                            @endphp
                                                            <div
                                                                style="width:120px; height:120px; border-radius:50%; overflow:hidden; margin:auto;">
                                                                <img src="{{ asset('storage/' . $fotoPath) }}"
                                                                    alt="Foto Profil"
                                                                    style="width:100%; height:100%; object-fit:cover;">
                                                            </div>
                                                        </div>

                                                        <div class="row g-3">
                                                            <!-- Nama Lengkap -->
                                                            <div class="col-md-6">
                                                                <label class="form-label">Nama Lengkap</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $user->nama_lengkap ?? '-' }}"
                                                                    readonly>
                                                            </div>

                                                            <!-- NIP -->
                                                            <div class="col-md-6">
                                                                <label class="form-label">NIP</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $user->nip }}" readonly>
                                                            </div>

                                                            <!-- Jabatan -->
                                                            <div class="col-md-6">
                                                                <label class="form-label">Jabatan</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $user->jabatan ?? '-' }}" readonly>
                                                            </div>

                                                            <!-- Jenis Kelamin -->
                                                            <div class="col-md-6">
                                                                <label class="form-label">Jenis Kelamin</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ isset($user->jenis_kelamin) ? ucwords($user->jenis_kelamin) : '-' }}"
                                                                    readonly>
                                                            </div>

                                                            <!-- Peran -->
                                                            <div class="col-md-6">
                                                                <label class="form-label">Peran</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ ucwords($user->peran ?? '-') }}"
                                                                    readonly>
                                                            </div>

                                                            <!-- Password -->
                                                            <div class="col-md-6">
                                                                <label class="form-label">Kata Sandi</label>
                                                                <div class="input-group">
                                                                    <input type="password" class="form-control"
                                                                        value="{{ $user->decrypted_password }}"
                                                                        readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-sm btn-secondary"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Edit Akun -->
                                        <div class="modal fade" id="modalEditAkun{{ $user->id }}"
                                            tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content border-0 shadow">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Akun User</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <form method="POST"
                                                        action="{{ route('kelola-akun.update', $user->id) }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="row g-3">
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Nama
                                                                        Lengkap</label>
                                                                    <input type="text" class="form-control"
                                                                        name="nama_lengkap"
                                                                        value="{{ $user->nama_lengkap }}"
                                                                        oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\b\w/g, l => l.toUpperCase())">
                                                                    @error('nama_lengkap')
                                                                    <small
                                                                        class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label">NIP</label>
                                                                    <input type="text" class="form-control"
                                                                        name="nip"
                                                                        value="{{ $user->nip }}">
                                                                    @error('nip')
                                                                    <small
                                                                        class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Jabatan</label>
                                                                    <input type="text" class="form-control"
                                                                        name="jabatan"
                                                                        value="{{ $user->jabatan ?? '-' }}"
                                                                        oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\b\w/g, l => l.toUpperCase())">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Jenis
                                                                        Kelamin</label>
                                                                    <select name="jenis_kelamin"
                                                                        class="form-control">
                                                                        <option value="">-</option>
                                                                        <option value="laki laki"
                                                                            {{ $user->jenis_kelamin == 'laki laki' ? 'selected' : '' }}>
                                                                            Laki-laki</option>
                                                                        <option value="perempuan"
                                                                            {{ $user->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>
                                                                            Perempuan</option>
                                                                    </select>
                                                                </div>
                                                                <!-- Peran -->
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Peran</label>
                                                                    <input type="hidden" name="peran"
                                                                        value="{{ $user->peran }}">
                                                                    <input type="text" class="form-control"
                                                                        value="{{ ucwords($user->peran) }}"
                                                                        style="background-color: #f8f9fa; cursor: not-allowed;"
                                                                        readonly>
                                                                </div>

                                                                <!-- Field Password -->
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Kata Sandi</label>
                                                                    <div class="input-group">
                                                                        <input type="password"
                                                                            class="form-control"
                                                                            value="{{ $user->decrypted_password }}"
                                                                            readonly
                                                                            style="background-color: #f8f9fa; cursor: not-allowed;"
                                                                            autocomplete="off">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label class="form-label">Foto Profil
                                                                        (Opsional)
                                                                    </label>
                                                                    <input type="file" class="form-control"
                                                                        name="foto_profil">
                                                                    <div class="form-text text-muted"
                                                                        style="font-size: 13px; margin-top: 2px;">
                                                                        Kosongkan jika tidak ingin mengubah foto
                                                                        profil. Unggah dengan format jpg, jpeg,
                                                                        png.</div>
                                                                    @error('foto_profil')
                                                                    <small
                                                                        class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit"
                                                                class="btn btn-success">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Ubah Password User -->
                                        <div class="modal fade" id="modalUbahPassword{{ $user->id }}"
                                            tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Ubah Kata Sandi:
                                                            {{ $user->nama_lengkap }}
                                                        </h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <form
                                                        action="{{ route('kelola-akun.updatePassword', $user->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="modal-body">

                                                            <!-- Password Baru -->
                                                            <div class="mb-3">
                                                                <label for="new_password_{{ $user->id }}"
                                                                    class="form-label">Kata Sandi Baru</label>
                                                                <div class="input-group">
                                                                    <input type="password" class="form-control"
                                                                        id="new_password_{{ $user->id }}"
                                                                        name="new_password" required>
                                                                    <button type="button"
                                                                        class="btn btn-outline-secondary btn-toggle-password">
                                                                        <i class="bi bi-eye"></i>
                                                                    </button>
                                                                </div>
                                                                @error('new_password')
                                                                <small
                                                                    class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>

                                                            <!-- Konfirmasi Password -->
                                                            <div class="mb-3">
                                                                <label
                                                                    for="new_password_confirmation_{{ $user->id }}"
                                                                    class="form-label">
                                                                    Konfirmasi Kata Sandi
                                                                </label>
                                                                <div class="input-group">
                                                                    <input type="password" class="form-control"
                                                                        id="new_password_confirmation_{{ $user->id }}"
                                                                        name="new_password_confirmation" required>
                                                                    <button type="button"
                                                                        class="btn btn-outline-secondary btn-toggle-password">
                                                                        <i class="bi bi-eye"></i>
                                                                    </button>
                                                                </div>
                                                                @error('new_password_confirmation')
                                                                <small
                                                                    class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit"
                                                                class="btn btn-success">Simpan</button>
                                                        </div>

                                                    </form>

                                                </div>
                                            </div>
                                        </div>

                                        @empty
                                        <tr>
                                            <td colspan="7" class="text-muted text-center">Belum ada data
                                            </td>
                                        </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Tambah Akun -->
        <div class="modal fade" id="modalTambahAkun" tabindex="-1" aria-labelledby="modalTambahAkunLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0 shadow">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTambahAkunLabel">Tambah Akun Pengguna</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Tutup"></button>
                    </div>
                    <form id="formTambahAkun" action="{{ route('kelola-akun.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row g-3">
                                <!-- Nama User -->
                                <div class="col-md-6">
                                    <label for="nama_lengkap" class="form-label">Nama Lengkap (Wajib Diisi)</label>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                        placeholder="Masukkan nama lengkap" required
                                        oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\b\w/g, l => l.toUpperCase())">
                                    @error('nama_lengkap')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- NIP -->
                                <div class="col-md-6">
                                    <label for="nip" class="form-label">NIP (Wajib Diisi)</label>
                                    <input type="text" class="form-control" id="nip" name="nip"
                                        placeholder="Masukkan NIP" required>
                                    @error('nip')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Jabatan -->
                                <div class="col-md-6">
                                    <label for="jabatan" class="form-label">Jabatan</label>
                                    <input type="text" class="form-control" id="jabatan" name="jabatan"
                                        placeholder="Masukkan jabatan" autocomplete="off"
                                        oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\b\w/g, l => l.toUpperCase())">
                                </div>

                                <!-- Jenis Kelamin -->
                                <div class="col-md-6">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                                        <option value="" disabled selected>Pilih jenis kelamin</option>
                                        <option value="laki laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>

                                <!-- Peran -->
                                <div class="col-md-6">
                                    <label for="peran" class="form-label">Hak Akses (Wajib Diisi)</label>
                                    <select class="form-select" id="peran" name="peran" required>
                                        <option value="" disabled selected>Pilih hak akses</option>
                                        <option value="teknisi">Teknisi</option>
                                    </select>
                                    @error('peran')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="col-md-6">
                                    <label for="password" class="form-label">Kata Sandi (Wajib Diisi)</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Masukkan kata sandi" autocomplete="new-password" required>
                                        <button type="button" class="btn btn-outline-secondary btn-toggle-password">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                    @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Foto Profil -->
                                <div class="col-md-6">
                                    <label for="foto_profil" class="form-label">Foto Profil (Opsional)</label>
                                    <input type="file" class="form-control" id="foto_profil" name="foto_profil">
                                    <div class="form-text text-muted" style="font-size: 13px; margin-top: 1px;">Unggah
                                        dengan format jpg, jpeg, png.</div>
                                    @error('foto_profil')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-danger"
                                data-bs-dismiss="modal">Batal</button>
                            <button type="submit" form="formTambahAkun"
                                class="btn btn-sm btn-success">Simpan</button>
                        </div>
                    </form>
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
        var modalEdit = new bootstrap.Modal(document.getElementById("modalEditAkun{{ session('edit_user_id') }}"));
        modalEdit.show();
    </script>
    @elseif (session('openUbahPasswordModalId'))
    <script>
        var modalPwd = new bootstrap.Modal(document.getElementById(
            "modalUbahPassword{{ session('openUbahPasswordModalId') }}"));
        modalPwd.show();
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
            confirmButtonColor: '#0d6efd',
            confirmButtonText: 'OK'
        });
    </script>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // === Hapus Akun ===
            const forms = document.querySelectorAll('.form-hapus-akun');

            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();

                    Swal.fire({
                        title: 'Apakah Anda yakin ingin menghapus akun ini?',
                        text: "Aksi ini tidak dapat dibatalkan.",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, hapus',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });

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

    @if (session('openUbahPasswordModalId'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var id = "{{ session('openUbahPasswordModalId') }}";
            var modalSelector = "#modalUbahPassword" + id;
            var modalEl = document.querySelector(modalSelector);

            if (modalEl) {
                var modal = new bootstrap.Modal(modalEl);
                modal.show();
            }
        });
    </script>
    @endif

</body>

</html>