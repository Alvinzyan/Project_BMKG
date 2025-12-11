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
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('volt/assets/img/favicon/favicon-bmkg.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Sweet Alert -->
    <link type="text/css" href="{{ asset('volt/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="{{ asset('volt/vendor/notyf/notyf.min.css') }}" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('volt/css/volt.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/croppie@2.6.5/croppie.css">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    {{-- <style>
        .nav-tabs .nav-link.active {
            background-color: #1E3D58 !important;
            color: white !important;
        }

        .nav-tabs .nav-link:hover {
            background-color: #1E3D58 !important;
            color: white !important;
        }
    </style> --}}

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

        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow border-0 p-3" style="background-color: #fff;">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <div class="d-flex align-items-center justify-content-center text-white rounded me-2 me-sm-2 flex-shrink-0"
                                style="width: 45px; height: 45px; background-color:#1E3D58;">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </div>

                            <h2 class="fs-4 fw-bolder mb-0">Profil</h2>
                        </div>

                        <div class="tab-content" id="profileTabContent">
                            <!-- Profil -->
                            <div class="tab-pane fade show active" id="profil" role="tabpanel"
                                aria-labelledby="profil-tab">

                                <div class="text-center mb-4">
                                    <img src="{{ $users->foto_profil ? asset('storage/' . $users->foto_profil) : asset('storage/foto_profil/default-profil.jpg') }}"
                                        class="rounded-circle mb-2"
                                        style="width: 100px; height: 100px; object-fit: cover;">

                                    @if (auth()->user()->peran == 'teknisi')
                                        <div>
                                            <button class="btn btn-secondary btn-sm text-white" data-bs-toggle="modal"
                                                data-bs-target="#modalEditProfile">Edit
                                                Profil</button>
                                        </div>
                                    @endif
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama_lengkap"
                                            name="nama_lengkap" value="{{ $users->nama_lengkap }}" readonly>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="nip" class="form-label">NIP</label>
                                        <input type="text" class="form-control" id="nip"
                                            value="{{ $users->nip ?? '-' }}" readonly>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="jabatan" class="form-label">Jabatan</label>
                                        <input type="jabatan" class="form-control" id="jabatan"
                                            value="{{ $users->jabatan ?? '-' }}" readonly>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                        <input type="jenis_kelamin" class="form-control" id="jenis_kelamin"
                                            value="{{ isset($user->jenis_kelamin) ? ucwords($user->jenis_kelamin) : '-' }}"
                                            readonly>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Edit Akun -->
                            <div class="modal fade" id="modalEditProfile" tabindex="-1"
                                aria-labelledby="modalEditProfileLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-md">
                                    <div class="modal-content border-0 shadow">

                                        <div class="modal-header">
                                            <h5 class="modal-title text-dark" id="modalEditProfileLabel">Edit
                                                Profil
                                            </h5>
                                            <button type="button" class="btn-close"
                                                data-bs-dismiss="modal"></button>
                                        </div>

                                        <form method="POST" action="{{ route('profile.update') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">

                                                <!-- Foto Profil -->
                                                <div class="text-center mb-3 positon-relative">
                                                    <!-- Foto Profil -->
                                                    <div class="text-center mb-3">

                                                        <img src="{{ $users->foto_profil
                                                            ? asset('storage/' . $users->foto_profil)
                                                            : asset('storage/foto_profil/default-profil.jpg') }}"
                                                            id="previewFoto" class="rounded-circle mb-2 shadow-sm"
                                                            style="width:110px;height:110px;object-fit:cover;">

                                                        <button type="button" id="btnHapus"
                                                            onclick="hapusFotoProfil()"
                                                            class="btn btn-danger btn-sm position-absolute rounded-circle"
                                                            style="top:0; right:calc(50% - 70px);">
                                                            <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                                <path stroke="none" d="M0 0h24v24H0z"
                                                                    fill="none" />
                                                                <path d="M4 7l16 0" />
                                                                <path d="M10 11l0 6" />
                                                                <path d="M14 11l0 6" />
                                                                <path
                                                                    d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                            </svg>
                                                        </button>

                                                        <div id="croppie-container" class="mx-auto d-none"></div>

                                                        <input type="file" class="form-control mt-2 w-75 mx-auto"
                                                            id="fotoInput" accept="image/*">

                                                        <input type="hidden" name="foto_base64" id="fotoBase64">

                                                        <input type="hidden" name="hapus_foto" id="hapusFoto" value="0">

                                                        <div class="d-flex gap-2 justify-content-center mt-2">
                                                            <button type="button" id="btnBatalCrop"
                                                                onclick="batalkanCrop()"
                                                                class="btn btn-danger btn-sm d-none">Batal</button>

                                                            <button type="button" id="btnCrop"
                                                                class="btn btn-success btn-sm d-none">Gunakan
                                                                Foto</button>
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- Nama -->
                                                <div class="mb-3">
                                                    <label for="nama_lengkap_edit" class="form-label">Nama
                                                        Lengkap</label>
                                                    <input type="text" class="form-control" id="nama_lengkap_edit"
                                                        name="nama_lengkap" value="{{ $users->nama_lengkap }}">
                                                    @error('nama_lengkap')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <!-- Jenis Kelamin -->
                                                <div class="mb-3">
                                                    <label for="jenis_kelamin_edit" class="form-label">Jenis
                                                        Kelamin</label>
                                                    <select class="form-control" id="jenis_kelamin_edit"
                                                        name="jenis_kelamin">
                                                        <option value="laki laki"
                                                            {{ $users->jenis_kelamin == 'laki laki' ? 'selected' : '' }}>
                                                            Laki-laki</option>
                                                        <option value="perempuan"
                                                            {{ $users->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>
                                                            Perempuan</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="jabatan_edit" class="form-label">Jabatan</label>
                                                    <input type="text" class="form-control" name="jabatan"
                                                        value="{{ $user->jabatan ?? '-' }}"
                                                        oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\b\w/g, l => l.toUpperCase())">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Kembali</button>
                                                <button class="btn btn-success" id="btnSimpan">Simpan</button>
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

        <footer class="bg-white border-0 rounded shadow p-3 mb-3 mt-3">
            <div class="container-fluid">
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

    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var editModal = new bootstrap.Modal(document.getElementById('modalEditProfile'));
                editModal.show();
            });
        </script>
    @endif

    {{-- Crop Foto Profil --}}
    <script>
        let croppie = null;

        document.getElementById('fotoInput').addEventListener('change', function(e) {

            const file = e.target.files[0];
            if (!file) return;

            const reader = new FileReader();
            reader.onload = function(e) {

                // Sembunyikan preview lama & tombol hapus
                document.getElementById('previewFoto').classList.add('d-none');
                document.getElementById('btnHapus').classList.add('d-none');
                document.getElementById('btnSimpan').disabled = true;

                // Tampilkan croppie
                const croppieContainer = document.getElementById('croppie-container');
                croppieContainer.classList.remove('d-none');
                croppieContainer.innerHTML = "";

                croppie = new Croppie(croppieContainer, {
                    viewport: {
                        width: 150,
                        height: 150,
                        type: 'circle'
                    },
                    boundary: {
                        width: 220,
                        height: 220
                    },
                    enableZoom: true,
                    showZoomer: true
                });

                croppie.bind({
                    url: e.target.result
                });

                // Tampilkan tombol crop
                document.getElementById('btnCrop').classList.remove('d-none');
                document.getElementById('btnBatalCrop').classList.remove('d-none');
            }

            reader.readAsDataURL(file);
        });

        document.getElementById('btnCrop').addEventListener('click', function() {
            croppie.result({
                type: 'base64',
                size: {
                    width: 300,
                    height: 300
                },
                format: 'png',
                circle: true
            }).then(function(img) {

                document.getElementById('fotoBase64').value = img;

                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: "Foto berhasil digunakan",
                    confirmButtonColor: '#0d6efd',
                    confirmButtonText: 'OK'
                });

                document.getElementById('btnSimpan').disabled = false;
            });
        });
    </script>

    <script>
        function batalkanCrop() {
            document.getElementById('croppie-container').classList.add('d-none');
            document.getElementById('btnCrop').classList.add('d-none');
            document.getElementById('btnBatalCrop').classList.add('d-none');

            document.getElementById('previewFoto').classList.remove('d-none');
            document.getElementById('btnHapus').classList.remove('d-none');

            if (croppie) {
                croppie.destroy();
                croppie = null;
            }
        }
    </script>

    <script>
        document.getElementById('inputFoto').addEventListener('change', function(e) {
            const reader = new FileReader();
            reader.onload = () => {
                document.getElementById('hapusFoto').value = 0;
            };
            reader.readAsDataURL(e.target.files[0]);
        });
    </script>

    <script>
        function hapusFotoProfil() {
            Swal.fire({
                title: 'Hapus Foto Profil?',
                text: "Foto akan dihapus dan dikembalikan ke default.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {

                    document.getElementById('previewFoto').src =
                        "{{ asset('storage/foto_profil/default-profil.jpg') }}";

                    document.getElementById('hapusFoto').value = 1;

                    Swal.fire({
                        icon: 'success',
                        title: 'Dihapus!',
                        text: 'Foto profil berhasil dihapus.',
                        timer: 1500,
                        showConfirmButton: false
                    });
                }
            });
        }
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

    <script src="https://cdn.jsdelivr.net/npm/croppie@2.6.5/croppie.min.js"></script>

</body>

</html>
