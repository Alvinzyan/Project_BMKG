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
    <title>Kantor BMKG - Aplikasi Inventaris Alat BMKG</title>
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

    <!-- Dropzone CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

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

        <div class="d-flex align-items-center py-4">
            <a href="/inventaris-alat" class="hover-back">
                <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 12l14 0" />
                    <path d="M5 12l6 6" />
                    <path d="M5 12l6 -6" />
                </svg>
            </a>

           <div class="d-flex align-items-center justify-content-center text-white rounded me-3 me-sm-4 flex-shrink-0"
                style="width: 45px; height: 45px; background-color:#1E3D58;">
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

            <h2 class="fs-4 fw-bolder mb-0">Kantor Meteorologi Banyuwangi - Edit</h2>
        </div>

        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="row">
                    <div class="col-12 mb-4">
                        <form action="{{ route('kantor-bmkg.update') }}" method="POST" id="formUpdate"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card border-0 shadow">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col d-flex justify-content-center">
                                            <h2 class="fs-3 fw-bolder">Inventaris Alat BMKG</h2>
                                        </div>
                                    </div>
                                </div>

                                @foreach ($kategoris as $kategori)
                                    <div class="card-table border-0 shadow">
                                        <h4 class="fs-6 fw-bold text-white py-2">{{ $kategori->nama_kategori }}</h4>
                                        <div class="table-responsive">
                                            <table class="table bg-white align-items-center table-flush">

                                                <colgroup>
                                                    <col style="width: 3%;">
                                                    <col style="width: 20%;">
                                                    <col style="width: 10%;">
                                                    <col style="width: 10%">
                                                    <col style="width: 3%;">
                                                    <col style="width: 20%;">
                                                    <col style="width: 3%;">
                                                    <col style="width: 11%;">
                                                    <col style="width: 10%;">
                                                    <col style="width: 10%;">
                                                </colgroup>

                                                <thead class="thead-white">
                                                    <tr>
                                                        <th class="border-bottom">No</th>
                                                        <th class="border-bottom">Nama Alat</th>
                                                        <th class="border-bottom">Merek/Type</th>
                                                        <th class="border-bottom">Penanggung Jawab</th>
                                                        <th class="border-bottom">Jml</th>
                                                        <th class="border-bottom">Kondisi</th>
                                                        <th class="border-bottom">Tahun <br> Pemasangan</th>
                                                        <th class="border-bottom">Kalibrasi Terakhir</th>
                                                        <th class="border-bottom">Keterangan</th>
                                                        <th class="border-bottom">Foto Lampiran</th>
                                                    </tr>
                                                </thead>

                                                @php
                                                    $teknisis = \App\Models\User::where('peran', 'teknisi')->get();
                                                @endphp

                                                @foreach ($kategori->alats as $alat)
                                                    <tbody>
                                                        <tr>
                                                            {{-- No --}}
                                                            <td class="text-gray-900">{{ $loop->iteration }}</td>

                                                            {{-- Nama Alat --}}
                                                            <td class="fw-bolder text-gray-500">{{ $alat->nama_alat }}
                                                            </td>

                                                            {{-- Merek/Type --}}
                                                            <td class="fw-bolder text-gray-500">{{ $alat->merk_tipe }}
                                                            </td>

                                                            {{-- Penanggung Jawab --}}
                                                            <td class="fw-bolder text-gray-500">
                                                                @php
                                                                    $currentPJId = optional(
                                                                        optional($alat->pengecekanTerakhirAktif)
                                                                            ->penanggungJawab,
                                                                    )->id;
                                                                @endphp

                                                                <select name="penanggung_jawab[{{ $alat->id }}]"
                                                                    class="form-select">
                                                                    <option value="">-- Pilih --
                                                                    </option>

                                                                    @foreach ($teknisis as $teknisi)
                                                                        <option value="{{ $teknisi->id }}"
                                                                            {{ $currentPJId == $teknisi->id ? 'selected' : '' }}>
                                                                            {{ $teknisi->nama_lengkap }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </td>

                                                            {{-- Jumlah --}}
                                                            <td class="fw-bolder text-gray-500">{{ $alat->jumlah }}
                                                            </td>

                                                            {{-- Kondisi --}}
                                                            <td>
                                                                @php
                                                                    $selectedKondisi =
                                                                        $alat->pengecekanTerakhirAktif->kondisi ?? [];
                                                                @endphp

                                                                @foreach (['baik', 'rusak ringan', 'rusak berat'] as $kondisi)
                                                                    <div class="form-check">
                                                                        <input class="form-check-input"
                                                                            type="checkbox"
                                                                            name="kondisi[{{ $alat->id }}][]"
                                                                            value="{{ $kondisi }}"
                                                                            {{ in_array($kondisi, $selectedKondisi) ? 'checked' : '' }}>
                                                                        <label
                                                                            class="form-check-label">{{ ucfirst($kondisi) }}</label>
                                                                    </div>
                                                                @endforeach
                                                            </td>

                                                            {{-- Tahun Pemasangan --}}
                                                            <td>{{ $alat->tahun_pemasangan }}</td>

                                                            {{-- Kalibrasi Terakhir --}}
                                                            <td>
                                                                @php
                                                                    $kalibrasi = optional(
                                                                        $alat->pengecekanTerakhirAktif,
                                                                    )->kalibrasi_terakhir;
                                                                @endphp

                                                                <input class="form-control" type="month"
                                                                    name="kalibrasi[{{ $alat->id }}]"
                                                                    value="{{ $kalibrasi ?? '' }}">
                                                            </td>

                                                            {{-- Keterangan --}}
                                                            <td style="text-transform: capitalize">
                                                                {{ $alat->keterangan }}
                                                            </td>
                                                            <td>
                                                                <input type="file"
                                                                    name="foto_lampiran[{{ $alat->id }}]"
                                                                    id="input-foto-{{ $alat->id }}"
                                                                    class="d-none">

                                                                <!-- Preview jika ada foto sebelumnya -->
                                                                <div id="preview-foto-{{ $alat->id }}">
                                                                    @if ($alat->pengecekanTerakhirAktif && $alat->pengecekanTerakhirAktif->foto_lampiran)
                                                                        <img src="{{ asset('storage/' . $alat->pengecekanTerakhirAktif->foto_lampiran) }}"
                                                                            alt="Foto Lampiran" width="120">
                                                                        <p class="text-muted small mb-0">(Foto
                                                                            tersimpan)</p>
                                                                    @endif
                                                                </div>

                                                                <button type="button"
                                                                    class="btn btn-sm btn-outline-primary btn-upload-foto"
                                                                    data-id="{{ $alat->id }}"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modalTambahFoto">
                                                                    {{ $alat->pengecekanTerakhirAktif && $alat->pengecekanTerakhirAktif->foto_lampiran ? 'Ganti Foto' : 'Tambah Foto' }}
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                @endforeach
                                            </table>
                                        </div>

                                        <div class="d-flex align-items-start mt-3">
                                            <h4 class="fs-6 fw-bold text-white mb-0 me-2">Catatan : </h4>
                                            <!-- isi Catatan -->
                                            <textarea name="catatan[{{ $kategori->id }}]" rows="3" class="form-control" style="max-width: 50%"
                                                placeholder="Tambahkan catatan apabila diperlukan...">{{ old('catatan.' . $kategori->id, optional($kategori->catatanTerakhir)->isi_catatan) }}</textarea>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-start mt-3">
                                        <h4 class="fs-6 fw-bold text-white mb-0 me-2">Catatan : </h4>
                                        <!-- isi Catatan -->
                                        <textarea name="catatan[{{ $kategori->id }}]" rows="3" class="form-control" style="max-width: 50%">{{ old('catatan.' . $kategori->id, optional($kategori->catatan_periode_ini)->isi_catatan) }}</textarea>
                                    </div>
                                </div>
                                @endforeach

                                <div class="d-flex justify-content-end flex-row mb-2">
                                    <button class="btn btn-info" id="btnUbah">
                                        <svg class="icon icon-xs me-1" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                            <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M14 4l0 4l-6 0l0 -4" />
                                        </svg>
                                        Ubah
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Modal Tambah Foto -->
                <div class="modal fade" id="modalTambahFoto" tabindex="-1" aria-labelledby="modalTambahFotoLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTambahFotoLabel">Upload Foto</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body">
                                <input type="file" id="fileFoto" class="form-control" accept="image/*">
                                <div id="previewModalFoto" class="mt-3 text-center"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-danger"
                                    data-bs-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-sm btn-success"
                                    id="btnSimpanFoto">Simpan</button>
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

    <script>
        document.getElementById('btnUbah').addEventListener('click', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Apakah kamu yakin?',
                text: "Data pengecekan alat akan berubah.",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#0d6efd',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Ubah',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('formUpdate').submit();
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: 'Dibatalkan',
                        text: 'Data pengecekan alat tidak jadi diubah.',
                        icon: 'info',
                        confirmButtonColor: '#0d6efd'
                    });
                }
            });
        });
    </script>

    <script>
        // Preview Foto di Modal
        const previewImage = (file, target) => {
            const reader = new FileReader();
            reader.onload = e => target.innerHTML = `<img src="${e.target.result}" class="img-fluid rounded shadow">`;
            reader.readAsDataURL(file);
        };

        let alatDipilih = null;

        // Klik tombol "Tambah Foto/Ganti Foto"
        document.querySelectorAll('.btn-upload-foto').forEach(btn =>
            btn.onclick = () => {
                alatDipilih = btn.dataset.id;
                fileFoto.value = "";
                previewModalFoto.innerHTML = "";
            }
        );

        // Preview otomatis setelah memilih file input
        fileFoto.onchange = e => {
            if (e.target.files[0]) previewImage(e.target.files[0], previewModalFoto);
        };

        // menyimpan foto dari modal
        btnSimpanFoto.onclick = () => {
            if (!alatDipilih) return;

            let target = document.getElementById('input-foto-' + alatDipilih);
            target.files = fileFoto.files;

            // Preview kecil di tabel kolom
            document.getElementById('preview-foto-' + alatDipilih).innerHTML =
                `<img src="${URL.createObjectURL(fileFoto.files[0])}" width="80" class="rounded shadow-sm mt-1">`;
            bootstrap.Modal.getInstance(modalTambahFoto).hide();
        };
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

    <!-- Dropzone JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js" integrity="sha512-..."
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
